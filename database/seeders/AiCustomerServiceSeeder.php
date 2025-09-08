<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use Illuminate\Database\Seeder;

class AiCustomerServiceSeeder extends Seeder
{
    public function run()
    {
        // Create or update the main service record
        $service = Service::updateOrCreate(
            ['slug' => 'ai-customer-service'],
            ['title' => 'AI Agents for Customer Service']
        );

        // Clear existing data for this service
        $service->heroSection()->delete();
        $service->featuresSections()->delete();

        // 1. Hero Section
        ServiceHeroSection::create([
            'service_id' => $service->id,
            'heading' => 'AI Agents for Customer Servicessss',
            'subheading' => 'Seamless, AI-powered support across all channels',
            'description' => 'Deliver seamless, AI-powered customer service that operates 24/7 across voice, chat, email, and social channels.',
            'image' => 'assets/img/ai-customer-service/hero.png',
            'cta' => 'Get Started Now',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-clock',
                    'title' => '24/7 Support Across Channels',
                ],
                [
                    'icon' => 'fas fa-magic',
                    'title' => 'Instant Query Resolution',
                ],
                [
                    'icon' => 'fas fa-user-cog',
                    'title' => 'AI-Driven Personalization',
                ]
            ]),
        ]);

        // 2. Features Section
        $featuresSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Key Capabilities',
            'description' => 'Empowering your customer support with intelligent, always-on AI agents.',
        ]);

        $features = [
            [
                'icon' => 'fas fa-headset',
                'title' => '24/7 Multi-Channel Support',
                'description' => 'AI Agents ensure round-the-clock availability across voice, chat, email, and social media.'
            ],
            [
                'icon' => 'fas fa-lightbulb',
                'title' => 'Instant Resolution of Queries',
                'description' => 'Handle FAQs, troubleshoot issues, and provide personalized solutions effortlessly.'
            ],
            [
                'icon' => 'fas fa-brain',
                'title' => 'Personalized Support',
                'description' => 'Leverage customer history and behavior to deliver relevant, proactive recommendations.'
            ],
            [
                'icon' => 'fas fa-users',
                'title' => 'Efficient Human-Agent Collaboration',
                'description' => 'Free up human agents for complex queries while AI handles routine and repetitive tasks.'
            ]
        ];

        foreach ($features as $feature) {
            ServiceFeature::create([
                'features_section_id' => $featuresSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        // 3. Stats Section (Performance Metrics)
        $statsSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Performance Metrics',
            'description' => 'Our AI Agents are proven to enhance efficiency and cut support costs.',
        ]);

        $stats = [
            [
                'icon' => 'fas fa-check-circle',
                'title' => '95% Query Resolution Accuracy',
                'description' => 'High accuracy in resolving routine inquiries without human intervention.'
            ],
            [
                'icon' => 'fas fa-dollar-sign',
                'title' => '30% Cost Reduction',
                'description' => 'Significant reduction in customer support operational costs.'
            ],
            [
                'icon' => 'fas fa-tachometer-alt',
                'title' => '40% Faster Resolutions',
                'description' => 'Accelerated issue handling and resolution through AI-driven automation.'
            ],
        ];

        foreach ($stats as $stat) {
            ServiceFeature::create([
                'features_section_id' => $statsSection->id,
                'icon' => $stat['icon'],
                'title' => $stat['title'],
                'description' => $stat['description'],
            ]);
        }

        // 4. CTA Section
        ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Ready to Transform Your Customer Service?',
            'description' => 'Discover how AI Agents can elevate your customer experience and efficiency.',
            'cta' => 'Book a Free Demo Today!',
        ]);
    }
}
