<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Prof;
use App\Models\Stagieres;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
            
        // }

        if (Auth::user()){

        
        $user = Auth::user();
        
        if ($user->hasRole('admin')) {
            return redirect()->intended('/admin');
        } else if($user->hasRole('stagiaire')  ) {
            $useracount = Stagieres::where('user_id', $user->id)->get();
            session()->put('useraccount', $useracount[0]->id);
            if(session()->get('useraccount')){
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }else if($user->hasRole('prof')){
            $useracount = Prof::where('user_id', $user->id)->get();
            // dd($useracount[0]->user_id, $user->id );
            // store the prof id in session
            session()->put('useraccount', $useracount[0]->id);
            if(session()->get('useraccount')){
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }

    }


        return $next($request);
    }
}
