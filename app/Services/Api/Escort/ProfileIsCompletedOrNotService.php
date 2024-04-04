<?php

namespace App\Services\Api\Escort;

use App\Services\Api\UrlApiService;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ProfileIsCompletedOrNotService{

    public function isCompletedOrNot(){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        try{
            $response=Http::withToken($token)->get($url."/api/v1/CompleteOrNot");
            $dataResponse=json_decode($response);

            return $dataResponse;
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
