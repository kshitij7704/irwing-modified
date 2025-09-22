<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ITUSectorGroup extends Model
{
    //
    protected $table = 'itu_sector_groups'; 
    protected $fillable = ['sector_id', 'name', 'description'];

    public function sector()
    {
        return $this->belongsTo(ITUSector::class);  // A group belongs to one sector
    }
}
