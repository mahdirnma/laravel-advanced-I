<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        dd($request->user());
        if (Auth::check()) {
            $user=Auth::user();
            $role=$user->role;
            $age=$user->age;
            if (($role == 1||$role ==2)&&$age>=18) {
                return $next($request);
            }else{
                return to_route('unauthorized');
            }
        }
        return to_route('login');
    }
}
