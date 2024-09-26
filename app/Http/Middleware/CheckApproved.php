<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApproved
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $account_status): Response
    {
        if ($request->user()->account_status == $account_status) {
            return $next($request);
        }
        if (Auth::check()) {
            return back();
        }
        return redirect('approve');
    }
}
