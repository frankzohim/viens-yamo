<?php

namespace App\Services\Api\List;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;

class ListQuestionService{

    public function list(){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/list/questions");
        $data=json_decode($response);
        return $data;
    }

    public function filter($question_name){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/question/".$question_name);
        $data=json_decode($response);
        return $data;
    }
}
