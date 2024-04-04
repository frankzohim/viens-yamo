<?php

namespace App\Http\Controllers\Admin\Escort;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifyEscortController extends Controller
{
    public function verify($id){

        //Get API URL
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');

        

        try{
            $response = Http::withToken($token)->post($url."/api/v1/escort/verify", 
            [
              'id' => $id
            ]);

            dd($response->status);
            if($response){
                 dd($response->status);
                 $data = json_decode((string) $response->getBody(), true);
                 dd($data);
                 return to_route('escorts')->with('message', "statut de verification mis  a jour");;
            }
           

        }
        catch(\Exception $e){
            return to_route('escorts')->with('message', "Une erreur est survenue lors de la mise a jour");
        }
       
    }

}
