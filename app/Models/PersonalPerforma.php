<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalPerforma extends Model
{
    //
    protected $fillable = [
    'title','service','service_other','staff_no','user_id','designation','posting','dob',
    'visits','property_return_date','pay_level','mobile','email','aadhaar','pan',
    'tour_report','justification_file','event_brief','justification','expected_outcomes',
    'is_itu','itu_current_roles','itu_questions_rapporteur','itu_questions_associate',
    'itu_editor_items','itu_previous_roles','itu_work_items','itu_proposed','itu_consented',
    'itu_in_progress','itu_recommendations','itu_reports','itu_online_meetings','itu_physical_meetings',
    'event_name','event_location','event_date_from','event_date_to','status'
];


protected $casts = [
    'visits' => 'array',
    'event_date_from' => 'date',
    'event_date_to' => 'date',
];
}
