<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrpOfficer extends Model
{
    //
    protected $fillable = [
        'qrp_id', 'profile_id', 'staff_no', 'officer_name',
        'unit', 'unit_office', 'division', 'designation',
        'mode', 'email', 'contact',
        'meeting_from', 'meeting_to', 'country', 'city',
    ];

    public function qrp(): BelongsTo
    {
        return $this->belongsTo(Qrp::class);
    }
}
