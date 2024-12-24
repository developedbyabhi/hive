<?php

namespace Abhimanyu\Hive\Exports;

use Abhimanyu\Hive\Models\ActivityLog;
use Maatwebsite\Excel\Concerns\FromCollection;

class ActivityExport implements FromCollection
{
    public function collection()
    {
        return ActivityLog::all();
    }
}
