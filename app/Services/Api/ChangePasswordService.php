<?php

namespace App\Services\Api;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ChangePasswordService{

    public function change($phone_number,$password){
        $url=(new UrlApiService())->getUrl();
        $response=Http::post($url."/api/change/password",[
            "phone_number"=>$phone_number,
            "password"=>$password
        ]);

        return $response;
    }
}
