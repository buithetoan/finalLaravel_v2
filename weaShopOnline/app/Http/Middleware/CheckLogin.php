<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Providers\RouteServiceProvider;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard('admin')->check()){
            if(Auth::guard('admin')->user()->level != 3){
                return $next($request);
            }else{
                return abort(401); 
            }
        }else{  
            return redirect('admin/login');
        }
    }
}
