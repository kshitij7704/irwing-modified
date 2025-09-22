<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ITUSector extends Model
{
    //

    protected $table = 'itu_sectors'; 
    protected $fillable = ['agency_id', 'name', 'description'];

    public function agency()
    {
        return $this->belongsTo(Agency::class);  // A sector belongs to one agency
    }

    public function groups()
    {
        return $this->hasMany(ITUSectorGroup::class);  // A sector has many groups
    }
}
