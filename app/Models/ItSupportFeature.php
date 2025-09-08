<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItSupportFeature extends Model
{
    protected $fillable = [
        'icon',
        'title',
        'description',
        'cta_text',
        'cta_link'
    ];
} 