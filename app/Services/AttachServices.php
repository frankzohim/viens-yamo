<?php
namespace App\Services;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AttachServices{

    public function attach($services,$dataEscort){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->post($url."/api/v1/attach/services",[
            "service"=>$services,
            "escort"=>$dataEscort
        ]);

        return $response;
    }
}
