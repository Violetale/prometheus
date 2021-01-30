<?php

namespace Voletale\Prometheus\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Mediabroker\Core\Models\Admin;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->status !== Admin::STATUS_ACTIVE) {
            Auth::logout();
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
