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

class HelpdeskInsightsSeeder extends Seeder
{
    public function run()
    {
        // Create or update the main service record
        $service = Service::updateOrCreate(
            ['slug' => 'helpdesk-insights'],
            [
                'title' => 'Helpdesk Insights',
                'description' => 'Turn Tickets into Knowledge with Helpdesk Insights',
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
                'heading' => 'Turn Tickets into Knowledge with Helpdesk Insights',
                'subheading' => 'Unlock Insights, Elevate Support, Redefine Ticket Intelligence',
                'description' => 'Empower your enterprise helpdesk with actionable insights. Use generative AI to analyze closed tickets, create knowledge articles, and move closer to a zero-ticket service desk.',
                'image' => 'assets/img/Ai Agent/8.png',
                'cta' => 'Schedule a Demo',
                'features' => json_encode([
                    ['icon' => 'fas fa-chart-line', 'title' => '70% Reduction in Ticket Volume'],
                    ['icon' => 'fas fa-users-cog', 'title' => '40% Increase in Self-Service'],
                    ['icon' => 'fas fa-clock', 'title' => '30% Faster Resolution Time']
                ])
            ]
        );

        // Create main features section
        $featuresSection = $service->featuresSections()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Core Capabilities',
                'description' => 'Trusted by global Fortune 500 enterprises',
                'image' => 'assets/img/helpdesk-insights-features.jpg'
            ]
        );

        // Main Features
        $features = [
            [
                'icon' => 'fas fa-search',
                'title' => 'Analyze and Understand Tickets',
                'description' => 'Explore the value hidden in historically closed tickets with AI LifeBOT work assistant. Identify patterns by analyzing ticket content and agent responses to group similar issues and uncover root causes.'
            ],
            [
                'icon' => 'fas fa-book',
                'title' => 'Create and Update Knowledge On the Go',
                'description' => 'Summarize content from related tickets with AI LifeBOT work assistant. Generate detailed knowledge articles that include step-by-step guidance and self-service instructions for faster issue resolution. Automatically update your knowledge base with information from recently closed tickets to stay ready for future challenges.'
            ],
            [
                'icon' => 'fas fa-magic',
                'title' => 'Auto-Resolve Tickets and Monitor Progress',
                'description' => 'Experience real improvements in helpdesk performance. With AI LifeBOT work assistant, newly created knowledge allows employees to resolve their issues directly in the chat window. Track patterns that show reductions in open tickets and resolution times creating a cycle of continuous improvement.'
            ],
            [
                'icon' => 'fas fa-plug',
                'title' => 'Platform-Agnostic Insights',
                'description' => 'AI LifeBOT integrates with all major knowledge and ticketing systems and learns from your closed tickets on any platform. Begin lowering ticket volumes from day one through intelligent and adaptive knowledge generation.'
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
                'title' => 'Achieve Measurable Outcomes',
                'subtitle' => 'Real results with AI-powered helpdesk transformation',
                'stats' => json_encode([
                    [
                        'number' => '70%',
                        'label' => 'Reduction in ticket volume'
                    ],
                    [
                        'number' => '40%',
                        'label' => 'Increase in employee self-service'
                    ],
                    [
                        'number' => '30%',
                        'label' => 'Reduction in ticket resolution time'
                    ]
                ])
            ]
        );

        // Create testimonials for industry recognition
        $testimonials = [
            [
                'stat_number' => '2x',
                'stat_label' => 'Market Leader Recognition',
                'testimonial' => 'AI LifeBOT recognized as a leader in the Emerging Market Quadrant for two consecutive years for transforming enterprise support operations.'
            ],
            [
                'stat_number' => '50+',
                'stat_label' => 'Industry Reports',
                'testimonial' => 'Featured in over 50 industry reports for user experience, ease of implementation, and customer satisfaction in helpdesk automation.'
            ],
            [
                'stat_number' => '2025',
                'stat_label' => 'Forbes Recognition',
                'testimonial' => 'Forbes listed AI LifeBOT among the essential generative AI tools transforming HR and support operations in 2025.'
            ],
            [
                'stat_number' => 'Day 1',
                'stat_label' => 'Immediate Impact',
                'testimonial' => 'Begin lowering ticket volumes from day one through intelligent and adaptive knowledge generation across all platforms.'
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
                'question' => 'What is Helpdesk Insights and how can it benefit my business?',
                'answer' => 'Helpdesk Insights uses generative AI to analyze closed tickets, create knowledge articles, and enable self-service resolution. It reduces ticket volume by 70% and increases employee self-service by 40%.'
            ],
            [
                'question' => 'Can Helpdesk Insights integrate with my existing ticket management system?',
                'answer' => 'Yes, AI LifeBOT integrates with all major knowledge and ticketing systems. It\'s platform-agnostic and can learn from your closed tickets on any platform from day one.'
            ],
            [
                'question' => 'How does Helpdesk Insights continuously improve the knowledge base?',
                'answer' => 'The system automatically updates your knowledge base with information from recently closed tickets, creating a cycle of continuous improvement that keeps your knowledge current and comprehensive.'
            ],
            [
                'question' => 'How quickly can we see results with Helpdesk Insights?',
                'answer' => 'You can begin lowering ticket volumes from day one through intelligent and adaptive knowledge generation. The system starts analyzing and creating insights immediately upon implementation.'
            ],
            [
                'question' => 'What types of patterns can Helpdesk Insights identify?',
                'answer' => 'The AI analyzes ticket content and agent responses to group similar issues, uncover root causes, and identify trends that help prevent future tickets while improving resolution processes.'
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
                'heading' => 'Discover the Power of AI LifeBOT Enterprise Work Assistant',
                'description' => 'Transform your helpdesk operations with intelligent ticket analysis, automated knowledge creation, and measurable performance improvements.',
                'cta_text' => 'Schedule a Demo',
                'cta_link' => '#',
                'background_image' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80'
            ]
        );
    }
}
