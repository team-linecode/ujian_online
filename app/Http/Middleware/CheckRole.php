<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    public function handle($request, Closure $next,...$roles)
    {
        if (in_array($request->user()->level, $roles)) {
            return $next($request);
        }

        return redirect('/')->with('toast-error', 'Anda tidak memiliki akses!');
    }
}
