<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceAboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'image',
        'subheading',
        'heading',
        'description',
        'features'
    ];

    protected $casts = [
        'features' => 'array'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}