<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()){
            if(Auth::user()->konto){
                return $next($request);
            }
            return redirect('user');
        }
        return redirect('login');

        if(Auth::admin()){
            if(Auth::user()->konto){
                return $next($request);
            }
            return redirect('admin');
        }
        return redirect('login');
    }
}
