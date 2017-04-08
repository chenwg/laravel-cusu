<?php

namespace App\Http\Middleware;

use Closure;

class CheckInt
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
        if(!is_numeric($request->id)){
            return redirect('/');
        }
        return $next($request);
    }
}
