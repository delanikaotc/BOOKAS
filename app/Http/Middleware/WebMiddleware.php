<?php


namespace App\Http\Middleware;


use Closure;

class WebMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->session()->get('id') && session("role_id") == 2){
            return $next($request);
        } else {
            return redirect('/masuk');
        }
    }
}
