<?php

namespace App\Services\Api\Location;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CountryService{

     public function getCountries(){
        
        $url=(new UrlApiService())->getUrl();
         //Retrieving all countries
            $countries = null;
            
            try{

                $response = Http::asForm()->get($url."/api/countries");
                
                $countries = json_decode((string) $response->getBody(), true);

                //dd($towns);
                if($countries['data'] === null){
                    return null;
                }
                else{
                    return $countries['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }
}
