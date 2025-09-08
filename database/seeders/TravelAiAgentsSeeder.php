<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class TravelAiAgentsSeeder extends Seeder
{
    public function run()
    {
        // Create or update service
        $service = Service::updateOrCreate(
            ['slug' => 'travel-ai-agents'],
            ['title' => 'AI Agents for Travel & Tourism']
        );

        // Update hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'The Future of AI-Powered Travel & Tourism',
                'description' => 'Delivering seamless, personalized, and real-time travel assistance with AI-driven virtual agents—anytime, anywhere.',
                'image' => 'assets/img/Solution/Industry/aiAgentTravel/1.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Remove existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();

        // Section 1: Trusted by Leading Travel & Hospitality Brands
        $section1 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Trusted by Leading Travel & Hospitality Brands',
            'description' => 'Show logos of airlines, hotels, travel agencies, and tourism boards'
        ]);

        // Section 2: What is AI LifeBOT?
        $section2 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'What is AI LifeBOT?',
            'description' => 'AI LifeBOT is an advanced AI-powered assistant designed to enhance travel experiences, support hospitality providers, and automate essential services. From booking assistance to real-time travel updates, AI LifeBOT ensures 24/7 omnichannel engagement across chat, voice, and digital platforms.'
        ]);

        // Section 3: 24/7 AI-Powered Travel Assistance
        $section3 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => '24/7 AI-Powered Travel Assistance',
            'description' => 'Instant, multilingual support across all digital touchpoints—ensuring smooth journeys from planning to arrival.'
        ]);

        // Section 4: Automated Travel & Hospitality Services
        $section4 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Automated Travel & Hospitality Services',
            'description' => 'AI-powered solutions for comprehensive travel support'
        ]);

        $features4 = [
            [
                'icon' => 'fas fa-ticket-alt',
                'title' => 'Effortless Booking & Modifications',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-bell',
                'title' => 'Real-Time Travel Alerts',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-route',
                'title' => 'Smart Itinerary Planning',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-medal',
                'title' => 'Loyalty Program & Rewards Assistance',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-concierge-bell',
                'title' => 'AI Concierge Services',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-language',
                'title' => 'Multilingual & Accessibility Support',
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
            'description' => 'Advanced AI solutions designed specifically for travel and tourism'
        ]);

        $features5 = [
            [
                'icon' => 'fas fa-plane',
                'title' => 'AI Built for Travel & Hospitality',
                'description' => 'Understands booking systems, customer preferences, and industry-specific workflows for accurate, human-like interactions.'
            ],
            [
                'icon' => 'fas fa-plug',
                'title' => 'Seamless Integration with Travel Ecosystems',
                'description' => 'Connects effortlessly with airline CRMs, hotel management systems, and travel platforms like Expedia, Amadeus, and Sabre.'
            ],
            [
                'icon' => 'fas fa-user-tie',
                'title' => 'AI That Works Alongside Travel Agents',
                'description' => 'Handles repetitive inquiries, allowing human agents to focus on complex customer needs and premium service delivery.'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Secure & Compliant AI',
                'description' => 'Ensures full compliance with global data protection laws, keeping traveler information private and secure.'
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
            'heading' => 'Transform the Travel Experience with AI LifeBOT',
            'description' => 'Enhance travel services with AI-powered solutions'
        ]);

        $features6 = [
            [
                'icon' => 'fas fa-smile',
                'title' => 'Boost traveler satisfaction',
                'description' => 'with real-time, personalized AI assistance'
            ],
            [
                'icon' => 'fas fa-money-bill-wave',
                'title' => 'Reduce operational costs',
                'description' => 'by automating repetitive tasks and optimizing resources'
            ],
            [
                'icon' => 'fas fa-heart',
                'title' => 'Enhance brand loyalty',
                'description' => 'through seamless, AI-driven customer engagement'
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
                'title' => 'Revolutionizing Travel & Tourism with AI LifeBOT',
                'subtitle' => 'Measurable results that transform travel experiences',
                'stats' => json_encode([
                    [
                        'stat_number' => '85%',
                        'stat_title' => 'Routine Travel Inquiries Handled',
                        'stat_description' => 'reducing reliance on human agents'
                    ],
                    [
                        'stat_number' => '50%',
                        'stat_title' => 'Faster Booking & Check-in',
                        'stat_description' => 'eliminating delays and improving traveler experience'
                    ],
                    [
                        'stat_number' => '92%',
                        'stat_title' => 'Traveler Satisfaction Rate',
                        'stat_description' => 'AI-driven interactions enhance customer service quality'
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
            'image' => 'assets/img/Solution/Industry/aiAgentTravel/cta.jpg'
        ]);
    }
}
