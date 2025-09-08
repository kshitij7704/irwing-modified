<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\ServiceAgentSupportSection;

class VernacularAISeeder extends Seeder
{
    public function run()
    {
        // Create or update the service
        $service = Service::updateOrCreate(
            ['slug' => 'vernacular-ai'],
            ['title' => 'Vernacular AI']
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
                'heading' => 'Vernacular AI',
                'subheading' => 'Deliver Hyper-Personalized Interactions in Any Language',
                'description' => 'Vernacular AI enables enterprises to break language barriers by offering seamless multilingual support, ensuring inclusivity and accessibility for global customers.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/vernacular-ai/1.jpg',
                'cta' => 'GET A DEMO',
                'features' => json_encode([]),
            ]
        );

        // 2. Features Section
        $featuresSection = ServiceFeaturesSection::updateOrCreate(
            ['service_id' => $service->id, 'heading' => 'Speak Your Customer\'s Language with AI-Powered Localization'],
            [
                'subheading' => 'Empower your AI agents to communicate fluently in over 100 languages with native-level accuracy.',
                'description' => '',
                'image' => 'assets/img/vernacular-features.jpg',
            ]
        );

        $vernacularFeatures = [
            [
                'icon' => 'fas fa-language',
                'title' => 'Comprehensive Multilingual Support',
                'description' => 'AI-driven translation and localization for real-time conversations. Supports dialects and regional nuances for more natural interactions.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/vernacular-ai/2.jpg'
            ],
            [
                'icon' => 'fas fa-microphone-alt',
                'title' => 'Voice and Text Adaptability',
                'description' => 'Works across text, voice, and multimodal interfaces. Ensures consistent customer experience across channels.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/vernacular-ai/3.jpg'
            ],
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Dynamic Language Processing',
                'description' => 'Learns and adapts to industry-specific terminologies. Delivers personalized and culturally relevant responses.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/vernacular-ai/4.jpg'
            ],
        ];

        foreach ($vernacularFeatures as $feature) {
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
                'image' => 'assets/img/Platform/PlatfprmCapebilite/vernacular-ai/5.jpg',
                'subheading' => '',
                'heading' => 'Ready to Break Language Barriers?',
                'description' => 'Discover how Vernacular AI can transform your global customer interactions.',
                'features' => json_encode([])
            ]
        );
    }
}
