<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VidhiraSection extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'background_image',
    ];

    protected $casts = [
        'features' => 'array',
    ];
}
