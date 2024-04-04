<?php

namespace App\Http\Controllers;
use App\Services\ReportService;
use App\Http\Requests\ReportRequest;
use Illuminate\Http\Request;
use Redirect;

class ReportController extends Controller
{
    public function create($id, $type){
        return view('report', compact('id', 'type'));
    }

    public function store(ReportRequest $request){
        
         $validatedData=$request->validated();
         $report['id'] = $request->id;
         $report['name'] = $request->name;
         $report['phone'] = $request->phone;
         $report['type'] = $request->type;
         $report['message'] = $request->message;
         $report['myfile'] = $request->file('myfile');


         $report = (new ReportService)->create($report);

         if($report){
         
            if($report->status() == 201){
                return Redirect::back()->with('success',"Votre message a été reçu avec succès");

            }
            elseif($report->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $contact->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite lors de la création"]);
         }
    }
}
