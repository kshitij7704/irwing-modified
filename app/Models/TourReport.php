<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourReport extends Model
{
    //
    protected $fillable = [
        'tour_id', 'user_id',
        'staff_number', 'meeting_name', 'purpose', 'service', 'name_designation',
        'grade', 'level', 'mobile_no', 'email', 'equivalent_rank',
        'country', 'city', 'from_date', 'to_date',
        'key_contributions', 'follow_up_action_points', 'tour_report_pdf', 'presentation',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
