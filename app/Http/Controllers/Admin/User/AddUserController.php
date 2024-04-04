<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Api\Admin\AllUserService;
use App\Services\Api\Admin\NewUserService;

class AddUserController extends Controller
{
    public function addView(){
        $roles=(new AllUserService())->roles();
        return view('backend.users.create',compact('roles'));
    }

    public function storeUser(Request $request){
        $newUser=(new NewUserService())->newUser($request);
        $codeSave=$newUser->status ?? null;
        $phoneNumberError=$newUser->phone_number ?? null;
        if($codeSave==200){
            return to_route('users')->with('success',"nouvel utilisateur créer avec success");
        }else if($phoneNumberError){

            return back()->with('error',$phoneNumberError[0]);
        }

    }
}
