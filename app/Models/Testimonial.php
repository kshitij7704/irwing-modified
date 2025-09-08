<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'service_id',
        'stat_number',
        'stat_label',
        'testimonial'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
} 