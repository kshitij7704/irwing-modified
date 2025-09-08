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

class TechnicalDocumentationSeeder extends Seeder
{

    public function run()
    {
        $service = Service::updateOrCreate(
            ['slug' => 'technical-documentation'],
            ['title' => 'Technical Documentation']
        );

        ServiceHeroSection::updateOrCreate([
            'service_id' => $service->id,
            'heading' => 'Next-Generation AI for Intelligent Conversations',
            'description' => 'AI LifeBot is a cutting-edge enterprise platform designed to build, deploy, and manage AI-driven chat and voice agents. Leveraging advanced Natural Language Understanding (NLU) and Large Language Models (LLMs), AI LifeBot delivers seamless conversational experiences across websites, mobile apps, and messaging platforms.',
            'image' => 'assets/img/Resources/technicalDocumentation/1.jpg',
            'cta' => 'Explore Technical Docs',
        ]);

        $gettingStartedSection = ServiceFeaturesSection::updateOrCreate([
            'service_id' => $service->id,
            'heading' => 'Get Started with AI LifeBot',
            'description' => 'If you\'re new to AI LifeBot or exploring its capabilities, begin with these essential guides:',
        ]);

        $gettingStartedFeatures = [
            ['icon' => 'fas fa-info-circle', 'title' => 'Overview', 'description' => 'Understand how AI LifeBot transforms customer interactions', 'image' => 'assets/img/Resources/technicalDocumentation/3.jpg'],
            ['icon' => 'fas fa-star', 'title' => 'Key Features', 'description' => 'Discover AI-powered automation for enterprises', 'image' => 'assets/img/Resources/technicalDocumentation/4.jpg'],
            ['icon' => 'fas fa-comments', 'title' => 'Getting Started with Chat AI Agents', 'description' => 'Build intelligent chatbots from scratch', 'image' => 'assets/img/Resources/technicalDocumentation/5.jpg'],
            ['icon' => 'fas fa-microphone', 'title' => 'Getting Started with Voice AI Agents', 'description' => 'Create voice-driven virtual assistants', 'image' => 'assets/img/Resources/technicalDocumentation/6.jpg'],
        ];

        foreach ($gettingStartedFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $gettingStartedSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
                'image' => $feature['image'],
            ]);
        }

        // Example for ServiceFeaturesSection
        $buildDesignSection = ServiceFeaturesSection::updateOrCreate(
            [
                'service_id' => $service->id,
                'heading' => 'Build & Design AI Agents',
            ],
            [
                'description' => 'Craft intelligent AI agents with robust workflows, modular components, and customizable actions.',
            ]
        );

        $buildDesignFeatures = [
            ['icon' => 'fas fa-project-diagram', 'title' => 'Projects', 'description' => 'Set up and manage AI automation projects'],
            ['icon' => 'fas fa-random', 'title' => 'Flows', 'description' => 'Design dynamic conversation paths with low-code tools'],
            ['icon' => 'fas fa-code-branch', 'title' => 'Nodes', 'description' => 'Implement AI-driven decision-making'],
            ['icon' => 'fas fa-th', 'title' => 'Node Library', 'description' => 'Explore a library of powerful prebuilt functions'],
        ];

        foreach ($buildDesignFeatures as $feature) {
            ServiceFeature::updateOrCreate(
                [
                    'features_section_id' => $buildDesignSection->id,
                    'title' => $feature['title'],
                ],
                [
                    'icon' => $feature['icon'],
                    'description' => $feature['description'],
                ]
            );
        }

        $enhanceAgentsSection = ServiceFeaturesSection::updateOrCreate(
            [
                'service_id' => $service->id,
                'heading' => 'Enhance Agents with AI Intelligence',
            ],
            [
                'description' => 'Supercharge AI LifeBot with Generative AI, Knowledge AI, and Contextual Understanding to deliver personalized and humanlike responses.',
            ]
        );

        $enhanceAgentsFeatures = [
            ['icon' => 'fas fa-comments', 'title' => 'Conversational AI', 'description' => 'Build responsive, context-aware interactions'],
            ['icon' => 'fas fa-brain', 'title' => 'Natural Language Understanding (NLU)', 'description' => 'Train AI to comprehend diverse user inputs'],
            ['icon' => 'fas fa-robot', 'title' => 'Large Language Models (LLMs)', 'description' => 'Utilize the power of AI for advanced reasoning'],
            ['icon' => 'fas fa-lightbulb', 'title' => 'Generative AI', 'description' => 'Automate content generation and contextual replies'],
            ['icon' => 'fas fa-database', 'title' => 'Knowledge AI', 'description' => 'Integrate external knowledge sources for enriched conversations'],
        ];

        foreach ($enhanceAgentsFeatures as $feature) {
            ServiceFeature::updateOrCreate(
                [
                    'features_section_id' => $enhanceAgentsSection->id,
                    'title' => $feature['title'],
                ],
                [
                    'icon' => $feature['icon'],
                    'description' => $feature['description'],
                ]
            );
        }

        $testOptimizeSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Test & Optimize AI Agents',
            'description' => 'Ensure high-quality AI interactions with real-time debugging, testing tools, and performance monitoring.',
        ]);

        $testOptimizeFeatures = [
            ['icon' => 'fas fa-vials', 'title' => 'Testing Panel', 'description' => 'Simulate conversations in real-time'],
            ['icon' => 'fas fa-desktop', 'title' => 'Webchat Preview', 'description' => 'Experience AI agents in a live demo'],
            ['icon' => 'fas fa-history', 'title' => 'Interaction Logs', 'description' => 'Track and analyze agent conversations'],
            ['icon' => 'fas fa-robot', 'title' => 'Automated Testing', 'description' => 'Use predefined scenarios to evaluate accuracy'],
        ];

        foreach ($testOptimizeFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $testOptimizeSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        $deploySection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Deploy AI Agents Seamlessly',
            'description' => 'Integrate AI LifeBot with your preferred platforms and communication channels.',
        ]);

        $deployFeatures = [
            ['icon' => 'fas fa-share-alt', 'title' => 'Multi-Channel Deployment', 'description' => 'Connect with webchat, WhatsApp, Teams, Social media and more'],
            ['icon' => 'fas fa-link', 'title' => 'Endpoint Management', 'description' => 'Secure and manage AI integrations effortlessly'],
            ['icon' => 'fas fa-save', 'title' => 'Snapshot Deployments', 'description' => 'Save, version, and restore agent configurations'],
        ];

        foreach ($deployFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $deploySection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        $analyzeSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Analyze & Improve AI Performance',
            'description' => 'Leverage AI-driven analytics to continuously refine customer interactions.',
        ]);

        $analyzeFeatures = [
            ['icon' => 'fas fa-chart-bar', 'title' => 'AI LifeBot Insights', 'description' => 'Get actionable data on agent performance'],
            ['icon' => 'fas fa-chart-pie', 'title' => 'Advanced Analytics', 'description' => 'Use OData and reporting tools for in-depth analysis'],
            ['icon' => 'fas fa-phone', 'title' => 'Call Tracing', 'description' => 'Monitor conversations for quality assurance'],
        ];

        foreach ($analyzeFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $analyzeSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        $contactCenterSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Integrate with Contact Centers',
            'description' => 'Enable seamless escalation to human agents when needed.',
        ]);

        $contactCenterFeatures = [
            ['icon' => 'fas fa-user-friends', 'title' => 'Live Agent Handover', 'description' => 'Transition customer queries to human agents smoothly'],
            ['icon' => 'fas fa-user-cog', 'title' => 'AI Agent Co-Pilot', 'description' => 'Assist human agents with real-time AI recommendations'],
            ['icon' => 'fas fa-random', 'title' => 'Smart Routing', 'description' => 'Direct customers to the right support channels automatically'],
        ];

        foreach ($contactCenterFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $contactCenterSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        $manageScaleSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Manage & Scale AI Operations',
            'description' => 'Effortlessly control projects, users, and AI resources with advanced admin tools.',
        ]);

        $manageScaleFeatures = [
            ['icon' => 'fas fa-tachometer-alt', 'title' => 'Admin Dashboard', 'description' => 'Centralized control for enterprise AI management'],
            ['icon' => 'fas fa-users-cog', 'title' => 'User & Role Management', 'description' => 'Define access permissions and team collaboration'],
            ['icon' => 'fas fa-coins', 'title' => 'Billing & Usage Analytics', 'description' => 'Monitor AI consumption and cost-effectiveness'],
        ];

        foreach ($manageScaleFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $manageScaleSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        $developerSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Developer Resources',
            'description' => 'For advanced AI builders and developers, AI LifeBot provides extensive customization options.',
        ]);

        $developerFeatures = [
            ['icon' => 'fas fa-code', 'title' => 'API & CLI Access', 'description' => 'Extend AI LifeBot functionalities programmatically'],
            ['icon' => 'fas fa-puzzle-piece', 'title' => 'Custom AI Extensions', 'description' => 'Build and integrate custom AI logic'],
            ['icon' => 'fas fa-toolbox', 'title' => 'SDKs & Client Libraries', 'description' => 'Accelerate AI development with powerful toolkits'],
        ];

        foreach ($developerFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $developerSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        ServiceAboutSection::updateOrCreate(
            [
                'service_id' => $service->id,
                'heading' => 'Advanced Voice AI Implementation',
            ],
            [
                'image' => 'assets/img/Resources/technicalDocumentation/7.jpg',
                'subheading' => 'Voice Gateway Technical Reference',
                'description' => 'Comprehensive technical documentation for implementing enterprise-grade voice AI solutions with SIP integration, speech recognition, and telephony protocols.',
                'features' => json_encode([
                    [
                        'icon' => 'fas fa-phone-volume',
                        'title' => 'SIP Integration',
                        'description' => 'Complete SIP trunk configuration and telephony protocol implementation.',
                    ],
                    [
                        'icon' => 'fas fa-microphone',
                        'title' => 'Speech Recognition',
                        'description' => 'ASR/TTS configuration with multiple speech service providers.',
                    ],
                    [
                        'icon' => 'fas fa-route',
                        'title' => 'Call Routing',
                        'description' => 'Advanced call routing algorithms and failover mechanisms.',
                    ],
                    [
                        'icon' => 'fas fa-shield-alt',
                        'title' => 'Security Protocols',
                        'description' => 'Voice authentication, encryption, and compliance standards.',
                    ]
                ])
            ]
        );

        ServiceAgentSupportSection::updateOrCreate(
            [
                'service_id' => $service->id,
                'heading' => 'Multi-Channel Deployment Technical Specs',
            ],
            [
                'image' => 'assets/img/Resources/technicalDocumentation/8.jpg',
                'subheading' => 'Webchat Integration Guide',
                'description' => 'Technical implementation guides for deploying AI LifeBot across web, mobile, and messaging platforms.',
                'features' => json_encode([
                    [
                        'icon' => 'fas fa-code',
                        'title' => 'JavaScript SDK',
                        'description' => 'Complete webchat integration with customizable UI components.',
                    ],
                    [
                        'icon' => 'fas fa-mobile-alt',
                        'title' => 'Mobile SDKs',
                        'description' => 'Native iOS and Android SDK implementation guides.',
                    ],
                    [
                        'icon' => 'fas fa-comments',
                        'title' => 'Messaging APIs',
                        'description' => 'WhatsApp, Teams, Slack, and social media platform integrations.',
                    ]
                ])
            ]
        );

        ServiceProactiveSection::updateOrCreate(
            [
                'service_id' => $service->id,
                'heading' => 'Micro-Web Application Architecture',
            ],
            [
                'image' => 'assets/img/Resources/technicalDocumentation/9.jpg',
                'subheading' => 'xApps Development Framework',
                'description' => 'Build powerful micro-web applications with AI LifeBot xApps framework using modern web technologies.',
                'features' => json_encode([
                    [
                        'icon' => 'fas fa-laptop-code',
                        'title' => 'Development Environment',
                        'description' => 'Local development setup with hot reloading and debugging tools.',
                    ],
                    [
                        'icon' => 'fas fa-cubes',
                        'title' => 'Component Library',
                        'description' => 'Reusable UI components and pre-built xApp templates.',
                    ],
                    [
                        'icon' => 'fas fa-plug',
                        'title' => 'Plugin System',
                        'description' => 'Extend functionality with custom plugins and third-party integrations.',
                    ]
                ])
            ]
        );

        PerformanceStat::updateOrCreate(
            [
                'service_id' => $service->id,
                'title' => 'Technical Specifications',
                'subtitle' => 'Platform Performance & Capabilities',
            ],
            [
                'stats' => json_encode([
                    [
                        'stat_number' => '99.9%',
                        'stat_title' => 'API Uptime',
                        'stat_description' => 'Enterprise-grade reliability with global CDN and load balancing.',
                    ],
                    [
                        'stat_number' => '<100ms',
                        'stat_title' => 'Response Time',
                        'stat_description' => 'Average API response time for optimal user experience.',
                    ],
                    [
                        'stat_number' => '50K+',
                        'stat_title' => 'Concurrent Users',
                        'stat_description' => 'Horizontal scaling capabilities for enterprise workloads.',
                    ]
                ])
            ]
        );

        VidhiraSection::updateOrCreate(
            [
                'service_id' => $service->id,
                'title' => 'Advanced Integration Patterns',
                'subtitle' => 'Enterprise Architecture & Best Practices',
            ],
            [
                'description' => 'Learn advanced integration patterns, microservices architecture, and enterprise deployment strategies for scalable AI solutions.',
                'background_image' => 'assets/img/Mask-Group-46.png',
            ]
        );

        AiPoweredEngagementSection::updateOrCreate(
            [
                'service_id' => $service->id,
                'title' => 'AI & Machine Learning Technical Guides',
                'subtitle' => 'Deep Dive into AI Capabilities',
            ],
            [
                'features' => [
                    [
                        'icon' => 'fas fa-brain',
                        'title' => 'Natural Language Understanding',
                        'description' => 'Configure and train NLU models for intent recognition and entity extraction.',
                    ],
                    [
                        'icon' => 'fas fa-robot',
                        'title' => 'Large Language Models',
                        'description' => 'Integrate and fine-tune LLMs for context-aware conversations.',
                    ],
                    [
                        'icon' => 'fas fa-lightbulb',
                        'title' => 'Generative AI',
                        'description' => 'Implement dynamic content generation and personalized responses.',
                    ],
                    [
                        'icon' => 'fas fa-database',
                        'title' => 'Knowledge AI',
                        'description' => 'Connect external knowledge bases and implement RAG architecture.',
                    ],
                    [
                        'icon' => 'fas fa-chart-line',
                        'title' => 'Analytics & Monitoring',
                        'description' => 'Set up comprehensive monitoring, logging, and performance analytics.',
                    ],
                    [
                        'icon' => 'fas fa-shield-alt',
                        'title' => 'Security & Compliance',
                        'description' => 'Implement security best practices and compliance frameworks.',
                    ]
                ],
            ]
        );

        AiBusinessInteractionSection::updateOrCreate(
            [
                'service_id' => $service->id,
                'title' => 'Developer Resources & Tools',
            ],
            [
                'features' => [
                    [
                        'icon' => 'fas fa-terminal',
                        'title' => 'CLI Tools',
                        'description' => 'Command-line interface for project management and deployment automation.',
                    ],
                    [
                        'icon' => 'fas fa-code-branch',
                        'title' => 'Version Control',
                        'description' => 'Git-based workflow for agent versioning and collaborative development.',
                    ],
                    [
                        'icon' => 'fas fa-bug',
                        'title' => 'Debugging Tools',
                        'description' => 'Advanced debugging capabilities with conversation tracing and error analysis.',
                    ],
                ],
            ]
        );

        AiStatisticalHighlight::updateOrCreate(
            [
                'service_id' => $service->id,
            ],
            [
                'stats' => [
                    [
                        'number' => '500+',
                        'title' => 'API Endpoints',
                        'description' => 'Comprehensive API coverage for all platform functionalities.',
                    ],
                    [
                        'number' => '25+',
                        'title' => 'Programming Languages',
                        'description' => 'SDKs and libraries supporting multiple programming languages.',
                    ],
                    [
                        'number' => '24/7',
                        'title' => 'Developer Support',
                        'description' => 'Dedicated technical support for developers and integrators.',
                    ],
                ],
            ]
        );
    }
}
