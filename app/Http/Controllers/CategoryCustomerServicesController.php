<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryCustomerServicesController extends Controller
{
    public function aiAgentForCustomerServices()
    {
        return view('pages.aiAgentForCustomerServices'); // This will look for resources/views/newpage.blade.php
    }
}

