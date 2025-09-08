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

class ItSupportAutomationSeeder extends Seeder
{
    public function run()
    {
        // Create or update the main service record
        $service = Service::updateOrCreate(
            ['slug' => 'it-support-automation'],
            [
                'title' => 'IT Support Automation',
                'description' => 'Transform your IT support with AI-powered automation',
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
                'heading' => 'IT Support Reinvented with Generative AI',
                'subheading' => 'Transform Your IT Service Desk with AI-Powered Automation',
                'description' => 'Automate your IT support with the world\'s most advanced generative AI.<br>Increase service desk efficiency and boost employee productivity.',
                'image' => 'assets/img/Ai Agent/1.png',
                'cta' => 'Schedule a Demo',
                'features' => json_encode([
                    ['icon' => 'fas fa-bolt', 'title' => 'Instant Resolution'],
                    ['icon' => 'fas fa-robot', 'title' => 'AI-Powered Support'],
                    ['icon' => 'fas fa-chart-line', 'title' => 'Improved Efficiency']
                ])
            ]
        );

        // Create features section
        $featuresSection = $service->featuresSections()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Transform Your IT Support with AI Automation',
                'description' => 'Empower your IT team with intelligent automation that handles routine tasks and complex issues with ease.',
                'image' => 'assets/img/it-support-features.jpg'
            ]
        );

        // Features List
        $features = [
            [
                'icon' => 'fas fa-comments',
                'title' => 'Achieve 80% Resolution on Chat in 6 Months',
                'description' => 'Free up your IT team\'s time by auto-resolving repetitive tickets such as service requests, access issues, and common troubleshooting queries. AI Lifebot empowers employees through seamless self-service as a workplace AI assistant.'
            ],
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Raised and Resolved in Seconds',
                'description' => 'AI Lifebot offers instant step-by-step support for common hardware and system issues. It can also troubleshoot third-party software directly in chat.'
            ],
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Automation for Every Corner of IT Service Desk',
                'description' => 'AI Lifebot enhances ITSM platforms and processes including change management and request management with automated workflows. It also keeps systems accessible to all employees, not just traditional IT users.'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Unleash the Power of Proactive Action',
                'description' => 'AI Lifebot uses advanced analytics including anomaly detection and adaptive thresholding to predict and prevent issues before they affect performance. Machine learning and historical data are used to detect future service degradations and alert relevant teams only when true outliers are identified.'
            ],
            [
                'icon' => 'fas fa-search',
                'title' => 'Bring Accuracy to End-to-End Observability',
                'description' => 'AI Lifebot continuously monitors patterns and log files to optimise alerts. It reduces false positives and highlights only the most critical issues, helping IT teams focus and minimize alert fatigue.'
            ],
            [
                'icon' => 'fas fa-building',
                'title' => 'Enterprise Ready',
                'description' => 'We customise our solutions to fit your organisation\'s unique needs and scale them as your team grows.'
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
                'title' => 'Proven Results: Success with Godrej',
                'subtitle' => 'AI Lifebot delivers measurable impact for enterprise IT support. Here\'s how we transformed outcomes for Godrej:',
                'stats' => json_encode([
                    [
                        'number' => '80%',
                        'label' => 'Decrease in how-to queries'
                    ],
                    [
                        'number' => '99.97%',
                        'label' => 'Faster resolution for common IT issues'
                    ],
                    [
                        'number' => '96.6%',
                        'label' => 'Sessions rated helpful with accurate resolutions'
                    ]
                ])
            ]
        );

        // Create testimonials
        $testimonials = [
            [
                'stat_number' => '96%',
                'stat_label' => 'User adoption',
                'testimonial' => 'As we pivoted to remote a lot of things we took for granted changed. AI Lifebot helped answer policy and process questions track HR efficiency and gather real-time feedback from employees'
            ],
            [
                'stat_number' => '99%',
                'stat_label' => 'Employee satisfaction score',
                'testimonial' => 'Our resolution process improved significantly after implementing AI Lifebot. Response times across HR IT and finance tickets dropped enhancing employee satisfaction'
            ],
            [
                'stat_number' => '80%',
                'stat_label' => 'Reduction in IT queries',
                'testimonial' => 'Deploying AI Lifebot allowed us to automate support for common IT issues and reduce the need for human intervention. We\'re expanding automation to maximize IT team efficiency'
            ],
            [
                'stat_number' => '99%',
                'stat_label' => 'Query resolution',
                'testimonial' => 'With AI-powered HR automation from AI Lifebot we exceeded our goals. Employee queries are answered in real time and helpdesk ticket resolution time was cut in half'
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
                'question' => 'Why is automation important for IT teams?',
                'answer' => 'Automation streamlines operations, reduces response times, and frees up IT teams to focus on strategic initiatives instead of repetitive tasks.'
            ],
            [
                'question' => 'How does optimizing IT support through a virtual assistant impact employees?',
                'answer' => 'It boosts productivity, reduces wait times, and empowers employees to resolve common issues independently, leading to higher satisfaction and efficiency.'
            ],
            [
                'question' => 'How does a consolidated knowledge base benefit employees and IT support agents?',
                'answer' => 'It ensures accurate, fast, and consistent answers for employees while reducing the burden on IT agents, enabling them to focus on more complex issues.'
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
                'heading' => 'Discover the Power of AI Lifebot Virtual Assistant',
                'description' => 'Powered by the most advanced large language models available',
                'cta_text' => 'Book a personalized demo',
                'cta_link' => '#',
                'background_image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80'
            ]
        );
    }
}
