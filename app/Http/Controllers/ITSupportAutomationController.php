<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ITSupportAutomationController extends Controller
{
    public function itSupportAutomation()
    {
        $service = Service::where('slug', 'it-support-automation')
            ->with([
                'heroSection',
                'featuresSections.features',
                'performanceStat',
                'testimonials',
                'faqs',
                'ctaSection'
            ])
            ->firstOrFail();
        
        return view('pages.itSupportAutomation', compact('service'));
    }
} 