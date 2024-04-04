<?php

namespace App\Services\Api\List;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;

class ListTownService{

    public function list(){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/list/towns");
        $data=json_decode($response);
        return $data;
    }
}
