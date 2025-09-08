<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class AiAvatarVidhiraSeeder extends Seeder
{
    public function run()
    {
        // Create or update service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-avatar-vidhira'],
            ['title' => 'AI Avatar Vidhira']
        );

        // Update hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'AI Avatar Vidhira',
                'description' => 'Meet Vidhira, an advanced AI-powered avatar designed to transform digital interactions with human-like intelligence, emotions, and adaptability. Unlike standard AI Agents, Vidhira combines conversational AI with visual representation, offering a face-to-face virtual experience that enhances engagement in customer service, virtual sales, and digital events. Available in multiple languages, with dynamic expressions and contextual awareness, Vidhira creates immersive, lifelike conversations that redefine how businesses connect with their audiences.',
                'image' => 'assets/img/Ai Avatar/vidhira-avatar.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Remove existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();

        // Section 1: A New Era of AI-Powered Engagement
        $section1 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'A New Era of AI-Powered Engagement',
            'description' => 'Revolutionary AI avatar technology that combines conversational AI with visual representation'
        ]);

        $features1 = [
            [
                'icon' => 'fas fa-comments',
                'title' => 'Conversational AI with a Human Touch',
                'description' => 'Understands context, tone, and emotions for more natural interactions.'
            ],
            [
                'icon' => 'fas fa-user-circle',
                'title' => 'Lifelike Visual Representation',
                'description' => 'Engages users through realistic facial expressions and dynamic responses.'
            ]
        ];

        foreach ($features1 as $feature) {
            ServiceFeature::create([
                'features_section_id' => $section1->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Section 2: Redefining Customer & Business Interactions
        $section2 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Redefining Customer & Business Interactions',
            'description' => 'Transform how businesses connect with their audiences through AI avatar technology'
        ]);

        $features2 = [
            [
                'icon' => 'fas fa-headset',
                'title' => 'Virtual Customer Service',
                'description' => 'Provides personalized support with a human-like presence, enhancing user experience.'
            ],
            [
                'icon' => 'fas fa-shopping-cart',
                'title' => 'AI-Powered Virtual Sales Assistant',
                'description' => 'Assists customers in making informed decisions with real-time product recommendations.'
            ],
            [
                'icon' => 'fas fa-video',
                'title' => 'Digital Event & Webinar Host',
                'description' => 'Engages audiences with interactive, intelligent responses in multiple languages.'
            ]
        ];

        foreach ($features2 as $feature) {
            ServiceFeature::create([
                'features_section_id' => $section2->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Section 3: Smart, Adaptive & Multilingual
        $section3 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Smart, Adaptive & Multilingual',
            'description' => 'Advanced capabilities that make Vidhira truly intelligent and adaptable'
        ]);

        $features3 = [
            [
                'icon' => 'fas fa-globe',
                'title' => 'Supports Multiple Languages',
                'description' => 'Communicates effectively with diverse audiences.'
            ],
            [
                'icon' => 'fas fa-smile',
                'title' => 'Dynamic Expressions & Body Language',
                'description' => 'Adapts gestures and facial reactions for more engaging conversations.'
            ],
            [
                'icon' => 'fas fa-brain',
                'title' => 'Contextual Awareness',
                'description' => 'Remembers past interactions, making conversations feel more natural and intuitive.'
            ]
        ];

        foreach ($features3 as $feature) {
            ServiceFeature::create([
                'features_section_id' => $section3->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Update performance stats
        PerformanceStat::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'Vidhira Performance Metrics',
                'subtitle' => 'Measurable results that demonstrate Vidhira\'s impact',
                'stats' => json_encode([
                    [
                        'stat_number' => '>90%',
                        'stat_title' => 'Customer Engagement Rate',
                        'stat_description' => 'in virtual interactions'
                    ],
                    [
                        'stat_number' => '50%',
                        'stat_title' => 'Customer Retention Improvement',
                        'stat_description' => 'for personalized experiences'
                    ],
                    [
                        'stat_number' => '3x',
                        'stat_title' => 'Higher Conversion Rates',
                        'stat_description' => 'with interactive sales support'
                    ]
                ])
            ]
        );

        // Final CTA Section
        ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Get Started with Vidhira Today',
            'description' => 'Experience the future of AI-powered avatar interactions',
            'cta' => 'Request a Demo',
            'image' => 'assets/img/Ai Avatar/vidhira-cta.jpg'
        ]);
    }
} 