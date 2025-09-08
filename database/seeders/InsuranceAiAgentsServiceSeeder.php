<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class InsuranceAiAgentsServiceSeeder extends Seeder
{
    public function run()
    {
        // Create or update service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agents-insurance'],
            ['title' => 'AI Agents for Insurance']
        );

        // Update hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'The Future of Smart Insurance Assistance',
                'description' => 'Revolutionizing insurance services with AI-powered virtual assistants that provide instant, personalized, and secure support—anytime, anywhere.',
                'image' => 'assets/img/Solution/Industry/ai-agents-insurance/1.png',
                'cta' => 'Request Demo',
            ]
        );

        // Remove existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();

        // Section 1: Trusted by Leading Insurance Providers
        $section1 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Trusted by Leading Insurance Providers',
            'description' => 'Show logos of top insurance companies, financial institutions, and service providers'
        ]);

        // Section 2: What is AI LifeBOT?
        $section2 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'What is AI LifeBOT?',
            'description' => 'AI LifeBOT is a next-gen AI assistant designed to enhance customer experiences, support insurance agents, and automate routine processes. From answering policy queries to processing claims, AI LifeBOT ensures seamless, 24/7 support across chat, voice, and digital platforms.'
        ]);

        // Section 3: 24/7 AI-Powered Customer Support
        $section3 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => '24/7 AI-Powered Customer Support',
            'description' => 'Provide immediate assistance via chat, voice, and digital touchpoints, ensuring policyholders get answers without long wait times.'
        ]);

        // Section 4: Automated Key Insurance Services
        $section4 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Automated Key Insurance Services',
            'description' => 'AI-powered solutions for comprehensive insurance support'
        ]);

        $features4 = [
            [
                'icon' => 'fas fa-file-contract',
                'title' => 'Policy Information & Updates',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-clipboard-check',
                'title' => 'Claims Processing & Assistance',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-credit-card',
                'title' => 'Billing & Payment Support',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Fraud Detection & Prevention',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Personalized Policy Recommendations',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-user-tie',
                'title' => 'Agent Assistance & Lead Generation',
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
            'description' => 'Advanced AI solutions designed specifically for insurance'
        ]);

        $features5 = [
            [
                'icon' => 'fas fa-brain',
                'title' => 'Pretrained with Insurance Intelligence',
                'description' => 'Understands policy structures, claim procedures, and regulatory guidelines to provide accurate, human-like responses.'
            ],
            [
                'icon' => 'fas fa-lock',
                'title' => 'Compliance & Data Security',
                'description' => 'AI LifeBOT ensures complete data security, adhering to global compliance standards, including GDPR and industry-specific regulations.'
            ],
            [
                'icon' => 'fas fa-users',
                'title' => 'AI That Works Alongside Your Team',
                'description' => 'Supports insurance agents by automating repetitive tasks, reducing workload, and improving operational efficiency.'
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Multilingual & Omnichannel Support',
                'description' => 'AI LifeBOT communicates in over 100 languages and integrates seamlessly with CRM systems, underwriting tools, and digital platforms.'
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
            'heading' => 'Revolutionize Insurance Services with AI LifeBOT',
            'description' => 'Transform insurance services with AI-powered solutions'
        ]);

        $features6 = [
            [
                'icon' => 'fas fa-smile',
                'title' => 'Boost customer satisfaction',
                'description' => 'with faster, personalized insurance support'
            ],
            [
                'icon' => 'fas fa-money-bill-wave',
                'title' => 'Reduce operational costs',
                'description' => 'by automating repetitive tasks and optimizing resources'
            ],
            [
                'icon' => 'fas fa-hands-helping',
                'title' => 'Empower insurance teams',
                'description' => 'by freeing up agents for high-value interactions'
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
                'title' => 'Transforming Insurance with AI LifeBOT',
                'subtitle' => 'Measurable results that transform insurance services',
                'stats' => json_encode([
                    [
                        'stat_number' => 'Significant',
                        'stat_title' => 'Increase in NPS',
                        'stat_description' => 'improvement with AI-powered customer service'
                    ],
                    [
                        'stat_number' => '39%',
                        'stat_title' => 'Lower AHT',
                        'stat_description' => 'reduction in handling time within three months'
                    ],
                    [
                        'stat_number' => '45%',
                        'stat_title' => 'Faster Response Times',
                        'stat_description' => 'decrease in average response time'
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
            'image' => 'assets/img/Solution/Industry/ai-agents-insurance/cta.jpg'
        ]);
    }
} 