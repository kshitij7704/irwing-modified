<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceHeroSection extends Model
{
    protected $fillable = [
        'service_id', 
        'heading', 
        'subheading', 
        'description', 
        'image', 
        'features', 
        'cta'
    ];

    protected $casts = [
        'features' => 'array',
    ];

    // Accessor to ensure features is always an array
    public function getFeaturesAttribute($value)
    {
        if (is_string($value)) {
            $decoded = json_decode($value, true);
            return json_last_error() === JSON_ERROR_NONE ? $decoded : [];
        }
        return is_array($value) ? $value : [];
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
