<?php

namespace App\Services\Api\Admin;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class AccountActivateService{

    public function activate($id){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');

        $ActivateResponse=Http::withToken($token)->post($url."/api/v1/activate/user/".$id);

        $dataResponse=json_decode($ActivateResponse);

        return $dataResponse;
    }
}
