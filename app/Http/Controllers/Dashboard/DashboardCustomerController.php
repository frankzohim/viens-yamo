<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use  App\Services\Api\UrlApiService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Services\User\UserTypeService;
use Illuminate\Support\Facades\Session;
use App\services\Api\CurrentUserService;
use App\Services\Api\Purchase\PurchaseMembershipService;
use App\Services\Api\Purchase\CurrentPurchaseService;
use App\Services\Api\Location\TownService;

class DashboardCustomerController extends Controller
{

    public function index(){

            $user = Session::get('currentUser');
            //dd($user);

            //Ensuring we are having a customer
            if($user->role_id === 3){

                //Checking if the user have a membership
                if(!$user->isSubscribe && !Session::has('membershipCheck')){
                     
                    Session::put('membershipCheck', 1);
                    Session::save();

                    //return to_route('upgrade-plan');
                    return redirect()->route('upgrade-plan', ['membership'=>'null']);
                } 
                    
                //Rendering customer dashboard
                return view('dashboard.customer.index', compact('user'));
            }
                
            else
                return to_route("homepage");

    }

    public function profil (){

        //Retrieving user
        $user = Session::get('currentUser');
        //Fetching list towns
        $towns = (new TownService())->getTowns();
                 if($towns == null)
                return view('error');
        return view('dashboard.customer.profil', compact('user', 'towns'));

    }

    public function messages (){
        $user = Session::get('currentUser');
        return view('dashboard.escort.messages', compact('user'));

    }

    public function finance (){
        $user = Session::get('currentUser');
        $payments=(new CurrentPurchaseService())->currentPayment();
        //return $payments;
        return view('dashboard.customer.finance', compact('user','payments'));

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
        return view('dashboard.customer.settings', compact('user'));

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
