<?php

namespace App\Services\Api;

use App\Services\Api\UrlApiService;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CurrentUserService{


    public  function currentUser(){
        $url=(new UrlApiService())->getUrl();

        try{


            $token=Session::get('tokenUser');
            $response=Http::retry(3,400,throw: false)->withToken($token)->get($url.'/api/v1/currentUser');

            $currentUser=json_decode($response);
            //Session::put("currentUser",$currentUser);
            //Session::save();
            $responseData=json_decode($response);
            return $responseData;
        }catch(Exception $e){
            //dd($e->getMessage());
        }

    }
}
