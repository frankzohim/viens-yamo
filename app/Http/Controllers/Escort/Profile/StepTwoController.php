<?php

namespace App\Http\Controllers\Escort\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Escort\Profil\StepTwoRequest;
use App\Services\Api\List\ListHeightService;
use App\Services\Api\List\ListQuarterByTownService;
use App\Services\Api\List\ListShapeService;
use App\Services\Api\List\ListWeightService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StepTwoController extends Controller
{
    public function stepTwo(){

        $dataStepOne=Session::get("EscortStepOne");
        if(empty($dataStepOne)){
            return to_route('step-one');
        }else if(Session::has("EscortStepTwo")){
            Session::forget("EscortStepTwo");
        }else{
            $listQuarter=(new ListQuarterByTownService())->list($dataStepOne['town_id']);
            $listHeight=(new ListHeightService())->list();
            $listWeight=(new ListWeightService())->list();
            $listShape=(new ListShapeService())->list();
        return view('escort.profile.step-two',compact('listQuarter','listHeight','listWeight','listShape'));
        }

    }

    public function stepTwoStore(StepTwoRequest $request){

        if(Session::has("EscortStepTwo")){
            Session::forget("EscortStepTwo");
        }
        $data=[
            'sexuality'=>$request->sexuality,
            'quarter_id'=>$request->quarter_id,
            "height_id"=>$request->height_id,
            "weight_id"=>$request->weight_id,
            "shape_id"=>$request->shape_id,
            "whatsapp_number"=>$request->whatsapp_number
        ];
        $stepOneData=Session::get("EscortStepOne");

        $stepTwo=array_merge($data,$stepOneData);

        Session::put('EscortStepTwo',$stepTwo);
        Session::save();
        return to_route('step-three');
    }
}
