<?php

namespace App\Services\Api;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AddedQuestionService{

    public function add($question_id,$answer){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->post($url."/api/v1/choice/questions",[
            "answer"=>$answer,
            "question_id"=>$question_id
        ]);

        $data=json_decode($response);

        return $response;
    }
}
