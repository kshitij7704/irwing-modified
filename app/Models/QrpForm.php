<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrpForm extends Model
{
    //


    protected $fillable = [
        'meeting_id',
        'agency',
        'itu_sector',
        'sector_group',
        'agency_other',
        'itu_type',
        'meeting_name',
        'meeting_from',
        'meeting_to',
        'country',
        'city',
        'invitation_letter',
        'similar_meeting',
        'previous_report',
        'mode',
        'staff_no',
        'officer_name',
        'unit',
        'division',
        'designation',
        'email',
        'contact',
        'justification',
        'justification_file',
        'expected_outcome',
        'expected_file',
        'status',
        'nodal_status'
    ];
    public function officers()
    {
        return $this->hasMany(QrpOfficer::class, 'qrp_id');
    }
    // 🔗 Relationship to Agency
    public function agencyy()
    {
        return $this->belongsTo(Agency::class, 'agency');
    }

    // 🔗 Relationship to ITU Sector
    public function ituSector()
    {
        return $this->belongsTo(ITUSector::class, 'itu_sector');
    }

    // 🔗 Relationship to ITU Sector Group
    public function sectorGroup()
    {
        return $this->belongsTo(ITUSectorGroup::class, 'sector_group');
    }
    public function countryy()
    {
        return $this->belongsTo(Country::class, 'country', 'id');
    }
}
