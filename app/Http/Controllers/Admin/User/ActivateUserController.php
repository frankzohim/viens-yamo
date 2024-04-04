<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Services\Api\Admin\AccountActivateService;
use Illuminate\Http\Request;

class ActivateUserController extends Controller
{
    public function activate($id){
        $activateAccount=(new AccountActivateService())->activate($id);

        return redirect()->back()->with('success',$activateAccount->message);
    }
}
