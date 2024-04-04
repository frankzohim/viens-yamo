<?php

namespace App\Services\User;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class ReviewService{

    public function review($announceId,$request){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->post($url.'/api/v1/review/new/'.$announceId,[
            'comment'=>$request->comment,
            'stars'=>$request->rating
        ]);
        $data=json_decode($response);
            return $response;
    }

}
