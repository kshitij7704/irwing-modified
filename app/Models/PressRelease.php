<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PressRelease extends Model
{
    //

    protected $fillable = [
        'title',
        'url',
        'type',
        'description',
        'date',
        'pdf',
        'status',
    ];
}
