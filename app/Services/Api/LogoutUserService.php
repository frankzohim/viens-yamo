<?php

namespace App\Services\Api;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use App\Services\Api\HasTokenService;

class LogoutUserService{

    public function logout(){
        $hasToken=(new HasTokenService())->getToken();
        $url=(new UrlApiService())->getUrl();
        try{
            $response=Http::withToken($hasToken)->post($url.'/api/v1/logout');
            return $response;
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
