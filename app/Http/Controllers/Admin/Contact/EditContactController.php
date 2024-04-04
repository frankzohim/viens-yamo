<?php

namespace App\Http\Controllers\Admin\Contact;
use App\Http\Controllers\Controller;
use App\Services\Api\Messages\ContactService;
use App\Services\Api\Location\TownService;
use Illuminate\Http\Request;
use App\Http\Requests\ContactUpdateRequest;
use Redirect;

class EditContactController extends Controller
{

     public function edit($id){

         $contact = (new ContactService)->getContact($id);
         //dd($contact);

         if($contact){

            if($contact->status() == 200){
                
                $contact = json_decode((string) $contact->getBody(), true)['data'];
                //dd($contact);
                return view('backend.contacts.edit', compact('contact'));

            }
            elseif($contact->status() == 404){
                return view('error');
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite"]);
         }

        
    }

    public function update(ContactUpdateRequest $request){
    
         $validatedData=$request->validated();
         $contact['id'] = $request->id;
         $contact['status'] = $request->statut;


         $contact = (new ContactService)->update($contact);
         //dd($Contact);

         if($contact){

            if($contact->status() == 200){
                return Redirect::back()->with('success',"Statut mis à jour");

            }
            elseif($contact->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $contact->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite lors de la mise à jour"]);
         }
    }
}
