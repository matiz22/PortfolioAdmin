<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FrontEndApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (empty(config('app.frontend_api_key'))) {
            return $next($request);
        }

        $apiKey = $request->header('X-API-Key');

        if ($apiKey !== config('app.frontend_api_key')) {
            return response()->json([
                'error' => 'Unauthorized',
                'message' => 'Unauthorized'
            ], 401);
        }

        return $next($request);
    }
}
