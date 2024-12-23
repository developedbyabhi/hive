<?php

namespace App\Exports;

use App\Models\ActivityLog;
use Maatwebsite\Excel\Concerns\FromCollection;

class ActivityExport implements FromCollection
{
    public function collection()
    {
        return ActivityLog::all();
    }
}
