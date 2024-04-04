<?php

namespace App\Http\Controllers\Admin\Town;
use App\Http\Controllers\Controller;
use App\Services\Api\Location\TownService;
use App\Services\Api\Location\CountryService;
use App\Http\Requests\TownRequest;
use Illuminate\Http\Request;
use Redirect;

class CreateTownController extends Controller
{
   

    public function addView(){

        //Fetching all countries
        $countries = (new CountryService())->getCountries();
        if($countries)
            return view('backend.towns.create', compact('countries'));
        else
            return view('error');
    }

    public function store(TownRequest $request){

        $validatedData=$request->validated();
         $town['town_name'] = $request->town_name;
         $town['code'] = $request->code;
         $town['country_id'] = $request->country_id;

        $town = (new TownService)->create($town);
        //dd($town);

         if($town){

            if($town->status() == 201){
                //dd('hello');
                return Redirect::back()->with('success',"Ville ajoutée");

            }
            elseif($town->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $town->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite lors de la création"]);
         }


    }
}
