<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\http\Requests\loginRequests;
use app\http\requests;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if ($guard == 'admin') {
                    return redirect(RouteServiceProvider::Admin);
                }
                else{
                    return redirect(RouteServiceProvider::Home);
                } 



                return redirect(RouteServiceProvider::HOME);
            }
        }
###########################################33


#################################
        return $next($request);
    }
}
