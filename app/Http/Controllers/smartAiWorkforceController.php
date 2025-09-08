<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Page;
use App\Models\ServiceFeaturesSection;

class smartAiWorkforceController extends Controller
{
    public function smartAiWorkforce($serviceSlug)
    {
        // Fetch the Smart AI Workforce service with all its related sections
        $service = Service::where('slug', $serviceSlug)
            ->with([
                'heroSection',
                'featuresSections.features',
                'aboutSection',
                'agentSupportSection',
                'proactiveSection',
                'performanceStat',
                'vidhiraSection',
                'aiEngagementSection',
                'businessInteractionSection',
                'statisticalHighlight',
            ])
            ->first();
            $seo = Page::where('slug', $serviceSlug)->first();

        if (!$service) {
            return redirect('/');
        }

        return view('pages.smartAiWorkforce', compact('service', 'serviceSlug','seo'));
        
    }
}
