<?php

namespace App\Http\Controllers\Admin\Escort;
use App\Services\Api\Admin\AllUserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListEscortController extends Controller
{
    
    public function listEscort(){

        $escorts=(new AllUserService())->escortList();
        if($escorts){
             $escorts = $escorts->data;
             return view('backend.escorts.list',compact('escorts'));
        }
        else
            return view('error');
       
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
