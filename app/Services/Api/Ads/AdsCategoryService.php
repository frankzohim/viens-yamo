<?php

namespace App\Services\Api\Ads;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AdsCategoryService{

     public function getCategories(){
        
        $url=(new UrlApiService())->getUrl();

          //Retrieving all Ads Categories
            
            try{

                $response = Http::asForm()->get($url."/api/list/categories");
                $adsCategories = json_decode((string) $response->getBody(), true);
            
                if($adsCategories['data'] === null){
                    return null;
                }
                else{
                    return $adsCategories['data'];
                }

            }catch(\Exception $e){
                return null;
            }
    }
}
