<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerUnavailableController extends Controller
{
    public function unavailable(){

        return view('error.ServerNotFound');
    }
}
