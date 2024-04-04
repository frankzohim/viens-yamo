<?php

namespace App\Http\Controllers\Ads;
use App\Http\Controllers\Controller;
use  App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Services\Api\Ads\AdsService;
use Storage;
use Image;
use Redirect;


class AdsImageController extends Controller
{

    public function images(Request $request){
            
      
            $image = $request->file('file');
            $extension = $image->getClientOriginalExtension();

            $allowedfileExtension=['jpg','png','jpeg'];

            $check = in_array($extension,$allowedfileExtension);

            if(!$check){

                return response('Extension invalide', 400);
            }
            else{

                //Storing file in disk
                $image = Image::make($request->file('file'));
                $imageName = $request->file('file')->getClientOriginalName();
              
                //Make directory on page refresh
                \Illuminate\Support\Facades\Storage::makeDirectory('ads/'.$request->user_id);
                if($extension === 'jpg')
                    $image->save(storage_path('app\ads\\'.$request->user_id.'\\'.$imageName), 20);
                else
                     $image->save(storage_path('app\ads\\'.$request->user_id.'\\'.$imageName), 60, 'jpg');

                
                return response('Image ajoutée avec succès', 200);
            }

    }
    
    public function updateImage(Request $request){

            //Check if limit of images has already been reach
             $ad = (new AdsService)->getAdsById($request->ads_id);
        
            if(count($ad['images']) >= 5){
                 return response('Limite de photos atteinte', 400);
            }

            $image = $request->file('file');
            $extension = $image->getClientOriginalExtension();

            $allowedfileExtension=['jpg','png','jpeg'];

            $check = in_array($extension,$allowedfileExtension);

            if(!$check){

                return response('Extension invalide', 400);
            }
            else{

                //Storing file in disk
                
                $image = Image::make($request->file('file'));
                $imageName = $request->file('file')->getClientOriginalName();
              
                //Make directory on page refresh
                \Illuminate\Support\Facades\Storage::makeDirectory('ads/'.$request->user_id);
                if($extension === 'jpg')
                    $image->save(storage_path('app\ads\\'.$request->user_id.'\\'.$imageName), 20);
                else
                     $image->save(storage_path('app\ads\\'.$request->user_id.'\\'.$imageName), 60, 'jpg');
                // $fileName = $image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
                // $image->storeAs('ads/', $fileName);
                $photo = \Illuminate\Support\Facades\Storage::get('ads/'.$request->user_id.'/'.$imageName);
                //Storing file to server
                 $url=(new UrlApiService())->getUrl();
                 $response = Http::attach(
                        'file', $photo, $imageName
                    )->post($url."/api/ads/image", [
                        'ads_id' => $request->ads_id,
                    ]);
                if($response->status() === 200){
                    return response('Succés image bien reçu', 200);
                }
                else
                return response("Une erreur s'est produite", 500);
                
            }

    }

    public function displayAdsImage($id, $path)
    {
     
        $url=(new UrlApiService())->getUrl();
        $response = Http::asForm()->get($url.'/api/displayadsimage/'.$id.'/'.$path);
        return $response;
   
    }

    public function deleteImage(Request $request){

         \Illuminate\Support\Facades\Storage::delete('ads/'.$request->user_id.'/'.$request->filename);
       
          return response($request->filename." deleted successfully", 200)
                  ->header('Content-Type', 'application/json');
    }

    public function deletePicture($id, $path, Request $request){

      
        //Only delete if we have one image left
        if($request->imagesLeft < 2){
                 return Redirect::back()->withErrors(['warningImage' => 'Impossible de supprimer, votre annonce doit avoir au moins une image']);
        }

        $url=(new UrlApiService())->getUrl();
        $response = Http::asForm()->get($url.'/api/deleteadsimage/'.$id.'/'.$path);
        if($response->status() === 200){
         
              return Redirect::back()->with(['imageDeleted' => 'Image bien supprimée']);
        }
    }
}
