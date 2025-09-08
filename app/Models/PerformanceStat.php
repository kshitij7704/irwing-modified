<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerformanceStat extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'stat_number',
        'stat_title',
        'stat_description',
    ];

    protected $casts = [
        'stats' => 'array',
    ];
}
