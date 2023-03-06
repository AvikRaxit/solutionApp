<?php

namespace App\Http\Middleware;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use Closure;
use Illuminate\Http\Request;

class IfnotLoggedin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Session::has('loginId')) {
            Alert::error('Error', 'Access denied ! Please login');
            return redirect()->route('login');
        }
        return $next($request);
    }
}
