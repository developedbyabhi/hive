<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = ['user_id', 'action', 'data', 'ip_address'];

    protected $casts = [
        'data' => 'array', // Store custom data as array
    ];
}
