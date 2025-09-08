<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CtaSection extends Model
{
    protected $fillable = [
        'service_id',
        'heading',
        'description',
        'cta_text',
        'cta_link',
        'background_image'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
} 