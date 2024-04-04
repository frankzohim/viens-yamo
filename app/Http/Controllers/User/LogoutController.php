<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\Api\LogoutUserService;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request){
        $logoutService=(new LogoutUserService())->logout($request);
        $request->session()->forget('tokenUser');
        $request->session()->forget('currentUser');
        $request->session()->flush();
        $request->session()->regenerate();

        return to_route('homepage');
    }
}
