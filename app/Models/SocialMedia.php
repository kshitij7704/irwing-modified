<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    //

    protected $fillable = [
        'platform',
        'title',
        'description',
        'url',
        'image',
        'status',
    ];
}
