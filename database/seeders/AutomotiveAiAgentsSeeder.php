<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;
use App\Models\ServiceProactiveSection;

class AutomotiveAiAgentsSeeder extends Seeder
{
    public function run()
    {
        // Create or update service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agents-automotive'],
            ['title' => 'AI Agents for Automotive']
        );

        // Hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'The Future of AI in Automotive Assistance',
                'description' => 'Revolutionizing customer service with AI-powered virtual assistants that provide instant, personalized, and efficient automotive support—anytime, anywhere.',
                'image' => 'assets/img/Solution/Industry/ai-agents-automotive/2.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Remove existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();


        // What is AI LifeBOT?
        $whatIsSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'What is AI LifeBOT?',
            'description' => 'AI LifeBOT is a next-gen AI assistant designed to enhance customer experiences, support automotive staff, and automate routine processes. From answering vehicle-related queries to scheduling test drives and maintenance appointments, AI LifeBOT ensures seamless, 24/7 customer support across chat, voice, and digital platforms.'
        ]);

        // Performance stats
        PerformanceStat::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'Transforming Automotive Services with AI LifeBOT',
                'subtitle' => null,
                'stats' => json_encode([
                    [
                        'stat_number' => '90%',
                        'stat_title' => 'Customer Inquiries Handled',
                        'stat_description' => 'of customer inquiries handled by AI Agents'
                    ],
                    [
                        'stat_number' => '45%',
                        'stat_title' => 'Dealership Efficiency',
                        'stat_description' => 'increase in dealership efficiency with automated scheduling'
                    ],
                    [
                        'stat_number' => '40%',
                        'stat_title' => 'Response Time Reduction',
                        'stat_description' => 'reduction in roadside assistance response times'
                    ]
                ])
            ]
        );

        // How AI LifeBOT Enhances Automotive Services
        $enhanceSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'How AI LifeBOT Enhances Automotive Services',
            'description' => ''
        ]);
        $enhanceFeatures = [
            ['icon' => 'fas fa-headset', 'title' => '24/7 AI-Powered Customer Support', 'description' => 'Provide immediate assistance via chat, voice, and digital touchpoints, ensuring customers get answers without long wait times.'],
            ['icon' => 'fas fa-calendar-check', 'title' => 'Test Drive & Service Scheduling', 'description' => 'Automated scheduling for test drives and maintenance.'],
            ['icon' => 'fas fa-car-crash', 'title' => 'Vehicle Troubleshooting & Assistance', 'description' => 'Instant help for vehicle issues and questions.'],
            ['icon' => 'fas fa-file-invoice-dollar', 'title' => 'Financing & Insurance Guidance', 'description' => 'AI-driven support for financing and insurance queries.'],
            ['icon' => 'fas fa-id-card', 'title' => 'ID Verification for Secure Transactions', 'description' => 'Secure, automated ID checks for transactions.'],
            ['icon' => 'fas fa-road', 'title' => 'Roadside Assistance & Emergency Support', 'description' => 'Quick, AI-powered roadside help and emergency support.'],
            ['icon' => 'fas fa-route', 'title' => 'Intelligent Routing & Dealership Engagement', 'description' => 'Smart routing and engagement for dealerships.'],
        ];
        foreach ($enhanceFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $enhanceSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Why Choose AI LifeBOT?
        $whySection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Why Choose AI LifeBOT?',
            'description' => ''
        ]);
        $whyFeatures = [
            ['icon' => 'fas fa-car', 'title' => 'Pretrained with Automotive Intelligence', 'description' => 'Understands vehicle specifications, financing options, and customer preferences to provide accurate, human-like responses.'],
            ['icon' => 'fas fa-shield-alt', 'title' => 'Secure & Compliant AI', 'description' => 'Ensures data security and privacy, adhering to industry regulations for secure transactions and interactions.'],
            ['icon' => 'fas fa-users', 'title' => 'AI That Works Alongside Your Team', 'description' => 'Supports dealership and service staff by automating repetitive tasks, reducing workload, and improving operational efficiency.'],
            ['icon' => 'fas fa-globe', 'title' => 'Multilingual & Omnichannel Support', 'description' => 'AI LifeBOT communicates in over 100 languages and integrates seamlessly with CRM, dealership management systems, and customer service platforms.'],
        ];
        foreach ($whyFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $whySection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Benefits
        $benefitsSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Revolutionize Automotive Customer Experience with AI LifeBOT',
            'description' => ''
        ]);
        $benefitsFeatures = [
            ['icon' => 'fas fa-smile', 'title' => 'Boost customer satisfaction', 'description' => 'with faster, personalized support'],
            ['icon' => 'fas fa-money-bill-wave', 'title' => 'Reduce operational costs', 'description' => 'by automating repetitive tasks and optimizing resources'],
            ['icon' => 'fas fa-user-tie', 'title' => 'Empower automotive teams', 'description' => 'by freeing up staff for high-value interactions'],
        ];
        foreach ($benefitsFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $benefitsSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Final CTA Section (optional)
        ServiceFeaturesSection::updateOrCreate([
            'service_id' => $service->id,
            'heading' => 'Get Started with AI LifeBOT Today',
            'description' => 'Explore AI LifeBOT',
            'cta' => 'Request a Demo',
            'image' => 'assets/img/Solution/Industry/ai-agents-automotive/cta.jpg'
        ]);
    }
}
