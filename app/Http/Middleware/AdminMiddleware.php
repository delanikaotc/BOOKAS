<?php


namespace App\Http\Middleware;


use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->session()->get('id') && ($request->session()->get('role_id') == 1)){
            return $next($request);
        } else {
            return redirect('/masuk');
        }
    }
}
