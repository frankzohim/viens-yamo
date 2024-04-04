<?php

namespace App\Services\Api\Admin;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class FaqService{

    public function index(){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');

        $response=Http::withToken($token)->get($url."/api/v1/faqs");
        $data=json_decode($response);

        return $data;
    }

    public function store($question,$answer){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');

        $response=Http::withToken($token)->post($url."/api/v1/faqs",[
            'questions'=>$question,
            'answer'=>$answer
        ]);
        $data=json_decode($response);

        return $response;
    }

    public function show($id){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');

        $response=Http::withToken($token)->get($url."/api/v1/faqs/".$id);
        $data=json_decode($response);

        return $data;
    }

    public function update($id,$question,$answer){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');

        $response=Http::withToken($token)->put($url."/api/v1/faqs/".$id,[
            'questions'=>$question,
            'answer'=>$answer
        ]);
        $data=json_decode($response);

        return $response;
    }

    public function delete($id){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');

        $response=Http::withToken($token)->delete($url."/api/v1/faqs/".$id);
        $data=json_decode($response);

        return $response;
    }

    public function list(){
        $url=(new UrlApiService())->getUrl();


        $response=Http::get($url."/api/faqs");
        $data=json_decode($response);

        return $data;
    }
}
