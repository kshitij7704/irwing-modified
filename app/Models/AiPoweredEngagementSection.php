<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AiPoweredEngagementSection extends Model
{
    protected $fillable = [
        'service_id',
        'title',
        'subtitle',
        'features', // Array of feature items (icon, title, description)
    ];

    protected $casts = [
        'features' => 'array',
    ];
}
