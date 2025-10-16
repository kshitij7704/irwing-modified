<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brochure extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'published_at',
        'file_path',
    ];

    protected $casts = [
        'published_at' => 'date', // or 'datetime' if you store time too
    ];
}
