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

class CaseStudiesSeeder extends Seeder
{  
    public function run()
    {
        $service = Service::updateOrCreate(
            ['slug' => 'case-studies'],
            ['title' => 'Case Studies']
        );

        ServiceHeroSection::create([
            'service_id' => $service->id,
            'heading' => 'Real-World AI Implementation Case Studies',
            'description' => 'Explore in-depth case studies showcasing how AI LifeBot transforms businesses across industries. Discover practical applications, implementation strategies, and measurable results from actual deployments.',
            'image' => 'assets/img/Resources/caseStudy/1.jpg',
            'cta' => 'Explore Case Studies',
        ]);

        $callCenterSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Call Center Enhancement Case Study',
            'description' => 'How AI-powered voice coaching and real-time assistance transformed call center operations and employee performance.',
        ]);

        $callCenterFeatures = [
          [
              'icon' => 'fas fa-chart-line',
              'title' => '40% Call Quality Improvement',
              'description' => 'AI guidance led to more structured and professional conversations across all agents.',
              'image' => 'assets/img/Resources/caseStudy/2.jpg',
          ],
          [
              'icon' => 'fas fa-dollar-sign',
              'title' => '30% Training Cost Reduction',
              'description' => 'AI-based coaching minimized human-led training hours and accelerated onboarding.',
              'image' => 'assets/img/Resources/caseStudy/3.jpg',
          ],
          [
              'icon' => 'fas fa-smile',
              'title' => '20% CSAT Score Increase',
              'description' => 'Customers reported significantly better interaction experiences and satisfaction.',
              'image' => 'assets/img/Resources/caseStudy/4.jpg',
          ],
          [
              'icon' => 'fas fa-user-friends',
              'title' => 'Reduced Agent Burnout',
              'description' => 'AI handled repetitive queries, allowing agents to focus on complex problem-solving.',
              'image' => 'assets/img/Resources/caseStudy/5.jpg',
          ],
      ];


        foreach ($callCenterFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $callCenterSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
                'image' => $feature['image'],
            ]);
        }

        $searchEvolutionSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'AI Search Revolution Case Study',
            'description' => 'Analyzing the transformation of search behavior and the rise of AI-powered search assistants versus traditional search engines.',
        ]);

        $searchEvolutionFeatures = [
            ['icon' => 'fas fa-search', 'title' => '30% Search Shift by 2026', 'description' => 'Gartner predicts AI assistants will handle 30% of online searches by 2026.'],
            ['icon' => 'fas fa-users', 'title' => '58% User Preference', 'description' => 'PwC study shows users prefer AI-generated answers over scrolling through multiple links.'],
            ['icon' => 'fas fa-robot', 'title' => 'Direct Response Model', 'description' => 'AI chatbots provide conversational responses instead of traditional link-based results.'],
            ['icon' => 'fas fa-globe', 'title' => 'Industry Transformation', 'description' => 'Major tech companies are integrating AI-driven search experiences to stay competitive.'],
        ];

        foreach ($searchEvolutionFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $searchEvolutionSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        $relationshipAiSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'AI Relationship Counseling Case Study',
            'description' => 'Examining how AI chatbots are being used as accessible relationship counselors and communication facilitators.',
        ]);

        $relationshipAiFeatures = [
            ['icon' => 'fas fa-comments', 'title' => '70% Communication Improvement', 'description' => 'Users reported improved relationship communication after using AI counseling tools.'],
            ['icon' => 'fas fa-chart-bar', 'title' => '40% User Increase', 'description' => 'AI therapy apps like Woebot saw significant growth in relationship advice seekers.'],
            ['icon' => 'fas fa-heart', 'title' => 'Accessible Support', 'description' => 'AI provides judgment-free, cost-effective relationship guidance 24/7.'],
            ['icon' => 'fas fa-balance-scale', 'title' => 'Neutral Mediation', 'description' => 'AI offers unbiased perspectives without emotional involvement in conflicts.'],
        ];

        foreach ($relationshipAiFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $relationshipAiSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        ServiceAboutSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/Resources/caseStudy/6.jpg',
            'subheading' => 'Featured Case Study',
            'heading' => 'AI-Powered Call Center Transformation',
            'description' => 'A comprehensive look at how AI agents revolutionized employee communication and customer service quality in call centers, addressing key challenges and delivering measurable results.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-exclamation-triangle',
                    'title' => 'The Challenge',
                    'description' => 'Inconsistent communication, high training costs, customer dissatisfaction, and agent burnout.',
                ],
                [
                    'icon' => 'fas fa-microphone',
                    'title' => 'AI Speech Coach',
                    'description' => 'Real-time conversation analysis with instant feedback on tone and professionalism.',
                ],
                [
                    'icon' => 'fas fa-user-cog',
                    'title' => 'AI Co-pilot System',
                    'description' => 'Intelligent response suggestions and tone adjustment recommendations.',
                ],
                [
                    'icon' => 'fas fa-chart-line',
                    'title' => 'Sentiment Analysis',
                    'description' => 'Real-time customer sentiment monitoring with adaptive conversation guidance.',
                ]
            ])
        ]);

        ServiceAgentSupportSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/Resources/caseStudy/7.jpg',
            'subheading' => 'Market Analysis Case Study',
            'heading' => 'The Future of Search: AI vs Traditional Engines',
            'description' => 'Analyzing the competitive landscape between AI-powered search assistants and traditional search engines, examining user behavior shifts and market implications.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-brain',
                    'title' => 'Conversational Search',
                    'description' => 'Direct answers through natural language processing instead of link navigation.',
                ],
                [
                    'icon' => 'fas fa-lightning-bolt',
                    'title' => 'Instant Responses',
                    'description' => 'Immediate, contextual answers without browsing multiple sources.',
                ],
                [
                    'icon' => 'fas fa-shield-alt',
                    'title' => 'Accuracy Challenges',
                    'description' => 'Ongoing work to address misinformation and ensure reliable information delivery.',
                ]
            ])
        ]);

        ServiceProactiveSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/Resources/caseStudy/8.jpg',
            'subheading' => 'Social Impact Case Study',
            'heading' => 'AI in Personal Relationships and Mental Health',
            'description' => 'Exploring the emerging role of AI chatbots in relationship counseling, examining effectiveness, limitations, and ethical considerations.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-heart',
                    'title' => 'Emotional Support',
                    'description' => 'AI provides accessible, non-judgmental support for relationship challenges.',
                ],
                [
                    'icon' => 'fas fa-clock',
                    'title' => '24/7 Availability',
                    'description' => 'Always-available support system for immediate relationship guidance.',
                ],
                [
                    'icon' => 'fas fa-dollar-sign',
                    'title' => 'Cost-Effective',
                    'description' => 'Affordable alternative to traditional therapy for minor relationship issues.',
                ]
            ])
        ]);

        PerformanceStat::create([
            'service_id' => $service->id,
            'title' => 'Cross-Industry Impact Metrics',
            'subtitle' => 'Measurable Results from AI Implementation',
            'stats' => json_encode([
                [
                    'stat_number' => '40%',
                    'stat_title' => 'Quality Improvement',
                    'stat_description' => 'Average improvement in service quality across all case studies.',
                ],
                [
                    'stat_number' => '30%',
                    'stat_title' => 'Cost Reduction',
                    'stat_description' => 'Average operational cost savings achieved through AI implementation.',
                ],
                [
                    'stat_number' => '58%',
                    'stat_title' => 'User Preference',
                    'stat_description' => 'Users prefer AI-generated responses over traditional search results.',
                ]
            ])
        ]);

        VidhiraSection::create([
            'service_id' => $service->id,
            'title' => 'Implementation Insights',
            'subtitle' => 'Key Learnings from Real-World Deployments',
            'description' => 'Discover practical insights, best practices, and lessons learned from actual AI implementations across various industries and use cases.',
            'background_image' => 'assets/img/Mask-Group-46.png',
        ]);

        AiPoweredEngagementSection::create([
            'service_id' => $service->id,
            'title' => 'Industry-Specific Case Studies',
            'subtitle' => 'AI Applications Across Different Sectors',
            'features' => [
                [
                    'icon' => 'fas fa-headset',
                    'title' => 'Customer Service',
                    'description' => 'AI speech coaching and real-time assistance improving agent performance and customer satisfaction.',
                ],
                [
                    'icon' => 'fas fa-search',
                    'title' => 'Information Retrieval',
                    'description' => 'AI-powered search assistants transforming how users find and interact with information.',
                ],
                [
                    'icon' => 'fas fa-heart',
                    'title' => 'Personal Relationships',
                    'description' => 'AI chatbots providing accessible relationship counseling and communication support.',
                ],
                [
                    'icon' => 'fas fa-hospital',
                    'title' => 'Healthcare',
                    'description' => 'AI-assisted patient support and mental health applications in clinical settings.',
                ],
                [
                    'icon' => 'fas fa-graduation-cap',
                    'title' => 'Education',
                    'description' => 'AI tutoring and personalized learning experiences improving educational outcomes.',
                ],
                [
                    'icon' => 'fas fa-shopping-cart',
                    'title' => 'E-commerce',
                    'description' => 'AI-powered shopping assistants and customer service automation driving sales.',
                ]
            ],
        ]);

        AiBusinessInteractionSection::create([
            'service_id' => $service->id,
            'title' => 'Implementation Methodology',
            'features' => [
                [
                    'icon' => 'fas fa-clipboard-list',
                    'title' => 'Challenge Assessment',
                    'description' => 'Systematic identification and analysis of business challenges and requirements.',
                ],
                [
                    'icon' => 'fas fa-cogs',
                    'title' => 'Solution Design',
                    'description' => 'Custom AI solution architecture tailored to specific business needs and constraints.',
                ],
                [
                    'icon' => 'fas fa-chart-line',
                    'title' => 'Impact Measurement',
                    'description' => 'Comprehensive metrics and KPIs to track and validate implementation success.',
                ],
            ],
        ]);

        AiStatisticalHighlight::create([
            'service_id' => $service->id,
            'stats' => [
                [
                    'number' => '100+',
                    'title' => 'Case Studies',
                    'description' => 'Comprehensive analysis of AI implementations across industries.',
                ],
                [
                    'number' => '85%',
                    'title' => 'Success Rate',
                    'description' => 'Percentage of AI implementations meeting or exceeding objectives.',
                ],
                [
                    'number' => '6 Months',
                    'title' => 'Average ROI Timeline',
                    'description' => 'Typical timeframe to achieve measurable return on investment.',
                ],
            ],
        ]);
    }
}
