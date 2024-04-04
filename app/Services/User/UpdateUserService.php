<?php

namespace App\Services\User;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use App\Services\Api\HasTokenService;
use Illuminate\Support\Facades\Session;
use App\Services\Api\Escort\ProfileIsCompletedOrNotService;

class UpdateUserService{

    public function update($request){

         $url=(new UrlApiService())->getUrl();
         $hasToken=(new HasTokenService())->getToken();
        try{
            $response = Http::withToken($hasToken)->post($url."/api/v1/updateUser", [
                'username' => $request->username,
                'phone_number' => $request->phone_number,
                'town_id'=>$request->town_id,
                'email'=>$request->email,
                'password'=>$request->password
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }
}
