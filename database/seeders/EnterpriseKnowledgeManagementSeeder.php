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

class EnterpriseKnowledgeManagementSeeder extends Seeder
{
    public function run()
    {
        // Create or update the main service record
        $service = Service::updateOrCreate(
            ['slug' => 'enterprise-knowledge-management-ai'],
            [
                'title' => 'Enterprise Knowledge Management AI',
                'description' => 'Comprehensive Personalized and Accurate Enterprise Search',
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
                'heading' => 'Comprehensive Personalized and Accurate Enterprise Search',
                'subheading' => 'AI LifeBOT Knowledge Management with Agentic RAG Architecture',
                'description' => 'At the core of AI LifeBOT Knowledge Management is an Agentic RAG architecture that dynamically selects the best RAG pipeline for each employee query',
                'image' => 'assets/img/Ai Agent/10.png',
                'cta' => 'Start Free Trial',
                'features' => json_encode([
                    ['icon' => 'fas fa-search', 'title' => 'Intelligent Search'],
                    ['icon' => 'fas fa-shield-alt', 'title' => 'Enterprise Security'],
                    ['icon' => 'fas fa-brain', 'title' => 'Agentic RAG'],
                    ['icon' => 'fas fa-users', 'title' => 'Personalization']
                ])
            ]
        );

        // Create main features section
        $featuresSection = $service->featuresSections()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Complete Knowledge Management Solution',
                'description' => 'Trusted by global Fortune 500 enterprises',
                'image' => 'assets/img/knowledge-management-features.jpg'
            ]
        );

        // Main Features
        $features = [
            [
                'icon' => 'fas fa-check-circle',
                'title' => 'Minimize Hallucinations and Increase Accuracy',
                'description' => 'WorkLM trained on over 10 million enterprise prompts with fact validation powered by multiple AI models. Features dedicated RAG agent for data consistency and source traceability for every search query.'
            ],
            [
                'icon' => 'fas fa-unlock',
                'title' => 'Unlock Complete Access to Enterprise Knowledge',
                'description' => 'Unified view of internal knowledge systems with more than 1000 prebuilt connectors. Multimodal RAG agent provides context-rich understanding across all your enterprise data sources.'
            ],
            [
                'icon' => 'fas fa-user-cog',
                'title' => 'Personalization Based on Dynamic Information',
                'description' => 'Personalization RAG agent adapts to each user\'s profile and context with persistent memory across devices and channels. Smart follow-ups that mimic human-like conversation patterns.'
            ],
            [
                'icon' => 'fas fa-robot',
                'title' => 'Agentic AI for Enterprise',
                'description' => 'Comprehensive multimodal, multichannel, and multilingual support ensures seamless knowledge access experiences across all touchpoints and languages for global organizations.'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Enterprise-Grade Security You Can Trust',
                'description' => 'Built with enterprise-grade security standards to protect your sensitive knowledge assets while enabling secure, compliant access across your organization.'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Advanced Analytics and Insights',
                'description' => 'Gain deep insights into knowledge usage patterns, search effectiveness, and content gaps with comprehensive analytics and reporting capabilities.'
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
                'title' => 'Experience the Future of Enterprise Knowledge Management',
                'subtitle' => 'Measurable results that transform your knowledge workflows',
                'stats' => json_encode([
                    [
                        'number' => '75%',
                        'label' => 'Faster knowledge discovery and retrieval'
                    ],
                    [
                        'number' => '90%',
                        'label' => 'Reduction in time spent searching for information'
                    ],
                    [
                        'number' => '1000+',
                        'label' => 'Prebuilt enterprise connectors available'
                    ]
                ])
            ]
        );

        // Create testimonials for industry recognition
        $testimonials = [
            [
                'stat_number' => '2x',
                'stat_label' => 'Market Leader Recognition',
                'testimonial' => 'AI LifeBOT recognized as a leader in Enterprise Knowledge Management for two consecutive years for transforming how organizations access and utilize information.'
            ],
            [
                'stat_number' => '50+',
                'stat_label' => 'Industry Reports',
                'testimonial' => 'Featured in more than 50 reports for excellence in knowledge discovery, RAG implementation, and customer satisfaction in enterprise search.'
            ],
            [
                'stat_number' => '2025',
                'stat_label' => 'Forbes Recognition',
                'testimonial' => 'Mentioned by Forbes among the essential generative AI tools transforming enterprise knowledge management in 2025 for revolutionary search capabilities.'
            ],
            [
                'stat_number' => 'WorkLM',
                'stat_label' => 'Powered by Advanced AI',
                'testimonial' => 'WorkLM powered Agentic RAG delivers personalized, accurate knowledge retrieval experiences that scale across global enterprises.'
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
                'question' => 'What is Agentic AI for Enterprise Knowledge Management and how does it improve knowledge workflows?',
                'answer' => 'Agentic AI intelligently adapts to different user needs using dynamic pipelines to optimize search and retrieval for faster accurate outcomes.'
            ],
            [
                'question' => 'How can Generative AI improve Enterprise Knowledge Management using RAG?',
                'answer' => 'Generative AI enhances context understanding and response generation while RAG ensures that outputs are grounded in verified enterprise data.'
            ],
            [
                'question' => 'What are the advantages of using AI agents to automate knowledge management tasks?',
                'answer' => 'AI agents reduce manual effort, minimize errors, and enable self-service for employees while ensuring compliance and consistency.'
            ],
            [
                'question' => 'How do AI agents integrate with current enterprise knowledge systems?',
                'answer' => 'AI LifeBOT integrates with most legacy and modern systems using API connectivity and prebuilt connectors.'
            ],
            [
                'question' => 'How do NLP and RAG work together to improve enterprise knowledge delivery?',
                'answer' => 'NLP interprets intent and extracts meaning while RAG retrieves the most relevant data to ensure every response is fact-based and contextual.'
            ],
            [
                'question' => 'What is knowledge management in an enterprise context?',
                'answer' => 'It refers to the practice of capturing, organizing, and distributing organizational knowledge for better decision making and productivity.'
            ],
            [
                'question' => 'How is generative AI changing the way enterprises manage knowledge?',
                'answer' => 'It enables intelligent search, dynamic content creation, and personalization at scale, enhancing how employees access and use information.'
            ],
            [
                'question' => 'What is the benefit of an AI assistant compared to a static knowledge system?',
                'answer' => 'An AI assistant provides real-time answers, supports natural queries, and improves over time while a static system often requires manual searching and maintenance.'
            ],
            [
                'question' => 'What other capabilities are being introduced in modern knowledge management tools?',
                'answer' => 'Capabilities include predictive insights, proactive suggestions, real-time analytics, automated content generation, and seamless integrations.'
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
                'heading' => 'Discover the Power of Agentic RAG',
                'description' => 'Transform your enterprise knowledge management with intelligent search, personalized experiences, and measurable results that improve productivity and decision-making.',
                'cta_text' => 'Book a Personalized Demo',
                'cta_link' => '#',
                'background_image' => 'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80'
            ]
        );
    }
}
