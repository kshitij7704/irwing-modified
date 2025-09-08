<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\ServiceAgentSupportSection;

class LiveChatAgentSeeder extends Seeder
{
    public function run()
    {
        // Create or update the service
        $service = Service::updateOrCreate(
            ['slug' => 'live-chat-agent'],
            ['title' => 'Live Chat Agent']
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
                'heading' => 'Live Chat Agent',
                'subheading' => 'Deliver Instant, AI-Powered Support with Live Chat Agents',
                'description' => 'AI-powered live chat solutions enhance customer service by offering instant, intelligent responses while ensuring seamless escalation to human agents when necessary.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/live-chat-agent/1.jpg',
                'cta' => 'GET A DEMO',
                'features' => json_encode([]),
            ]
        );

        // 2. Features Section
        $featuresSection = ServiceFeaturesSection::updateOrCreate(
            ['service_id' => $service->id, 'heading' => 'Enhance Customer Experience with AI-Assisted Live Chat'],
            [
                'subheading' => 'Enable AI-driven, real-time customer support across web and mobile platforms.',
                'description' => '',
                'image' => 'assets/img/live-chat-features.jpg',
            ]
        );

        $chatFeatures = [
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Instant Engagement',
                'description' => 'AI-powered chatbots handle routine queries autonomously. Supports seamless escalation to human agents when required.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/live-chat-agent/2.jpg'
            ],
            [
                'icon' => 'fas fa-headset',
                'title' => 'Integrated with Contact Centers',
                'description' => 'Works alongside human agents to enhance productivity. AI assists with context retention and response suggestions.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/live-chat-agent/3.jpg'
            ],
            [
                'icon' => 'fas fa-expand',
                'title' => 'Scalable & Efficient',
                'description' => 'Handles high chat volumes without compromising quality. Ensures 24/7 availability for continuous customer support.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/live-chat-agent/4.jpg'
            ],
        ];

        foreach ($chatFeatures as $feature) {
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
                'image' => 'assets/img/Platform/PlatfprmCapebilite/live-chat-agent/5.jpg',
                'subheading' => '',
                'heading' => 'Ready to Enhance Your Live Chat?',
                'description' => 'Discover how AI-powered Live Chat Agents can transform your customer support.',
                'features' => json_encode([])
            ]
        );
    }
}
