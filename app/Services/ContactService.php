<?php

namespace App\Services;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ContactService{

    public function create($contact){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::post($url."/api/contact", [
                'name' => $contact['name'],
                'phone' => $contact['phone'],
                'subject' => $contact['subject'],
                'message' => $contact['message'],
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function update($membership){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::put($url."/api/memberships/".$membership['id'], [
                'membership_name' => $membership['membership_name'],
                'period' => $membership['period'],
                'price' => $membership['price'],
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

     public function delete($id){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::delete($url."/api/memberships/".$id);
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }



    public function getMemberShip($id){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::get($url."/api/memberships/".$id);
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function show($id){

        //Get current memberships
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::asForm()->get($url."/api/membership/".$id);
            $memberships = json_decode(($response));
            //dd($memberships);
            //return $memberships['data'];
            return $memberships;

        }
        catch(\Exception $e){
            return null;
        }
    }
}
