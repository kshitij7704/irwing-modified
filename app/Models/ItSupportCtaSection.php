<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItSupportCtaSection extends Model
{
    protected $fillable = [
        'heading',
        'description',
        'cta_text',
        'cta_link',
        'background_image'
    ];
} 