<?php

namespace App\Http\Controllers\Admin\Quarter;
use App\Http\Controllers\Controller;
use App\Services\Api\Location\QuarterService;
use App\Services\Api\Location\TownService;
use App\Http\Requests\QuarterRequest;
use Illuminate\Http\Request;
use Redirect;

class CreateQuarterController extends Controller
{
   

    public function addView(){

        //Fetching all towns
        $towns = (new TownService())->getTowns();
        if($towns)
            return view('backend.quarters.create', compact('towns'));
        else
            return view('error');
    }

    public function store(QuarterRequest $request){


        $validatedData = $request->validated();

        $quarter['quarter_name'] = $request->quarter_name;
        $quarter['town_id'] = $request->town_id;

        $quarter = (new QuarterService)->create($quarter);
        //dd($quarter);

         if($quarter){

            if($quarter->status() == 201){
                //dd('hello');
                return Redirect::back()->with('success',"Quartier ajoutée");

            }
            elseif($quarter->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $quarter->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite lors de la création"]);
         }


    }
}
