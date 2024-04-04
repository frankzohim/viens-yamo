<?php

namespace App\Services\Api\Escort;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class EscortService{

     public function list(){
        
        //Get Escort
        $url=(new UrlApiService())->getUrl();
        $escorts = [];

        try{
            $response = Http::asForm()->get($url."/api/escorts");
            $escorts = json_decode((string) $response->getBody(), true);
            return $escorts;

        }
        catch(\Exception $e){
            return [];
        }
    }

     public function verifyEscort($escortID){
        
        //Verify an Escort
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::asForm()->get($url."/api/escorts");
            $escorts = json_decode((string) $response->getBody(), true);
            $escorts = $escorts['data'];
            return $escorts;
        }
        catch(\Exception $e){
            return null;
        }
    }
}
