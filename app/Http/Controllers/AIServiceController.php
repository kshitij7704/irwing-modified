<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Page;
use Illuminate\Http\Request;

class AIServiceController extends Controller
{
    public function getServiceData($serviceSlug)
    {
        // Fetch the service with all related sections
        $service = Service::where('slug', $serviceSlug)
        ->with([
            'heroSection',
            'featuresSection.features',
            'featuresSections.features',
            'aboutSection',
            'agentSupportSection',
            'proactiveSection',
            'performanceStat',
            'vidhiraSection',
            'aiEngagementSection',
            'businessInteractionSection',
            'statisticalHighlight',
            'testimonials',
            'faqs',
            'ctaSection'
        ])
        ->first();
        
        $seo = Page::where('slug', $serviceSlug)->first();


        // If not found, return 404
        if (!$service) {
            return redirect('/');
        }

        // Determine which template to use based on service slug
        $template = 'pages.reuseablepage'; // default template

        if ($serviceSlug === 'customer-success-stories'||$serviceSlug === 'technical-documentation'||$serviceSlug === 'case-studies'||$serviceSlug === 'blogs'||$serviceSlug === 'academy') {
            $template = 'pages.customerSuccessStories';
        } elseif ($serviceSlug === 'contact-us') {
            $template = 'pages.contactUs';
        } elseif ($serviceSlug === 'about-company'||$serviceSlug === 'partner-program'||$serviceSlug === 'careers') {
            $template = 'pages.aboutCompany';
        }
        elseif ($serviceSlug === 'leadership') {
            $template = 'pages.leadership';
        }
        elseif ($serviceSlug === 'it-support-automation'||$serviceSlug === 'enterprise-knowledge-management-ai'||$serviceSlug === 'it-knowledge-management-ai'||$serviceSlug === 'it-support-agentic-ai'||$serviceSlug === 'employee-onboarding-ai'||$serviceSlug === 'hr-support-agentic-ai'||$serviceSlug === 'helpdesk-insights'||$serviceSlug === 'sales-support-ai'||$serviceSlug === 'procurement-support-ai'||$serviceSlug === 'finance-ai'||$serviceSlug === 'agentic-ai-use-cases') {
            $template = 'pages.itSupportAutomation';
        }
    
        return view($template, [
            'service' => $service,
            'serviceSlug' => $serviceSlug,
            'seo' => $seo
        ]);
    }
}
