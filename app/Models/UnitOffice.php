<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitOffice extends Model
{
    //
    protected $fillable = ['name', 'unit_id'];

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class);
    }
}
