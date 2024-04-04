<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Api\AddedQuestionService;
use Illuminate\Support\Facades\Session;
use App\Services\Api\List\ListQuestionService;

class SecureAccountController extends Controller
{
    public function secure(){


    }

    public function selectQuestion(){
        $listQuestions=(new ListQuestionService())->list();
        return view('auth.selectQuestion',compact('listQuestions'));
    }

    public function answer(Request $request){
        $questions=explode(",",$request->value);

        if(Session::has('questions_id')){
            Session::forget('questions_id');
        }
        Session::put('questions_id',$questions);
        Session::save();
                return to_route('give-answer');
    }

    public function answerView(){

        $questions=Session::get('questions_id');
        $questionArray=[];
        foreach($questions as $q){
            $getQuestions=(new ListQuestionService())->filter($q);
            array_push($questionArray,$getQuestions);
        }

        return view('auth.answer',compact('questionArray'));
    }

    public function answerStore(Request $request){

        foreach($request->question_id as $key=>$i){
            $added=(new AddedQuestionService())->add($request->question_id[$key],$request->answer[$key]);
            //return $added;
        }

       return to_route('confirm');
    }

    public function confirm(){
        if(Session::has('questions_id')){
            Session::forget('questions_id');
        }

        return view('auth.secure-confirm');
    }
}
