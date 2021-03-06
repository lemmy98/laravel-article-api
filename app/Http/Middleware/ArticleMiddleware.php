<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ArticleMiddleware
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
        logger("I am the article middleware");
        return $next($request);
    }

    public function terminate($request, $response)
    {
        logger("I have sent a response");
    }
}
