<?php

namespace App\Services\Api\Ads;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AdsService{


    public function index(){

        $url=(new UrlApiService())->getUrl();
        $numberAdsByTown = [];
        try{

                $response = Http::asForm()->get($url."/api/announcementsTown");
                $numberAdsByTown = json_decode((string) $response->getBody(), true);
                return  $numberAdsByTown;

        }catch(\Exception $e){
                return [];
        }
    }

     public function getAds(){

        $url=(new UrlApiService())->getUrl();
        $ads = [];

        try{

            $response = Http::asForm()->get($url."/api/announces");
            $ads = json_decode((string) $response->getBody(), true);
            if($ads['data'] != null)
              $ads = $ads['data'];
            //error_log($ads);
        }catch(\Exception $e){
             $ads = [];
        }

        return  $ads;
    }

     public function getAdsById($id){

        $url=(new UrlApiService())->getUrl();


           //Retrieving an add by its id

            try{

                $response = Http::asForm()->get($url."/api/announces/".$id);
                $ad = json_decode((string) $response->getBody(), true);

                if($ad['data'] === null){
                    return null;
                }
                else{
                    return $ad['data'];
                }

            }catch(\Exception $e){
                return null;
            }
    }

    public function homeAds(){
        try{
            $url=(new UrlApiService())->getUrl();
            $response = Http::asForm()->get($url."/api/home/annonces");
            $ad = json_decode((string) $response->getBody(), true);
            if($ad['data'] === null){
                return [];
            }
            else{
                return $ad['data'];
            }
        }catch(Exception $e){
            return [];
        }
    }
    public function vipAds(){
        try{
            $url=(new UrlApiService())->getUrl();
            $response = Http::asForm()->get($url."/api/vip/annonces");
            $ad = json_decode((string) $response->getBody(), true);
            if($ad['data'] === null){
                return [];
            }
            else{
                return $ad['data'];
            }
        }catch(Exception $e){
            return [];
        }
    }
    public function goldAds(){
        try{
            $url=(new UrlApiService())->getUrl();
            $response = Http::asForm()->get($url."/api/gold/annonces");
            $ad = json_decode((string) $response->getBody(), true);
            if($ad['data'] === null){
                return [];
            }
            else{
                return $ad['data'];
            }
        }catch(Exception $e){
            return [];
        }
    }

    public function popularsAds(){

        $url=(new UrlApiService())->getUrl();
        $ads = [];

        try{

            $response = Http::asForm()->get($url."/api/populars");
            $ads = json_decode((string) $response->getBody(), true);
           
            //error_log($ads);
        }catch(\Exception $e){
             $ads = [];
        }

        return  $ads;
    }

    public function recentAds(){

        $url=(new UrlApiService())->getUrl();
        $ads = [];

        try{

            $response = Http::asForm()->get($url."/api/recents");
            $ads = json_decode((string) $response->getBody(), true);
           
            //error_log($ads);
        }catch(\Exception $e){
             $ads = [];
        }

        return  $ads;
    }
}
