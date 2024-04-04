<?php

namespace App\Http\Controllers\Escort\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Escort\Profil\StepThreeRequest;
use App\Services\Api\Escort\AddProfileService;
use Illuminate\Support\Facades\Session;
use App\Services\Api\List\ListServicesApi;
use App\Services\Api\CurrentUserService;

class StepThreeController extends Controller
{
    public function stepThree(){
        $user=(new CurrentUserService())->currentUser();
        //dd($currentUser);
        $dataStepTwo=Session::get("EscortStepTwo");

        if(!Session::has('EscortStepOne') || empty($dataStepTwo)){

            return to_route('step-one');
        }
        $listServices=(new ListServicesApi())->list();

        return view('escort.profile.step-three',compact('listServices', 'user'));
    }

    public function stepThreeStore(StepThreeRequest $request){
        if(Session::has("EscortStepThree")){
            Session::forget("EscortStepThree");
        }

        $data=[

            'description'=>$request->description,
            'services'=>$request->services,
            'user_id' => $request->user_id
        ];


        $stepTwoData=Session::get('EscortStepTwo');

        $stepThree=array_merge($data,$stepTwoData);
        $d=json_encode($stepThree);
        Session::put('EscortStepThree',$stepThree);
        Session::save();
        for ($i=0; $i<count($request->services); $i++){

            $d=[
             $request->services
            ];

        }

        //$image_path = $request->photo->store('profile', 'public');
        $addProfile=(new AddProfileService())->addProfile($stepThree,$request->file('photo'),$request->services);
        return to_route('step.final');
        //return $addProfile;
        //return $addProfile;
        //return json_encode($request->services);
    }

    public function images(Request $request){
        
            $image = $request->file('file');
            $extension = $image->getClientOriginalExtension();

            $allowedfileExtension=['jpg','png','jpeg'];

            $check = in_array($extension,$allowedfileExtension);

            if(!$check){

                return response('Extension invalide', 400);
            }
            else{

                //Storing file in disk
                $fileName = time().'_'.$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
                $image->storeAs('profile/'.$request->user_id, $fileName);
                
                return response('Image ajoutée avec succès', 200);
            }
    }
}
