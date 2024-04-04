<?php

namespace App\Services\Api\Messages;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ContactService{

    public function getContacts(){
        
        $url=(new UrlApiService())->getUrl();
            
            try{

                $response = Http::asForm()->get($url."/api/contact");
                //dd($response);
                $contacts = json_decode((string) $response->getBody(), true);

                //dd($contacts);
                if($contacts['data'] === null){
                    return null;
                }
                else{
                    return $contacts['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }

    public function update($contact){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::put($url."/api/contact/".$contact['id'], [
                'status' => $contact['status'],
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
            $response = Http::delete($url."/api/contact/".$id);
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }


    public function getContact($id){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::get($url."/api/contact/".$id);
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }
}
