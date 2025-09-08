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

class ItSupportAgenticAiSeeder extends Seeder
{
    public function run()
    {
        // Create or update the main service record
        $service = Service::updateOrCreate(
            ['slug' => 'it-support-agentic-ai'],
            [
                'title' => 'IT Support Agentic AI',
                'description' => 'Reduce IT Tickets and Resolution Time by 70% with Agentic AI',
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
                'heading' => 'Reduce IT Tickets and Resolution Time by 70%',
                'subheading' => 'Free Your IT Team with Agentic AI from AI LifeBOT',
                'description' => 'Empower your IT operations with <bold>AI LifeBOT\'s Agentic AI</bold> — an enterprise-ready solution that automates repetitive IT support tasks, accelerates workflows, and unifies knowledge to drive efficiency and reduce costs.',
                'image' => 'assets/img/Ai Agent/2.png',
                'cta' => 'Book a Personalized Demo',
                'features' => json_encode([
                    ['icon' => 'fas fa-robot', 'title' => 'Agentic AI Automation'],
                    ['icon' => 'fas fa-chart-line', 'title' => '70% Faster Resolution'],
                    ['icon' => 'fas fa-shield-alt', 'title' => 'Enterprise-Grade Security']
                ])
            ]
        );

        // Create features section
        $featuresSection = $service->featuresSections()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Smarter, Faster, and Fully Autonomous IT Support',
                'description' => 'Transform your service desk into a proactive, high-efficiency support operation with breakthrough results in just 6 weeks.',
                'image' => 'assets/img/it-support-agentic-ai.jpg'
            ]
        );

        // Features List
        $features = [
            [
                'icon' => 'fas fa-tasks',
                'title' => 'Automate High-Volume IT Queries',
                'description' => 'Resolve common tickets like password resets, access requests, software provisioning, and basic troubleshooting — instantly, without human involvement.'
            ],
            [
                'icon' => 'fas fa-database',
                'title' => 'Centralize and Activate IT Knowledge',
                'description' => 'Leverage AI LifeBOT\'s dynamic knowledge management to surface the right answers from across your IT ecosystem.'
            ],
            [
                'icon' => 'fas fa-forward',
                'title' => 'Accelerate and Optimize IT Workflows',
                'description' => 'Enable end-to-end automation of complex IT processes — from ticket creation to resolution — freeing engineers to focus on higher-value work.'
            ],
            [
                'icon' => 'fas fa-plug',
                'title' => 'Seamless Integration with Your Ecosystem',
                'description' => 'Works natively with existing ITSM tools like ServiceNow, Jira, Freshservice, and others — no overhaul required.'
            ],
            [
                'icon' => 'fas fa-rocket',
                'title' => 'Rapid Deployment',
                'description' => 'Launch in under 30 days with prebuilt automation templates and deep ITSM integration fully compatible with your current systems.'
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Built for Global Teams',
                'description' => 'Multilingual, multichannel, and multimodal support with enterprise-grade security compliant with leading standards and frameworks.'
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
                'title' => 'Breakthrough Results in Just 6 Weeks',
                'subtitle' => 'Trusted by Global Enterprises, Including Fortune 500 Leaders',
                'stats' => json_encode([
                    [
                        'number' => '75%',
                        'label' => 'Boost in service desk productivity'
                    ],
                    [
                        'number' => '98%',
                        'label' => 'Accuracy in ticket triage and routing'
                    ],
                    [
                        'number' => '40%',
                        'label' => 'Reduction in resolution time'
                    ]
                ])
            ]
        );

        // Create testimonials
        $testimonials = [
            [
                'stat_number' => '100%',
                'stat_label' => 'Communication gap closed',
                'testimonial' => 'AI LifeBOT helped us close the communication gap across departments during remote transitions. The virtual agent instantly answered employee queries, captured feedback, and streamlined support.'
            ],
            [
                'stat_number' => '70%',
                'stat_label' => 'Reduction in resolution time',
                'testimonial' => 'Our IT ticket resolution times dropped significantly after implementation. The AI assistant now handles a majority of repetitive tickets, allowing our teams to focus on more strategic issues.'
            ],
            [
                'stat_number' => '60%',
                'stat_label' => 'Reduction in ticket volume',
                'testimonial' => 'AI LifeBOT became our first line of support. Automating routine IT queries helped reduce our overall ticket volume, and we\'re now expanding automation across additional workflows.'
            ],
            [
                'stat_number' => '99%',
                'stat_label' => 'Real-time query resolution',
                'testimonial' => 'The AI bot consistently resolves over 99% of employee queries in real time. We\'ve seen a measurable drop in helpdesk load and a substantial increase in employee satisfaction.'
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
                'question' => 'What is Agentic AI, and how does it improve IT support operations?',
                'answer' => 'Agentic AI enables autonomous issue resolution, enhancing speed and efficiency in IT support by making intelligent decisions and taking actions without human intervention.'
            ],
            [
                'question' => 'How does AI LifeBOT use generative AI in practical workflows?',
                'answer' => 'It automates tasks like ticketing, documentation, and responses using generative AI to understand context, generate appropriate solutions, and execute complex workflows automatically.'
            ],
            [
                'question' => 'Is the platform secure and compliant?',
                'answer' => 'Yes, AI LifeBOT follows global security standards and compliance protocols, ensuring enterprise-grade security for all your IT operations and data.'
            ],
            [
                'question' => 'How easily can AI LifeBOT integrate with our current systems?',
                'answer' => 'It integrates seamlessly via APIs and pre-built connectors with minimal disruption, working natively with existing ITSM tools like ServiceNow, Jira, and Freshservice.'
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
                'heading' => 'Experience AI LifeBOT in Action',
                'description' => 'Discover how <bold>AI LifeBOT\'s autonomous agents</bold> reduce IT workloads, speed up ticket resolution, and improve employee experience all without disrupting your existing infrastructure.',
                'cta_text' => 'Schedule Your Live Demo Today',
                'cta_link' => '#',
                'background_image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80'
            ]
        );
    }
}
