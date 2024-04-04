<?php

namespace App\Http\Controllers\Admin\Quarter;
use App\Http\Controllers\Controller;
use App\Services\Api\Location\QuarterService;
use Illuminate\Http\Request;
use Redirect;

class DeleteQuarterController extends Controller
{
    

     public function delete($id){

       
        $quarter = (new QuarterService)->delete($id);
        //dd($quarter->status());

         if($quarter){

            if($quarter->status() == 204){
               
               return Redirect::back()->with(['success' => "Quartier supprimé avec succès"]);

            }

            elseif($quarter->status() == 400){
                return Redirect::back()->with(['failure' => "Impossible de supprimer, ce quartier contient des annonces"]);
            }
            elseif($quarter->status() == 404){
                return view('error');
            }
         }
         else{
            return Redirect::back()->with(['failure' => "Une erreur s'est produite lors de la suppression"]);
         }
       
    }
}
