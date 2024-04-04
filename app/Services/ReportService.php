<?php

namespace App\Services;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ReportService{

    public function create($report){

        //dd($report['id']);
        $url=(new UrlApiService())->getUrl();

        $image = $report['myfile'];
         //Storing file in disk
         $fileName = $image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
         $image->storeAs('reports/'.$report['id'], $fileName);

         $photo = \Illuminate\Support\Facades\Storage::get('reports/'.$report['id'].'/'.$fileName);

        try{
            $response = Http::attach('myfile', $photo, $fileName)->post($url."/api/reports", [
                        'id' => $report['id'],
                        'name' => $report['name'],
                        'phone' => $report['phone'],
                        'type' => $report['type'],
                        'message' => $report['message'],
                    ]);

            //dd($response);

            //Delete directory
            \Illuminate\Support\Facades\Storage::deleteDirectory('reports/'.$report['id']);

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
