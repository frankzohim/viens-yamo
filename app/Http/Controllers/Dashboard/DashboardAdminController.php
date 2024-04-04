<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Api\Admin\StatService;
use Illuminate\Http\Request;
use App\Services\Api\Ads\AdsService;

class DashboardAdminController extends Controller
{
    public function index(){
        $statUser=(new StatService())->statUser();
        $statEscort=(new StatService())->statEscort();
        $statIncome=(new StatService())->statIncome();
        $statAnnounce=(new StatService())->statAnnounce();
        $statCurrentWeek=(new StatService())->statCurrentWeek();
        $statPreviousWeek=(new StatService())->statPreviousWeek();
        $popularsAds = (new AdsService())->popularsAds();
        $recentAds = (new AdsService())->recentAds();
        $statTowns = (new StatService())->statTown();
        //dd(count($statTowns));

        //dd($statUser);

        //dd($popularsAds);
        //return $statPreviousWeek;
        return view('backend.index',compact('statTowns','recentAds','popularsAds','statUser',"statEscort",'statIncome','statAnnounce','statCurrentWeek','statPreviousWeek'));
    }
}
