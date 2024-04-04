<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Services\Api\UrlApiService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class GiveCreditController extends Controller
{
    public function creditView($id){
        return view('backend.users.credit',compact('id'));
    }

    public function giveCredit($id,Request $request){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->post($url.'/api/v1/give/credit/'.$id,[
            'balance'=>$request->balance,
        ]);
        $data=json_decode($response);
            //return $response;
            return to_route('users')->with('success','credit added successfully');
    }
}
