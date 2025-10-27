<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermsOfUse extends Model
{
    protected $fillable = ['title', 'content', 'status'];
}
