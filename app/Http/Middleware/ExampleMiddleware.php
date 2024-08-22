<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExampleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Example logic: Check if the user is an admin
        if ($request->user() && $request->user()->role !== 'admin') {
            // Redirect to home if the user is not an admin
            $request->session()->flash('user', 'Welcome Guest');
        } else {
            $request->session()->flash('user', 'Welcome Admin');
        }

        return $next($request);
    }
}
