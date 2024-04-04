<?php

namespace App\Http\Controllers\Admin\MemberShip;
use App\Http\Controllers\Controller;
use App\Services\Api\MemberShip\MemberShipService;
use Illuminate\Http\Request;

class ListMemberShipController extends Controller
{
    // public function display(){
    //     $memberships = (new MemberShipService)->MemberShip();
    //     return view('membership.index', compact('memberships'));
    // }

     public function index(){

        $memberships = (new MemberShipService)->MemberShip();
        return view('backend.memberships.list', compact('memberships'));
    }
}
