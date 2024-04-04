<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\User\UpdateUserService;
use App\Services\Api\Location\TownService;

class ProfilController extends Controller
{
    public function profile(){
        $towns = (new TownService())->getTowns();
        return view('backend.profile.update',compact('towns'));
    }

    public function updateProfile(Request $request){
        $user = (new UpdateUserService)->update($request);
        return to_route('admin.dashboard');
    }
}
