<?php

namespace App\Services\Api;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class VerifyAnswerService{

    public function verify($phone_number,$question_id,$answer){
        $url=(new UrlApiService())->getUrl();
        $response=Http::post($url."/api/question/verify",[
            "phone_number"=>$phone_number,
            "question_id"=>$question_id,
            "answer"=>$answer
        ]);

        $data=json_decode($response);

        return $data;
    }
}
