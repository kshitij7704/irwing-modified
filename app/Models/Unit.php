<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    protected $fillable = ['name'];

    public function unitOffices(): HasMany
    {
        return $this->hasMany(UnitOffice::class);
    }
}
