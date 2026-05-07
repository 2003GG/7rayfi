<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role_id==2) {
            return redirect(route('post.index'))->with('error', 'Access denied.');
        }

        return $next($request); // Pass to next middleware/handler
    }
}
