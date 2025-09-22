<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    //
    protected $fillable = ['name', 'unit_office_id'];

    public function unitOffice(): BelongsTo
    {
        return $this->belongsTo(UnitOffice::class);
    }

    public function designations(): HasMany
    {
        return $this->hasMany(Designation::class);
    }
}
