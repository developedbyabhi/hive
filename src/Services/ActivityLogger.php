<?php

namespace App\Services;

use App\Models\ActivityLog;
use Illuminate\Support\Facades\Request;

class ActivityLogger
{
    public function logActivity($action, $data = [])
    {
        $log = new ActivityLog();
        $log->user_id = auth()->id();
        $log->action = $action;
        $log->data = $data;
        $log->ip_address = config('user_activity.log_user_ip') ? Request::ip() : null;
        $log->save();
    }

    public function logCustomEvent($event, $data = [])
    {
        $this->logActivity($event, $data);
    }
}
