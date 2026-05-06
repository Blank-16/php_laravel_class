<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Check if locale is in session
        if (session()->has('locale')) {
            app()->setLocale(session('locale'));
        }
        // Check if locale is in cookie
        elseif ($request->hasCookie('locale')) {
            app()->setLocale($request->cookie('locale'));
        }
        // Default to 'en'
        else {
            app()->setLocale('en');
        }

        return $next($request);
    }
}
