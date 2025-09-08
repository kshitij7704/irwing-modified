<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\ServiceAboutSection;
use App\Models\ServiceAgentSupportSection;

class AIAgentCoPilotTalkSeriesSeeder extends Seeder
{
    public function run()
    {
        // Create or update the service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agent-copilot-talk-series'],
            ['title' => 'AI Agent Co-Pilot Talk Series']
        );

        // Clean up existing data
        ServiceHeroSection::where('service_id', $service->id)->delete();

        $featureSections = ServiceFeaturesSection::where('service_id', $service->id)->get();
        foreach ($featureSections as $section) {
            ServiceFeature::where('features_section_id', $section->id)->delete();
            $section->delete();
        }

        ServiceAboutSection::where('service_id', $service->id)->delete();
        ServiceAgentSupportSection::where('service_id', $service->id)->delete();

        // 1. Hero Section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'AI Agent Co-Pilot Talk Series',
                'subheading' => 'Unlock the Future of AI-Powered Assistance',
                'description' => 'Join us for the AI Agent Co-Pilot Talk Series, an exclusive knowledge-sharing event featuring industry leaders, AI experts, and real-world innovators. Discover how AI-driven Agent Co-Pilots are transforming customer service, enhancing agent efficiency, and redefining enterprise automation.',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/ai-agent-copilot/1.jpg',
                'cta' => 'Register Now',
                'features' => json_encode([]),
            ]
        );

        // 2. What to Expect Section
        $expectationsSection = ServiceFeaturesSection::updateOrCreate(
            ['service_id' => $service->id, 'heading' => 'What to Expect'],
            [
                'subheading' => '',
                'description' => '',
                'image' => 'assets/img/talk-series-expectations.jpg',
            ]
        );

        $expectationFeatures = [
            [
                'icon' => 'fas fa-star',
                'title' => 'Expert Insights',
                'description' => 'Learn from AI pioneers and enterprise leaders who are revolutionizing customer interactions. (Now featuring industry speakers and real-world success stories!)',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/ai-agent-copilot/2.jpg'
            ],
            [
                'icon' => 'fas fa-desktop',
                'title' => 'Live Demos & Use Cases',
                'description' => 'See AI Agent Co-Pilot in action with hands-on demonstrations. (New: Real-time interaction breakdowns to show practical applications!)',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/ai-agent-copilot/3.jpg'
            ],
            [
                'icon' => 'fas fa-comment-alt',
                'title' => 'Interactive Q&A',
                'description' => 'Get your questions answered by AI specialists. (Extended Q&A with top experts for deeper insights!)',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/ai-agent-copilot/4.jpg'
            ],
            [
                'icon' => 'fa fa-area-chart',
                'title' => 'Success Stories',
                'description' => 'Hear how businesses are leveraging AI to drive efficiency and customer satisfaction. (Now featuring customer testimonials for a more personal touch!)',
                'image' => 'assets/img/Platform/PlatfprmCapebilite/ai-agent-copilot/5.jpg'
            ],
        ];

        foreach ($expectationFeatures as $feature) {
            ServiceFeature::updateOrCreate(
                [
                    'features_section_id' => $expectationsSection->id,
                    'title' => $feature['title']
                ],
                [
                    'icon' => $feature['icon'],
                    'description' => $feature['description'],
                    'image' => $feature['image']
                ]
            );
        }

        // 3. Why Attend Section
        ServiceAboutSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'image' => 'assets/img/talk-series-why-attend.jpg',
                'subheading' => '',
                'heading' => 'Why Attend?',
                'description' => '',
                'features' => json_encode([
                    [
                        'icon' => 'fas fa-lightbulb',
                        'title' => 'Stay Ahead of the Curve',
                        'description' => 'Gain actionable strategies to integrate AI into your enterprise. (Limited spots available—secure yours today!)'
                    ],
                    [
                        'icon' => 'fas fa-globe',
                        'title' => 'Real-World Insights',
                        'description' => 'See how AI Agent Co-Pilots deliver measurable impact across industries. (Includes specific case studies and ROI-driven discussions!)'
                    ],
                    [
                        'icon' => 'fas fa-handshake',
                        'title' => 'Networking Opportunities',
                        'description' => 'Connect with industry leaders, AI developers, and decision-makers. (Exclusive breakout sessions for deeper discussions!)'
                    ],
                ])
            ]
        );

        // 4. CTA Section
        ServiceAgentSupportSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'image' => 'assets/img/Platform/PlatfprmCapebilite/ai-agent-copilot/7.jpg',
                'subheading' => '',
                'heading' => 'Register Now – Limited Spots Available!',
                'description' => 'Don’t miss this chance to be part of the AI revolution. Sign up today and transform the way your enterprise delivers customer service!',
                'features' => json_encode([])
            ]
        );
    }
}
