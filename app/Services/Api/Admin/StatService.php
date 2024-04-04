<?php

namespace App\Services\Api\Admin;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class StatService{

    public function statUser(){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/stats/users");
        $data=json_decode($response);

        return $data;
    }


    public function statEscort(){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/stats/escorts");
        $data=json_decode($response);

        return $data;
    }

    public function statIncome(){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/stats/incomes");
        $data=json_decode($response);

        return $data;
    }
    public function statAnnounce(){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/stats/announces");
        $data=json_decode($response);

        return $data;
    }
    public function statCurrentWeek(){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/stats/currentWeek");
        $data=json_decode($response);

        return $data;
    }
    public function statPreviousWeek(){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/stats/PreviousWeek");
        $data=json_decode($response);

        return $data;
    }

    public function statTown(){
        $url=(new UrlApiService())->getUrl();
        $response=Http::get($url."/api/stats/statTown");
        $data = json_decode((string) $response->getBody(), true);
        return $data;
    }

}
