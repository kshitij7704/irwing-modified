<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceFeature extends Model
{
    protected $fillable = [
        'features_section_id', 
        'icon', 
        'title', 
        'description', 
        'image'
    ];

    protected $casts = [
        // Don't cast description since it can be both string and JSON
    ];

    // Accessor to handle description field
    public function getDescriptionAttribute($value)
    {
        // Try to decode as JSON, if it fails return as string
        $decoded = json_decode($value, true);
        return json_last_error() === JSON_ERROR_NONE ? $decoded : $value;
    }

    public function featuresSection()
    {
        return $this->belongsTo(ServiceFeaturesSection::class, 'features_section_id');
    }
}
