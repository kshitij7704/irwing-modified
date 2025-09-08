<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;

class AiLifeBotPlatformSeeder extends Seeder
{
    public function run()
    {
        // Create or update service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-life-bot'],
            ['title' => 'AI LifeBOT Platform']
        );

        // Update hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Your Intelligent Digital Companion',
                'description' => 'AI LifeBOT is your 24/7 AI-powered assistant, designed to simplify daily tasks, provide instant support, and enhance your digital interactions across multiple platforms. Whether you need help managing schedules, making smart decisions, or simply engaging in meaningful conversations, AI LifeBOT is here to understand, assist, and evolve with you.',
                'image' => 'assets/img/Solution/Enterprises/1.jpeg',
                'cta' => 'Get Started',
            ]
        );

        // Remove existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();

        // Section 1: Core Features
        $section1 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Your AI, Your Way',
            'description' => 'Unlike generic chatbots, AI LifeBOT provides personalized and contextual support based on your needs'
        ]);

        $features1 = [
            [
                'icon' => 'fas fa-globe',
                'title' => 'Multilingual Support',
                'description' => 'Communicates in 100+ languages'
            ],
            [
                'icon' => 'fas fa-calendar-alt',
                'title' => 'Smart Scheduling',
                'description' => 'Manages appointments and reminders'
            ],
            [
                'icon' => 'fas fa-lightbulb',
                'title' => 'AI-Powered Insights',
                'description' => 'Offers data-driven suggestions'
            ],
            [
                'icon' => 'fas fa-sync-alt',
                'title' => 'Seamless Integration',
                'description' => 'Syncs with your apps, devices, and platforms'
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

        // Section 2: Key Capabilities
        $section2 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'AI LifeBOT – More Than Just a Chatbot',
            'description' => 'A smart companion that learns, adapts, and grows with you'
        ]);

        $features2 = [
            [
                'icon' => 'fas fa-comments',
                'title' => 'Conversational AI',
                'description' => 'Engage in natural conversations that understand context and emotions'
            ],
            [
                'icon' => 'fas fa-tasks',
                'title' => 'Intelligent Task Management',
                'description' => 'Organizes schedules, sets reminders, and syncs with calendars'
            ],
            [
                'icon' => 'fas fa-gift',
                'title' => 'Personalized Recommendations',
                'description' => 'Offers tailored suggestions based on your preferences'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Secure & Private',
                'description' => 'Ensures your information remains confidential and protected'
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

        // Section 3: Business Solutions
        $section3 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'LifeBOT for Business & Productivity',
            'description' => 'Boost efficiency and streamline operations with enterprise solutions'
        ]);

        $features3 = [
            [
                'icon' => 'fas fa-headset',
                'title' => 'AI-Powered Customer Support',
                'description' => 'Handle inquiries, resolve issues, and improve satisfaction'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Smart Decision Making',
                'description' => 'Analyze trends and provide insights for better strategies'
            ],
            [
                'icon' => 'fas fa-users',
                'title' => 'Team Collaboration',
                'description' => 'Automate workflows, schedule meetings, and enhance efficiency'
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

        // Section 4: Everyday Life Features
        $section4 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'AI LifeBOT for Everyday Life',
            'description' => 'Stay organized, informed, and entertained with AI-driven capabilities'
        ]);

        $features4 = [
            [
                'icon' => 'fas fa-music',
                'title' => 'Entertainment on Demand',
                'description' => 'Stream music, podcasts, and audiobooks with voice commands'
            ],
            [
                'icon' => 'fas fa-bell',
                'title' => 'Real-Time Updates',
                'description' => 'Get instant weather forecasts, news, and alerts'
            ],
            [
                'icon' => 'fas fa-book',
                'title' => 'Learning & Knowledge',
                'description' => 'Ask anything, from fun facts to complex research topics'
            ],
            [
                'icon' => 'fas fa-shopping-cart',
                'title' => 'Shopping & Deals',
                'description' => 'Find discounts, compare products, and get shopping assistance'
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

        // Section 5: Human-AI Interaction
        $section5 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Redefining Human-AI Interaction',
            'description' => 'More than an assistant—a companion that learns and adapts'
        ]);

        $features5 = [
            [
                'icon' => 'fas fa-brain',
                'title' => 'Smarter with Every Interaction',
                'description' => 'Continuously evolves to serve you better'
            ],
            [
                'icon' => 'fas fa-user-cog',
                'title' => 'Customizable AI Personality',
                'description' => 'Choose voice, tone, and personality traits'
            ],
            [
                'icon' => 'fas fa-gamepad',
                'title' => 'Interactive & Fun',
                'description' => 'Play games, engage in storytelling, or have casual chats'
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

        // Section 6: Enterprise Integration
        $section6 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'subheading' => 'With AI Life Bot\'s enterprise integrations, businesses experience higher productivity, smarter decision-making, and a more seamless digital ecosystem—empowering teams to focus on growth, innovation, and customer success.',
            'heading' => 'Seamless Enterprise Integrations for Enhanced Efficiency',
            'description' => 'Unlock the full potential of AI-powered automation by integrating AI Life Bot with leading enterprise platforms. Our intelligent AI solutions seamlessly connect with Shopify, Zoho, LeadSquared, Kylas, SAP, Microsoft Dynamics, Salesforce, and Zapier, ensuring smooth data flow and optimized business operations.'
        ]);

        $features6 = [
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Effortless Workflow Automation',
                'description' => 'Reduce manual tasks by automating processes across CRM, ERP, and eCommerce platforms.'
            ],
            [
                'icon' => 'fas fa-database',
                'title' => 'Real-Time Data Sync',
                'description' => 'Keep all your business tools connected for up-to-date insights and faster decision-making.'
            ],
            [
                'icon' => 'fas fa-comments',
                'title' => 'Omnichannel Customer Engagement',
                'description' => 'Deliver personalized interactions by integrating AI-driven responses across sales, marketing, and support channels.'
            ],
            [
                'icon' => 'fas fa-expand-arrows-alt',
                'title' => 'Scalable & Secure',
                'description' => 'Designed to adapt to your growing business needs while ensuring data privacy and security.'
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

        // NEW SECTION: Transforming Business Operations
        $section7 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Transforming Business Operations',
            'description' => 'Experience operational excellence through AI-powered automation'
        ]);

        $features7 = [
            [
                'icon' => 'fas fa-store',
                'title' => 'E-Commerce Excellence',
                'description' => 'Automate order tracking, customer support, and inventory management with Shopify & Zapier integrations.'
            ],
            [
                'icon' => 'fas fa-bullseye',
                'title' => 'Smarter Lead Management',
                'description' => 'Capture, qualify, and nurture leads effortlessly through Zoho, LeadSquared, and Kylas.'
            ],
            [
                'icon' => 'fas fa-network-wired',
                'title' => 'Optimized Enterprise Workflows',
                'description' => 'Streamline processes and boost efficiency with seamless SAP & Microsoft Dynamics connections.'
            ],
            [
                'icon' => 'fas fa-handshake',
                'title' => 'Enhanced Sales & Support',
                'description' => 'Drive conversions and improve customer satisfaction with Salesforce-powered AI automation.'
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
    }
}
