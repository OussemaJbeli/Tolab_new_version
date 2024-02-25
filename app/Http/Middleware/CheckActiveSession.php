<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckActiveSession
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        
        // Check if user is logged in and if the session IDs don't match
        if ($user && $user->session_id !== Session::getId()) {
            Auth::logout(); // Invalidate the current session
            
            // Optionally, redirect the user with a message
            return redirect('/attempte_share')->with('message', 'You have been logged out because your account was accessed from another location.');
        }

        return $next($request);
    }
}
