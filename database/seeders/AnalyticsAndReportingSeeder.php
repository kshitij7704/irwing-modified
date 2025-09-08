<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\ServiceAgentSupportSection;

class AnalyticsAndReportingSeeder extends Seeder
{
    public function run()
    {
        // Create or update the service
        $service = Service::updateOrCreate(
            ['slug' => 'analytics-and-reporting'],
            ['title' => 'Analytics and Reporting']
        );

        // Clean up existing data
        ServiceHeroSection::where('service_id', $service->id)->delete();

        $featureSections = ServiceFeaturesSection::where('service_id', $service->id)->get();
        foreach ($featureSections as $section) {
            ServiceFeature::where('features_section_id', $section->id)->delete();
            $section->delete();
        }

        ServiceAgentSupportSection::where('service_id', $service->id)->delete();

        // 1. Hero Section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Analytics and Reporting',
                'subheading' => 'Gain Actionable Insights with Advanced AI Analytics',
                'description' => 'AI-powered analytics provide real-time insights into customer interactions, agent performance, and service efficiency, enabling data-driven decision-making.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/analytics-and-reporting/1.jpg',
                'cta' => 'GET A DEMO',
                'features' => json_encode([]),
            ]
        );

        // 2. Features Section
        $featuresSection = ServiceFeaturesSection::updateOrCreate(
            ['service_id' => $service->id, 'heading' => 'Optimize Performance with AI-Driven Reporting'],
            [
                'subheading' => 'Uncover key trends and opportunities with comprehensive analytics dashboards.',
                'description' => '',
                'image' => 'assets/img/analytics-features.jpg',
            ]
        );

        $analyticsFeatures = [
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Real-Time Insights',
                'description' => 'Monitor live interactions to assess agent and AI performance. Gain instant visibility into customer behavior and service trends.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/analytics-and-reporting/2.jpg'
            ],
            [
                'icon' => 'fas fa-chart-bar',
                'title' => 'Customizable Dashboards',
                'description' => 'Tailor reports to track key performance indicators. Export and integrate analytics with enterprise reporting tools.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/analytics-and-reporting/3.jpg'
            ],
            [
                'icon' => 'fas fa-brain',
                'title' => 'Predictive Intelligence',
                'description' => 'Uses AI to forecast demand and optimize resource allocation. Enhances operational efficiency with proactive decision-making.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/analytics-and-reporting/4.jpg'
            ],
        ];

        foreach ($analyticsFeatures as $feature) {
            ServiceFeature::updateOrCreate(
                [
                    'features_section_id' => $featuresSection->id,
                    'title' => $feature['title']
                ],
                [
                    'icon' => $feature['icon'],
                    'description' => $feature['description'],
                    'image' => $feature['image']
                ]
            );
        }

        // 3. CTA Section
        ServiceAgentSupportSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'image' => 'assets/img/Platform/PlatfprmCapebilite/analytics-and-reporting/5.jpg',
                'subheading' => '',
                'heading' => 'Transform Data into Actionable Intelligence',
                'description' => 'Discover how AI-powered Analytics and Reporting can optimize your business performance.',
                'features' => json_encode([])
            ]
        );
    }
}
