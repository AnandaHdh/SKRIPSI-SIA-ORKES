<?php

namespace App\Http\Middleware;

use Closure;

class MemberAuthenticate
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
        if (!auth()->guard('member')->check()) {
            //MAKA REDIRECT KE HALAMAN LOGIN
            return redirect(route('admin.login'));
        }
        return $next($request);
    }
}
