<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSession_MasterController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        $request->authenticate_master();

        $request->session()->regenerate();

        $user = Auth::user();
        if ($user->admin) {
            return redirect()->intended(RouteServiceProvider::admin_dashboard);
        }
        else if ($user->super_user) {
            if($user->chanels_control){
                return redirect()->intended(RouteServiceProvider::admin_chanels);
            }
            else if($user->support_control){
                return redirect()->intended(RouteServiceProvider::admin_rapports);
            }
            else if($user->comments_control){
                return redirect()->intended(RouteServiceProvider::admin_comments);
            }
            else if($user->videos_control){
                return redirect()->intended(RouteServiceProvider::admin_videos);
            }
            else{
                return redirect()->intended(RouteServiceProvider::admin_dashboard);
            }
        }

        else{
            return redirect()->intended(RouteServiceProvider::HOME_master);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $request->session()->forget('selected_channel_id');
        $request->session()->forget('_previous.url');

        return redirect('/');
    }
}
