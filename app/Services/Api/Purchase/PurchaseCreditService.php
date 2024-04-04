<?php

namespace App\Services\Api\Purchase;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class PurchaseCreditService{

    public function purchaseCredit($price){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->acceptJson()->post($url."/api/v1/purchaseCredit/".$price);
        $data=json_decode($response);

        return $data;
    }
}
