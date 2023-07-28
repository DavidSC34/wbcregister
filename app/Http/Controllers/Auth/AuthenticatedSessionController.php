<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        //**LOgic for redirect users ( admin/staff dashboards) */
        $request->session()->regenerate();
        if ($request->user()->role ==='admin') {
            return redirect()->intended('/admin/dashboard');
        }elseif($request->user()->role ==='staff'){
            return redirect()->intended('/staff/dashboard');
        }
            /**normal user(assitant) */
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $redirectUrl ='/login';
        if($request->user()->role ==='admin'){
            $redirectUrl ='/admin/login';
        }
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // return redirect('/');
        // return redirect()->intended('/login');
        return redirect()->intended($redirectUrl);
    }
}
