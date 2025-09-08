<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class PublicServicesAiAgentsSeeder extends Seeder
{
    public function run()
    {
        // Create or update service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agents-public-services'],
            ['title' => 'AI Agents for Public Services & Utilities']
        );

        // Update hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'The Future of Smart Public Services & Utilities',
                'description' => 'Revolutionizing citizen engagement with AI-powered virtual assistants that provide instant, efficient, and secure support—anytime, anywhere.',
                'image' => 'assets/img/Solution/Industry/ai-agents-public-services/1.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Remove existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();

        

        // Section 2: What is AI LifeBOT?
        $section2 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'What is AI LifeBOT?',
            'description' => 'AI LifeBOT is an advanced AI assistant designed to enhance citizen services, support government agencies, and automate essential public service operations. From handling inquiries to managing service requests, AI LifeBOT ensures 24/7 omnichannel support across chat, voice, and digital platforms.'
        ]);

        // Section 3: 24/7 AI-Powered Citizen Support
        $section3 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => '24/7 AI-Powered Citizen Support',
            'description' => 'Ensure seamless access to information, services, and assistance via chat, voice, and digital touchpoints.'
        ]);

        // Section 4: Automated Key Public Service Functions
        $section4 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Automated Key Public Service Functions',
            'description' => 'AI-powered solutions for comprehensive citizen services'
        ]);

        $features4 = [
            [
                'icon' => 'fas fa-file-invoice-dollar',
                'title' => 'Bill Payments & Account Assistance',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-headset',
                'title' => 'Service Requests & Complaints',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-calendar-check',
                'title' => 'Appointment Scheduling',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-exclamation-circle',
                'title' => 'Emergency Assistance & Alerts',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-file-alt',
                'title' => 'Permit & Licensing Assistance',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-language',
                'title' => 'Multi-Language & Accessibility Support',
                'description' => ''
            ]
        ];

        foreach ($features4 as $feature) {
            ServiceFeature::create([
                'features_section_id' => $section4->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Section 5: Why Choose AI LifeBOT
        $section5 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Why Choose AI LifeBOT?',
            'description' => 'Advanced AI solutions designed specifically for public services'
        ]);

        $features5 = [
            [
                'icon' => 'fas fa-brain',
                'title' => 'Pretrained with Public Sector Intelligence',
                'description' => 'Understands government policies, service workflows, and citizen needs for precise and effective assistance.'
            ],
            [
                'icon' => 'fas fa-plug',
                'title' => 'Seamless Integration with Public Service Systems',
                'description' => 'Connects effortlessly with CRM, ERP, and legacy systems used by municipalities and utility providers.'
            ],
            [
                'icon' => 'fas fa-people-carry',
                'title' => 'AI That Works Alongside Human Teams',
                'description' => 'Automates routine interactions, freeing up government employees for higher-value tasks.'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Compliant & Secure AI',
                'description' => 'Ensures full compliance with government data security and privacy regulations, safeguarding citizen information.'
            ]
        ];

        foreach ($features5 as $feature) {
            ServiceFeature::create([
                'features_section_id' => $section5->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Section 6: Benefits
        $section6 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Revolutionizing Citizen Engagement with AI LifeBOT',
            'description' => 'Transform public services with AI-powered solutions'
        ]);

        $features6 = [
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Improve service efficiency',
                'description' => 'with AI-driven automation'
            ],
            [
                'icon' => 'fas fa-money-bill-wave',
                'title' => 'Reduce operational costs',
                'description' => 'by optimizing workforce and resources'
            ],
            [
                'icon' => 'fas fa-user-check',
                'title' => 'Enhance citizen satisfaction',
                'description' => 'with real-time, 24/7 AI support'
            ]
        ];

        foreach ($features6 as $feature) {
            ServiceFeature::create([
                'features_section_id' => $section6->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Update performance stats
        PerformanceStat::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'Transforming Public Services & Utilities with AI LifeBOT',
                'subtitle' => 'Measurable results that transform citizen services',
                'stats' => json_encode([
                    [
                        'stat_number' => '80%',
                        'stat_title' => 'Routine Inquiries Resolved',
                        'stat_description' => 'reducing the workload on human agents'
                    ],
                    [
                        'stat_number' => '60%',
                        'stat_title' => 'Faster Service Processing',
                        'stat_description' => 'improving efficiency in citizen interactions'
                    ],
                    [
                        'stat_number' => '90%',
                        'stat_title' => 'Citizen Satisfaction',
                        'stat_description' => 'AI-driven support enhances trust, accessibility, and response times'
                    ]
                ])
            ]
        );

        // Final CTA Section
        ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Get Started with AI LifeBOT Today',
            'description' => 'Explore AI LifeBOT',
            'cta' => 'Request a Demo',
            'image' => 'assets/img/Solution/Industry/ai-agents-public-services/cta.jpg'
        ]);
    }
}
