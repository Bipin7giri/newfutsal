<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class sportCenter
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
        return $request->user()->currentTeam->type=="sport_center" ? $next($request) : abort(404);
    }
}
