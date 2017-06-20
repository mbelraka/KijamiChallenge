<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            $user_id = Auth::user()->getAuthIdentifier();
            $user = User::findOrFail($user_id);

            if($user->access_level > 0){
                return $next($request);
            }
        }

        return Redirect::to('error');
    }
}
