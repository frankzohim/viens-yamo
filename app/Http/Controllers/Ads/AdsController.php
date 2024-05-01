<?php

namespace App\Http\Controllers\Ads;
use App\Http\Controllers\Controller;
use  App\Services\Api\UrlApiService;
use App\Services\Api\Ads\AdsCategoryService;
use App\Services\Api\Ads\AdsService;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Redirect;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Illuminate\Support\Facades\Mail;
use App\Mail\Ad;
use App\Services\Api\Location\TownService;
use App\Services\Api\Location\QuarterService;
use App\Http\Controllers\Listing\AnnouncementController;
use App\Services\Api\Escort\ListReviewsServices;
use App\Services\Api\List\ListTownService;
use App\Services\User\ReviewService;

class AdsController extends Controller
{
    public function create(){

        //check if user is connected
         if (Session::has('currentUser')){

            $url=(new UrlApiService())->getUrl();
             //$currentUser=(new CurrentUserService())->currentUser();
            $user = Session::get('currentUser');
            //dd($user->id);

            //Fetching list towns
            $towns = (new TownService())->getTowns();
                 if($towns == null)
                return view('error');
            //Retrieving all categories
            $adsCategories = (new AdsCategoryService)->getCategories();
            if($adsCategories == null)
                return view('error');

             //Delete directory on page refresh
                \Illuminate\Support\Facades\Storage::deleteDirectory('ads/'.$user->id);
            return view('ads.create', compact('adsCategories', 'user', 'towns'));
        }

        else{
                return to_route("login");
            }


    }

    public function save(Request $request){


        //Retrieve URL API
        $url=(new UrlApiService())->getUrl();

        
        //Saving Ads
        $token=Session::get('tokenUser');
     
        $isVideo = false;
        if($request->file('video') != null){
            $isVideo = true;
            $video = $request->file('video');

            //dd($video);
            //Storing file in disk
            $fileName = time().'_'.$video->getClientOriginalName().'.'.$video->getClientOriginalExtension();
            $video->storeAs('ads/'.$request->user_id.'/videos', $fileName);
        }



        if($isVideo){

            try{

                foreach (\Illuminate\Support\Facades\Storage::files('ads/'.$request->user_id.'/videos') as $filename) {
                        $video = \Illuminate\Support\Facades\Storage::get($filename);
                        $response = Http::attach(
                            'video', $video, $filename
                        )->withToken($token)->post($url."/api/v1/ads", [
                             'town_id' => $request->town,
                             'user_id' => $request->user_id,
                             'quarter_id' => $request->quarter,
                             'gender' => $request->gender,
                             'age' => $request->age,
                             'phone' => $request->phone,
                             'category_id' => $request->category,
                             'accepted' => $request->accepted,
                             'title' => $request->title,
                             'location' => $request->location,
                             'description' => $request->form['post_content'],
                        ]);

                }

                //dd($response);
                //dd(json_decode((string) $response->getBody(), true));
                if($response->status() === 200){

                    //Now uploading ads's images
                    $id = json_decode((string) $response->getBody(), true)['id'];
                    foreach (\Illuminate\Support\Facades\Storage::files('ads/'.$request->user_id) as $filename) {
                        $photo = \Illuminate\Support\Facades\Storage::get($filename);
                        $responseImage = Http::attach(
                            'file', $photo, $filename
                        )->post($url."/api/ads/image", [
                            'ads_id' => $id,
                        ]);

                    }
                    //Delete directory
                    // \Illuminate\Support\Facades\Storage::deleteDirectory('ads/'.$request->user_id);


                    $ad['location'] = $request->location;
                    $ad['accepted'] = $request->accepted;
                    $ad['title'] = $request->title;
                    $ad['description'] = $request->form['post_content'];
                    //Send mail
                    // Mail::to('delanofofe@gmail.com')
                    // ->send(new Ad($ad));

                    Mail::to('temerprodesign@yahoo.fr')
                    ->send(new Ad($ad));
                    return to_route('membership.display', ['adsId'=>$id]);


                }else{

                //dd(json_decode((string) $response->getBody(), true));
                //dd($request);
                return redirect()->back()->withInput()
                                             ->with('error', implode(" ", json_decode((string) $response->getBody(), true)));
                }
            }catch(\Exception $e){
                //dd($e);
                return back()->with('error',$e);
            }
        }



        else{

               
            try{

                        $response = Http::withToken($token)->post($url."/api/v1/ads", [
                             'town_id' => $request->town,
                             'user_id' => $request->user_id,
                             'quarter_id' => $request->quarter,
                             'gender' => $request->gender,
                             'age' => $request->age,
                             'phone' => $request->phone,
                             'category_id' => $request->category,
                             'accepted' => $request->accepted,
                             'title' => $request->title,
                             'location' => $request->location,
                             'description' => $request->form['post_content'],
                        ]);



                //dd($response->body());
                //dd(json_decode((string) $response->getBody(), true));
                if($response->status() === 200){

                    //Now uploading ads's images
                    $id = json_decode((string) $response->getBody(), true)['id'];
                    foreach (\Illuminate\Support\Facades\Storage::files('ads/'.$request->user_id) as $filename) {
                        $photo = \Illuminate\Support\Facades\Storage::get($filename);
                        $responseImage = Http::attach(
                            'file', $photo, $filename
                        )->post($url."/api/ads/image", [
                            'ads_id' => $id,
                        ]);

                    }
                    //Delete directory
                    // \Illuminate\Support\Facades\Storage::deleteDirectory('ads/'.$request->user_id);


                    $ad['location'] = $request->location;
                    $ad['accepted'] = $request->accepted;
                    $ad['title'] = $request->title;
                    $ad['description'] = $request->form['post_content'];
                    //Send mail
                    // Mail::to('delanofofe@gmail.com')
                    // ->send(new Ad($ad));

                    Mail::to('temerprodesign@yahoo.fr')
                    ->send(new Ad($ad));
                    return to_route('membership.display', ['adsId'=>$id]);


                }else{
                  
                //return back()->with('error', implode(" ", json_decode((string) $response->getBody(), true)));
                    return redirect()->back()->withInput()
                                             ->with('error', implode(" ", json_decode((string) $response->getBody(), true)));
                }
            }catch(\Exception $e){
                //dd($e);
                return back()->with('error',$e);
            }
        }


    }

    public function update(Request $request){

        //Retrieve URL API
        $url=(new UrlApiService())->getUrl();
        //Check if we have at least 2 images
        $ad = (new AdsService)->getAdsById($request->ads_id);
        //dd($request->ads_id);
         if(count($ad['images']) < 2){
                 return Redirect::back()->withErrors(['msg' => 'Votre annonce doit avoir un minimum de 2 images']);
        }

        //Updating ads
         try{

            $response = Http::asForm()->post($url."/api/ads/update", [
                'id' => $request->ads_id,
                'town_id' => $request->town,
                'quarter_id' => $request->quarter,
                'gender' => $request->gender,
                'age' => $request->age,
                'phone' => $request->phone,
                'location' => $request->location,
                'category_id' => $request->category,
                'accepted' => $request->accepted,
                'title' => $request->title,
                'description' => $request->form['post_content'],
            ]);

            if($response->status() === 200){

                //Now uploading ads's images
                return back()->with('success',"Votre annonce a été bien mise à jour bien");

            }else{

              return Redirect::back()->withErrors(['msg' => "Une erreur s'est produite lors de la mise a jour"]);
            }
        }catch(\Exception $e){
            //dd($e);
           return Redirect::back()->withErrors(['msg' => "Une erreur s'est produite lors de la mise a jour"]);
        }

    }

    public function getAds(){

        $url=(new UrlApiService())->getUrl();
        $ads = [];

        try{

            $response = Http::asForm()->get($url."/api/announces");
            $ads = json_decode((string) $response->getBody(), true);
            if($ads['data'] != null)
              $ads = $ads['data'];
            //error_log($ads);
        }catch(\Exception $e){
             $ads = [];
        }
        return  $ads;
    }

    public function list(Request $request){

        //dd($request->membership);
        $url=(new UrlApiService())->getUrl();
        $allAds = [];

        try{

            $response = Http::asForm()->get($url."/api/announces");
            $allAds = json_decode((string) $response->getBody(), true);
            //dd($allAds['data']);
            if($allAds['data'] != null)
             $allAds = $allAds['data'];
            else
              $allAds = [];
            //dd($allAds);

            $towns=(new ListTownService())->list()->data;
            $quarters=(new QuarterService())->getQuarters();
            if($request->membership){
                $adsByMembership = [];
                $i = 0;
                foreach($allAds as $ad){
                    if($ad['subscribe_id'] == $request->membership){
                        $adsByMembership[$i] = $ad;
                        $i++;
                    }
                }
               $allAds =  $adsByMembership;
            }

            $total = count($allAds);
            $per_page = 6;
            $nb_pages = ceil($total/$per_page);
            $current_page = $request->current_page ?? 1;

            $starting_point = ($current_page * $per_page) - $per_page;

            $ads = array_slice($allAds, $starting_point, $per_page, true);

            $ads = new Paginator($ads, $total, $per_page, $current_page, [
                'path' => $request->url(),
                'query' => $request->query(),
            ]);

            //dd($ads);

            return  view('ads.list', compact('ads','quarters', 'allAds', 'current_page', 'nb_pages','towns'));
            //error_log($ads);
        }catch(\Exception $e){
             $allAds = [];
        }


    }

    public function nonvip(Request $request){

        $nonvip = true;
        $url=(new UrlApiService())->getUrl();
        $allAds = [];

        try{

            $response = Http::asForm()->get($url."/api/nonvip-ads");
            $allAds = json_decode((string) $response->getBody(), true);
            //dd($allAds['data']);
            if($allAds['data'] != null)
             $allAds = $allAds['data'];
            else
              $allAds = [];
            //dd($allAds);

            $towns=(new ListTownService())->list()->data;
            $quarters=(new QuarterService())->getQuarters();
            if($request->membership){
                $adsByMembership = [];
                $i = 0;
                foreach($allAds as $ad){
                    if($ad['subscribe_id'] == $request->membership){
                        $adsByMembership[$i] = $ad;
                        $i++;
                    }
                }
               $allAds =  $adsByMembership;
            }

            $total = count($allAds);
            $per_page = 6;
            $nb_pages = ceil($total/$per_page);
            $current_page = $request->current_page ?? 1;

            $starting_point = ($current_page * $per_page) - $per_page;

            $ads = array_slice($allAds, $starting_point, $per_page, true);

            $ads = new Paginator($ads, $total, $per_page, $current_page, [
                'path' => $request->url(),
                'query' => $request->query(),
            ]);

            //dd($ads);

            return  view('ads.list', compact('nonvip', 'ads','quarters', 'allAds', 'current_page', 'nb_pages','towns'));
            //error_log($ads);
        }catch(\Exception $e){
             $allAds = [];
        }


    }


    public function adsByTown(Request $request){

        $url=(new UrlApiService())->getUrl();
        $allAds = [];
        $towns=(new ListTownService())->list()->data;
        $quarters=(new QuarterService())->getQuarters();

        try{
            $id=$request->id;
            $response = Http::asForm()->get($url."/api/adstown/".$request->id);
            $allAds = json_decode((string) $response->getBody(), true);

            if($allAds['data'] != null)
             $allAds = $allAds['data'];
            else
              $allAds = [];
            //error_log($ads);
        }catch(\Exception $e){
             $allAds = [];
        }

        $total = count($allAds);
        $per_page = 5;
        $nb_pages = ceil($total/$per_page);
        $current_page = $request->current_page ?? 1;

        $starting_point = ($current_page * $per_page) - $per_page;

        $ads = array_slice($allAds, $starting_point, $per_page, true);

        $ads = new Paginator($ads, $total, $per_page, $current_page, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        //dd($allAds);
        $townAds = $request->id;
        //dd($town);
        return  view('ads.list', compact('quarters', 'ads','id', 'allAds', 'current_page', 'nb_pages','towns', 'townAds'));
    }

    public function adsByQuarter(Request $request){

        $url=(new UrlApiService())->getUrl();
        $towns=(new ListTownService())->list()->data;
        $quarters=(new QuarterService())->getQuarters();
        $allAds = [];

        try{
            $id=$request->id;
            $response = Http::asForm()->get($url."/api/adsquarter/".$request->id);
            //dd(json_decode((string) $response->getBody(), true));
            $allAds = json_decode((string) $response->getBody(), true);
            if($allAds['data'] != null)
             $allAds = $allAds['data'];
            else
              $allAds = [];

            //dd($allAds);

            //error_log($ads);
        }catch(\Exception $e){
             $allAds = [];
        }

        $total = count($allAds);
        $per_page = 5;
        $nb_pages = ceil($total/$per_page);
        $current_page = $request->current_page ?? 1;

        $starting_point = ($current_page * $per_page) - $per_page;

        $ads = array_slice($allAds, $starting_point, $per_page, true);

        $ads = new Paginator($ads, $total, $per_page, $current_page, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        //dd($allAds);
         $quarter = $request->id;
            //dd($quarter);
        return  view('ads.list', compact('quarters','ads','id', 'allAds', 'current_page', 'nb_pages','towns','quarter'));
    }

    public function adsByCategory(Request $request){

        $url=(new UrlApiService())->getUrl();
        $quarters=(new QuarterService())->getQuarters();
        $category = $request->id;
        $allAds = [];

        try{

            $response = Http::asForm()->get($url."/api/adscategory/".$request->id);
            //dd($response->body());
            $allAds = json_decode((string) $response->getBody(), true);
            if($allAds){
                 $allAds = $allAds['data'];
            }
            else
                $allAds = [];

        }catch(\Exception $e){
             $allAds = [];
        }

        $total = count($allAds);
        $per_page = 5;
        $nb_pages = ceil($total/$per_page);
        $current_page = $request->current_page ?? 1;

        $starting_point = ($current_page * $per_page) - $per_page;

        $ads = array_slice($allAds, $starting_point, $per_page, true);

        $ads = new Paginator($ads, $total, $per_page, $current_page, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        //dd($allAds);

        return  view('ads.list', compact('category','quarters','ads', 'allAds', 'current_page', 'nb_pages'));
    }

    public function adsTown(){
        $data = (new AnnouncementController())->index();
        if($data){
             $announcements = $data[0];
             $allTowns = $data[1];
             return view('ads.ads-town', compact('announcements', 'allTowns'));
        }
        else
          return view('error');

    }



   public function show($name,$slug,Request $request){


     $ad = null;
     $ads = null;
     $url=(new UrlApiService())->getUrl();

        try{

            $response = Http::asForm()->get($url."/api/announce/".$name.'/'.$slug);
            $response1 = Http::asForm()->get($url."/api/announce/similar/".$name.'/'.$slug);
            $ad = json_decode((string) $response->getBody(), true);
            $ads = json_decode((string) $response1->getBody(), true);
            //dd($response1->body());
            if($ad){
                if($ad['data']){
                    $ad = $ad['data'][0];
                }
                else
                    return view('error');
            }
            else
                return view('error');

            if($ads){

                 if($ads['data']){
                    $ads = $ads['data'];
                }

                else
                  return view('error');

            }
            else
                return view('error');


            $reviews=(new ListReviewsServices())->listReviews($slug);

            //dd($ad);
            $announceId=$request->id;
            //dd($ad);
            return  view('ads.detail', compact('ad', 'ads','reviews','announceId'));

        }catch(\Exception $e){
             return view('error');
        }

        //$hostURL = request()->getHttpHost()."/ads/".$ad['id'];
        //dd($hostURL);


   }

   public function edit($id){

     $ad = (new AdsService)->getAdsById($id);
     $adsCategories = (new AdsCategoryService)->getCategories();
     $towns = (new TownService())->getTowns();
     //dd($ad['town']['id']);
     if($ad)
      $quarters = (new QuarterService())->getQuarters($ad['town']['id']);
        //dd($quarters);
     if($adsCategories && $ad && $quarters){
        return view('dashboard.escort.ads.edit', compact('adsCategories','ad', 'towns', 'quarters'));
     }
    else
        return view('error');

   }

   public function delete($id){

        $url=(new UrlApiService())->getUrl();
        //dd('hrel');
       //Deleting ads
         try{
            $response = Http::asForm()->delete($url."/api/ads/".$id);

            if($response->status() === 200){

                return back()->with('success',"Annonce supprimée");

            }else{

                //dd((string) $response->getBody());
              return Redirect::back()->withErrors(['msg' => "Une erreur s'est produite lors de la suppression"]);
            }
        }catch(\Exception $e){
            //dd($e);
           return Redirect::back()->withErrors(['msg' => "Une erreur s'est produite lors de la suppression"]);
        }
   }

    public function displayAdsVideo($id, $path)
    {

        $url=(new UrlApiService())->getUrl();
        $response = Http::asForm()->get($url.'/api/displayVideo/'.$id.'/'.$path);
        return $response;

    }




}
