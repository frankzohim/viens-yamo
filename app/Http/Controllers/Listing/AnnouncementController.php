<?php

namespace App\Http\Controllers\Listing;
use App\Http\Controllers\Controller;
use  App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;

class AnnouncementController extends Controller{

  //List of all annoucement by towns
   public static $announcements = [];

   public function index(){

     $url=(new UrlApiService())->getUrl();

        try{

            $response = Http::asForm()->get($url."/api/announcementsTown");
            //dd(json_decode((string) $response->getBody(), true));
            self::$announcements = json_decode((string) $response->getBody(), true);
            //error_log($announcements);
        }catch(\Exception $e){
             self::$announcements = [];
        }

        return  self::$announcements;
   }

   public function filter(){
    $url=(new UrlApiService())->getUrl();
    try{
        $response = Http::asForm()->get($url."/api/announcementsTown");
            //dd(json_decode((string) $response->getBody(), true));
            self::$announcements = json_decode((string) $response->getBody(), true);
    }catch(\Exception $e){

    }
   }

}
