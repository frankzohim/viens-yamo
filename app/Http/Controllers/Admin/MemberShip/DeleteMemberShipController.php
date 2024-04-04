<?php

namespace App\Http\Controllers\Admin\Membership;
use App\Http\Controllers\Controller;
use App\Services\Api\MemberShip\MemberShipService;
use Illuminate\Http\Request;
use Redirect;
class DeleteMemberShipController extends Controller
{
    // public function display(){
    //     $memberships = (new MemberShipService)->MemberShip();
    //     return view('membership.index', compact('memberships'));
    // }

     public function delete($id){

        $membership = (new MemberShipService)->delete($id);
        //  dd(json_decode((string) $membership, true));

         if($membership){

            if($membership->status() == 204){
               
               return Redirect::back()->with(['success' => "Abonnement supprimé avec succès"]);

            }
            elseif($membership->status() == 404){
                return view('error');
            }
         }
         else{
            return Redirect::back()->with(['failure' => "Une erreur s'est produite lors de la suppression"]);
         }
       
    }
}
