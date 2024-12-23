<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\ActivityLogger;

class TrackUserActivity
{
    protected $activityLogger;

    public function __construct(ActivityLogger $activityLogger)
    {
        $this->activityLogger = $activityLogger;
    }

    public function handle($request, Closure $next)
    {
        $this->activityLogger->logActivity('page_visit', [
            'url' => $request->url(),
            'method' => $request->method(),
        ]);

        return $next($request);
    }
}
