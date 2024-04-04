<?php
namespace App\Services\Api;
use App\Services\Api\UrlApiService;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class VerifySecureUserService{

    public function verify($phone_number){
        $url=(new UrlApiService())->getUrl();

        $response=Http::post($url."/api/verify/phone",[
            "phone_number"=>$phone_number
        ]);

        $data=json_decode($response);

        return $data;
    }
}
