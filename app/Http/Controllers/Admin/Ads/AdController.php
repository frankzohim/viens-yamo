<?php

namespace App\Http\Controllers\Admin\Ads;
use App\Http\Controllers\Controller;
use App\Services\Api\Ads\AdsService;
use Illuminate\Http\Request;
use  App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;

class AdController extends Controller
{
    

     public function index(){

        $ads = (new AdsService)->getAds();
        //dd($ads[0]);
        return view('backend.ads.list', compact('ads'));
    }

      public function delete($id){

        $url=(new UrlApiService())->getUrl();
    
       //Deleting ad
         try{
            
            $response = Http::asForm()->delete($url."/api/ads/".$id);
          
            if($response->status() === 200){

                return back()->with('success',"Annonce supprimée");

            }else{

              return back()->with('msg', "Une erreur s'est produite lors de la suppression");
            }
        }catch(\Exception $e){
            //dd($e);
           return back()->with('msg', "Une erreur s'est produite lors de la suppression");
        }
   }
}
