<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ITUContribution extends Model
{
    protected $fillable = [
        'study_group',
        'question',
        'work_item',
        'contribution_type',
        'contribution_brief',
        'date_of_contribution',
        'officers',
        'status',
    ];
}
