<?php

namespace App\Http\Controllers\Escort;

use App\Http\Controllers\Controller;
use App\Services\Api\MemberShip\MemberShipService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChoosePlanController extends Controller
{
    public function PlanShow($id){

        $membership=(new MemberShipService())->show($id);



        return back()->with('membership',$membership);
    }

    public function PlanPremium(){
        $membership=(new MemberShipService())->showPremium();
        Session::put('price',$membership[0]['price']);
        Session::save();
        return back()->with('membership',$membership);
    }
}
