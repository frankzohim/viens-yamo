<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginViewController extends Controller
{
    public function getViewLogin(){
        return view('auth.login');
    }
}
