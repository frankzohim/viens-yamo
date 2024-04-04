<?php

namespace App\Services\Api\Escort;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class GetEscortService{

     public function getEscort(){

        //Get Escort
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::withToken(Session::get('tokenUser', null))->get($url."/api/v1/getEscort");
            $escort = json_decode((string) $response->getBody(), true);
            return $escort;

        }
        catch(\Exception $e){
            return null;
        }
    }

     public function getEscortByQuarter($quarterID){

        //Get Escort by Quarter
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::asForm()->get($url."/api/escortByQuarter/".$quarterID);
            $escorts = json_decode((string) $response->getBody(), true);
            $escorts = $escorts['data'];
            return $escorts;
        }
        catch(\Exception $e){
            return null;
        }
    }
}
