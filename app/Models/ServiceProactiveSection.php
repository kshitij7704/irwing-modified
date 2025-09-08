<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProactiveSection extends Model
{
    protected $fillable = [
        'service_id',
        'image',
        'subheading',
        'heading',
        'description',
        'features',
    ];

    protected $casts = [
        'features' => 'array',
    ];
}


