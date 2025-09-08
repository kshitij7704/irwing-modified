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

class ITKnowledgeManagementSeeder extends Seeder
{
    public function run()
    {
        // Create or update the main service record
        $service = Service::updateOrCreate(
            ['slug' => 'it-knowledge-management-ai'],
            [
                'title' => 'IT Knowledge Management AI',
                'description' => 'Enhance IT Knowledge Management with AI',
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
                'heading' => 'Enhance IT Knowledge Management with AI',
                'subheading' => 'Self-Learning Knowledge Base for IT Teams',
                'description' => 'Create, centralize, organize and automatically update your knowledge base including IT policies using AI LifeBOT so employees always access the most accurate and current information instantly',
                'image' => 'assets/img/Ai Agent/11.png',
                'cta' => 'Schedule a Demo',
                'features' => json_encode([
                    ['icon' => 'fas fa-cogs', 'title' => 'IT Policies'],
                    ['icon' => 'fas fa-database', 'title' => 'Knowledge Base'],
                    ['icon' => 'fas fa-sync-alt', 'title' => 'Auto-Updates'],
                    ['icon' => 'fas fa-chart-bar', 'title' => 'Insights']
                ])
            ]
        );

        // Create main features section
        $featuresSection = $service->featuresSections()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Build a Self-Learning Knowledge Base with Minimal Effort',
                'description' => 'Trusted by Global Fortune 500 Enterprises',
                'image' => 'assets/img/it-knowledge-features.jpg'
            ]
        );

        // Main Features
        $features = [
            [
                'icon' => 'fas fa-file-alt',
                'title' => 'Create IT Policies in Minutes',
                'description' => 'WorkLM analyzes extensive data, industry best practices and your organization\'s current policies to quickly generate IT policies that align with enterprise standards.'
            ],
            [
                'icon' => 'fas fa-life-ring',
                'title' => 'Effective Support for Any Application from Day One',
                'description' => 'AI LifeBOT supports even newly onboarded apps by leveraging product documentation, community forums and more to generate support articles that reduce IT workload.'
            ],
            [
                'icon' => 'fas fa-sync',
                'title' => 'Dynamic and Self-Updating Knowledge Base',
                'description' => 'WorkLM transforms both existing and new IT policy documents into accessible knowledge bites so employees can self-serve with ease.'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Improve Knowledge Base with Insights',
                'description' => 'AI LifeBOT tracks usage, identifies gaps and automatically generates reports to enhance your IT knowledge system over time.'
            ],
            [
                'icon' => 'fas fa-plug',
                'title' => 'Seamless Integrations for Enhanced Functionality',
                'description' => 'Connect with your existing IT infrastructure and tools to create a unified knowledge management ecosystem that works across all platforms.'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Enterprise-Grade Security Standards',
                'description' => 'Built with robust security protocols, access controls, and privacy standards to ensure safe deployment in enterprise environments.'
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
                'title' => 'Transforming Businesses with Proven Results',
                'subtitle' => 'Real outcomes from enterprise customers worldwide',
                'stats' => json_encode([
                    [
                        'number' => '96%',
                        'label' => 'User Adoption Rate'
                    ],
                    [
                        'number' => '99%',
                        'label' => 'Employee Satisfaction Score'
                    ],
                    [
                        'number' => '80%',
                        'label' => 'Decrease in IT Queries'
                    ],
                    [
                        'number' => '99%',
                        'label' => 'Query Resolution Rate'
                    ]
                ])
            ]
        );

        // Create testimonials for customer success stories
        $testimonials = [
            [
                'stat_number' => '96%',
                'stat_label' => 'User Adoption',
                'testimonial' => 'As we shifted to remote work, many of our traditional office interactions disappeared. AI LifeBOT stepped in to automatically address employee questions, track HR efficiency and gather live feedback.'
            ],
            [
                'stat_number' => '99%',
                'stat_label' => 'Employee Satisfaction Score',
                'testimonial' => 'With AI LifeBOT we drastically improved turnaround time on HR, IT and finance queries leading to a smoother employee experience.'
            ],
            [
                'stat_number' => '80%',
                'stat_label' => 'Decrease in IT Queries',
                'testimonial' => 'We launched AI LifeBOT to assist employees with IT issues. This allowed our IT team to focus on complex problems while improving response time through automation.'
            ],
            [
                'stat_number' => '99%',
                'stat_label' => 'Query Resolution',
                'testimonial' => 'AI LifeBOT significantly enhanced our employee experience. Real-time query handling reduced ticket resolution time by 2.5x and raised satisfaction to 96 percent.'
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

        // Create industry recognition section (could be used as additional testimonials)
        $recognitionTestimonials = [
            [
                'stat_number' => '2x',
                'stat_label' => 'Market Leader',
                'testimonial' => 'AI LifeBOT has been named a Leader in the Emerging Market Quadrant two years in a row for transforming IT knowledge management.'
            ],
            [
                'stat_number' => '50+',
                'stat_label' => 'Industry Reports',
                'testimonial' => 'Featured in over 50 reports for excellence in user experience, easy implementation and customer satisfaction in IT knowledge management.'
            ],
            [
                'stat_number' => '2025',
                'stat_label' => 'Forbes Recognition',
                'testimonial' => 'Recognized by Forbes as one of the Essential Gen AI Tools Transforming HR in 2025 for revolutionary IT support capabilities.'
            ]
        ];

        foreach ($recognitionTestimonials as $recognition) {
            $service->testimonials()->create([
                'service_id' => $service->id,
                'stat_number' => $recognition['stat_number'],
                'stat_label' => $recognition['stat_label'],
                'testimonial' => $recognition['testimonial']
            ]);
        }

        // Create FAQs
        $faqs = [
            [
                'question' => 'What are the key features of AI LifeBOT\'s knowledge management system?',
                'answer' => 'AI LifeBOT provides centralized, automated content creation, updates, insights and access to all knowledge-related assets.'
            ],
            [
                'question' => 'How does generative AI enhance IT knowledge management with AI LifeBOT?',
                'answer' => 'Generative AI builds and updates knowledge proactively and transforms documents into searchable, user-friendly content.'
            ],
            [
                'question' => 'How does AI LifeBOT contribute to the security of our IT systems?',
                'answer' => 'AI LifeBOT follows enterprise-grade security protocols, access rules and privacy standards to ensure safe deployment.'
            ],
            [
                'question' => 'Can AI LifeBOT\'s solutions integrate with existing IT infrastructure?',
                'answer' => 'Yes, AI LifeBOT is designed to seamlessly connect with legacy and modern IT systems.'
            ],
            [
                'question' => 'What are the benefits of using AI LifeBOT for managing IT knowledge in large organizations?',
                'answer' => 'Scalability, reduced IT workload, improved accuracy, better employee self-service and real-time insights.'
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
                'heading' => 'Discover the Power of Our Gen AI Enterprise Assistant',
                'description' => 'Transform your IT knowledge management with intelligent automation, self-updating knowledge bases, and proven results that reduce IT workload while improving employee satisfaction.',
                'cta_text' => 'Schedule a Demo',
                'cta_link' => '#',
                'background_image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af2176?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80'
            ]
        );
    }
}
