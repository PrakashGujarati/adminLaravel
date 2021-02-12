<?php

namespace App\Http\Middleware;

use Closure;

class TestingMiddleware
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
        if($request->age>20)
        {
            return $next($request);
        }
        else
        {
            echo "this site only accessible bye adult above 20";
            return $next($request);
        }        
    }
}
