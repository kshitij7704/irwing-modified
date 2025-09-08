<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerStoryController extends Controller
{
    public function customerSuccessStories()
    {
        return view('pages.customerSuccessStories'); // This will look for resources/views/newpage.blade.php
    }
}
