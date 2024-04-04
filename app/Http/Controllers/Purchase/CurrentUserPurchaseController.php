<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Api\Escort\GetEscortService;
use App\Services\Api\Purchase\CurrentPurchaseService;

class CurrentUserPurchaseController extends Controller
{
    public function currentPurchase(){

        $currentPurchase=(new CurrentPurchaseService())->currentPurchase();
        $escort = (new GetEscortService)->getEscort();
        return view('dashboard.escort.purchase.list',compact('currentPurchase','escort'));
    }
}
