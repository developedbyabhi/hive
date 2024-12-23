<?php

namespace App;

use App\Models\ActivityLog;

class Analytics
{
    public function getMostActiveUsers()
    {
        return ActivityLog::select('user_id', \DB::raw('count(*) as total'))
            ->groupBy('user_id')
            ->orderByDesc('total')
            ->get();
    }

    public function getMostFrequentActions()
    {
        return ActivityLog::select('action', \DB::raw('count(*) as total'))
            ->groupBy('action')
            ->orderByDesc('total')
            ->get();
    }
}
