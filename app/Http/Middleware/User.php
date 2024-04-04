<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\Api\CurrentUserService;
use Symfony\Component\HttpFoundation\Response;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentUser=(new CurrentUserService())->currentUser();
        $role_id=$currentUser->role_id ?? null;
        if($role_id !==2 && $role_id!==1 && $role_id!==3){
            return to_route('login');
        }else{
            return $next($request);
        }
    }
}
