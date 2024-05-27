<?php

namespace App\Services\Api\Banners;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class BannerService{

     public function banners(){
        
        $url=(new UrlApiService())->getUrl();
            
            try{

                $response = Http::asForm()->get($url."/api/banners");
                $banners = json_decode((string) $response->getBody(), true);

                if($banners['data'] === null){
                    return null;
                }
                else{
                    return $banners['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }

    public function getBanner($id){
        
        $url=(new UrlApiService())->getUrl();
            
            try{

                $response = Http::asForm()->get($url."/api/banners/".$id);
                $banner = json_decode((string) $response->getBody(), true);

                if($banner['data'] === null){
                    return null;
                }
                else{
                    return $banner['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }

   public function create($banner){

        $url=(new UrlApiService())->getUrl();
        $status = ($banner['status'] == "on") ? 1 : 0;
        
        if($banner['uploadedFile']){
         
            $image = $banner['myfile'];
            //Storing file in disk
            $fileName = $image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
            $image->storeAs('banners/'.$banner['id'], $fileName);

            $photo = \Illuminate\Support\Facades\Storage::get('banners/'.$banner['id'].'/'.$fileName);
        //dd($status);
            try{

                $response = Http::attach('myfile', $photo, $fileName)->post($url."/api/banners", [
                            'id' => $banner['id'],
                            'uploadedFile' => 1,
                            'status' => $status,
                        ]);

                dd($response->body());

                //Delete directory
                \Illuminate\Support\Facades\Storage::deleteDirectory('banners/'.$banner['id']);

                return $response;

            }
            catch(\Exception $e){
                return $e;
            }
        }
        else{

            try{

                $response = Http::put($url."/api/banners/".$banner['id'], [
                             'id' => $banner['id'],
                             'uploadedFile' => 0,
                             'status' => $status,
                        ]);

                //dd($response->body());

                return $response;

            }
            catch(\Exception $e){
                return $e;
            }
        }
    }
}
