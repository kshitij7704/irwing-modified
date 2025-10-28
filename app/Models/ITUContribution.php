<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ITUContribution extends Model
{
    use HasFactory;
    protected $table = 'itu_contributions'; 
    protected $fillable = [
        'study_group',
        'question',
        'work_item',
        'contribution_type',
        'contribution_brief',
        'date_of_contribution',
        'officers',
        'status',
        'type',
    ];
}
