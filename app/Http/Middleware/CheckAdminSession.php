<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminSession
{

    public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('admin_id')) {
            // user value cannot be found in session
            return redirect('/admin-login');
        }

        return $next($request);
    }

}