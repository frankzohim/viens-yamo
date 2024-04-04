<?php

namespace App\Http\Controllers\Admin\Report;
use App\Http\Controllers\Controller;
use App\Services\Api\Messages\ReportService;
use App\Services\Api\Location\TownService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use  App\Services\Api\UrlApiService;
use App\Http\Requests\ReportUpdateRequest;
use Redirect;

class EditReportController extends Controller
{

     public function edit($id){

         $report = (new ReportService)->getReport($id);

         if($report){

            if($report->status() == 200){
                
                $report = json_decode((string) $report->getBody(), true)['data'];
                //dd($report['ads'][0]['id']);
         
                return view('backend.reports.edit', compact('report'));

            }
            elseif($report->status() == 404){
                return view('error');
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite"]);
         }

        
    }

    public function update(ReportUpdateRequest $request){
    
         $validatedData=$request->validated();
         $report['id'] = $request->id;
         $report['status'] = $request->statut;

         $report = (new ReportService)->update($report);
         //dd($report);

         if($report){

            if($report->status() == 200){
                return Redirect::back()->with('success',"Statut mis à jour");

            }
            elseif($report->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $report->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite lors de la mise à jour"]);
         }
    }

    public function displayReportImage($id, $adsId)
    {
     
        $url=(new UrlApiService())->getUrl();
        $response = Http::asForm()->get($url.'/api/displayreportimage/'.$id.'/'.$adsId);
        return $response;
   
    }
}
