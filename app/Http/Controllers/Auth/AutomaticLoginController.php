<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Services\Api\UrlApiService;
use App\Http\Controllers\Controller;
use App\Services\Api\CurrentUserService;
use App\Services\User\UserTypeService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AutomaticLoginController extends Controller
{
    public function login(Request $request){
        $url=(new UrlApiService())->getUrl();
        $u=$url."/api/login";

        try{
            $response = Http::asForm()->post($u, [
                'phone_number' => $request->phone_number,
                'password' => $request->password,
            ]);

            if($request->session()->has('tokenUser')){

                    $request->session()->forget('tokenUser');
                }

                $access_token = json_decode((string) $response->getBody(), true)['access_token'];
                Session::put('tokenUser', $access_token);
                Session::save();

                $currentUser=(new CurrentUserService())->currentUser();
                Session::put('currentUser', $currentUser);
                Session::save();
                $userType=(new UserTypeService())->checkRole($currentUser->role_id);
                return $userType;
        }catch(\Exception $e){
            dd($e);
        }

        //dd($request->phone_number, $request->password);
    }
}
