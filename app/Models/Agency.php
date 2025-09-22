<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //

    protected $fillable = ['name', 'description'];

    public function sectors()
    {
        return $this->hasMany(ITUSector::class);  // An agency has many sectors
    }
}
