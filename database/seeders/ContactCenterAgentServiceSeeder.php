<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\ServiceAboutSection;
use App\Models\ServiceAgentSupportSection;
use App\Models\ServiceProactiveSection;
use App\Models\PerformanceStat;

class ContactCenterAgentServiceSeeder extends Seeder
{
    public function run()
    {
        // Create or update the service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agents-contact-center'],
            ['title' => 'AI Agents for Contact Centers']
        );

        // Create or update the hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'AI Agents for Contact Centers',
                'description' => 'Revolutionize your contact center operations with AI-powered automation that reduces wait times, optimizes workflows, and boosts agent productivity. AI Agents handle high call volumes by managing FAQs, processing customer requests, and seamlessly transferring complex queries to human agents with contextual insights.',
                'image' => 'assets/img/Solution/Category/ContactCenterAgentService.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Create or update the features section
        $featuresSection = ServiceFeaturesSection::updateOrCreate(
            ['service_id' => $service->id, 'heading' => 'How AI Agents Enhance Contact Centers'],
            ['description' => 'Whether providing real-time customer support or assisting live agents with knowledge retrieval, AI enhances efficiency while maintaining personalized interactions.']
        );

        // Features list
        $features = [
            [
                'icon' => 'fas fa-route',
                'title' => 'Intelligent Call Routing',
                'description' => 'Direct customers to the most suitable agent or AI assistant for quick resolution.'
            ],
            [
                'icon' => 'fas fa-brain',
                'title' => 'Context-Aware Interactions',
                'description' => 'AI captures and retains conversation history for personalized, efficient responses.'
            ],
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Automated Workflows',
                'description' => 'Reduce agent workload by addressing common queries in real time.'
            ],
            [
                'icon' => 'fas fa-headset',
                'title' => 'Live Agent Assistance',
                'description' => 'Real-time recommendations, knowledge retrieval, and sentiment analysis.'
            ]
        ];

        foreach ($features as $feature) {
            ServiceFeature::updateOrCreate(
                [
                    'features_section_id' => $featuresSection->id,
                    'title' => $feature['title']
                ],
                [
                    'icon' => $feature['icon'],
                    'description' => $feature['description'],
                ]
            );
        }



        // Create or update the Performance Stats Section
        PerformanceStat::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'Performance Stats',
                'subtitle' => 'Our AI Agents for Contact Centers deliver measurable results that transform customer service operations',
                'stats' => json_encode([
                    [
                        'stat_number' => '99.7%',
                        'stat_title' => 'Intent Recognition',
                        'stat_description' => 'successful intent understanding'
                    ],
                    [
                        'stat_number' => '40%',
                        'stat_title' => 'Routing Accuracy',
                        'stat_description' => 'improvement in call routing'
                    ],
                    [
                        'stat_number' => '68%',
                        'stat_title' => 'AHT Reduction',
                        'stat_description' => 'lower average handling time'
                    ]
                ])
            ]
        );
    }
}
