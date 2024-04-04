<?php

namespace App\Http\Controllers\Escort\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Services\Api\CurrentUserService;
use App\Services\Api\List\ListTownService;
use App\Services\Api\List\ListEthnicService;
use App\Services\Api\List\ListSkinColorService;
use App\Http\Requests\Escort\Profil\StepOneRequest;
use App\Services\Api\Escort\ProfileIsCompletedOrNotService;

class StepOneController extends Controller
{
    public function stepOne(){
        if(Session::has('EscortStepOne')){
            Session::forget('EscortStepOne');
        }
        $currentUser=(new CurrentUserService())->currentUser();
        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
        $completed=$profileIsCompletedOrNot->completed ?? null;
        $role=$currentUser->role_id ?? null;
        $listEthnic=(new ListEthnicService())->list();
        $listSkinColor=(new ListSkinColorService())->list();
        $listTown=(new ListTownService())->list();
        //return $listEthnic;
        //return $request;
        if($completed!==0){
            return back();
        }else{
            return view('escort.profile.step-one',compact('listEthnic','listSkinColor','listTown'));
        }

    }

    public function stepOneStore(StepOneRequest $request){

        if(Session::has('EscortStepOne')){
            Session::forget('EscortStepOne');
        }else if(Session::has('EscortStepTwo')){
            Session::forget('EscortStepTwo');
        }
        $data=[
            "escort_name"=>$request->escort_name,
            "age"=>$request->age,
            "ethnic_id"=>$request->ethnic_id,
            "skin_color_id"=>$request->skin_color_id,
            "town_id"=>$request->town_id,
            "genre"=>$request->genre
        ];

        if(isset($request->email)){
            array_push($data,$request->email);
        }
        Session::put("EscortStepOne",$data);
        Session::save();
        return to_route('step-two');
    }
}
