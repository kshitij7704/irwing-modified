<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aiAgentforcontactcenterController extends Controller
{
    public function aiAgentforcontactcenter()
    {
        return view('pages.aiAgentforcontactcenter'); // This will look for resources/views/newpage.blade.php
    }
}
