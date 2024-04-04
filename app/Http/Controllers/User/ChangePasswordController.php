<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Api\ChangePasswordService;
use App\Services\Api\VerifyAnswerService;
use Illuminate\Support\Facades\Session;
use App\Services\Api\VerifySecureUserService;


class ChangePasswordController extends Controller
{
    public function checkNumber(){

        return view('user.check-number');
    }

    public function verify(Request $request){

        $verifyResponse=(new VerifySecureUserService())->verify($request->phone_number);
        $questionsResponse=$verifyResponse->questions ?? null;
        $error=$verifyResponse->error ?? null;
        if($error==500){
            return redirect()->back()->with("message","votre compte n'a pas été sécurisé veuillez contactez l'administrateur");
        }else if($error==404){
            return redirect()->back()->with("message","Impossible de trouver le compte");
        }else{
            if(Session::has('questionsUser')){
                Session::forget('questionsUser');
            }else if(Session::has('phone_number')){
                Session::forget('phone_number');
            }
            $questions=$questionsResponse;
            Session::put("questionsUser",$questions);
            Session::save();
            Session::put("phone_number",$request->phone_number);
            Session::save();
            return to_route('answerView');
        }

    }

    public function answerView(){

        $questions=Session::get('questionsUser');
        return view("user.answer-question",compact('questions'));
    }

    public function answerVerify(Request $request){
        $phone_number=Session::get('phone_number');

        foreach($request->answer as $key=>$i){
            $answerService=(new VerifyAnswerService())->verify($phone_number,$request->question_id[$key],$request->answer[$key]);

            if($answerService->code===0){
                return redirect()->back()->with("error","vous aviez donnez une mauvaise reponse pour une question...veuillez réessayez!");
            }else{
                Session::put('answerIsValid',$answerService);
                Session::save();
                return to_route('password-view');
            }
        }

    }
public function passwordView(){
    $answerIsValid=Session::get('answerIsValid');
    $phone_number=Session::get('phone_number');
    if(empty($answerIsValid) || $answerIsValid->code==0 || empty($phone_number)){
        return redirect()->back();
    }
    return view('auth.change-password');
}

public function change(Request $request){
    $phone_number=Session::get('phone_number');
    $changePasswordResponse=(new ChangePasswordService())->change($phone_number,$request->password);

    return to_route('login')->with('success','mot de passe reinitialiser avec success');
}

}
