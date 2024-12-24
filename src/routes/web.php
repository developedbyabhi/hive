<?php
// src/routes/web.php
namespace Abhimanyu\Hive\Models;


use App\Http\Controllers\ActivityController;
use App\Exports\ActivityExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;


Route::get('/activity-dashboard', [ActivityController::class, 'index']);
Route::get('/activity-analytics', [ActivityController::class, 'analytics']);

// Route for exporting activity logs
Route::post('/export-logs', function () {
    return Excel::download(new ActivityExport, 'activity_logs.xlsx');
})->name('exportLogs');
