<?php

namespace App\Http\Controllers\Memberships;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Services\Api\MemberShip\MemberShipService;

class MemberShipController extends Controller
{
    public function display($id){
        $memberships = (new MemberShipService)->MemberShip();

        return view('membership.index', compact('memberships','id'));
    }

    public function showPremium(){
        $memberships = (new MemberShipService)->showPremium();

        return view('user.check-plan', compact('memberships'));
    }

     public function index(){

        $memberships = (new MemberShipService)->MemberShip();
        //dd($memberships);
    }
}
