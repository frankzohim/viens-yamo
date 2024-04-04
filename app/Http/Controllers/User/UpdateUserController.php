<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\UpdateUserService;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    public function update(Request $request){


        $user = (new UpdateUserService)->update($request);
        //dd(json_decode($user));

       return back();
    }
}
