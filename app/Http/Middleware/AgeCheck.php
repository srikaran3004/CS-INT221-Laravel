<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->age && $request->age < 18) {
            return response()->json(['message' => 'Access denied. You must be at least 18 years old.'], 403);
        }

        return $next($request);
    }
}
