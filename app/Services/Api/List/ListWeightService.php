<?php

namespace App\Services\Api\List;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;

class ListWeightService{

    public function list(){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/list/weight");
        $data=json_decode($response);
        return $data;
    }
}
