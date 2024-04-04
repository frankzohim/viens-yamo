<?php

namespace App\Http\Controllers\Admin\Quarter;
use App\Http\Controllers\Controller;
use App\Services\Api\Location\QuarterService;
use Illuminate\Http\Request;

class ListQuarterController extends Controller
{
    

     public function index(){

        $quarters = (new QuarterService)->getQuarters();
        //dd($quarters);
        return view('backend.quarters.list', compact('quarters'));
    }
}
