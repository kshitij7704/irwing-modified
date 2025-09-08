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

class FinanceAiSeeder extends Seeder
{
    public function run()
    {
        // Create or update the main service record
        $service = Service::updateOrCreate(
            ['slug' => 'finance-ai'],
            [
                'title' => 'Finance AI',
                'description' => 'Uncomplicate Your Finance Processes',
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
                'heading' => 'Uncomplicate Your Finance Processes',
                'subheading' => 'Streamline Financial Operations with AI LifeBOT\'s Work Assistant',
                'description' => 'Empower your finance teams to streamline operations, boost efficiency, and drive better financial outcomes. AI LifeBOT\'s intelligent virtual assistant helps finance teams operate faster, smarter, and with greater precision.',
                'image' => 'assets/img/Ai Agent/6.png',
                'cta' => 'Get in Touch',
                'features' => json_encode([
                    ['icon' => 'fas fa-chart-line', 'title' => 'Accurate Financial Forecasting'],
                    ['icon' => 'fas fa-file-invoice-dollar', 'title' => 'Smarter Document Handling'],
                    ['icon' => 'fas fa-users', 'title' => 'Faster Collaboration']
                ])
            ]
        );

        // Create features section
        $featuresSection = $service->featuresSections()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Key Capabilities',
                'description' => 'Trusted by Global Fortune 500 Enterprises',
                'image' => 'assets/img/finance-ai-features.jpg'
            ]
        );

        // Features List
        $features = [
            [
                'icon' => 'fas fa-sync',
                'title' => 'Accurate Financial Forecasting & Analysis',
                'description' => 'Make informed decisions with real-time financial data, trends, and predictive insights.'
            ],
            [
                'icon' => 'fas fa-file-alt',
                'title' => 'Smarter Document Handling',
                'description' => 'Automate data extraction, classification, and validation from invoices, contracts, and statements.'
            ],
            [
                'icon' => 'fas fa-handshake',
                'title' => 'Faster, Smarter Collaboration',
                'description' => 'Enable cross-functional teams to resolve financial queries quickly and efficiently.'
            ],
            [
                'icon' => 'fas fa-chart-bar',
                'title' => 'Enhanced Financial Performance',
                'description' => 'Identify gaps, monitor KPIs, and provide on-demand training resources to improve team output.'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Robust Compliance Management',
                'description' => 'Maintain regulatory compliance with automated monitoring, alerts, and audit-ready reporting.'
            ],
            [
                'icon' => 'fas fa-brain',
                'title' => 'AI-Powered Intelligence',
                'description' => 'Revolutionize finance operations using generative AI and advanced analytics for strategic decision-making.'
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
                'title' => 'Finance Transformation: Industry Insights',
                'subtitle' => 'Drive Success with AI-Powered Intelligence',
                'stats' => json_encode([
                    [
                        'number' => '61%',
                        'label' => 'of finance leaders consider AI a top priority within the next 3 years (Source: Gartner)'
                    ],
                    [
                        'number' => '30%',
                        'label' => 'increase in productivity and up to 50% cost reduction with AI-based finance solutions (Source: Forrester)'
                    ],
                    [
                        'number' => '50%',
                        'label' => 'of finance teams will adopt AI assistants and advanced analytics by 2025 (Source: Gartner)'
                    ]
                ])
            ]
        );

        // Create testimonials
        $testimonials = [
            [
                'stat_number' => '2x',
                'stat_label' => 'Market Leader Recognition',
                'testimonial' => 'Recognized as a Leader in the Emerging Market Quadrant (twice consecutively) for transforming enterprise finance with AI.'
            ],
            [
                'stat_number' => '50+',
                'stat_label' => 'Industry Reports',
                'testimonial' => 'Featured in 50+ analyst reports for UI/UX excellence, ease of deployment, and high CSAT in finance automation.'
            ],
            [
                'stat_number' => '2025',
                'stat_label' => 'Forbes Recognition',
                'testimonial' => 'Named in Forbes\' "Essential Gen AI Tools Transforming Finance in 2025" for revolutionary finance operations.'
            ],
            [
                'stat_number' => 'Enterprise',
                'stat_label' => 'Built for Scale',
                'testimonial' => 'Multimodal, multichannel, multilingual capabilities with seamless ERP and financial systems integration.'
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
                'question' => 'How can AI enhance financial management processes?',
                'answer' => 'By automating manual tasks, improving forecast accuracy, and providing real-time insights.'
            ],
            [
                'question' => 'What are the benefits of AI in finance?',
                'answer' => 'Increased efficiency, reduced operational costs, improved compliance, and smarter decision-making.'
            ],
            [
                'question' => 'How does AI LifeBOT\'s Work Assistant support finance teams?',
                'answer' => 'It handles tasks such as data extraction, budget tracking, invoice approvals, and financial reporting.'
            ],
            [
                'question' => 'Can AI-powered assistants help with planning and budgeting?',
                'answer' => 'Yes. AI LifeBOT supports planning by analyzing trends, forecasting budgets, and identifying cost-saving areas.'
            ],
            [
                'question' => 'What role does AI play in risk and fraud detection?',
                'answer' => 'AI LifeBOT continuously monitors patterns and anomalies to flag potential risks and ensure compliance.'
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
                'heading' => 'Discover the Power of AI LifeBOT for Finance',
                'description' => 'Transform your finance function with intelligent automation and enterprise-grade AI.',
                'cta_text' => 'Get in Touch Today',
                'cta_link' => '#',
                'background_image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80'
            ]
        );
    }
}
