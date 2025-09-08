<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItSupportHeroSection extends Model
{
    protected $fillable = [
        'heading',
        'description',
        'image',
        'cta_text',
        'cta_link'
    ];
} 