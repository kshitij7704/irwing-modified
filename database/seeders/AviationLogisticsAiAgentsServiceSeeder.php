<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class AviationLogisticsAiAgentsServiceSeeder extends Seeder
{
    public function run()
    {
        // Create or update service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agents-aviation-logistics'],
            ['title' => 'AI Agents for Aviation & Logistics']
        );

        // Update hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'The Future of Smart Aviation & Logistics Assistance',
                'description' => 'Revolutionizing airline and logistics operations with AI-powered virtual assistants that enhance efficiency, streamline processes, and provide 24/7 customer support—anytime, anywhere.',
                'image' => 'assets/img/Solution/Industry/ai-agents-aviation-logistics/1.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Remove existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();

        // Section 2: What is AI LifeBOT?
        $section2 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'What is AI LifeBOT?',
            'description' => 'AI LifeBOT is a next-gen AI assistant designed to optimize customer interactions, support airline and logistics staff, and automate critical operational tasks. From managing flight inquiries to tracking shipments, AI LifeBOT ensures seamless, 24/7 support across chat, voice, and digital platforms.'
        ]);

        // Section 3: 24/7 AI-Powered Customer & Operational Support
        $section3 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => '24/7 AI-Powered Customer & Operational Support',
            'description' => 'Provide instant assistance via chat, voice, and digital touchpoints, ensuring passengers and logistics customers receive real-time updates and accurate information.'
        ]);

        // Section 4: Automated Key Services
        $section4 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Automated Key Services',
            'description' => 'AI-powered solutions for comprehensive aviation and logistics support'
        ]);

        $features4 = [
            [
                'icon' => 'fas fa-plane',
                'title' => 'Flight & Cargo Tracking',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-ticket-alt',
                'title' => 'Booking & Reservation Assistance',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-suitcase',
                'title' => 'Baggage Handling & Lost Item Assistance',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-users-cog',
                'title' => 'Crew & Fleet Management',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-file-contract',
                'title' => 'Customs & Compliance Guidance',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-exclamation-triangle',
                'title' => 'Emergency Alerts & Disruption Management',
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
            'description' => 'Advanced AI solutions designed specifically for aviation and logistics'
        ]);

        $features5 = [
            [
                'icon' => 'fas fa-brain',
                'title' => 'Pretrained with Aviation & Logistics Intelligence',
                'description' => 'Understands airline operations, freight logistics, and customer service nuances to provide accurate, human-like responses.'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'AI-Powered Compliance & Security',
                'description' => 'Ensures adherence to aviation and logistics regulations, enhancing data security and fraud prevention.'
            ],
            [
                'icon' => 'fas fa-people-carry',
                'title' => 'AI That Works Alongside Your Team',
                'description' => 'Automates routine inquiries and operational tasks, reducing workload and enhancing workforce productivity.'
            ],
            [
                'icon' => 'fas fa-globe-americas',
                'title' => 'Multilingual & Omnichannel Support',
                'description' => 'AI LifeBOT communicates in over 100 languages and integrates seamlessly with airline reservation systems, cargo management platforms, and logistics CRMs.'
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
            'heading' => 'Revolutionize Aviation & Logistics Operations with AI LifeBOT',
            'description' => 'Transform your operations with AI-powered solutions'
        ]);

        $features6 = [
            [
                'icon' => 'fas fa-smile',
                'title' => 'Improve customer satisfaction',
                'description' => 'with faster, more personalized support'
            ],
            [
                'icon' => 'fas fa-money-bill-wave',
                'title' => 'Reduce operational costs',
                'description' => 'by automating routine processes and optimizing resources'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Enhance efficiency',
                'description' => 'by providing real-time tracking, compliance assistance, and disruption management'
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
                'title' => 'Transforming Aviation & Logistics with AI LifeBOT',
                'subtitle' => 'Measurable results that transform aviation and logistics operations',
                'stats' => json_encode([
                    [
                        'stat_number' => '80%',
                        'stat_title' => 'Customer Inquiries Handled',
                        'stat_description' => 'of customer inquiries handled by AI Agents'
                    ],
                    [
                        'stat_number' => '60%',
                        'stat_title' => 'Operational Delays Reduced',
                        'stat_description' => 'reduction in operational delays with AI automation'
                    ],
                    [
                        'stat_number' => '90%',
                        'stat_title' => 'Tracking Accuracy',
                        'stat_description' => 'accuracy in real-time tracking and updates'
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
            'image' => 'assets/img/Solution/Industry/ai-agents-aviation-logistics/cta.jpg'
        ]);
    }
}
