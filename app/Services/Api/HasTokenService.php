<?php
namespace App\Services\Api;


use Illuminate\Support\Facades\Session;

class HasTokenService{

public function getToken(){
    $token=Session::get('tokenUser');

    return $token;
}
}
