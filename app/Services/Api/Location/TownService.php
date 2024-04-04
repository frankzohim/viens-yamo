<?php

namespace App\Services\Api\Location;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class TownService{

     public function getTowns(){
        
        $url=(new UrlApiService())->getUrl();
         //Retrieving all towns
            $towns = null;
            
            try{

                $response = Http::asForm()->get($url."/api/towns");
                
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

    public function create($town){

        //dd($town);
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::post($url."/api/towns", [
                'town_name' => $town['town_name'],
                'code' => $town['code'],
                'country_id' => $town['country_id'],
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
            $response = Http::delete($url."/api/towns/".$id);
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function update($town){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::put($url."/api/towns/".$town['id'], [
                'town_name' => $town['town_name'],
                'code' => $town['code'],
                'country_id' => $town['country_id'],
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function getTown($id){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::get($url."/api/towns/".$id);
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }
}
