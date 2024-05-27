<?php

namespace App\Http\Controllers;
use App\Services\Api\Banners\BannerService;
use Illuminate\Http\Request;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Redirect;

class BannerController extends Controller
{

    public function index(){

        $banners = (new BannerService())->banners();
        if($banners){
            return view('backend.banners.list', compact('banners'));
        }

        else
            return view('error');

    }

    public function edit($id){

        $banner = (new BannerService())->getBanner($id);
        if($banner){
            return view('backend.banners.edit', compact('banner'));
        }

        else
            return view('error');
        
    }

    public function update(Request $request){
            
            
             $uploadedFile = false;
            if(is_uploaded_file($request->file('image'))){

                //File has been uploaded
                
                $image = $request->file('image');
                $extension = $image->getClientOriginalExtension();

                $allowedfileExtension=['jpg','png','jpeg','JPG', 'PNG','JPEG'];

                $check = in_array($extension,$allowedfileExtension);

                if(!$check){
                    //dd('Updating');

                    return Redirect::back()->with(['failure' => "Extension invalide"]);
                }

                $uploadedFile = true;
               
            }
           
         $banner['id'] = $request->banner_id;
         $banner['status'] = $request->status;
         $banner['uploadedFile'] = $uploadedFile;
         $banner['myfile'] = $request->file('image');

        $banner = (new BannerService)->create($banner);
        //dd($banner->body());
        if($banner){
        
            if($banner->status() == 200){
               
                return Redirect::back()->with('success',"Modifications enregistrées avec succès");

            }
            elseif($banner->status() == 400){
                return Redirect::back()->with('failure',"Extension invalide");
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['failure' => "Une erreur s'est produite lors de la mise à jour"]);
         }
    }

    public function displayBanner($id){

        $url=(new UrlApiService())->getUrl();
        $response = Http::get($url.'/api/displaybanner/'.$id);
        return $response;
    }
}
