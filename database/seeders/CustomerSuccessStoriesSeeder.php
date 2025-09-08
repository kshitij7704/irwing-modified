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

class CustomerSuccessStoriesSeeder extends Seeder
{
    public function run()
    
    {
        $service = Service::updateOrCreate(
            ['slug' => 'customers-success-stories'],
            ['title' => 'Customer Success Stories']
        );

        ServiceHeroSection::create([
            'service_id' => $service->id,
            'heading' => 'AI LifeBot Enterprise-Grade Conversational AI Platform',
            'description' => 'Accelerate digital transformation with scalable, secure, and intelligent chat & voice agents. Harness advanced NLU and LLMs for seamless, human-like customer engagement across all channels.',
            'image' => 'assets/img/0010.jpg',
            'cta' => 'Explore AI LifeBot Solutions',
        ]);

        $getStartedSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Get Started with AI LifeBot',
            'description' => 'If you\'re new to AI LifeBot or exploring its capabilities, begin with these essential guides:',
        ]);

        $getStartedFeatures = [
            ['icon' => 'fas fa-info-circle', 'title' => 'Overview', 'description' => 'Understand how AI LifeBot transforms customer interactions.',  'image' => 'assets/img/Resources/caseStudy/2.jpg',],
            ['icon' => 'fas fa-star', 'title' => 'Key Features', 'description' => 'Discover AI-powered automation for enterprises.',  'image' => 'assets/img/Resources/caseStudy/3.jpg',],
            ['icon' => 'fas fa-comments', 'title' => 'Getting Started with Chat AI Agents', 'description' => 'Build intelligent chatbots from scratch.',  'image' => 'assets/img/Resources/caseStudy/4.jpg',],
            ['icon' => 'fas fa-microphone', 'title' => 'Getting Started with Voice AI Agents', 'description' => 'Create voice-driven virtual assistants.',  'image' => 'assets/img/Resources/caseStudy/5.jpg',],
        ];

        foreach ($getStartedFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $getStartedSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
                'image' => $feature['image'],
            ]);
        }

        $buildDesignSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Build & Design AI Agents',
            'description' => 'Craft intelligent AI agents with robust workflows, modular components, and customizable actions.',
        ]);

        $buildDesignFeatures = [
            ['icon' => 'fas fa-project-diagram', 'title' => 'Projects', 'description' => 'Set up and manage AI automation projects.'],
            ['icon' => 'fas fa-sitemap', 'title' => 'Flows', 'description' => 'Design dynamic conversation paths with low-code tools.'],
            ['icon' => 'fas fa-microchip', 'title' => 'Nodes', 'description' => 'Implement AI-driven decision-making.'],
            ['icon' => 'fas fa-layer-group', 'title' => 'Node Library', 'description' => 'Explore a library of powerful prebuilt functions.'],
        ];

        foreach ($buildDesignFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $buildDesignSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        $aiIntelligenceSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Enhance Agents with AI Intelligence',
            'description' => 'Supercharge AI LifeBot with Generative AI, Knowledge AI, and Contextual Understanding to deliver personalized and humanlike responses.',
        ]);

        $aiIntelligenceFeatures = [
            ['icon' => 'fas fa-comments', 'title' => 'Conversational AI', 'description' => 'Build responsive, context-aware interactions.'],
            ['icon' => 'fas fa-language', 'title' => 'Natural Language Understanding (NLU)', 'description' => 'Train AI to comprehend diverse user inputs.'],
            ['icon' => 'fas fa-brain', 'title' => 'Large Language Models (LLMs)', 'description' => 'Utilize the power of AI for advanced reasoning.'],
            ['icon' => 'fas fa-magic', 'title' => 'Generative AI', 'description' => 'Automate content generation and contextual replies.'],
            ['icon' => 'fas fa-book-open', 'title' => 'Knowledge AI', 'description' => 'Integrate external knowledge sources for enriched conversations.'],
        ];

        foreach ($aiIntelligenceFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $aiIntelligenceSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        ServiceAboutSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/0012.png',
            'subheading' => 'Test & Optimize AI Agents',
            'heading' => 'Real-time Debugging & Performance Monitoring',
            'description' => 'Ensure high-quality AI interactions with real-time debugging, testing tools, and performance monitoring.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-terminal',
                    'title' => 'Testing Panel',
                    'description' => 'Simulate conversations in real-time.',
                ],
                [
                    'icon' => 'fas fa-comment-dots',
                    'title' => 'Webchat Preview',
                    'description' => 'Experience AI agents in a live demo.',
                ],
                [
                    'icon' => 'fas fa-file-alt',
                    'title' => 'Interaction Logs',
                    'description' => 'Track and analyze agent conversations.',
                ],
                [
                    'icon' => 'fas fa-robot',
                    'title' => 'Automated Testing',
                    'description' => 'Use predefined scenarios to evaluate accuracy.',
                ]
            ])
        ]);

        ServiceAgentSupportSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/0013.jpg',
            'subheading' => 'Analyze & Improve AI Performance',
            'heading' => 'AI-driven Analytics for Continuous Refinement',
            'description' => 'Leverage AI-driven analytics to continuously refine customer interactions.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-chart-line',
                    'title' => 'AI LifeBot Insights',
                    'description' => 'Get actionable data on agent performance.',
                ],
                [
                    'icon' => 'fas fa-analytics',
                    'title' => 'Advanced Analytics',
                    'description' => 'Use OData and reporting tools for in-depth analysis.',
                ],
                [
                    'icon' => 'fas fa-search',
                    'title' => 'Call Tracing',
                    'description' => 'Monitor conversations for quality assurance.',
                ]
            ])
        ]);

        ServiceProactiveSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/0014.jpg',
            'subheading' => 'Manage & Scale AI Operations',
            'heading' => 'Advanced Admin Tools for Enterprise Control',
            'description' => 'Effortlessly control projects, users, and AI resources with advanced admin tools.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-tachometer-alt',
                    'title' => 'Admin Dashboard',
                    'description' => 'Centralized control for enterprise AI management.',
                ],
                [
                    'icon' => 'fas fa-users-cog',
                    'title' => 'User & Role Management',
                    'description' => 'Define access permissions and team collaboration.',
                ],
                [
                    'icon' => 'fas fa-chart-bar',
                    'title' => 'Billing & Usage Analytics',
                    'description' => 'Monitor AI consumption and cost-effectiveness.',
                ]
            ])
        ]);

        PerformanceStat::create([
            'service_id' => $service->id,
            'title' => 'Deploy AI Agents Seamlessly',
            'subtitle' => 'Multi-Channel Integration Capabilities',
            'stats' => json_encode([
                [
                    'stat_number' => 'Multi-Channel',
                    'stat_title' => 'Deployment Options',
                    'stat_description' => 'Engage customers across webchat, WhatsApp, Microsoft Teams, and more.',
                ],
                [
                    'stat_number' => 'Secure',
                    'stat_title' => 'Endpoint Management',
                    'stat_description' => 'Monitor all AI agent endpoints with robust access controls.',
                ],
                [
                    'stat_number' => 'Flexible',
                    'stat_title' => 'Snapshot Deployments',
                    'stat_description' => 'Save, version, and restore agent configurations reliably.',
                ]
            ])
        ]);

        VidhiraSection::create([
            'service_id' => $service->id,
            'title' => 'Integrate with Contact Centers',
            'subtitle' => 'Seamless Human-AI Collaboration',
            'description' => 'Enable seamless escalation to human agents when needed with advanced integration capabilities.',
            'background_image' => 'assets/img/Mask-Group-46.png',
        ]);

        AiPoweredEngagementSection::create([
            'service_id' => $service->id,
            'title' => 'AI LifeBot Voice Gateway',
            'subtitle' => 'AI-Powered Voice Automation for Seamless Customer Engagement',
            'features' => [
                [
                    'icon' => 'fas fa-phone-alt',
                    'title' => 'Introduction to Voice Gateway',
                    'description' => 'Comprehensive overview of AI-driven voice automation.',
                ],
                [
                    'icon' => 'fas fa-robot',
                    'title' => 'Build Smart Voice AI Agents',
                    'description' => 'Design and optimize AI-powered voice interactions.',
                ],
                [
                    'icon' => 'fas fa-route',
                    'title' => 'Configure & Route Voice Calls',
                    'description' => 'Set up advanced call routing and management.',
                ],
                [
                    'icon' => 'fas fa-chart-line',
                    'title' => 'Monitor & Optimize Call Performance',
                    'description' => 'Real-time call recording, monitoring, and analytics.',
                ],
                [
                    'icon' => 'fas fa-shield-alt',
                    'title' => 'Handle Call Failures & Backup Solutions',
                    'description' => 'Robust failover mechanisms for uninterrupted service.',
                ],
                [
                    'icon' => 'fas fa-headset',
                    'title' => 'Supported Voice & Speech Providers',
                    'description' => 'Integration with leading SIP trunk and speech providers.',
                ]
            ],
        ]);

        AiBusinessInteractionSection::create([
            'service_id' => $service->id,
            'title' => 'AI LifeBot Development Platform',
            'features' => [
                [
                    'icon' => 'fas fa-comment',
                    'title' => 'AI LifeBot Webchat',
                    'description' => 'Seamless, real-time customer engagement with AI-powered conversations.',
                ],
                [
                    'icon' => 'fas fa-mobile-alt',
                    'title' => 'AI LifeBot xApps',
                    'description' => 'Versatile micro-web apps for smarter customer self-service.',
                ],
                [
                    'icon' => 'fas fa-code',
                    'title' => 'Developer Resources',
                    'description' => 'Extensive customization options for advanced AI builders.',
                ],
            ],
        ]);

        AiStatisticalHighlight::create([
            'service_id' => $service->id,
            'stats' => [
                [
                    'number' => '24/7',
                    'title' => 'AI-Powered Support',
                    'description' => 'Continuous customer engagement across all channels.',
                ],
                [
                    'number' => 'Enterprise',
                    'title' => 'Grade Security',
                    'description' => 'Advanced security and compliance for business needs.',
                ],
                [
                    'number' => 'Seamless',
                    'title' => 'Integration',
                    'description' => 'Easy integration with existing business systems.',
                ],
            ],
        ]);
    }
}
