<?php

namespace App\Http\Controllers\Admin\Quarter;
use App\Http\Controllers\Controller;
use App\Services\Api\Location\QuarterService;
use App\Services\Api\Location\TownService;
use Illuminate\Http\Request;
use App\Http\Requests\QuarterRequest;
use Redirect;

class EditQuarterController extends Controller
{

     public function edit($id){

         $quarter = (new QuarterService)->getQuarter($id);
         //dd($quarter);

         if($quarter){

            if($quarter->status() == 200){
                
                $quarter = json_decode((string) $quarter->getBody(), true)['data'];
                //dd($Quarter);
                //Fetching all towns

                $towns = (new TownService())->getTowns();
                if($towns)
                    return view('backend.quarters.edit', compact('quarter','towns'));
                else
                    return view('error');

            }
            elseif($quarter->status() == 404){
                return view('error');
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite"]);
         }

        
    }

    public function update(QuarterRequest $request){
    
         $validatedData=$request->validated();
         $quarter['id'] = $request->id;
         $quarter['quarter_name'] = $request->quarter_name;
         $quarter['town_id'] = $request->town_id;

         $quarter = (new QuarterService)->update($quarter);
         //dd($Quarter);

         if($quarter){

            if($quarter->status() == 200){
                return Redirect::back()->with('success',"Quartier mise à jour");

            }
            elseif($quarter->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $quarter->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite lors de la mise à jour"]);
         }
    }
}
