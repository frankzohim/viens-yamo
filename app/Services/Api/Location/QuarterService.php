<?php

namespace App\Services\Api\Location;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class QuarterService{

    public function getQuarters(){
        
        $url=(new UrlApiService())->getUrl();
         //Retrieving all towns
            $towns = null;
            
            try{

                $response = Http::asForm()->get($url."/api/quarters");
                
                $towns = json_decode((string) $response->getBody(), true);

                //dd($towns);
                if($towns['data'] === null){
                    return null;
                }
                else{
                    return $towns['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }

    public function create($quarter){

        //dd($quarter);
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::post($url."/api/quarters", [
                'quarter_name' => $quarter['quarter_name'],
                'town_id' => $quarter['town_id'],
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
            $response = Http::delete($url."/api/quarters/".$id);
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function update($quarter){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::put($url."/api/quarters/".$quarter['id'], [
                'quarter_name' => $quarter['quarter_name'],
                'town_id' => $quarter['town_id'],
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function getquarter($id){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::get($url."/api/quarters/".$id);
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }
}
