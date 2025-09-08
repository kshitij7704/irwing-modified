<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class RetailAiAgentsServiceSeeder extends Seeder
{
    public function run()
    {
        // Create or update service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agents-retail'],
            ['title' => 'AI Agents for Retail & E-Commerce']
        );

        // Update hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'The Future of Smart Retail & E-Commerce Assistance',
                'description' => 'Revolutionizing shopping experiences with AI-powered virtual assistants that provide instant, personalized, and seamless customer support—anytime, anywhere.',
                'image' => 'assets/img/Solution/Industry/aiAgentRetail/1.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Remove existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();

        // Section 2: What is AI LifeBOT?
        $section2 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'What is AI LifeBOT?',
            'description' => 'AI LifeBOT is a next-gen AI assistant designed to enhance customer experiences, support sales teams, and automate key retail processes. From answering product inquiries to managing returns, AI LifeBOT ensures 24/7, omnichannel customer engagement across chat, voice, and digital platforms.'
        ]);

        // Section 3: 24/7 AI-Powered Customer Support
        $section3 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => '24/7 AI-Powered Customer Support',
            'description' => 'Provide real-time assistance via chat, voice, and digital touchpoints, ensuring customers get fast, reliable support without delays.'
        ]);

        // Section 4: Automated Key Retail & E-Commerce Services
        $section4 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Automated Key Retail & E-Commerce Services',
            'description' => 'AI-powered solutions for comprehensive retail support'
        ]);

        $features4 = [
            [
                'icon' => 'fas fa-gift',
                'title' => 'Product Recommendations',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-truck',
                'title' => 'Order Tracking & Returns',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-shopping-cart',
                'title' => 'Cart Abandonment Recovery',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-tags',
                'title' => 'Personalized Promotions',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-medal',
                'title' => 'Loyalty Program Assistance',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Fraud Prevention & Security',
                'description' => ''
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

        // Section 5: Why Choose AI LifeBOT
        $section5 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Why Choose AI LifeBOT?',
            'description' => 'Advanced AI solutions designed specifically for retail and e-commerce'
        ]);

        $features5 = [
            [
                'icon' => 'fas fa-brain',
                'title' => 'Pretrained with Retail Intelligence',
                'description' => 'Understands product catalogs, order management, and customer behavior to provide accurate, human-like interactions.'
            ],
            [
                'icon' => 'fas fa-plug',
                'title' => 'Seamless E-Commerce Integration',
                'description' => 'Connects effortlessly with Shopify, Magento, WooCommerce, and other major platforms to streamline operations.'
            ],
            [
                'icon' => 'fas fa-users',
                'title' => 'AI That Works Alongside Your Sales Team',
                'description' => 'Supports agents by automating repetitive tasks, reducing handling times, and improving operational efficiency.'
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Omnichannel & Multilingual Support',
                'description' => 'AI LifeBOT engages with customers in over 100 languages across websites, mobile apps, social media, and messaging platforms.'
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

        // Section 6: Benefits
        $section6 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Revolutionize the Shopping Experience with AI LifeBOT',
            'description' => 'Transform retail operations with AI-powered solutions'
        ]);

        $features6 = [
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Boost conversion rates',
                'description' => 'with personalized AI-driven interactions'
            ],
            [
                'icon' => 'fas fa-money-bill-wave',
                'title' => 'Reduce operational costs',
                'description' => 'by automating customer inquiries and order management'
            ],
            [
                'icon' => 'fas fa-smile',
                'title' => 'Enhance customer satisfaction',
                'description' => 'with instant, 24/7 AI support'
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

        // Update performance stats
        PerformanceStat::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'Transforming Retail & E-Commerce with AI LifeBOT',
                'subtitle' => 'Measurable results that transform shopping experiences',
                'stats' => json_encode([
                    [
                        'stat_number' => '75%',
                        'stat_title' => 'Routine Inquiries Handled',
                        'stat_description' => 'reducing workload for human agents'
                    ],
                    [
                        'stat_number' => '40%',
                        'stat_title' => 'Faster Checkout Process',
                        'stat_description' => 'minimizing cart abandonment with AI-powered assistance'
                    ],
                    [
                        'stat_number' => '30%',
                        'stat_title' => 'Customer Retention Increase',
                        'stat_description' => 'personalized AI-driven engagement improves brand loyalty'
                    ]
                ])
            ]
        );

        // Final CTA Section
        ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Get Started with AI LifeBOT Today',
            'description' => 'Explore AI LifeBOT',
            'cta' => 'Request a Demo',
            'image' => 'assets/img/Solution/Industry/aiAgentRetail/cta.jpg'
        ]);
    }
}
