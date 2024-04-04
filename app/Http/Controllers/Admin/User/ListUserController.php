<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Services\Api\Admin\AllUserService;
use Illuminate\Http\Request;

class ListUserController extends Controller
{
    public function listUser(){

        $users=(new AllUserService())->list();
        $roles=(new AllUserService())->roles();

        return view('backend.users.list',compact('users',"roles"));
    }

    public function userByRole(Request $request){
        $users=(new AllUserService())->getUserByRole($request->role_id);
        $roles=(new AllUserService())->roles();

        return view('backend.users.list',compact('users',"roles"));

    }

    public function listUserBan(){
        $users=(new AllUserService())->listUserBan();
        $roles=(new AllUserService())->roles();

        return view('backend.users.users-suspend',compact('users',"roles"));
    }
}
