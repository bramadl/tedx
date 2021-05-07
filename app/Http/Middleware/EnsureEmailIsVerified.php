<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureEmailIsVerified
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
        if (!Auth::check()) {
            return redirect('/member/login')
                    ->with('warning', 'Mohon login terlebih dahulu.');    
        }

        if (!Auth::user()->verified) {
            return redirect('/member/dashboard')
                    ->with('warning', 'Mohon konfirmasi email terlebih dahulu.');
        }
        
        return $next($request);
    }
}
