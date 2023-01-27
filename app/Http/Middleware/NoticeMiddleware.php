<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NoticeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        echo "<h4>Result for the session Spring 2022 has been published</h4>";
        return $next($request);
    }
}
