<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceFeaturesSection extends Model
{
    protected $fillable = [
        'service_id', 
        'heading', 
        'subheading', 
        'description', 
        'image', 
        'cta'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function features()
    {
        return $this->hasMany(ServiceFeature::class, 'features_section_id');
    }
}
