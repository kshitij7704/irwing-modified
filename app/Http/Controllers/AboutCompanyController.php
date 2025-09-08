<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutCompanyController extends Controller
{
    public function aboutCompany()
    {
        return view('pages.aboutCompany');
    }
}