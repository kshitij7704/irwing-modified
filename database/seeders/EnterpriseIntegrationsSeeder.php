<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\ServiceAgentSupportSection;

class EnterpriseIntegrationsSeeder extends Seeder
{
    public function run()
    {
        // Create or update the service
        $service = Service::updateOrCreate(
            ['slug' => 'enterprise-integrations'],
            ['title' => 'Enterprise Integrations']
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
                'heading' => 'Enterprise Integrations',
                'subheading' => 'Seamlessly Connect AI with Your Business Ecosystem',
                'description' => 'Enterprise Integrations enable AI agents to interact with your existing tech stack, including CRM, ERP, and other backend systems, ensuring smooth operations and enhanced automation.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/enterprise-integrations/1.jpg',
                'cta' => 'GET A DEMO',
                'features' => json_encode([]),
            ]
        );

        // 2. Features Section
        $featuresSection = ServiceFeaturesSection::updateOrCreate(
            ['service_id' => $service->id, 'heading' => 'Enhance AI Functionality with Seamless System Integrations'],
            [
                'subheading' => 'Connect AI agents with enterprise applications to drive efficiency and maximize ROI.',
                'description' => '',
                'image' => 'assets/img/integrations-features.jpg',
            ]
        );

        $integrationFeatures = [
            [
                'icon' => 'fas fa-plug',
                'title' => 'Plug & Play Integration',
                'description' => 'Prebuilt connectors for popular business applications. Supports custom API integrations with minimal development effort.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/enterprise-integrations/2.jpg'
            ],
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Automated Workflows',
                'description' => 'Streamline processes by linking AI with backend operations. Enables real-time data exchange between AI and enterprise systems.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/enterprise-integrations/3.jpg'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Enterprise-Grade Security',
                'description' => 'Ensures compliance with regulatory standards. Offers robust data encryption and access control measures.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/enterprise-integrations/4.jpg'
            ],
        ];

        foreach ($integrationFeatures as $feature) {
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
                'image' => 'assets/img/Platform/PlatfprmCapebilite/enterprise-integrations/5.jpg',
                'subheading' => '',
                'heading' => 'Ready to Integrate Enhance AI Functionality with Seamless System',
                'description' => 'Discover how Enterprise Integrations can connect your AI with your business ecosystem.',
                'features' => json_encode([])
            ]
        );
    }
}
