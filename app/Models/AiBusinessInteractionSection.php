<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AiBusinessInteractionSection extends Model
{
    protected $fillable = [
        'service_id',
        'title',
        'features',
    ];

    protected $casts = [
        'features' => 'array', // Laravel will handle JSON <-> array conversion
    ];
}
