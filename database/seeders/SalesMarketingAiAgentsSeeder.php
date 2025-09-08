<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class SalesMarketingAiAgentsSeeder extends Seeder
{
    public function run()
    {
        // Update service to Sales & Marketing
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agents-sales-marketing'],
            ['title' => 'AI Agents for Sales & Marketing']
        );

        // Update hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'AI Agents for Sales & Marketing',
                'description' => 'Supercharge your sales and marketing strategy with AI-driven engagement that proactively connects with prospects, nurtures leads, and personalizes customer journeys. AI Agents analyze customer data to deliver tailored recommendations, automate follow-ups, and enhance conversion rates. Whether it\'s qualifying leads, running intelligent chat campaigns, or optimizing customer outreach, AI ensures higher engagement and accelerated revenue growth.',
                'image' => 'assets/img/Solution/Category/1.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Remove all existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();

        // Section 1: Boost Sales with AI-Powered Engagement
        $salesSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Boost Sales with AI-Powered Engagement',
            'description' => 'Transform your sales process with AI agents that engage prospects intelligently and accelerate conversions'
        ]);

        $salesFeatures = [
            [
                'icon' => 'fas fa-bullseye',
                'title' => 'Smart Lead Qualification',
                'description' => 'Instantly analyze and prioritize leads based on engagement and intent'
            ],
            [
                'icon' => 'fas fa-comments',
                'title' => 'Conversational AI Outreach',
                'description' => 'Engage prospects with real-time, personalized interactions across multiple channels'
            ],
            [
                'icon' => 'fas fa-sync-alt',
                'title' => 'Automated Follow-Ups',
                'description' => 'Keep leads warm with timely, AI-driven communications that increase conversion rates'
            ]
        ];

        foreach ($salesFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $salesSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Section 2: Optimize Marketing with AI-Driven Insights
        $marketingSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Optimize Marketing with AI-Driven Insights',
            'description' => 'Leverage predictive analytics and personalized content to maximize campaign effectiveness'
        ]);

        $marketingFeatures = [
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Predictive Customer Analytics',
                'description' => 'Identify trends and preferences to deliver highly targeted campaigns'
            ],
            [
                'icon' => 'fas fa-gift',
                'title' => 'Personalized Content & Offers',
                'description' => 'Tailor messages and promotions based on customer behavior and interests'
            ],
            [
                'icon' => 'fas fa-envelope',
                'title' => 'AI-Powered Chat & Email Campaigns',
                'description' => 'Automate marketing workflows for seamless customer engagement'
            ]
        ];

        foreach ($marketingFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $marketingSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Section 3: Accelerate Growth with Smarter AI Integration
        $growthSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Accelerate Growth with Smarter AI Integration',
            'description' => 'Connect your AI agents with existing systems for seamless operations and continuous optimization'
        ]);

        $growthFeatures = [
            [
                'icon' => 'fas fa-plug',
                'title' => 'CRM & Marketing Automation',
                'description' => 'Connect with tools like Salesforce and HubSpot for seamless operations'
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Omnichannel AI Assistance',
                'description' => 'Engage customers across chat, email, social media, and voice platforms'
            ],
            [
                'icon' => 'fas fa-robot',
                'title' => 'Continuous Learning & Optimization',
                'description' => 'AI adapts to customer behaviors, refining strategies for maximum ROI'
            ]
        ];

        foreach ($growthFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $growthSection->id,
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
                'subtitle' => 'Our AI Agents for Sales & Marketing deliver measurable results that transform customer engagement',
                'stats' => json_encode([
                    [
                        'stat_number' => '50%',
                        'stat_title' => 'Agent Turnover Decrease',
                        'stat_description' => 'reduction in agent turnover'
                    ],
                    [
                        'stat_number' => '>3 min',
                        'stat_title' => 'Time Saved per Interaction',
                        'stat_description' => 'with automated call wrap-up'
                    ],
                    [
                        'stat_number' => '32%',
                        'stat_title' => 'CSAT Improvement',
                        'stat_description' => 'increase in customer satisfaction'
                    ]
                ])
            ]
        );
    }
}
