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
use App\Models\VidhiraSection;
use App\Models\AiPoweredEngagementSection;
use App\Models\AiBusinessInteractionSection;
use App\Models\AiStatisticalHighlight;

class BlogsSeeder extends Seeder
{
    public function run()
    {
        $service = Service::updateOrCreate(
            ['slug' => 'blogs'],
            ['title' => 'Blogs']
        );

        ServiceHeroSection::create([
            'service_id' => $service->id,
            'heading' => 'AI Insights & Industry Trends',
            'description' => 'Explore in-depth articles showcasing how AI transforms businesses across industries. Discover practical applications, implementation strategies, and the latest advancements.',
            'image' => 'assets/img/Resources/blog/1.jpg',
            'cta' => 'Read Our Blogs',
        ]);

        $travelSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'AI in Travel Industry',
            'description' => 'How AI-powered chatbots are revolutionizing customer experience and operations in the travel sector.',
        ]);

        $travelFeatures = [
            [
                'icon' => 'fas fa-clock',
                'title' => '24/7 Customer Support',
                'description' => 'AI chatbots provide round-the-clock assistance for bookings and travel inquiries.',
                'image' => 'assets/img/Resources/blog/2.jpg',
            ],
            [
                'icon' => 'fas fa-calendar-check',
                'title' => 'Seamless Reservations',
                'description' => 'Automated booking of flights, hotels and transportation through conversational AI.',
                'image' => 'assets/img/Resources/blog/3.jpg',
            ],
            [
                'icon' => 'fas fa-globe-americas',
                'title' => 'Personalized Recommendations',
                'description' => 'AI suggests tailored destinations based on traveler preferences and history.',
                'image' => 'assets/img/Resources/blog/4.jpg',
            ],
            [
                'icon' => 'fas fa-comments',
                'title' => 'Multi-Language Support',
                'description' => 'Instant translation capabilities for international travelers.',
                'image' => 'assets/img/Resources/blog/5.jpg',
            ],
        ];

        foreach ($travelFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $travelSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
                'image' => $feature['image'],
            ]);
        }

        $enterpriseSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Enterprise AI Roadmap',
            'description' => 'Strategies for implementing conversational AI in large organizations.',
        ]);

        $enterpriseFeatures = [
            ['icon' => 'fas fa-bullseye', 'title' => 'Clear Objectives', 'description' => 'Define specific use cases like customer support and sales assistance'],
            ['icon' => 'fas fa-cogs', 'title' => 'Technology Selection', 'description' => 'Choose platforms based on NLP capabilities and integration flexibility'],
            ['icon' => 'fas fa-sync-alt', 'title' => 'System Integration', 'description' => 'Connect with CRM/ERP systems for unified experiences'],
            ['icon' => 'fas fa-user-cog', 'title' => 'Personalization', 'description' => 'Deliver context-aware responses based on user history'],
        ];

        foreach ($enterpriseFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $enterpriseSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        $callCenterSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'AI at Scale',
            'description' => 'How virtual agents handle massive call volumes efficiently.',
        ]);

        $callCenterFeatures = [
            ['icon' => 'fas fa-robot', 'title' => 'Automated Call Handling', 'description' => 'AI resolves common inquiries without human intervention'],
            ['icon' => 'fas fa-users', 'title' => 'Human-AI Collaboration', 'description' => 'Seamless transfer to agents for complex issues'],
            ['icon' => 'fas fa-chart-line', 'title' => 'Continuous Optimization', 'description' => 'Machine learning improves responses over time'],
            ['icon' => 'fas fa-language', 'title' => 'Multilingual Support', 'description' => 'Global capabilities for diverse customer bases'],
        ];

        foreach ($callCenterFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $callCenterSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        ServiceAboutSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/Resources/blog/6.jpg',
            'subheading' => 'Technology Deep Dive',
            'heading' => 'How AI Chatbots Work',
            'description' => 'Understanding the technical foundations of conversational AI systems and their real-world applications.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-language',
                    'title' => 'Natural Language Processing',
                    'description' => 'Understanding and generating human-like responses',
                ],
                [
                    'icon' => 'fas fa-brain',
                    'title' => 'Machine Learning',
                    'description' => 'Continuous improvement from user interactions',
                ],
                [
                    'icon' => 'fas fa-plug',
                    'title' => 'API Integrations',
                    'description' => 'Connecting with business systems for real-time data',
                ],
                [
                    'icon' => 'fas fa-mobile-alt',
                    'title' => 'Omnichannel Deployment',
                    'description' => 'Consistent experiences across platforms and devices',
                ]
            ])
        ]);

        ServiceAgentSupportSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/Resources/blog/7.jpg',
            'subheading' => 'Industry Applications',
            'heading' => 'Real-World AI Implementations',
            'description' => 'Practical examples of conversational AI transforming key business functions.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-university',
                    'title' => 'Banking',
                    'description' => 'Fraud detection and account management',
                ],
                [
                    'icon' => 'fas fa-shopping-cart',
                    'title' => 'E-commerce',
                    'description' => 'Product recommendations and order tracking',
                ],
                [
                    'icon' => 'fas fa-heartbeat',
                    'title' => 'Healthcare',
                    'description' => 'Appointment scheduling and patient support',
                ]
            ])
        ]);

        ServiceProactiveSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/Resources/blog/8.jpg',
            'subheading' => 'Future Trends',
            'heading' => 'The Evolution of Conversational AI',
            'description' => 'Emerging capabilities and next-generation applications of AI chatbots.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-phone-alt',
                    'title' => 'Voice Integration',
                    'description' => 'Seamless voice-controlled experiences',
                ],
                [
                    'icon' => 'fas fa-emotion',
                    'title' => 'Emotional Intelligence',
                    'description' => 'Advanced sentiment analysis and response',
                ],
                [
                    'icon' => 'fas fa-user-secret',
                    'title' => 'Predictive Assistance',
                    'description' => 'Anticipating user needs before they ask',
                ]
            ])
        ]);

        PerformanceStat::create([
            'service_id' => $service->id,
            'title' => 'AI Impact Metrics',
            'subtitle' => 'Measurable Business Improvements',
            'stats' => json_encode([
                [
                    'stat_number' => '40%',
                    'stat_title' => 'Cost Reduction',
                    'stat_description' => 'Average savings in customer service operations',
                ],
                [
                    'stat_number' => '24/7',
                    'stat_title' => 'Availability',
                    'stat_description' => 'Round-the-clock customer support',
                ],
                [
                    'stat_number' => '85%',
                    'stat_title' => 'Accuracy Rate',
                    'stat_description' => 'Precision of modern AI responses',
                ]
            ])
        ]);

        VidhiraSection::create([
            'service_id' => $service->id,
            'title' => 'AI Insights Hub',
            'subtitle' => 'Expert Perspectives',
            'description' => 'Discover cutting-edge analysis and forward-looking perspectives on AI implementation strategies.',
            'background_image' => 'assets/img/Mask-Group-46.png',
        ]);

        AiPoweredEngagementSection::create([
            'service_id' => $service->id,
            'title' => 'Industry Focus Areas',
            'subtitle' => 'Sector-Specific Applications',
            'features' => [
                [
                    'icon' => 'fas fa-plane',
                    'title' => 'Travel & Hospitality',
                    'description' => 'Booking automation and itinerary management',
                ],
                [
                    'icon' => 'fas fa-shopping-bag',
                    'title' => 'Retail',
                    'description' => 'Personalized shopping experiences',
                ],
                [
                    'icon' => 'fas fa-graduation-cap',
                    'title' => 'Education',
                    'description' => 'AI tutoring and learning support',
                ],
                [
                    'icon' => 'fas fa-heart',
                    'title' => 'Healthcare',
                    'description' => 'Patient engagement and support',
                ],
                [
                    'icon' => 'fas fa-coins',
                    'title' => 'Finance',
                    'description' => 'Automated banking and financial advice',
                ],
                [
                    'icon' => 'fas fa-headset',
                    'title' => 'Customer Service',
                    'description' => 'Intelligent support automation',
                ]
            ],
        ]);

        AiBusinessInteractionSection::create([
            'service_id' => $service->id,
            'title' => 'Implementation Framework',
            'features' => [
                [
                    'icon' => 'fas fa-clipboard-list',
                    'title' => 'Requirement Analysis',
                    'description' => 'Identifying key business challenges and goals',
                ],
                [
                    'icon' => 'fas fa-puzzle-piece',
                    'title' => 'Solution Design',
                    'description' => 'Creating tailored AI architectures',
                ],
                [
                    'icon' => 'fas fa-tachometer-alt',
                    'title' => 'Performance Tracking',
                    'description' => 'Monitoring key success metrics',
                ],
            ],
        ]);

        AiStatisticalHighlight::create([
            'service_id' => $service->id,
            'stats' => [
                [
                    'number' => '20M+',
                    'title' => 'Calls Handled',
                    'description' => 'By single virtual agents annually',
                ],
                [
                    'number' => '30%',
                    'title' => 'Cost Reduction',
                    'description' => 'Average operational savings',
                ],
                [
                    'number' => '92%',
                    'title' => 'Satisfaction Rate',
                    'description' => 'Customer approval of AI interactions',
                ],
            ],
        ]);
    }
}
