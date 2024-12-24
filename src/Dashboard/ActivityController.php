<?php

namespace Abhimanyu\Hive\Dashboard;

use App\Analytics;
use Abhimanyu\Hive\Models\ActivityLog;

class ActivityController extends Controller
{
    public function index()
    {
        $logs = ActivityLog::latest()->paginate(10);
        return view('activity_dashboard', compact('logs'));
    }

    public function analytics()
    {
        $analytics = new Analytics();
        $activeUsers = $analytics->getMostActiveUsers();
        $frequentActions = $analytics->getMostFrequentActions();

        return view('analytics', compact('activeUsers', 'frequentActions'));
    }
}
