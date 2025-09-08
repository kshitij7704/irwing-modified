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

class AcademySeeder extends Seeder
{
    public function run()
    {
        $service = Service::updateOrCreate(
            ['slug' => 'academy'],
            ['title' => 'Academy']
        );

        // Hero Section
        ServiceHeroSection::create([
            'service_id' => $service->id,
            'heading' => 'Welcome to AI LifeBOT Academy – The Future of AI Learning',
            'description' => 'At AI LifeBOT Academy, we don\'t just teach AI – we empower individuals and businesses to lead in an AI-driven world. Our academy is built for learners, innovators, and industry leaders who want to master AI technology, automation, and chatbot development.',
            'image' => 'assets/img/Resources/aiLifeBotAcademy/1.jpg',
            'cta' => 'Enroll Today',
        ]);

        // Why AI LifeBOT Academy Section
        $whySection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Why AI LifeBOT Academy?',
            'description' => 'Transform your career with our cutting-edge AI education programs',
        ]);

        $whyFeatures = [
            [
                'icon' => 'fas fa-rocket',
                'title' => 'Cutting-Edge Learning',
                'description' => 'Stay ahead with the latest advancements in AI, NLP, and automation',
                'image' => 'assets/img/Resources/aiLifeBotAcademy/2.jpg',
            ],
            [
                'icon' => 'fas fa-laptop-code',
                'title' => 'Real-World Application',
                'description' => 'Learn through hands-on projects and live industry use cases',
                'image' => 'assets/img/Resources/aiLifeBotAcademy/3.jpg',
            ],
            [
                'icon' => 'fas fa-chalkboard-teacher',
                'title' => 'Expert-Led Training',
                'description' => 'Gain insights from AI specialists and industry veterans',
                'image' => 'assets/img/Resources/aiLifeBotAcademy/4.jpg',
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Global Recognition',
                'description' => 'Courses designed to meet international standards',
                'image' => 'assets/img/Resources/aiLifeBotAcademy/5.jpg',
            ],
            [
                'icon' => 'fas fa-user-cog',
                'title' => 'Personalized Learning',
                'description' => 'Self-paced and instructor-led courses for all levels',
                'image' => 'assets/img/Resources/aiLifeBotAcademy/6.jpg',
            ],
            [
                'icon' => 'fas fa-award',
                'title' => 'Industry Certifications',
                'description' => 'Get recognized by leading AI organizations',
                'image' => 'assets/img/Resources/aiLifeBotAcademy/7.jpg',
            ],
        ];

        foreach ($whyFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $whySection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
                'image' => $feature['image'],
            ]);
        }

        // What Makes Us Different Section
        $differenceSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'What Makes Us Different?',
            'description' => 'Beyond traditional learning - a complete career accelerator',
        ]);

        $differenceFeatures = [
            ['icon' => 'fas fa-network-wired', 'title' => 'Career Ecosystem', 'description' => 'Networking, mentorship, and industry connections'],
            ['icon' => 'fas fa-heart', 'title' => 'Emotional Learning', 'description' => 'Nurturing creativity and leadership skills'],
            ['icon' => 'fas fa-medal', 'title' => 'Proven Success', 'description' => 'Graduates working with top AI companies and startups'],
        ];

        foreach ($differenceFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $differenceSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        // Courses Section
        $coursesSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Courses We Offer',
            'description' => 'Comprehensive programs to master AI technologies',
        ]);

        $courses = [
            ['icon' => 'fas fa-robot', 'title' => 'AI Chatbot Development', 'description' => 'Build and deploy intelligent AI-powered bots'],
            ['icon' => 'fas fa-comments', 'title' => 'Conversational AI & NLP', 'description' => 'Master natural language processing and automation'],
            ['icon' => 'fas fa-chart-line', 'title' => 'AI Business Transformation', 'description' => 'Learn how AI is reshaping industries'],
            ['icon' => 'fas fa-brain', 'title' => 'Advanced Machine Learning', 'description' => 'Dive deep into AI model training and optimization'],
        ];

        foreach ($courses as $course) {
            ServiceFeature::create([
                'features_section_id' => $coursesSection->id,
                'icon' => $course['icon'],
                'title' => $course['title'],
                'description' => $course['description'],
            ]);
        }

        // Career Accelerator Section
        ServiceAboutSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/Resources/aiLifeBotAcademy/8.jpg',
            'subheading' => 'Career Development',
            'heading' => 'More Than Just Learning – A Career Accelerator',
            'description' => 'We go beyond traditional education by offering networking opportunities, mentorship, and direct connections with industry leaders.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-handshake',
                    'title' => 'Industry Networking',
                    'description' => 'Connect with AI leaders and recruiters',
                ],
                [
                    'icon' => 'fas fa-user-graduate',
                    'title' => 'Mentorship Programs',
                    'description' => '1:1 guidance from experienced professionals',
                ],
                [
                    'icon' => 'fas fa-briefcase',
                    'title' => 'Job Placement',
                    'description' => 'Access to our partner companies',
                ],
                [
                    'icon' => 'fas fa-lightbulb',
                    'title' => 'Startup Incubation',
                    'description' => 'Support for launching AI ventures',
                ]
            ])
        ]);

        // Success Stories Section
        ServiceAgentSupportSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/Resources/aiLifeBotAcademy/9.jpg',
            'subheading' => 'Alumni Achievements',
            'heading' => 'Proven Success Stories',
            'description' => 'Our graduates have gone on to work with top AI companies, launched successful startups, and transformed businesses with AI-driven solutions.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-building',
                    'title' => 'Tech Giants',
                    'description' => 'Placements at Google, Microsoft, and Amazon',
                ],
                [
                    'icon' => 'fas fa-rocket',
                    'title' => 'AI Startups',
                    'description' => 'Successful ventures launched by alumni',
                ],
                [
                    'icon' => 'fas fa-industry',
                    'title' => 'Industry Transformation',
                    'description' => 'AI solutions implemented across sectors',
                ]
            ])
        ]);

        // Learning Approach Section
        ServiceProactiveSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/Resources/aiLifeBotAcademy/10.jpg',
            'subheading' => 'Educational Philosophy',
            'heading' => 'Emotional & Aspirational Learning Approach',
            'description' => 'We believe in shaping the AI leaders of tomorrow. Our academy nurtures creativity, problem-solving, and leadership, ensuring you\'re not just skilled but also visionary.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-people-arrows',
                    'title' => 'Collaborative Learning',
                    'description' => 'Team projects and peer programming',
                ],
                [
                    'icon' => 'fas fa-chess',
                    'title' => 'Strategic Thinking',
                    'description' => 'Developing future-oriented solutions',
                ],
                [
                    'icon' => 'fas fa-empire',
                    'title' => 'Leadership Development',
                    'description' => 'Cultivating tomorrow\'s AI pioneers',
                ]
            ])
        ]);

        // Academy Impact Stats
        PerformanceStat::create([
            'service_id' => $service->id,
            'title' => 'Academy Impact Metrics',
            'subtitle' => 'Transforming Careers Globally',
            'stats' => json_encode([
                [
                    'stat_number' => '10,000+',
                    'stat_title' => 'Graduates',
                    'stat_description' => 'Building AI solutions worldwide',
                ],
                [
                    'stat_number' => '95%',
                    'stat_title' => 'Placement Rate',
                    'stat_description' => 'Within 6 months of graduation',
                ],
                [
                    'stat_number' => '50+',
                    'stat_title' => 'Countries',
                    'stat_description' => 'Our global student community',
                ]
            ])
        ]);

        // Call to Action Section
        VidhiraSection::create([
            'service_id' => $service->id,
            'title' => 'Join AI LifeBOT Academy & Transform Your Future!',
            'subtitle' => 'Become a Part of the AI Revolution',
            'description' => 'Whether you\'re looking to upskill, switch careers, or integrate AI into your business, we\'re here to guide you every step of the way.',
            'background_image' => 'assets/img/Academy/cta-bg.jpg',
        ]);

        // Certification Section
        AiPoweredEngagementSection::create([
            'service_id' => $service->id,
            'title' => 'Industry Recognized Certifications',
            'subtitle' => 'Validate Your Expertise',
            'features' => [
                [
                    'icon' => 'fas fa-robot',
                    'title' => 'Chatbot Developer',
                    'description' => 'Certified AI bot development specialist',
                ],
                [
                    'icon' => 'fas fa-language',
                    'title' => 'NLP Engineer',
                    'description' => 'Advanced natural language processing',
                ],
                [
                    'icon' => 'fas fa-chart-pie',
                    'title' => 'AI Solutions Architect',
                    'description' => 'Enterprise AI implementation strategies',
                ],
                [
                    'icon' => 'fas fa-cloud',
                    'title' => 'AI Cloud Specialist',
                    'description' => 'Deployment on AWS/Azure/GCP platforms',
                ],
                [
                    'icon' => 'fas fa-user-tie',
                    'title' => 'AI Business Leader',
                    'description' => 'Strategic AI implementation for executives',
                ],
                [
                    'icon' => 'fas fa-shield-alt',
                    'title' => 'AI Ethics Professional',
                    'description' => 'Responsible AI implementation',
                ]
            ],
        ]);

        // Learning Path Section
        AiBusinessInteractionSection::create([
            'service_id' => $service->id,
            'title' => 'Your Learning Journey',
            'features' => [
                [
                    'icon' => 'fas fa-search',
                    'title' => 'Skill Assessment',
                    'description' => 'Identify your current level and goals',
                ],
                [
                    'icon' => 'fas fa-road',
                    'title' => 'Personalized Roadmap',
                    'description' => 'Custom learning path development',
                ],
                [
                    'icon' => 'fas fa-hands-helping',
                    'title' => 'Mentor Guidance',
                    'description' => 'Regular progress reviews with experts',
                ],
            ],
        ]);

        // Student Success Stats
        AiStatisticalHighlight::create([
            'service_id' => $service->id,
            'stats' => [
                [
                    'number' => '98%',
                    'title' => 'Satisfaction Rate',
                    'description' => 'Student approval of our programs',
                ],
                [
                    'number' => '6x',
                    'title' => 'Career Impact',
                    'description' => 'Average salary increase for graduates',
                ],
                [
                    'number' => '40%',
                    'title' => 'Entrepreneurs',
                    'description' => 'Graduates starting AI ventures',
                ],
            ],
        ]);
    }
}
