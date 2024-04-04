<?php

namespace App\Services\Api\Admin;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class NewUserService{

    public function newUser($request){

        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');

        $response=Http::withToken($token)->post($url."/api/v1/user/new",[
            'username'=>$request->username,
            'password'=>$request->password,
            'role_id'=>$request->role_id,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email
        ]);

        $data=json_decode($response);

        return $data;
    }
}
