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
use App\Models\VidhiraSection;
use App\Models\AiPoweredEngagementSection;
use App\Models\AiBusinessInteractionSection;
use App\Models\AiStatisticalHighlight;

class VoiceAgentServiceSeeder extends Seeder
{
    public function run()
    {
        // Create or update the service
        $service = Service::updateOrCreate(
            ['slug' => 'voice-agents'],
            ['title' => 'AI Voice Agents']
        );

        // Create or update the hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'AI Voice Agents',
                'description' => 'Redefine voice-based customer interactions with AI Voice Agents that provide natural, human-like conversations over phone calls. These AI-powered assistants manage inbound inquiries, conduct outbound sales calls, and offer real-time support, ensuring instant responses and smooth call handling.',
                'image' => 'assets/img/ai-voice-agent.png',
                'cta' => 'Request Demo',
            ]
        );

        // Create or update the features section
        $featuresSection = ServiceFeaturesSection::updateOrCreate(
            ['service_id' => $service->id, 'heading' => 'Seamless & Smart Voice Interaction'],
            ['description' => 'Designed to understand intent, detect sentiment, and personalize conversations, AI Voice Agents improve call center efficiency while reducing operational costs.']
        );

        // Features list
        $features = [
            [
                'icon' => 'fas fa-comments',
                'title' => 'Natural Interactions',
                'description' => 'Understands user intent and delivers accurate responses in real time.'
            ],
            [
                'icon' => 'fas fa-language',
                'title' => 'Multilingual',
                'description' => 'Communicates fluently in over 100 languages globally.'
            ],
            [
                'icon' => 'fas fa-clock',
                'title' => '24/7 Availability',
                'description' => 'Handles inbound queries instantly, reducing wait times.'
            ],
            [
                'icon' => 'fas fa-route',
                'title' => 'Smart Routing',
                'description' => 'Directs queries to the best-suited human agent when needed.'
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

        // Create or update the about section
        ServiceAboutSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'image' => 'assets/img/ai-voice-agent-1.png',
                'subheading' => 'Smart Interaction',
                'heading' => 'Human-Like Conversational Experience',
                'description' => 'Empathetic & Lifelike Voices – Creates engaging, expressive interactions that build stronger customer relationships.',
                'features' => json_encode([
                    [
                        'icon' => 'fas fa-microphone-alt',
                        'title' => 'Advanced Speech Recognition',
                        'description' => 'Detects sentiment, tone, and intent for a more meaningful dialogue.'
                    ],
                    [
                        'icon' => 'fas fa-language',
                        'title' => 'Multilingual Support',
                        'description' => 'Communicates fluently in over 100 languages for a truly global reach.'
                    ]
                ])
            ]
        );

        // Create or update the agent support section
        ServiceAgentSupportSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'image' => 'assets/img/ai-voice-agent-1.jpg',
                'subheading' => 'Agent Support',
                'heading' => 'Smart Assistance for Live Agents',
                'description' => 'Intelligent Call Routing – Captures customer context and directs queries to the best-suited human agent when needed.',
                'features' => json_encode([
                    [
                        'icon' => 'fas fa-user-shield',
                        'title' => 'Live Agent Support',
                        'description' => 'Provides real-time suggestions to human agents, improving response accuracy and efficiency.'
                    ],
                    [
                        'icon' => 'fas fa-cogs',
                        'title' => 'Self-Service Automation',
                        'description' => 'Enables customers to complete tasks without human intervention, enhancing efficiency.'
                    ]
                ])
            ]
        );

        // Create or update the proactive outreach section
        ServiceProactiveSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'image' => 'assets/img/ai-voice-agent-2.jpg',
                'subheading' => 'Proactive Outreach',
                'heading' => 'Proactive & Personalized Outreach',
                'description' => 'Automated Outbound Calls – AI-driven follow-ups, appointment reminders, and promotional offers at scale.',
                'features' => json_encode([
                    [
                        'icon' => 'fas fa-lightbulb',
                        'title' => 'Predictive Customer Engagement',
                        'description' => 'Anticipates needs and delivers tailored recommendations before customers even ask.'
                    ],
                    [
                        'icon' => 'fas fa-chart-line',
                        'title' => 'Performance Optimization',
                        'description' => 'Continuously improves based on interaction data and outcomes.'
                    ]
                ])
            ]
        );

        // Create or update the Performance Stats Section
        PerformanceStat::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'Performance Stats',
                'subtitle' => 'Our AI Voice Agents deliver measurable results that transform customer service operations',
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
                        'stat_title' => 'Efficiency Gain',
                        'stat_description' => 'reduction in average handling time'
                    ]
                ])
            ]
        );

        VidhiraSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'AI Avatar Vidhira',
                'subtitle' => 'Meet Vidhira, an advanced AI-powered avatar designed to transform digital interactions with human-like intelligence, emotions, and adaptability.',
                'description' => 'Unlike standard AI Agents, Vidhira combines conversational AI with visual representation, offering a face-to-face virtual experience that enhances engagement in customer service, virtual sales, and digital events. Available in multiple languages, with dynamic expressions and contextual awareness, Vidhira creates immersive, lifelike conversations that redefine how businesses connect with their audiences.',
                'background_image' => 'https://ncrbest.com/assets/img/Rectangle-304.png',
            ]
        );
        
        AiPoweredEngagementSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'A New Era of AI-Powered Engagement',
                'subtitle' => 'Available in multiple languages, with dynamic expressions and contextual awareness, Vidhira creates immersive, lifelike conversations.',
                'features' => [
                    [
                        'icon' => 'fas fa-robot',
                        'title' => 'Human Touch AI',
                        'description' => 'Conversational AI with a Human Touch – Understands context, tone, and emotions for more natural interactions.',
                    ],
                    [
                        'icon' => 'fas fa-user',
                        'title' => 'Lifelike Visuals',
                        'description' => 'Lifelike Visual Representation – Engages users through realistic facial expressions and dynamic responses.',
                    ],
                    [
                        'icon' => 'fas fa-globe',
                        'title' => 'Multilingual',
                        'description' => 'Supports Multiple Languages – Communicates effectively with diverse audiences.',
                    ],
                    [
                        'icon' => 'fas fa-memory',
                        'title' => 'Context Aware',
                        'description' => 'Contextual Awareness – Remembers past interactions, making conversations feel more natural and intuitive.',
                    ],
                ],
            ]
        );

        AiBusinessInteractionSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'Redefining Customer & Business Interactions',
                'features' => [
                    [
                        'icon' => 'fas fa-concierge-bell',
                        'title' => 'Virtual Customer Service',
                        'description' => 'Provides personalized support with a human-like presence, enhancing user experience.',
                    ],
                    [
                        'icon' => 'fas fa-shopping-cart',
                        'title' => 'Virtual Sales Assistant',
                        'description' => 'Assists customers in making informed decisions with real-time product recommendations.',
                    ],
                    [
                        'icon' => 'fas fa-video',
                        'title' => 'Digital Event Host',
                        'description' => 'Engages audiences with interactive, intelligent responses in multiple languages.',
                    ],
                ],
            ]
        );

        AiStatisticalHighlight::updateOrCreate(
            ['service_id' => $service->id],
            [
                'stats' => [
                    [
                        'number' => '>90%',
                        'title' => 'Engagement Rate',
                        'description' => 'in virtual interactions',
                    ],
                    [
                        'number' => '50%',
                        'title' => 'Retention Boost',
                        'description' => 'for personalized experiences',
                    ],
                    [
                        'number' => '3x',
                        'title' => 'Higher Conversions',
                        'description' => 'with interactive sales support',
                    ],
                ],
            ]
        );
        
    }
}
