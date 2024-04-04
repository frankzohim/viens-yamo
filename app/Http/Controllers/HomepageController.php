<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Redirect;
use App\Http\Controllers\Ads\AdsController;
use App\Http\Controllers\Escort\EscortController;
use App\Http\Controllers\Listing\LocationController;
use App\Http\Controllers\Listing\AnnouncementController;
use App\Services\Api\Ads\AdsService;
use App\Services\Api\MemberShip\CheckSubscribeService;



class HomepageController extends Controller
{



    public function homepage(Request $request){


        
        //dd($hostname);
         //dd(Session::has('checkAge'));

        //$this->checkAge();
         //$check=(new CheckSubscribeService())->checkAds();

        // $locationController = new LocationController();
        // $locations = $locationController->index();

        $data = (new AdsService())->index();
        $homeAds=(new AdsService())->homeAds();
        $vipAds=(new AdsService())->vipAds();
        $goldAds=(new AdsService())->goldAds();
        $ads = (new AdsController())->getAds();

        //dd($homeAds);

        if($data != []){
            $announcements = $data[0];
            $emptyTowns = $data[1];
        }

        else{
            $announcements = [];
            $emptyTowns = [];
        }

         return view('Homepage', compact('announcements','emptyTowns','homeAds', 'ads','vipAds','goldAds'));


    }

    public function checkAge(){
        //Registering checkAge in session
         Session::put('checkAge', true);
         return "Session set successfully";
    }
}
