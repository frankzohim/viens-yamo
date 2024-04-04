<?php

namespace App\Http\Controllers\Admin\Membership;
use App\Http\Controllers\Controller;
use App\Services\Api\MemberShip\MemberShipService;
use App\Http\Requests\MemberShipRequest;
use Illuminate\Http\Request;
use Redirect;

class CreateMemberShipController extends Controller
{
   

    public function addView(){

        return view('backend.memberships.create');
    }

    public function store(MemberShipRequest $request){

        $validatedData=$request->validated();
         $membership['membership_name'] = $request->membership_name;
         $membership['period'] = $request->period;
         $membership['price'] = $request->price;

         $membership = (new MemberShipService)->create($membership);
         //dd($membership);

         if($membership){

            if($membership->status() == 201){
                //dd('hello');
                return Redirect::back()->with('success',"Votre abonnement a été bien créée");

            }
            elseif($membership->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $membership->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite lors de la création"]);
         }


    }
}
