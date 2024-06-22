<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $email): Response
    {

    // var_dump(Auth::user());
    print_r(Auth::user());
    print_r(Auth::user()->email);

        if (Auth::check() && Auth::user()->email == $email) {

            return $next($request);
        }
        return redirect()->route('login')->with(['errors' => ['error' => 'Unauthorized access']]);
    }
    
}