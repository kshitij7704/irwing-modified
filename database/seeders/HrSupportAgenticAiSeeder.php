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

class HrSupportAgenticAiSeeder extends Seeder
{
    public function run()
    {
        // Create or update the main service record
        $service = Service::updateOrCreate(
            ['slug' => 'hr-support-agentic-ai'],
            [
                'title' => 'HR Support Agentic AI',
                'description' => 'Think of AI LifeBOT as Your HR Crew at the Pit Stop',
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
                'heading' => 'Think of AI LifeBOT as Your HR Crew at the Pit Stop',
                'subheading' => 'AI LifeBOT Is Your Enterprise HR Pit Crew',
                'description' => 'Fast answers. Instant actions. Integrated across your entire HR tech stack.<br><br>AI LifeBOT is an Agentic AI platform — your intelligent HR assistant that empowers employees and drives business outcomes, fast.',
                'image' => 'assets/img/Ai Agent/3.png',
                'cta' => 'Request a Demo',
                'features' => json_encode([
                    ['icon' => 'fas fa-users', 'title' => 'Empowers Your People'],
                    ['icon' => 'fas fa-robot', 'title' => 'Automates HR Tasks'],
                    ['icon' => 'fas fa-chart-line', 'title' => 'Delivers Measurable ROI']
                ])
            ]
        );

        // Create features section
        $featuresSection = $service->featuresSections()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'What Makes AI LifeBOT\'s Agentic AI Different',
                'description' => 'Agentic AI is a 24/7 AI-powered HR assistant designed to simplify and accelerate employee support across every channel and system.',
                'image' => 'assets/img/hr-agentic-ai-features.jpg'
            ]
        );

        // Features List
        $features = [
            [
                'icon' => 'fas fa-globe',
                'title' => 'Available Everywhere',
                'description' => 'Web, mobile, desktop, Slack, Teams, WhatsApp — no matter where your employees are, support is always one message away.'
            ],
            [
                'icon' => 'fas fa-shield-check',
                'title' => 'Fact-Based and Trusted',
                'description' => 'No hallucinations or made-up answers. Just verified, policy-aligned responses every time.'
            ],
            [
                'icon' => 'fas fa-magic',
                'title' => 'Beyond Just Answering Questions',
                'description' => 'It doesn\'t stop at "What\'s my PTO balance?" — it also executes actions like updating payroll info or submitting reimbursement claims.'
            ],
            [
                'icon' => 'fas fa-plug',
                'title' => 'Fully Integrated Across HR Systems',
                'description' => 'No more switching between tools. AI LifeBOT connects seamlessly to all your existing HR platforms.'
            ],
            [
                'icon' => 'fas fa-building',
                'title' => 'Built for Enterprise Governance',
                'description' => 'Follows all access rules and permission policies to ensure secure, compliant interactions across the organization.'
            ],
            [
                'icon' => 'fas fa-tasks',
                'title' => 'Top 9 Daily HR Tasks Automated',
                'description' => 'Time & Attendance, Payroll, Employee Records, General Inquiries, Claims, Onboarding, Performance Management, Benefits, and Offboarding.'
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
                'title' => 'What Results Can You Expect?',
                'subtitle' => 'Trusted by Global Fortune 500 Enterprises',
                'stats' => json_encode([
                    [
                        'number' => '70%',
                        'label' => 'Reduction in manual HR service requests'
                    ],
                    [
                        'number' => '2.5x',
                        'label' => 'Improvement in resolution time'
                    ],
                    [
                        'number' => '80%',
                        'label' => 'Drop in routine HR inquiries'
                    ]
                ])
            ]
        );

        // Create testimonials
        $testimonials = [
            [
                'stat_number' => '96%',
                'stat_label' => 'User Adoption',
                'testimonial' => 'Enterprise HR leaders report significant improvements in efficiency, support quality, and employee engagement after deploying AI LifeBOT.'
            ],
            [
                'stat_number' => '99%',
                'stat_label' => 'Employee Satisfaction Score',
                'testimonial' => 'Employees receive faster, more accurate support and real outcomes, not just information, leading to exceptional satisfaction scores.'
            ],
            [
                'stat_number' => '2.5x',
                'stat_label' => 'Improvement in Resolution Time',
                'testimonial' => 'HR teams reclaim valuable time and focus on strategic initiatives while employees get instant, accurate responses to their queries.'
            ],
            [
                'stat_number' => '80%',
                'stat_label' => 'Drop in Routine HR Inquiries',
                'testimonial' => 'ROI realized quickly, with a business case tailored for your CFO, as routine inquiries are handled automatically by AI LifeBOT.'
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
                'question' => 'What is Agentic AI for HR and how does it work?',
                'answer' => 'Agentic AI for HR uses intelligent agents to autonomously manage routine HR tasks and employee interactions through natural language understanding.'
            ],
            [
                'question' => 'How does generative AI enhance employee support experiences?',
                'answer' => 'It delivers fast, personalized, and human-like responses, improving engagement and support quality.'
            ],
            [
                'question' => 'What HR workflows can be automated with AI LifeBOT?',
                'answer' => 'Tasks like onboarding, leave management, payroll queries, FAQs, and recruitment workflows can be automated.'
            ],
            [
                'question' => 'Is it secure and compliant with our existing systems?',
                'answer' => 'Yes, AI LifeBOT ensures enterprise-grade security and aligns with global compliance standards like GDPR and ISO.'
            ],
            [
                'question' => 'How quickly can we deploy AI LifeBOT?',
                'answer' => 'AI LifeBOT can be deployed within days with plug-and-play integrations and minimal setup.'
            ],
            [
                'question' => 'How does NLP improve automation accuracy?',
                'answer' => 'NLP enables the AI to understand intent, context, and tone—ensuring accurate and relevant responses.'
            ],
            [
                'question' => 'What defines a great AI-powered HR experience?',
                'answer' => 'It\'s fast, intuitive, personalized, and seamlessly integrated into daily HR operations.'
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
                'heading' => 'Ready to See AI LifeBOT in Action?',
                'description' => 'Experience how AI LifeBOT transforms HR service delivery with automation, intelligence, and speed.',
                'cta_text' => 'Book Your Personalized Demo Today',
                'cta_link' => '#',
                'background_image' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80'
            ]
        );
    }
}
