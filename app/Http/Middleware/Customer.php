<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Services\Api\CurrentUserService;
use Symfony\Component\HttpFoundation\Response;

class Customer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $currentUser=Session::get('currentUser');
        $role=$currentUser->role_id ?? null;
        if(empty($currentUser)){
            //dd($currentUser);
            return to_route("login");
        }else if($role!==3){
            return redirect()->back();
        }
        return $next($request);

    }
}
