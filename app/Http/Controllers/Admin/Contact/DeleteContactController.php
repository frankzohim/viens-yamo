<?php

namespace App\Http\Controllers\Admin\Contact;
use App\Http\Controllers\Controller;
use App\Services\Api\Location\ContactService;
use Illuminate\Http\Request;
use Redirect;

class DeleteContactController extends Controller
{
    

     public function delete($id){

        $Contact = (new ContactService)->delete($id);
        //dd($Contact->status());

         if($Contact){

            if($Contact->status() == 204){
               
               return Redirect::back()->with(['success' => "Quartier supprimé avec succès"]);

            }

            elseif($Contact->status() == 400){
                return Redirect::back()->with(['failure' => "Impossible de supprimer, ce quartier contient des annonces"]);
            }
            elseif($Contact->status() == 404){
                return view('error');
            }
         }
         else{
            return Redirect::back()->with(['failure' => "Une erreur s'est produite lors de la suppression"]);
         }
       
    }
}
