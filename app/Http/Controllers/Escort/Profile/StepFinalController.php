<?php

namespace App\Http\Controllers\Escort\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class StepFinalController extends Controller
{
    public function stepFinal(){
        $dataStepOne=Session::get("EscortStepOne");
        $dataStepTwo=Session::get('EscortStepTwo');
        $dataStepThree=Session::get('EscortStepThree');
        if(empty($dataStepOne)){
            return to_route('step-one');
        }else if(empty($dataStepTwo)){
            return to_route('step-two');
        }else if(empty($dataStepThree)){
            return to_route('step-three');
        }
        return view('escort.profile.step-final');
    }
}
