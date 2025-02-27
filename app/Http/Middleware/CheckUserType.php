<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserType
{
    public function handle(Request $request, Closure $next, $type)
    {
        if (Auth::check() && Auth::user()->user_type == $type) {
            return $next($request);
        }

        return redirect('/unauthorized'); // Redireciona para uma página não autorizada ou como preferir
    }
}
