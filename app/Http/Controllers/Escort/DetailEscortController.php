<?php

namespace App\Http\Controllers\Escort;
use App\Http\Controllers\Controller;
use App\Services\Api\Escort\ListReviewsServices;
use  App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DetailEscortController extends Controller{


   public static $escort = null;

   public function show(Request $request){

     $url=(new UrlApiService())->getUrl();
     //dd($url);

        try{

            $response = Http::asForm()->get($url."/api/escorts/".$request->id);
            $reviews=(new ListReviewsServices())->listReviews($request->id);
            self::$escort = json_decode((string) $response->getBody(), true)['data'];
            //error_log($escorts);
        }catch(\Exception $e){
             self::$escort = null;
        }

        $escort = self::$escort;
        //dd($escort);
        //return $reviews;
        return  view('escort.detail1', compact('escort','reviews'));
   }


}
