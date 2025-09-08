<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class AiVoiceAgentsSeeder extends Seeder
{
    public function run()
    {
        // Update service to AI Voice Agents
        $service = Service::updateOrCreate(
            ['slug' => 'ai-voice-agents'],
            ['title' => 'AI Voice Agents']
        );

        // Update hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'AI Voice Agents',
                'description' => 'Redefine voice-based customer interactions with AI Voice Agents that provide natural, human-like conversations over phone calls. These AI-powered assistants manage inbound inquiries, conduct outbound sales calls, and offer real-time support, ensuring instant responses and smooth call handling. Designed to understand intent, detect sentiment, and personalize conversations, AI Voice Agents improve call center efficiency while reducing operational costs.',
                'image' => 'assets/img/Solution/Category/5.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Remove all existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();

        // Section 1: Seamless & Smart Voice Interaction
        $section1 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Seamless & Smart Voice Interaction',
            'description' => 'Experience natural conversations powered by advanced voice AI technology'
        ]);

        $features1 = [
            [
                'icon' => 'fas fa-comments',
                'title' => 'Natural Conversational AI',
                'description' => 'Understands user intent and delivers accurate responses in real time'
            ],
            [
                'icon' => 'fas fa-language',
                'title' => 'Multilingual Support',
                'description' => 'Communicates fluently in over 100 languages for global reach'
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

        // Section 2: Always Available, Always Responsive
        $section2 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Always Available, Always Responsive',
            'description' => '24/7 automated support that handles customer needs instantly'
        ]);

        $features2 = [
            [
                'icon' => 'fas fa-headset',
                'title' => '24/7 Virtual Call Center',
                'description' => 'Handle inbound queries instantly, reducing wait times'
            ],
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Self-Service Automation',
                'description' => 'Enables customers to complete tasks without human intervention'
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

        // Section 3: Smart Assistance for Live Agents
        $section3 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Smart Assistance for Live Agents',
            'description' => 'AI-powered tools that enhance human agent performance'
        ]);

        $features3 = [
            [
                'icon' => 'fas fa-route',
                'title' => 'Intelligent Call Routing',
                'description' => 'Captures context and directs queries to the best-suited agent'
            ],
            [
                'icon' => 'fas fa-hands-helping',
                'title' => 'Live Agent Support',
                'description' => 'Provides real-time suggestions to improve response accuracy'
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

        // Section 4: Proactive & Personalized Outreach
        $section4 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Proactive & Personalized Outreach',
            'description' => 'Drive engagement with AI-powered voice campaigns'
        ]);

        $features4 = [
            [
                'icon' => 'fas fa-phone-alt',
                'title' => 'Automated Outbound Calls',
                'description' => 'AI-driven follow-ups, reminders, and offers at scale'
            ],
            [
                'icon' => 'fas fa-lightbulb',
                'title' => 'Predictive Engagement',
                'description' => 'Anticipates needs and delivers tailored recommendations'
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

        // Section 5: Human-Like Conversational Experience
        $section5 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Human-Like Conversational Experience',
            'description' => 'Lifelike interactions that build authentic customer relationships'
        ]);

        $features5 = [
            [
                'icon' => 'fas fa-user-friends',
                'title' => 'Empathetic Voices',
                'description' => 'Creates engaging, expressive interactions that build trust'
            ],
            [
                'icon' => 'fas fa-brain',
                'title' => 'Advanced Speech Recognition',
                'description' => 'Detects sentiment, tone, and intent for meaningful dialogue'
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

        // Update performance stats
        PerformanceStat::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'Performance Stats',
                'subtitle' => 'Our AI Voice Agents deliver measurable results that transform voice-based customer engagement',
                'stats' => json_encode([
                    [
                        'stat_number' => '99.7%',
                        'stat_title' => 'Intent Recognition',
                        'stat_description' => 'successful intent recognition accuracy'
                    ],
                    [
                        'stat_number' => '40%',
                        'stat_title' => 'Routing Accuracy',
                        'stat_description' => 'increase in call routing precision'
                    ],
                    [
                        'stat_number' => '68%',
                        'stat_title' => 'AHT Reduction',
                        'stat_description' => 'reduction in average handling time'
                    ]
                ])
            ]
        );
    }
}
