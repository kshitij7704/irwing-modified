<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItSupportFaq extends Model
{
    protected $fillable = [
        'question',
        'answer'
    ];
} 