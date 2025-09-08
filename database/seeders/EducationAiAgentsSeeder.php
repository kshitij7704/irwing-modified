<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class EducationAiAgentsSeeder extends Seeder
{
    public function run()
    {
        // Create or update service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agents-education'],
            ['title' => 'AI Agents for Education']
        );

        // Update hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'The Future of Smart Education Assistance',
                'description' => 'Transforming learning experiences with AI-powered virtual assistants that provide instant, personalized, and intelligent support for students, educators, and institutions—anytime, anywhere.',
                'image' => 'assets/img/Solution/Industry/ai-agents-education/1.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Remove existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();

        // Section 2: What is AI LifeBOT?
        $section2 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'What is AI LifeBOT?',
            'description' => 'AI LifeBOT is a next-gen AI assistant designed to enhance learning experiences, support educators, and automate routine academic processes. From answering student queries to assisting with enrollment, AI LifeBOT ensures seamless, 24/7 academic support across chat, voice, and digital platforms.'
        ]);

        // Section 3: 24/7 AI-Powered Student Support
        $section3 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => '24/7 AI-Powered Student Support',
            'description' => 'Provides instant academic assistance via chat, voice, and digital platforms, ensuring students get answers without delays.'
        ]);

        // Section 4: Automated Key Educational Services
        $section4 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Automated Key Educational Services',
            'description' => 'AI-powered solutions for comprehensive academic support'
        ]);

        $features4 = [
            [
                'icon' => 'fas fa-user-graduate',
                'title' => 'Course Enrollment & Registration',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-calendar-alt',
                'title' => 'Class Scheduling & Reminders',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-book',
                'title' => 'Exam & Assignment Assistance',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-dollar-sign',
                'title' => 'Financial Aid & Scholarship Guidance',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-briefcase',
                'title' => 'Career Counseling & Job Matching',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-university',
                'title' => 'Virtual Campus Tours & FAQs',
                'description' => ''
            ]
        ];

        foreach ($features4 as $feature) {
            ServiceFeature::create([
                'features_section_id' => $section4->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Section 5: Why Choose AI LifeBOT
        $section5 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Why Choose AI LifeBOT?',
            'description' => 'Advanced AI solutions designed specifically for education'
        ]);

        $features5 = [
            [
                'icon' => 'fas fa-brain',
                'title' => 'Pretrained with Academic Intelligence',
                'description' => 'Understands course structures, student queries, and institutional policies to deliver accurate, human-like responses.'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Secure & Compliant AI',
                'description' => 'Ensures data privacy and adheres to global educational compliance standards, protecting student and faculty information.'
            ],
            [
                'icon' => 'fas fa-chalkboard-teacher',
                'title' => 'AI That Works Alongside Educators',
                'description' => 'Automates repetitive administrative tasks, reducing workload and allowing teachers to focus on student success.'
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Multilingual & Omnichannel Support',
                'description' => 'AI LifeBOT communicates in over 100 languages and integrates seamlessly with LMS platforms, student portals, and digital classrooms.'
            ]
        ];

        foreach ($features5 as $feature) {
            ServiceFeature::create([
                'features_section_id' => $section5->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Section 6: Benefits
        $section6 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Revolutionize Learning with AI LifeBOT',
            'description' => 'Transform educational experiences with AI-powered solutions'
        ]);

        $features6 = [
            [
                'icon' => 'fas fa-users',
                'title' => 'Enhance student engagement',
                'description' => 'with personalized academic support'
            ],
            [
                'icon' => 'fas fa-tasks',
                'title' => 'Reduce administrative burdens',
                'description' => 'by automating key processes'
            ],
            [
                'icon' => 'fas fa-chalkboard',
                'title' => 'Empower educators',
                'description' => 'by providing AI-driven insights and assistance'
            ]
        ];

        foreach ($features6 as $feature) {
            ServiceFeature::create([
                'features_section_id' => $section6->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Update performance stats
        PerformanceStat::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'Transforming Education with AI LifeBOT',
                'subtitle' => 'Measurable results that transform learning experiences',
                'stats' => json_encode([
                    [
                        'stat_number' => '80%',
                        'stat_title' => 'Student Inquiries Handled',
                        'stat_description' => 'of student inquiries handled by AI Agents'
                    ],
                    [
                        'stat_number' => '60%',
                        'stat_title' => 'Administrative Workload Reduced',
                        'stat_description' => 'reduction in administrative workload for educators'
                    ],
                    [
                        'stat_number' => '90%',
                        'stat_title' => 'Student Satisfaction',
                        'stat_description' => 'student satisfaction with AI-driven academic support'
                    ]
                ])
            ]
        );

        // Final CTA Section
        ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Get Started with AI LifeBOT Today',
            'description' => 'Explore AI LifeBOT',
            'cta' => 'Request a Demo',
            'image' => 'assets/img/Solution/Industry/ai-agents-education/cta.jpg'
        ]);
    }
}
