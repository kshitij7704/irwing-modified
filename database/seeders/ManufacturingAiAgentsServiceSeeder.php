<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class ManufacturingAiAgentsServiceSeeder extends Seeder
{
    public function run()
    {
        // Create or update service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agents-manufacturing'],
            ['title' => 'AI Agents for Manufacturing']
        );

        // Update hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'The Future of Smart Manufacturing Assistance',
                'description' => 'Transforming industrial operations with AI-powered virtual assistants that optimize efficiency, reduce downtime, and provide real-time support—anytime, anywhere.',
                'image' => 'assets/img/Solution/Industry/ai-agents-manufacturing/1.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Remove existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();

        // Section 1: Trusted by Leading Manufacturers
        $section1 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Trusted by Leading Manufacturers',
            'description' => 'Show logos of top manufacturing companies, suppliers, and industrial enterprises'
        ]);

        // Section 2: What is AI FactoryBOT?
        $section2 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'What is AI FactoryBOT?',
            'description' => 'AI FactoryBOT is an advanced AI assistant designed to enhance manufacturing efficiency, support workers, and automate routine processes. From predictive maintenance to supply chain optimization, AI FactoryBOT ensures seamless, 24/7 support across chat, voice, and industrial systems.'
        ]);

        // Section 3: 24/7 AI-Powered Industrial Support
        $section3 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => '24/7 AI-Powered Industrial Support',
            'description' => 'AI FactoryBOT provides real-time monitoring, automates workflows, and assists workers across production lines, warehouses, and digital platforms.'
        ]);

        // Section 4: Automated Key Manufacturing Services
        $section4 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Automated Key Manufacturing Services',
            'description' => 'AI-powered solutions for comprehensive industrial operations'
        ]);

        $features4 = [
            [
                'icon' => 'fas fa-tools',
                'title' => 'Predictive Maintenance',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-boxes',
                'title' => 'Supply Chain Management',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-hard-hat',
                'title' => 'Workforce Assistance',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Production Monitoring',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-search',
                'title' => 'Quality Control & Inspection',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-clipboard-list',
                'title' => 'Order & Inventory Management',
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

        // Section 5: Why Choose AI FactoryBOT
        $section5 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Why Choose AI FactoryBOT?',
            'description' => 'Advanced AI solutions designed specifically for manufacturing'
        ]);

        $features5 = [
            [
                'icon' => 'fas fa-brain',
                'title' => 'Pretrained with Manufacturing Intelligence',
                'description' => 'Understands industrial processes, supply chains, and production workflows to provide accurate, real-time support.'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Secure & Industry-Compliant AI',
                'description' => 'Ensures data protection, compliance with industrial regulations, and seamless integration with ERP, MES, and IoT systems.'
            ],
            [
                'icon' => 'fas fa-people-carry',
                'title' => 'AI That Works Alongside Your Workforce',
                'description' => 'Automates repetitive tasks, reduces operational costs, and enhances efficiency while supporting factory employees and supervisors.'
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Multilingual & Omnichannel Support',
                'description' => 'AI FactoryBOT operates in over 100 languages and integrates seamlessly with manufacturing systems, IoT devices, and smart factories.'
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
            'heading' => 'Revolutionize Manufacturing with AI FactoryBOT',
            'description' => 'Transform industrial operations with AI-powered solutions'
        ]);

        $features6 = [
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Maximize efficiency',
                'description' => 'with AI-driven automation'
            ],
            [
                'icon' => 'fas fa-wrench',
                'title' => 'Reduce downtime',
                'description' => 'with predictive maintenance'
            ],
            [
                'icon' => 'fas fa-users',
                'title' => 'Empower industrial teams',
                'description' => 'with real-time AI support'
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
                'title' => 'Transforming Manufacturing with AI FactoryBOT',
                'subtitle' => 'Measurable results that transform industrial operations',
                'stats' => json_encode([
                    [
                        'stat_number' => '80%',
                        'stat_title' => 'Routine Inquiries Handled',
                        'stat_description' => 'of routine inquiries handled by AI Agents'
                    ],
                    [
                        'stat_number' => '60%',
                        'stat_title' => 'Production Downtime Reduced',
                        'stat_description' => 'reduction in production downtime'
                    ],
                    [
                        'stat_number' => '90%',
                        'stat_title' => 'Predictive Maintenance Accuracy',
                        'stat_description' => 'accuracy in predictive maintenance alerts'
                    ]
                ])
            ]
        );

        // Final CTA Section
        ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Get Started with AI FactoryBOT Today',
            'description' => 'Explore AI FactoryBOT',
            'cta' => 'Request a Demo',
            'image' => 'assets/img/Solution/Industry/ai-agents-manufacturing/cta.jpg'
        ]);
    }
}
