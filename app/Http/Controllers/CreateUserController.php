<?php

namespace App\Http\Controllers;
use App\Services\Api\Location\TownService;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function create(){

        //Fetching list towns
        $towns = (new TownService())->getTowns();
         if($towns == null)
                return view('error');
        return view('auth.register', compact('towns'));
    }
    
}
