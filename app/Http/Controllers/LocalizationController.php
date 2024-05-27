<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function index($locale)
    {   
        //dd('Hello');
        App::setLocale($locale);
        //dd(App::getLocale());
        //store the locale in session so that the middleware can register it
        Session::put('language', $locale);
        Session::save();
        //dd(session()->get('language'));
        return redirect()->back();
    }
}
