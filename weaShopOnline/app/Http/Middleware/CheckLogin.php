<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
        $roleAdmin = User::find(auth()->guard('admin')->id())->roles()->select('roles.name')->pluck('name')->toArray();
        if(Auth::guard('admin')->check()){
            if(count($roleAdmin) > 0 && $roleAdmin[0] != 'ROLE_CUSTOMER'){
                return $next($request);
            }else{
                return abort(401);
            }
        }else{
            return redirect('admin/login');
        }
    }
}