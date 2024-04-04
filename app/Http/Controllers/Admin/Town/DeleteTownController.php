<?php

namespace App\Http\Controllers\Admin\Town;
use App\Http\Controllers\Controller;
use App\Services\Api\Location\TownService;
use Illuminate\Http\Request;
use Redirect;
class DeleteTownController extends Controller
{
    

     public function delete($id){

        $town = (new TownService)->delete($id);
        //dd($town->status());

         if($town){

            if($town->status() == 204){
               
               return Redirect::back()->with(['success' => "Ville supprimé avec succès"]);

            }

            elseif($town->status() == 400){
                return Redirect::back()->with(['failure' => "Impossible de supprimer, cette ville contient des quartiers et/ou des annonces"]);
            }
            elseif($town->status() == 404){
                return view('error');
            }
         }
         else{
            return Redirect::back()->with(['failure' => "Une erreur s'est produite lors de la suppression"]);
         }
       
    }
}
