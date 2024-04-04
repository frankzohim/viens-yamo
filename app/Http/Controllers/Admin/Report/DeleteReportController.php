<?php

namespace App\Http\Controllers\Admin\Report;
use App\Http\Controllers\Controller;
use App\Services\Api\Messages\ReportService;
use Illuminate\Http\Request;
use Redirect;

class DeleteReportController extends Controller
{
    

     public function delete($id){

        $report = (new ReportService)->delete($id);
        //dd($Report->status());

         if($report){

            if($report->status() == 204){
               
               return Redirect::back()->with(['success' => "Dénonciation supprimée avec succès"]);

            }

            elseif($report->status() == 400){
                return Redirect::back()->with(['failure' => "Impossible de supprimer"]);
            }
            elseif($report->status() == 404){
                return view('error');
            }
         }
         else{
            return Redirect::back()->with(['failure' => "Une erreur s'est produite lors de la suppression"]);
         }
       
    }
}
