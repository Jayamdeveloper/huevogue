<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->status == 1) {
            return $next($request);
        }
        Auth::logout();
        $output = array('success'=>0,'msg'=> 'Your account is inactivated! Please contact admin');
        return redirect()->route('admin.login')->withInput()->with('error',$output);
        
    }
}
