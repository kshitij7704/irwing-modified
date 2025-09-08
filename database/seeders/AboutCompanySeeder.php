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

class AboutCompanySeeder extends Seeder
{

    public function run()
    {
        $service = Service::updateOrCreate(
            ['slug' => 'about'],
            ['title' => 'About AI LifeBOT']
        );

        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'About AI LifeBOT',
                'description' => 'AI LifeBOT is a <b>global leader</b> in AI-powered customer service solutions, delivering cutting-edge chatbot and AI agent automation to revolutionize customer interactions. Our platform enables businesses to provide instant, personalized, and intelligent support across multiple channels, 24/7.<ul style="color: #222;"><li><b>Empowering businesses with AI-driven automation</b></li><li><b>Seamless human-like conversations</b></li><li><b>Global reach with multi-language support</b></li></ul>',
                'image' => 'assets/img/0033.png',
                'cta' => 'Join Us',
            ]
        );

        $missionSection = ServiceFeaturesSection::updateOrCreate(
            ['service_id' => $service->id, 'heading' => 'Our Mission'],
            [
                'description' => 'At AI LifeBOT, our mission is to empower businesses with advanced AI solutions that:',
                'subtitle' => 'We believe that the future of customer service lies in the perfect blend of human-like AI interactions and intelligent automation.'
            ]
        );

        $missionFeatures = [
            ['icon' => 'fas fa-bullseye', 'title' => 'Enhance Customer Experience', 'description' => 'Through personalized AI interactions that understand and anticipate customer needs.'],
            ['icon' => 'fas fa-cogs', 'title' => 'Streamline Operations', 'description' => 'With AI-powered automation that reduces costs and improves efficiency.'],
            ['icon' => 'fas fa-chart-line', 'title' => 'Drive Business Growth', 'description' => 'By improving scalability and enabling 24/7 customer support.'],
        ];

        foreach ($missionFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $missionSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        $expertiseSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Our Expertise',
            'description' => 'Our team of AI specialists and developers is at the forefront of Conversational AI, Machine Learning, and Natural Language Processing (NLP).',
        ]);

        $expertiseFeatures = [
            ['icon' => 'fas fa-robot', 'title' => 'Conversational AI', 'description' => 'Intelligent virtual assistants for real-time engagement that understand context and intent with human-like interactions.'],
            ['icon' => 'fas fa-microphone-alt', 'title' => 'Speech AI', 'description' => 'Advanced speech-to-text and text-to-speech technology for natural voice interactions in multiple languages.'],
            ['icon' => 'fas fa-headset', 'title' => 'Agent Assist', 'description' => 'AI-powered co-pilots to enhance human agent productivity with real-time suggestions and knowledge retrieval.'],
            ['icon' => 'fas fa-search', 'title' => 'Cognitive Search', 'description' => 'AI-driven knowledge retrieval for accurate, context-aware responses from your knowledge base (RAG).'],
            ['icon' => 'fas fa-bolt', 'title' => 'Response Time <1 sec', 'description' => 'Ensuring real-time, efficient interactions that keep customers engaged with lightning-fast responses.'],
            ['icon' => 'fas fa-globe', 'title' => 'Multi-Language', 'description' => 'Seamless global communication with support for over 50 languages and regional dialects.'],
        ];

        foreach ($expertiseFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $expertiseSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        $ourSolutionsSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Our Solutions',
            'description' => 'We offer a comprehensive AI-powered chatbot suite designed to meet the unique needs of businesses across various industries. Whether you\'re a startup, enterprise, or global corporation, our chatbots integrate seamlessly with your existing systems.'
        ]);

        $ourSolutionsFeatures = [
            ['icon' => 'fas fa-clock', 'title' => '24/7 Real-time Support', 'description' => 'Chatbots handle customer queries instantly.'],
            ['icon' => 'fas fa-lightbulb', 'title' => 'Product Recommendations', 'description' => 'AI-driven suggestions tailored to user needs.'],
            ['icon' => 'fas fa-users', 'title' => 'Self-service Automation', 'description' => 'Reduce wait times with intelligent problem-solving.'],
            ['icon' => 'fas fa-phone', 'title' => 'Intelligent IVR', 'description' => 'AI-powered voice support for customer inquiries.'],
        ];

        foreach ($ourSolutionsFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $ourSolutionsSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        $whyChooseSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Why Choose AI LifeBOT?',
            'description' => 'We deliver exceptional AI-powered solutions that transform customer engagement and business operations.',
        ]);

        $whyChooseFeatures = [
            ['icon' => 'fas fa-comments', 'title' => 'Seamless Customer Experience', 'description' => 'Human-like AI conversations for superior engagement.'],
            ['icon' => 'fas fa-chart-pie', 'title' => 'Cost Efficiency & Scalability', 'description' => 'Automate customer interactions to cut costs and scale effortlessly.'],
            ['icon' => 'fas fa-database', 'title' => 'Data-driven Insights', 'description' => 'AI-powered analytics to track customer trends and optimize experiences.'],
            ['icon' => 'fas fa-cogs', 'title' => 'Continuous Improvement', 'description' => 'Machine learning algorithms refine chatbot responses over time.'],
            ['icon' => 'fas fa-industry', 'title' => 'Industry Expertise', 'description' => 'Tailored AI solutions for banking, insurance, e-commerce, telecom, and more.'],
        ];

        foreach ($whyChooseFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $whyChooseSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        ServiceAboutSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/24into7.jpg',
            'subheading' => 'Empowering Businesses with AI',
            'heading' => '24/7 Real-time Support',
            'description' => 'Our platform enables businesses to provide instant, personalized, and intelligent support across multiple channels, 24/7.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-check-circle',
                    'title' => 'Empowering businesses with AI-driven automation',
                    'description' => 'Transform your customer service with intelligent automation.',
                ],
                [
                    'icon' => 'fas fa-check-circle',
                    'title' => 'Seamless human-like conversations',
                    'description' => 'Natural interactions that customers love.',
                ],
                [
                    'icon' => 'fas fa-check-circle',
                    'title' => 'Global reach with multi-language support',
                    'description' => 'Serve customers worldwide in their native languages.',
                ]
            ])
        ]);

        ServiceAgentSupportSection::create([
              'service_id' => $service->id,
              'image' => 'assets/img/acco-4.jpg',// or remove this if unused
              'subheading' => 'AI Solutions',
              'heading' => 'Comprehensive AI-powered Solutions',
              'description' => 'Our solutions include 24/7 support, intelligent recommendations, self-service automation, and intelligent IVR systems.',
              'features' => json_encode([
                  [
                      'icon' => 'fas fa-clock',
                      'title' => '24/7 Support',
                      'description' => 'Instant responses and context-aware conversations.',
                      'image' => 'assets/img/24into7.jpg',
                  ],
                  [
                      'icon' => 'fas fa-lightbulb',
                      'title' => 'Smart Recommendations',
                      'description' => 'Personalized suggestions that increase conversions.',
                      'image' => 'assets/img/Company/Mask Group 63.png',
                  ],
                  [
                      'icon' => 'fas fa-users',
                      'title' => 'Self-Service',
                      'description' => 'Empowering customers to resolve issues independently.',
                      'image' => 'assets/img/Company/Mask Group 65.png',
                  ],
                  [
                      'icon' => 'fas fa-phone',
                      'title' => 'Intelligent IVR',
                      'description' => 'Natural language voice support systems.',
                      'image' => 'assets/img/acco-4.jpg',
                  ]
              ])
          ]);


        
          ServiceProactiveSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/acco-4.jpg',
            'subheading' => 'Sustainability & Carbon Reduction',
            'heading' => 'Environmental Responsibility',
            'description' => 'We are committed to environmental responsibility through sustainable AI practices and carbon reduction initiatives.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-bolt',
                    'title' => 'Energy Efficiency',
                    'description' => 'Optimized AI infrastructure for lower energy consumption.',

                ],
                [
                    'icon' => 'fas fa-solar-panel',
                    'title' => 'Renewable Energy',
                    'description' => 'Transitioning to sustainable power sources for operations.',
                ],
                [
                    'icon' => 'fas fa-leaf',
                    'title' => 'Eco-Friendly Practices',
                    'description' => 'Reducing carbon footprint through AI-driven efficiency.',
                ]
            ])
        ]);

        VidhiraSection::create([
            'service_id' => $service->id,
            'title' => 'Join the AI LifeBOT Community',
            'subtitle' => 'Transform Customer Engagement',
            'description' => 'Partner with AI LifeBOT and join businesses transforming customer engagement through AI-powered chatbots. Contact us today to learn how our AI solutions can help your business thrive.',
            'background_image' => 'assets/img/0033.jpg',
        ]);

        
    }
}
