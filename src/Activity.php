<?php

namespace App;

use App\Services\ActivityLogger;

class Activity
{
    public static function log($action, $data = [])
    {
        $logger = app(ActivityLogger::class);
        $logger->logActivity($action, $data);
    }

    public static function logCustom($event, $data = [])
    {
        $logger = app(ActivityLogger::class);
        $logger->logCustomEvent($event, $data);
    }
}
