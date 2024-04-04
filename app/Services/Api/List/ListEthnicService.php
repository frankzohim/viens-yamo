<?php

namespace App\Services\Api\List;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;

class ListEthnicService{

    public function list(){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/list/ethnics");
        $data=json_decode($response);
        return $data;
    }
}
