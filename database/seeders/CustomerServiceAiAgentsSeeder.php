<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class CustomerServiceAiAgentsSeeder extends Seeder
{
    public function run()
    {
        // Create or update the main service record
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agents-customer-service'],
            ['title' => 'AI Agents for Customer Service']
        );

        // Clear existing data for this service
        $service->heroSection()->delete();
        $service->featuresSections()->delete();

        // 1. Hero Section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'AI Agents for Customer Service',
                'subheading' => 'Deliver seamless, AI-powered customer service that operates 24/7 across voice, chat, email, and social channels',
                'description' => 'Deliver seamless, AI-powered customer service that operates 24/7 across voice, chat, email, and social channels. AI Agents handle routine inquiries, troubleshoot issues, and provide personalized recommendations, reducing response times and enhancing customer satisfaction. Automate repetitive tasks, free up human agents for complex queries, and ensure a consistent, high-quality customer experience with intelligent AI-driven automation.',
                'image' => 'assets/img/Solution/Category/CustomerServiceAiAgents.jpg',
                'cta' => 'Get Started',
                'features' => json_encode([
                    ['icon' => 'fas fa-headset', 'title' => '24/7 Support Across Channels'],
                    ['icon' => 'fas fa-bolt', 'title' => 'Instant Query Resolution'],
                    ['icon' => 'fas fa-user-cog', 'title' => 'AI-Driven Personalization'],
                    ['icon' => 'fas fa-people-arrows', 'title' => 'Efficient Human-Agent Collaboration']
                ]),
            ]
        );

        // 2. Core Features Section
        $featuresSection = ServiceFeaturesSection::updateOrCreate(
            ['service_id' => $service->id, 'heading' => 'Core Features'],
            [
                'description' => 'Our AI agents are equipped with advanced capabilities to handle complex customer interactions and provide exceptional service.',
                'image' => 'assets/img/Solution/Category/CustomerServiceAiAgents.jpg',
            ]
        );

        // Features for Core Features Section
        $coreFeatures = [
            [
                'icon' => 'fas fa-headset',
                'title' => '24/7 Support Across Channels',
                'description' => 'AI Agents ensure round-the-clock availability for seamless customer interactions'
            ],
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Instant Query Resolution',
                'description' => 'Handle FAQs, troubleshoot issues, and provide personalized solutions effortlessly'
            ],
            [
                'icon' => 'fas fa-user-cog',
                'title' => 'AI-Driven Personalization',
                'description' => 'Analyze customer history to deliver relevant recommendations and proactive support'
            ],
            [
                'icon' => 'fas fa-people-arrows',
                'title' => 'Efficient Human-Agent Collaboration',
                'description' => 'Free up live agents for complex queries while AI handles repetitive tasks'
            ]
        ];

        foreach ($coreFeatures as $feature) {
            ServiceFeature::updateOrCreate(
                [
                    'features_section_id' => $featuresSection->id,
                    'title' => $feature['title']
                ],
                [
                    'icon' => $feature['icon'],
                    'description' => $feature['description']
                ]
            );
        }

        // 3. Performance Stats
        PerformanceStat::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'AI Customer Service Performance Stats',
                'subtitle' => 'Proven Results with AI LifeBOT',
                'stats' => json_encode([
                    [
                        'stat_number' => '95%',
                        'stat_title' => 'Accurate Query Resolution',
                        'stat_description' => 'For routine inquiries',
                    ],
                    [
                        'stat_number' => '30%',
                        'stat_title' => 'Reduction in Support Costs',
                        'stat_description' => 'Lower operational expenses with AI automation',
                    ],
                    [
                        'stat_number' => '40%',
                        'stat_title' => 'Faster Issue Resolution',
                        'stat_description' => 'Accelerated customer support with AI',
                    ],
                ])
            ]
        );
    }
}
