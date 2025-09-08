<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AiStatisticalHighlight extends Model
{
    protected $fillable = [
        'service_id',
        'stats',
    ];

    protected $casts = [
        'stats' => 'array',
    ];
}
