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

class AIAgentsforSalesMarketingSeeder extends Seeder
{
    public function run()
    {
        // Create or update the service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agents-sales-marketing'],
            ['title' => 'AI Agents for Sales & Marketing']
        );

        // Create the hero section
        ServiceHeroSection::create([
            'service_id' => $service->id,
            'heading' => 'AI Agents for Sales & Marketing',
            'description' => 'Supercharge your sales and marketing strategy with AI-driven engagement that proactively connects with prospects, nurtures leads, and personalizes customer journeys. AI Agents analyze customer data to deliver tailored recommendations, automate follow-ups, and enhance conversion rates. Whether it\'s qualifying leads, running intelligent chat campaigns, or optimizing customer outreach, AI ensures higher engagement and accelerated revenue growth.',
            'image' => 'assets/img/Solution/Category/1.jpg',
            'cta' => 'Request Demo',
        ]);

        // Create the features section
        $featuresSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Seamless & Smart Sales & Marketing Engagement',
            'description' => 'Designed to understand intent, detect sentiment, and personalize conversations, AI Agents for Sales & Marketing improve lead conversion and customer engagement while reducing operational costs.',
        ]);

        // Features list
        $features = [
            [
                'icon' => 'fas fa-bullseye',
                'title' => 'Smart Lead Qualification',
                'description' => 'Instantly analyze and prioritize leads based on engagement and intent.'
            ],
            [
                'icon' => 'fas fa-comments',
                'title' => 'Conversational AI Outreach',
                'description' => 'Engage prospects with real-time, personalized interactions across multiple channels.'
            ],
            [
                'icon' => 'fas fa-sync-alt',
                'title' => 'Automated Follow-Ups',
                'description' => 'Keep leads warm with timely, AI-driven communications that increase conversion rates.'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Predictive Analytics',
                'description' => 'Identify trends and preferences to deliver highly targeted campaigns.'
            ]
        ];

        foreach ($features as $feature) {
            ServiceFeature::create([
                'features_section_id' => $featuresSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        // Create the about section - Boost Sales
        ServiceAboutSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/Solution/Category/2.jpg',
            'subheading' => 'Boost Sales',
            'heading' => 'AI-Powered Engagement',
            'description' => 'Smart Lead Qualification – Instantly analyze and prioritize leads based on engagement and intent.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-bullseye',
                    'title' => 'Smart Lead Qualification',
                    'description' => 'Instantly analyze and prioritize leads based on engagement and intent.'
                ],
                [
                    'icon' => 'fas fa-comments',
                    'title' => 'Conversational AI Outreach',
                    'description' => 'Engage prospects with real-time, personalized interactions across multiple channels.'
                ],
                [
                    'icon' => 'fas fa-sync-alt',
                    'title' => 'Automated Follow-Ups',
                    'description' => 'Keep leads warm with timely, AI-driven communications that increase conversion rates.'
                ]
            ])
        ]);

        // Create the agent support section - Optimize Marketing
        ServiceAgentSupportSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/Solution/Category/3.jpg',
            'subheading' => 'Optimize Marketing',
            'heading' => 'AI-Driven Insights',
            'description' => 'Predictive Customer Analytics – Identify trends and preferences to deliver highly targeted campaigns.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-chart-line',
                    'title' => 'Predictive Customer Analytics',
                    'description' => 'Identify trends and preferences to deliver highly targeted campaigns.'
                ],
                [
                    'icon' => 'fas fa-envelope-open-text',
                    'title' => 'Personalized Content & Offers',
                    'description' => 'Tailor messages and promotions based on customer behavior and interests.'
                ],
                [
                    'icon' => 'fas fa-robot',
                    'title' => 'AI-Powered Campaigns',
                    'description' => 'Automate marketing workflows for seamless customer engagement.'
                ]
            ])
        ]);

        // Create the proactive outreach section - Accelerate Growth
        ServiceProactiveSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/Solution/Category/4.jpg',
            'subheading' => 'Accelerate Growth',
            'heading' => 'Smarter AI Integration',
            'description' => 'CRM & Marketing Automation Compatibility – Connect with tools like Salesforce, HubSpot, and more for seamless operations.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-plug',
                    'title' => 'CRM & Automation Compatibility',
                    'description' => 'Connect with tools like Salesforce, HubSpot, and more for seamless operations.'
                ],
                [
                    'icon' => 'fas fa-globe',
                    'title' => 'Omnichannel AI Assistance',
                    'description' => 'Engage customers across chat, email, social media, and voice platforms.'
                ],
                [
                    'icon' => 'fas fa-sync',
                    'title' => 'Continuous Learning & Optimization',
                    'description' => 'AI adapts to customer behaviors, refining strategies for maximum ROI.'
                ]
            ])
        ]);

        // Create the Performance Stats Section
        PerformanceStat::create([
            'service_id' => $service->id,
            'title' => 'Performance Stats',
            'subtitle' => 'Our AI Agents for Sales & Marketing deliver measurable results that transform customer engagement and revenue growth',
            'stats' => json_encode([
                [
                    'stat_number' => '50%',
                    'stat_title' => 'Agent Turnover Decrease',
                    'stat_description' => 'reduction in agent turnover'
                ],
                [
                    'stat_number' => '>3 min',
                    'stat_title' => 'Time Saving',
                    'stat_description' => 'with automated call wrap-up'
                ],
                [
                    'stat_number' => '32%',
                    'stat_title' => 'CSAT Improvement',
                    'stat_description' => 'increase in customer satisfaction'
                ]
            ])
        ]);
    }
}
