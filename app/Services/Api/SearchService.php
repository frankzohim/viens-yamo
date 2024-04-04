<?php

namespace App\Services\Api;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class SearchService{

     public function search($term){

        //Get API URL
        $url=(new UrlApiService())->getUrl();
        $result = [];

        try{
            $response = Http::asForm()->get($url."/api/search/single/".$term);
            $result = json_decode((string) $response->getBody(), true);
            return $result;

        }
        catch(\Exception $e){
            return null;
        }
    }
}
