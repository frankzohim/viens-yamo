<?php

namespace App\Services\Api\MemberShip;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CheckSubscribeService{

public function check(){
    $url=(new UrlApiService())->getUrl();


            $response = Http::asForm()->get($url."/api/check-subscribe");
            $checkResponse = json_decode((string) $response->getBody(), true);
            //dd($memberships);
            return $response;


}

public function checkAds(){
     $url=(new UrlApiService())->getUrl();
     $token=Session::get('tokenUser');
     $response = Http::withToken($token)->asForm()->get($url."/api/v1/check/pay/ads");
            $checkResponse = json_decode((string) $response->getBody(), true);
            //dd($memberships);
            return $response;
}
public function checkPayCredit(){
     $url=(new UrlApiService())->getUrl();
     $response = Http::asForm()->get($url."/api/check/pay/credits");
            $checkResponse = json_decode((string) $response->getBody(), true);
            //dd($memberships);
            return $response;
}
public function checkPayPlan(){
    $url=(new UrlApiService())->getUrl();
    $response = Http::asForm()->get($url."/api/check/pay/plan");
           $checkResponse = json_decode((string) $response->getBody(), true);
           //dd($memberships);
           return $response;
}
}
