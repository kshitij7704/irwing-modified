<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeetingCalendar extends Model
{
    protected $fillable = ['title', 'date', 'color'];
}
