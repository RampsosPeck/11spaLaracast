<?php

namespace Spalaracast\Http\Middleware;

use Closure;

class Cors
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
        return $next($request)
            ->header('Access-Control-Allow-Origin','http://spalaracast.vue')
            ->header('Access-Control-Allow-Headers','X-REQUESTED-WITH');
    }
}
