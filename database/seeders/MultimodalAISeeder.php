<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\ServiceAgentSupportSection;

class MultimodalAISeeder extends Seeder
{
    public function run()
    {
        // Create or update the service
        $service = Service::updateOrCreate(
            ['slug' => 'multimodal-ai'],
            ['title' => 'Multimodal AI']
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
                'heading' => 'Multimodal AI',
                'subheading' => 'Unify Customer Interactions Across Text, Voice, and Visual Channels',
                'description' => 'Multimodal AI integrates voice, text, and multimedia to create seamless, engaging customer experiences across all communication touchpoints.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/Multimodel/1.jpg',
                'cta' => 'GET A DEMO',
                'features' => json_encode([]),
            ]
        );

        // 2. Features Section
        $featuresSection = ServiceFeaturesSection::updateOrCreate(
            ['service_id' => $service->id, 'heading' => 'Deliver Next-Generation Service with Multimodal AI'],
            [
                'subheading' => 'Enhance customer interactions with a dynamic blend of voice, video, and graphical elements in a single conversation.',
                'description' => '',
                'image' => 'assets/img/multimodal-features.jpg',
            ]
        );

        $multimodalFeatures = [
            [
                'icon' => 'fas fa-sync-alt',
                'title' => 'Omnichannel Integration',
                'description' => 'Engage customers across chat, voice, and interactive web apps. Enables smooth transitions between different communication modes.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/Multimodel/2.jpg'
            ],
            [
                'icon' => 'fas fa-engagement-ring',
                'title' => 'Enhanced Engagement',
                'description' => 'Leverages voice recognition, image processing, and text-based AI. Provides enriched, context-aware customer experiences.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/Multimodel/3.jpg'
            ],
            [
                'icon' => 'fas fa-mobile-alt',
                'title' => 'Device-Agnostic',
                'description' => 'Works across mobile, web, and IoT devices. Uses AI to adapt communication styles based on user preference.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/Multimodel/4.jpg'
            ],
        ];

        foreach ($multimodalFeatures as $feature) {
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
                'image' => 'assets/img/Platform/PlatfprmCapebilite/Multimodel/5.jpg',
                'subheading' => '',
                'heading' => 'Transform Your Customer Experience',
                'description' => 'Discover how Multimodal AI can unify your customer interactions across all channels.',
                'features' => json_encode([])
            ]
        );
    }
}
