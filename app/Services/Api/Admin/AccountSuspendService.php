<?php

namespace App\Services\Api\Admin;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class AccountSuspendService{

    public function ban($id){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');

        $banResponse=Http::withToken($token)->post($url."/api/v1/suspend/user/".$id);

        $dataResponse=json_decode($banResponse);

        return $dataResponse;
    }
}
