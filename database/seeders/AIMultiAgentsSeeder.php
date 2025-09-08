<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\ServiceAgentSupportSection;

class AIMultiAgentsSeeder extends Seeder
{
    public function run()
    {
        // Create or update the service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-multi-agents'],
            ['title' => 'AI Multi-Agents']
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
                'heading' => 'AI Multi-Agents',
                'subheading' => 'Maximize Efficiency with a Network of Intelligent AI Agents',
                'description' => 'AI Multi-Agents operate collaboratively to handle complex tasks, streamline workflows, and ensure faster resolution across different customer service functions.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/AIMulti-Agents/1.jpg',
                'cta' => 'GET A DEMO',
                'features' => json_encode([]),
            ]
        );

        // 2. Features Section
        $featuresSection = ServiceFeaturesSection::updateOrCreate(
            ['service_id' => $service->id, 'heading' => 'Enhance Your AI Workforce with Multi-Agent Collaboration'],
            [
                'subheading' => 'Deploy a team of AI agents that work in synergy to execute various roles and responsibilities seamlessly.',
                'description' => '',
                'image' => 'assets/img/multi-agents-features.jpg',
            ]
        );

        $multiAgentFeatures = [
            [
                'icon' => 'fas fa-network-wired',
                'title' => 'Distributed Task Execution',
                'description' => 'Assign specialized AI agents to different service functions. Ensures efficient handling of multiple requests simultaneously.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/AIMulti-Agents/3.jpg'
            ],
            [
                'icon' => 'fas fa-exchange-alt',
                'title' => 'Context-Aware Handoffs',
                'description' => 'AI agents share memory and context for smooth task transitions. Ensures continuity between AI and human support teams.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/AIMulti-Agents/4.jpg'
            ],
            [
                'icon' => 'fas fa-expand-arrows-alt',
                'title' => 'Scalability & Flexibility',
                'description' => 'Adapts to evolving business needs with customizable workflows. Scales dynamically based on customer demand.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/AIMulti-Agents/5.jpg'
            ],
        ];

        foreach ($multiAgentFeatures as $feature) {
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
                'image' => 'assets/img/Platform/PlatfprmCapebilite/AIMulti-Agents/2.jpg',
                'subheading' => '',
                'heading' => 'Ready to Deploy Your AI Workforce?',
                'description' => 'Discover how AI Multi-Agents can maximize efficiency across your customer service operations.',
                'features' => json_encode([])
            ]
        );
    }
}
