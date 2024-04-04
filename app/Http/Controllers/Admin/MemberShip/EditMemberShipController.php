<?php

namespace App\Http\Controllers\Admin\Membership;
use App\Http\Controllers\Controller;
use App\Services\Api\MemberShip\MemberShipService;
use Illuminate\Http\Request;
use App\Http\Requests\MemberShipRequest;
use Redirect;

class EditMemberShipController extends Controller
{

     public function edit($id){

         $membership = (new MemberShipService)->getMemberShip($id);
         //dd($membership);

         if($membership){

            if($membership->status() == 200){
                //dd('hello');
                $membership = json_decode((string) $membership->getBody(), true);
                //dd($membership);
                return view('backend.memberships.edit', compact('membership'));

            }
            elseif($membership->status() == 404){
                return view('error');
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite"]);
         }

        
    }

    public function update(MemberShipRequest $request){
    
        $validatedData=$request->validated();
        $membership['id'] = $request->id;
         $membership['membership_name'] = $request->membership_name;
         $membership['period'] = $request->period;
         $membership['price'] = $request->price;

         $membership = (new MemberShipService)->update($membership);
         //dd($membership);

         if($membership){

            if($membership->status() == 200){
                //dd('hello');
                return Redirect::back()->with('success',"Votre abonnement a été bien mise à jour");

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
