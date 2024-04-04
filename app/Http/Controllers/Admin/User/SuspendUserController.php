<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Services\Api\Admin\AccountSuspendService;
use Illuminate\Http\Request;

class SuspendUserController extends Controller
{
    public function ban($id){
        $accountSuspend=(new AccountSuspendService())->ban($id);

        return redirect()->back()->with('success',$accountSuspend->message);

    }
}
