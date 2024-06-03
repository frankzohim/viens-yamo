<?php

namespace App\Http\Controllers\Escort;

use App\Http\Controllers\Controller;
use App\Services\Api\MemberShip\MemberShipService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChoosePlanController extends Controller
{
    public function PlanShow($id, $adsId){

        //dd($id, $adsId);
        $membership=(new MemberShipService())->show($id);
        $membershipJson =  $membership->id.'.'.$membership->membership_name.'.'.$membership->price;
        return redirect()->route('membership.display', ['adsId'=>$adsId, 'membership'=>$membershipJson]);
    }

    public function PlanPremium(){
        $membership=(new MemberShipService())->showPremium();
        Session::put('price',$membership[0]['price']);
        Session::save();
        return back()->with('membership',$membership);
    }
}
