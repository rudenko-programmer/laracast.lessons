<?php

namespace App\Http\Middleware;

use App\Services\Twitter;
use Closure;

class LessonsMiddleware
{

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 *
	 * @return mixed
	 */
    public function handle($request, Closure $next)
    {
	    if (app(Twitter::class)->api_key) {
	    	dd(self::class);
		    return redirect('/home');
	    }
        return $next($request);
    }
}
