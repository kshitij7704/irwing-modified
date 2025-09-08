<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\CtaSection;
use Illuminate\Database\Seeder;

class SalesSupportAiSeeder extends Seeder
{
    public function run()
    {
        // Create or update the main service record
        $service = Service::updateOrCreate(
            ['slug' => 'sales-support-ai'],
            [
                'title' => 'Sales Support AI',
                'description' => 'Empower Sales to Focus on What Matters',
                'status' => 'active'
            ]
        );

        // Clear existing data
        $service->heroSection()->delete();
        $service->featuresSections()->delete();
        $service->performanceStat()->delete();
        $service->testimonials()->delete();
        $service->faqs()->delete();
        $service->ctaSection()->delete();

        // Create hero section
        $service->heroSection()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Empower Sales to Focus on What Matters',
                'subheading' => 'Reimagine Sales Efficiency with AI LifeBOT\'s Work Assistant',
                'description' => 'Transform your sales process with AI LifeBOT\'s intelligent virtual assistant powered by WorkLM so your sales team can concentrate on building relationships and closing deals while we handle the rest.',
                'image' => 'assets/img/Ai Agent/4.png',
                'cta' => 'Schedule a Demo',
                'features' => json_encode([
                    ['icon' => 'fas fa-robot', 'title' => 'AI-Powered Automation'],
                    ['icon' => 'fas fa-chart-line', 'title' => 'Actionable Insights'],
                    ['icon' => 'fas fa-handshake', 'title' => 'Focus on Relationships']
                ])
            ]
        );

        // Create features section
        $featuresSection = $service->featuresSections()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Key Capabilities',
                'description' => 'AI LifeBOT automates time-consuming tasks, delivers actionable insights, and helps your sales teams work smarter.',
                'image' => 'assets/img/sales-ai-features.jpg'
            ]
        );

        // Features List
        $features = [
            [
                'icon' => 'fas fa-database',
                'title' => 'Automate CRM Updates',
                'description' => 'AI LifeBOT uses advanced NLP to scan emails and messages, extract contact details and sales data, and auto-update your CRM. This ensures accuracy, eliminates manual entry, and keeps your pipeline clean and current.'
            ],
            [
                'icon' => 'fas fa-chart-bar',
                'title' => 'Improve Sales Forecasting',
                'description' => 'Generate accurate real-time forecasts based on deal velocity, pipeline trends, and historical data.'
            ],
            [
                'icon' => 'fas fa-comments',
                'title' => 'Deliver Personalized Sales Conversations',
                'description' => 'Use AI-powered insights to tailor every sales interaction increasing relevance and closing rates.'
            ],
            [
                'icon' => 'fas fa-sync',
                'title' => 'Automate Follow-Ups and Repetitive Tasks',
                'description' => 'AI LifeBOT ensures consistent follow-ups lead nurturing and calendar scheduling without human oversight.'
            ],
            [
                'icon' => 'fas fa-brain',
                'title' => 'Unlock Sales Intelligence',
                'description' => 'Get deep visibility into performance metrics top-performing reps and areas for improvement.'
            ],
            [
                'icon' => 'fas fa-bullhorn',
                'title' => 'Fuel Marketing with Sales Insights',
                'description' => 'Seamlessly share frontline feedback with marketing for more targeted campaigns.'
            ],
            [
                'icon' => 'fas fa-plug',
                'title' => 'Integrates with Your Existing Sales Tools',
                'description' => 'Compatible with Salesforce HubSpot Zoho and other leading CRMs and communication platforms.'
            ]
        ];

        foreach ($features as $feature) {
            $featuresSection->features()->updateOrCreate(
                [
                    'features_section_id' => $featuresSection->id,
                    'title' => $feature['title']
                ],
                [
                    'icon' => $feature['icon'],
                    'description' => $feature['description']
                ]
            );
        }

        // Create performance stats
        $service->performanceStat()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'What the Industry Is Saying About AI in Sales',
                'subtitle' => 'Trusted by Global Fortune 500 Enterprises',
                'stats' => json_encode([
                    [
                        'number' => '15%',
                        'label' => 'Boost in sales productivity (Source: Forrester)'
                    ],
                    [
                        'number' => '80%',
                        'label' => 'Of B2B sales interactions will use AI by 2025 (Source: Gartner)'
                    ],
                    [
                        'number' => '4.2x',
                        'label' => 'More likely to use AI than low-performing teams (Source: Salesforce)'
                    ]
                ])
            ]
        );

        // Create testimonials
        $testimonials = [
            [
                'stat_number' => '50+',
                'stat_label' => 'Industry Reports',
                'testimonial' => 'Featured in 50+ industry reports for UI UX excellence ease of implementation and customer satisfaction.'
            ],
            [
                'stat_number' => '2x',
                'stat_label' => 'Market Leader',
                'testimonial' => 'Named a Leader in the Emerging Market Quadrant two consecutive years for excellence in sales AI automation.'
            ],
            [
                'stat_number' => '2025',
                'stat_label' => 'Forbes Recognition',
                'testimonial' => 'Highlighted by Forbes as an Essential Gen AI Tool Transforming Sales in 2025 for its innovative approach to sales automation.'
            ],
            [
                'stat_number' => '100%',
                'stat_label' => 'Enterprise Ready',
                'testimonial' => 'With AI LifeBOT\'s Sales Solution teams gain the edge to outperform in any market condition with enterprise-grade security and scalability.'
            ]
        ];

        foreach ($testimonials as $testimonial) {
            $service->testimonials()->updateOrCreate(
                [
                    'service_id' => $service->id,
                    'stat_number' => $testimonial['stat_number']
                ],
                [
                    'stat_label' => $testimonial['stat_label'],
                    'testimonial' => $testimonial['testimonial']
                ]
            );
        }

        // Create FAQs
        $faqs = [
            [
                'question' => 'How can AI improve sales processes?',
                'answer' => 'AI automates routine tasks delivers personalized insights and ensures faster more accurate forecasting.'
            ],
            [
                'question' => 'What are the benefits of using AI in sales?',
                'answer' => 'Increased productivity enhanced lead nurturing cleaner CRM data and improved close rates.'
            ],
            [
                'question' => 'How does AI LifeBOT support sales automation?',
                'answer' => 'By streamlining CRM updates scheduling follow-ups analyzing conversations and generating insights in real time.'
            ],
            [
                'question' => 'Can AI assistants personalize sales conversations?',
                'answer' => 'Yes AI LifeBOT tailors messaging based on customer behavior history and preferences.'
            ],
            [
                'question' => 'What is the role of analytics in modern sales?',
                'answer' => 'Analytics helps sales teams identify trends optimize pipelines track KPIs and make informed decisions.'
            ]
        ];

        foreach ($faqs as $faq) {
            $service->faqs()->updateOrCreate(
                [
                    'service_id' => $service->id,
                    'question' => $faq['question']
                ],
                [
                    'answer' => $faq['answer']
                ]
            );
        }

        // Create CTA section
        $service->ctaSection()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Discover the Power of AI LifeBOT for Sales',
                'description' => 'Transform your sales engine with automation intelligence and real-time insights all built for speed and scale.',
                'cta_text' => 'Get in Touch Today',
                'cta_link' => '#',
                'background_image' => 'https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80'
            ]
        );
    }
}
