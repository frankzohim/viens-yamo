<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\ReviewService;
use Illuminate\Http\Request;

class ReviewUserController extends Controller
{
    public function review($announceId,Request $request){
        $reviewResponse=(new ReviewService())->review($announceId,$request);
        return back();
    }
}
