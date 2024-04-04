<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use  App\Services\Api\UrlApiService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Services\User\UserTypeService;
use Illuminate\Support\Facades\Session;
use App\services\Api\CurrentUserService;
use App\Services\Api\Escort\GetEscortService;
use App\Services\Api\Purchase\PurchaseMembershipService;
use App\Services\Api\Escort\ProfileIsCompletedOrNotService;
use App\Services\Api\Purchase\CurrentPurchaseService;
use App\Services\Api\Location\TownService;

class DashboardEscortController extends Controller
{

    public function index(){

            $user = Session::get('currentUser');
            //dd($user);
            //Ensuring we are having an escort
            if($user->role_id === 2){

                //Retrieve the escort

                if($user){
                    return view('dashboard.escort.index', compact('user'));
                }
                else
                  return view('error');

            }
            else{
                return to_route("homepage");
            }


            //return view('dashboard.escort.index');
    }

    public function profil (){

        //Retrieving user
        $user = Session::get('currentUser');
        //dd($user);
        //Fetching list towns
        $towns = (new TownService())->getTowns();
                 if($towns == null)
                return view('error');

        return view('dashboard.escort.profil', compact('user','towns'));

    }

    public function ads (){

        $user = Session::get('currentUser');


            if($user){

                //Retrieve escort'ads
                $ads = $this->getAds($user->id);
                //return $ads;
                if($ads){
                    $ads = $ads['data'];
                    //dd($ads);
                    return view('dashboard.escort.ads.index', compact('user', 'ads'));
                }
                else{
                    return view('error');
                }

            }

            else
                return view('error');


    }

    public function messages (){
        $user = Session::get('currentUser');
        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
        $completed=$profileIsCompletedOrNot->completed ?? null;

        if($completed==0){
            return to_route('step-one');
        }else{
            return view('dashboard.escort.messages', compact('user'));
        }

    }

    public function finance (){
        $user = Session::get('currentUser');
        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
        $completed=$profileIsCompletedOrNot->completed ?? null;


            $payments=(new CurrentPurchaseService())->currentPayment();
            $escort = (new GetEscortService)->getEscort();
            //return $payments;
            return view('dashboard.escort.finance', compact('user','escort','payments'));


    }

    public function advertise (){
        $user = Session::get('currentUser');
        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
        $completed=$profileIsCompletedOrNot->completed ?? null;

        if($completed==0){
            return to_route('step-one');
        }else{
            return view('dashboard.escort.advertise', compact('user'));
        }

    }

    public function settings (){
        $user = Session::get('currentUser');
        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
        $completed=$profileIsCompletedOrNot->completed ?? null;


            $escort = (new GetEscortService)->getEscort();
            return view('dashboard.escort.settings', compact('user','escort'));


    }



      public function getAds($id){

        //Get all user's ads
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::get($url."/api/userAds/".$id);
            $ads = json_decode((string) $response->getBody(), true);
            return $ads;

        }
        catch(\Exception $e){
            return null;
        }
    }
}
