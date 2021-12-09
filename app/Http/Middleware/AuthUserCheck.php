<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthUserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // $tes = $request->path();
        // dd($tes);

        if (!Session::has('LoggedUser') && ($request->path() != 'login' && $request->path() != 'register' )) {
            return redirect('login');
        }

        if (Session::has('LoggedUser') && ($request->path() == 'login' || $request->url() == 'register' )) {
            return back();
        }

        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
                                ->header('Pragma','no-cache')
                                ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}
