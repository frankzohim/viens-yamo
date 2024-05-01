<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Services\ContactService;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Redirect;

class ContactController extends Controller
{
    public function create(){
        return view('contact');
    }

     public function store(ContactRequest $request){

        
         $validatedData=$request->validated();
         $contact['name'] = $request->name;
         $contact['phone'] = $request->phone;
         $contact['subject'] = $request->subject;
         $contact['message'] = $request->message;



         $contact = (new ContactService)->create($contact);
        
         if($contact){

            if($contact->status() == 201){

                $contact =  (json_decode((string) $contact->getBody(), true))['data'];
                //dd($contact);
                //Send mail here
                // Mail::to('delanofofe@gmail.com')
                // ->send(new Contact($contact));

                Mail::to('temerprodesign@yahoo.fr')
                ->send(new Contact($contact));
                return Redirect::back()->with('success',"Votre message a été reçu avec succès");


            }
            elseif($contact->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $contact->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "Une erreur s'est produite lors de la création"]);
         }
    }
}
