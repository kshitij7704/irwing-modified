<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    //
    protected $fillable = ['name', 'division_id','status'];

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
