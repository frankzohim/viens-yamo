<?php

namespace App\Http\Controllers\Admin\Contact;
use App\Http\Controllers\Controller;
use App\Services\Api\Messages\ContactService;
use Illuminate\Http\Request;

class ListContactController extends Controller
{
    

     public function index(){

        $contacts = (new ContactService)->getContacts();
        //dd($contacts);
        return view('backend.contacts.list', compact('contacts'));
    }
}
