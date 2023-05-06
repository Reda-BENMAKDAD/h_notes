<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Prof;
use App\Models\Stagieres;

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

        $request->session()->regenerate();
        session()->start();
         // Get the authenticated user
        $user = Auth::user();

        // Check the user's role and redirect accordingly
        if ($user->hasRole('admin')) {
            return redirect()->intended('/admin');
        } else if($user->hasRole('stagiaire')  ) {
            $useracount = Stagieres::where('user_id', $user->id)->get();
            session()->put('useraccount', $useracount[0]->id);
            return redirect()->intended(RouteServiceProvider::HOME);
        }else if($user->hasRole('prof')){
            $useracount = Prof::where('user_id', $user->id)->get();
            // dd($useracount[0]->user_id, $user->id );
            // store the prof id in session
            session()->put('useraccount', $useracount[0]->id);
            return redirect()->intended(RouteServiceProvider::HOME);
        }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        session()->forget('useraccount');
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
