<?php

namespace App\Http\Controllers\Admin\Town;
use App\Http\Controllers\Controller;
use App\Services\Api\Location\TownService;
use Illuminate\Http\Request;

class ListTownController extends Controller
{
    // public function display(){
    //     $memberships = (new MemberShipService)->MemberShip();
    //     return view('membership.index', compact('memberships'));
    // }

     public function index(){

        $towns = (new TownService)->getTowns();
        //dd($towns);
        return view('backend.towns.list', compact('towns'));
    }
}
