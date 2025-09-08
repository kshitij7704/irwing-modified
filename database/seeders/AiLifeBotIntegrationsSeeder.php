<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class AiLifeBotIntegrationsSeeder extends Seeder
{
    public function run()
    {
        // Create or update service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-lifebot'],
            ['title' => 'AI LifeBOT: Enterprise-Grade Omnichannel AI Platform']
        );

        // Update hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Transforming Customer Interactions with AI-Driven Automation',
                'description' => 'AI LifeBOT is a next-generation AI platform designed to enhance customer engagement across industries. It enables enterprises to deploy, manage, and scale intelligent multi-agent AI solutions that deliver seamless, personalized, and efficient customer interactions.',
                'image' => 'assets/img/Platform/Ai Life Bot Platform/1.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Remove existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();

        // Section 1: Platform Overview
        $section1 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'AI LifeBOT Platform Overview',
            'description' => 'Empowers organizations to integrate AI-driven automation into customer interactions, ensuring 24/7 responsiveness, hyper-personalized engagement, and streamlined workflows.'
        ]);

        $features1 = [
            [
                'icon' => 'fas fa-language',
                'title' => '150+ Languages Supported',
                'description' => 'Deliver truly global support'
            ],
            [
                'icon' => 'fas fa-server',
                'title' => '30K+ Concurrent Interactions',
                'description' => 'Handle high volumes with ease'
            ],
            [
                'icon' => 'fas fa-plug',
                'title' => '100+ Prebuilt Integrations',
                'description' => 'Seamlessly connect with existing business systems'
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

        // Section 2: Revolutionizing Customer Engagement
        $section2 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Revolutionizing Customer Engagement',
            'description' => 'Built on cutting-edge AI models designed to optimize enterprise customer service operations'
        ]);

        $features2 = [
            [
                'icon' => 'fas fa-brain',
                'title' => 'Adaptive Intelligence',
                'description' => 'Powered by advanced LLMs to dynamically adapt, comprehend complex queries, and execute tasks autonomously'
            ],
            [
                'icon' => 'fas fa-user-circle',
                'title' => 'Hyper-Personalized Conversations',
                'description' => 'Customizes responses based on user history, preferences, and context'
            ],
            [
                'icon' => 'fas fa-network-wired',
                'title' => 'Hybrid AI Architecture',
                'description' => 'Blends structured intent-based automation with generative AI'
            ],
            [
                'icon' => 'fas fa-comments',
                'title' => 'Multimodal Communication',
                'description' => 'Combines text, voice, multimedia, and interactive features'
            ],
            [
                'icon' => 'fas fa-people-arrows',
                'title' => 'Collaborative AI Workforce',
                'description' => 'Ensures smooth task execution and intelligent task handovers'
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

        // Section 3: Enterprise-Ready AI
        $section3 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Enterprise-Ready AI for Contact Centers',
            'description' => 'Seamlessly integrates into enterprise ecosystems for customer support, sales, and service teams'
        ]);

        $features3 = [
            [
                'icon' => 'fas fa-headset',
                'title' => 'Contact Center Integration',
                'description' => 'Connect with digital, phone, live chat, and helpdesk systems'
            ],
            [
                'icon' => 'fas fa-sync-alt',
                'title' => 'Business System Connectivity',
                'description' => 'Utilize prebuilt integrations with CRM, ERP, and ticketing platforms'
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Omnichannel Support',
                'description' => 'Deploy AI Agents across websites, apps, messaging, and social media'
            ],
            [
                'icon' => 'fas fa-robot',
                'title' => 'Best-in-Class AI',
                'description' => 'Leverage state-of-the-art AI models for human-like conversations'
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

        // Section 4: AI Agent Management
        $section4 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Comprehensive AI Agent Management',
            'description' => 'Offers robust AI orchestration capabilities to create, scale, and optimize AI-driven workflows'
        ]);

        $features4 = [
            [
                'icon' => 'fas fa-rocket',
                'title' => 'AI Agent Onboarding',
                'description' => 'Deploy AI Agents in minutes with customizable personas'
            ],
            [
                'icon' => 'fas fa-database',
                'title' => 'Knowledge-Driven AI',
                'description' => 'Tap into structured and unstructured data sources for accurate responses'
            ],
            [
                'icon' => 'fas fa-cogs',
                'title' => 'AI Agent Orchestration',
                'description' => 'Assign roles and automate workflows for AI Agents'
            ],
            [
                'icon' => 'fas fa-sliders-h',
                'title' => 'LLM Optimization',
                'description' => 'Select best-performing LLMs for specific tasks'
            ],
            [
                'icon' => 'fas fa-chart-bar',
                'title' => 'AI-Powered Insights',
                'description' => 'Monitor performance with advanced analytics and reporting'
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

        // Section 5: Enterprise Trust
        $section5 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Why Enterprises Trust AI LifeBOT',
            'description' => 'Designed for enterprise-scale operations and security'
        ]);

        $features5 = [
            [
                'icon' => 'fas fa-expand-arrows-alt',
                'title' => 'Scalable & Resilient',
                'description' => 'Handle millions of interactions seamlessly'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Secure & Compliant',
                'description' => 'Adheres to GDPR, HIPAA, SOC2, and enterprise security standards'
            ],
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Flexible & Customizable',
                'description' => 'Deploy on SaaS, cloud, or on-premises with API-driven extensibility'
            ],
            [
                'icon' => 'fas fa-arrows-alt',
                'title' => 'Adaptive AI',
                'description' => 'Combines generative AI with structured workflows for precision'
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

        // Section 6: Core Capabilities
        $section6 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Next-Gen AI for Exceptional Customer Experiences',
            'description' => 'Harnesses Conversational AI, NLP, and Machine Learning for intelligent automation'
        ]);

        $features6 = [
            [
                'icon' => 'fas fa-comment-dots',
                'title' => 'Context-Aware AI Assistants',
                'description' => 'Deliver humanlike, empathetic responses by understanding complex inquiries'
            ],
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Intelligent Automation',
                'description' => 'Optimize workflows and eliminate repetitive tasks'
            ],
            [
                'icon' => 'fas fa-layer-group',
                'title' => 'Omnichannel Presence',
                'description' => 'Ensure seamless experience across voice, chat, email, and social media'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Real-Time Insights & Analytics',
                'description' => 'Leverage data-driven intelligence for smarter decision-making'
            ]
        ];

        foreach ($features6 as $feature) {
            ServiceFeature::create([
                'features_section_id' => $section6->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Section 7: Enterprise Integrations
        $section7 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Seamless Enterprise Integrations',
            'description' => 'Effortlessly connects with industry-leading platforms for interoperability'
        ]);

        $features7 = [
            [
                'icon' => 'fas fa-users',
                'title' => 'CRM & Customer Engagement',
                'description' => 'Salesforce, Zoho, LeadSquared, Kylas, Microsoft Dynamics'
            ],
            [
                'icon' => 'fas fa-shopping-cart',
                'title' => 'E-Commerce & Retail',
                'description' => 'Shopify, SAP'
            ],
            [
                'icon' => 'fas fa-random',
                'title' => 'Workflow Automation',
                'description' => 'Zapier and other automation tools'
            ]
        ];

        foreach ($features7 as $feature) {
            ServiceFeature::create([
                'features_section_id' => $section7->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Section 8: Future of AI-Powered Service
        $section8 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'AI LifeBot: The Future of AI-Powered Customer Service',
            'description' => 'Built for enterprise-scale operations'
        ]);

        $features8 = [
            [
                'icon' => 'fas fa-language',
                'title' => '100+ Supported Languages',
                'description' => 'Expand your reach with multilingual capabilities'
            ],
            [
                'icon' => 'fas fa-bolt',
                'title' => '25K+ Concurrent Interactions',
                'description' => 'Deliver seamless assistance at scale'
            ],
            [
                'icon' => 'fas fa-tools',
                'title' => '100+ Prebuilt Tools & Connectors',
                'description' => 'Accelerate AI adoption with ready-to-use integrations'
            ]
        ];

        foreach ($features8 as $feature) {
            ServiceFeature::create([
                'features_section_id' => $section8->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Section 9: Why Choose AI LifeBot
        $section9 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Why AI LifeBot?',
            'description' => 'Enterprise-grade solutions for intelligent customer engagement'
        ]);

        $features9 = [
            [
                'icon' => 'fas fa-expand',
                'title' => 'Scalable & Adaptive',
                'description' => 'Handle millions of interactions with AI-driven efficiency'
            ],
            [
                'icon' => 'fas fa-lock',
                'title' => 'Secure & Compliant',
                'description' => 'Meets GDPR, SOC2, HIPAA, and enterprise security standards'
            ],
            [
                'icon' => 'fas fa-edit',
                'title' => 'Customizable & Industry-Specific',
                'description' => 'Tailor AI capabilities to unique business needs'
            ],
            [
                'icon' => 'fas fa-lightbulb',
                'title' => 'Innovative & Future-Ready',
                'description' => 'Stay ahead with cutting-edge AI automation'
            ]
        ];

        foreach ($features9 as $feature) {
            ServiceFeature::create([
                'features_section_id' => $section9->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }
    }
}
