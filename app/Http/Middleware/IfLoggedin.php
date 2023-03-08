<?php

namespace App\Http\Middleware;

use Session;
use RealRashid\SweetAlert\Facades\Alert;
use Closure;
use Illuminate\Http\Request;

class IfLoggedin
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
        if(Session::has('loginId') && (url('login') == $request->url())) {
            Alert::error('Error', 'You are already logged in');
            return back();
        }
        return $next($request);
    }
}
