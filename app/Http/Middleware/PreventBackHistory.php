<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\Api\HasTokenService;
use App\Services\Api\CurrentUserService;
use Symfony\Component\HttpFoundation\Response;

class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $hasToken=(new HasTokenService())->getToken();
        $currentUser=(new CurrentUserService())->currentUser();
        if(isset($currentUser)){
            return back();
        }else{
            return $next($request);
        }

    }
}
