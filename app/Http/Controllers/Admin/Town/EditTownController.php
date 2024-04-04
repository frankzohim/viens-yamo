<?php

namespace App\Http\Controllers\Admin\Town;
use App\Http\Controllers\Controller;
use App\Services\Api\Location\TownService;
use App\Services\Api\Location\CountryService;
use Illuminate\Http\Request;
use App\Http\Requests\TownRequest;
use Redirect;

class EditTownController extends Controller
{

     public function edit($id){

         $town = (new TownService)->getTown($id);
         //dd($town);

         if($town){

            if($town->status() == 200){
                
                $town = json_decode((string) $town->getBody(), true)['data'];
                //dd($town);
                //Fetching all countries
                $countries = (new CountryService())->getCountries();
                if($countries)
                    return view('backend.towns.edit', compact('town','countries'));
                else
                    return view('error');

            }
            elseif($town->status() == 404){
                return view('error');
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite"]);
         }

        
    }

    public function update(TownRequest $request){
    
         $validatedData=$request->validated();
         $town['id'] = $request->id;
         $town['town_name'] = $request->town_name;
         $town['code'] = $request->code;
         $town['country_id'] = $request->country_id;

         $town = (new TownService)->update($town);
         //dd($town);

         if($town){

            if($town->status() == 200){
                return Redirect::back()->with('success',"Ville mise à jour");

            }
            elseif($town->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $town->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite lors de la mise à jour"]);
         }
    }
}
