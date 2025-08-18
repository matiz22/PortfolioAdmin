<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocalMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->header('Accept-Language', config('locales.fallback', 'en'));

        $supportedLocales = config('locales.default', ['en']);

        if (in_array($locale, $supportedLocales)) {
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
