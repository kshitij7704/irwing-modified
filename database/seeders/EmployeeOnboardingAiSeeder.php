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

class EmployeeOnboardingAiSeeder extends Seeder
{
    public function run()
    {
        // Create or update the main service record
        $service = Service::updateOrCreate(
            ['slug' => 'employee-onboarding-ai'],
            [
                'title' => 'Employee Onboarding AI',
                'description' => 'Revolutionize Employee Onboarding with Generative AI',
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
                'heading' => 'Revolutionize Employee Onboarding with Generative AI',
                'subheading' => 'Onboarding Made Simple with AI LifeBOT\'s WorkLM Powered Virtual Assistant',
                'description' => 'With AI LifeBOT\'s WorkLM powered virtual assistant you can automate the entire onboarding process from start to finish',
                'image' => 'assets/img/Ai Agent/9.png',
                'cta' => 'Schedule a Demo',
                'features' => json_encode([
                    ['icon' => 'fas fa-user-plus', 'title' => 'Preboarding'],
                    ['icon' => 'fas fa-clipboard-check', 'title' => 'Onboarding'],
                    ['icon' => 'fas fa-laptop-house', 'title' => 'Remote Onboarding'],
                    ['icon' => 'fas fa-heart', 'title' => 'Engagement']
                ])
            ]
        );

        // Create main features section
        $featuresSection = $service->featuresSections()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Complete Onboarding Solution',
                'description' => 'Trusted by global Fortune 500 enterprises',
                'image' => 'assets/img/onboarding-features.jpg'
            ]
        );

        // Main Features
        $features = [
            [
                'icon' => 'fas fa-user-friends',
                'title' => 'Personalized Preboarding Journeys',
                'description' => 'First impressions matter. AI LifeBOT\'s generative AI assistant creates tailored preboarding experiences for each new hire. From assigning onboarding buddies to automatically answering candidate queries, the assistant builds immediate connections with new employees reducing dropouts and improving engagement.'
            ],
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Seamless Onboarding Workflows',
                'description' => 'Onboarding can often be time-consuming and complex. AI LifeBOT\'s virtual assistant powered by large language models fully automates the process. This eliminates manual tasks, improves productivity, and delivers a consistent onboarding experience for everyone involved.'
            ],
            [
                'icon' => 'fas fa-wifi',
                'title' => 'Personalized Remote Onboarding',
                'description' => 'Remote onboarding can be a challenge for both HR teams and new hires. AI LifeBOT ensures smooth communication, assigns onboarding buddies, and promptly answers all questions from candidates creating a seamless experience no matter where employees are located.'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Enhanced Employee Engagement',
                'description' => 'Keeping new employees engaged is key to maximizing the return on recruitment investment. AI LifeBOT gathers feedback through pulse surveys and delivers essential information instantly helping new hires feel supported and productive from day one.'
            ],
            [
                'icon' => 'fas fa-brain',
                'title' => 'Actionable Insights with BI-GPT',
                'description' => 'AI LifeBOT\'s BI-GPT transforms onboarding by providing deep insights into every step of the process. Analyze data related to completion rates, training effectiveness, and employee feedback to continuously optimize onboarding.'
            ],
            [
                'icon' => 'fas fa-expand-arrows-alt',
                'title' => 'Enterprise-Ready AI Built for Scale',
                'description' => 'Multimodal, multichannel, and multilingual support ensures seamless onboarding experiences across all touchpoints and languages for global organizations.'
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
                'title' => 'Experience the Future of Onboarding with Generative AI',
                'subtitle' => 'Measurable results that transform your hiring success',
                'stats' => json_encode([
                    [
                        'number' => '5%',
                        'label' => 'Reduction in candidate dropout rate'
                    ],
                    [
                        'number' => '50%',
                        'label' => 'Higher employee retention among new hires'
                    ],
                    [
                        'number' => '50%',
                        'label' => 'Higher productivity in onboarding groups'
                    ]
                ])
            ]
        );

        // Create testimonials for industry recognition
        $testimonials = [
            [
                'stat_number' => '2x',
                'stat_label' => 'Market Leader Recognition',
                'testimonial' => 'AI LifeBOT recognized as a leader in the Emerging Market Quadrant for two consecutive years for transforming HR and onboarding processes.'
            ],
            [
                'stat_number' => '50+',
                'stat_label' => 'Industry Reports',
                'testimonial' => 'Featured in more than 50 reports for excellence in user experience, implementation, and customer satisfaction in HR automation.'
            ],
            [
                'stat_number' => '2025',
                'stat_label' => 'Forbes Recognition',
                'testimonial' => 'Mentioned by Forbes among the essential generative AI tools transforming HR in 2025 for revolutionary onboarding capabilities.'
            ],
            [
                'stat_number' => 'WorkLM',
                'stat_label' => 'Powered by Advanced AI',
                'testimonial' => 'WorkLM powered virtual assistant delivers personalized, automated onboarding experiences that scale across global enterprises.'
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
                'question' => 'What does employee onboarding mean?',
                'answer' => 'Employee onboarding is the process of integrating new hires into an organization, providing them with the tools, information, and support needed to become productive team members from day one.'
            ],
            [
                'question' => 'What are the steps for onboarding an employee?',
                'answer' => 'The onboarding process includes preboarding (before the first day), orientation, training, integration, and ongoing support. AI LifeBOT automates all these steps with personalized workflows.'
            ],
            [
                'question' => 'Why is employee onboarding important?',
                'answer' => 'Effective onboarding reduces turnover, increases productivity, improves employee engagement, and helps new hires integrate faster into company culture and processes.'
            ],
            [
                'question' => 'How can you improve the onboarding process?',
                'answer' => 'By using AI-powered automation to personalize experiences, provide instant support, gather feedback, and continuously optimize based on data insights and completion rates.'
            ],
            [
                'question' => 'Why should you automate employee onboarding?',
                'answer' => 'Automation eliminates manual tasks, ensures consistency, reduces dropout rates, improves retention by 50%, and allows HR teams to focus on strategic activities rather than administrative work.'
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
                'heading' => 'Discover the Power of AI LifeBOT Virtual Assistant',
                'description' => 'Transform your employee onboarding with intelligent automation, personalized experiences, and measurable results that improve retention and productivity.',
                'cta_text' => 'Schedule a Demo',
                'cta_link' => '#',
                'background_image' => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80'
            ]
        );
    }
}
