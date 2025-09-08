<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\ServiceAboutSection;
use App\Models\VidhiraSection;
use App\Models\AiBusinessInteractionSection;

class CareersPageSeeder extends Seeder
{
    public function run()
    {
        $service = Service::updateOrCreate(
            ['slug' => 'careers'],
            ['title' => 'Careers at AI LifeBOT']
        );

        // Hero Section
        ServiceHeroSection::create([
            'service_id' => $service->id,
            'heading' => 'Join AI LifeBOT and Shape the Future of AI-Powered Customer Service',
            'description' => "At AI LifeBOT, we're revolutionizing customer service through advanced AI solutions. Our mission is to empower businesses with intelligent automation, delivering exceptional customer experiences across all channels.",
            'image' => 'assets/img/careers-hero.jpg',
            'cta' => 'Explore Opportunities',
        ]);

        // Why AI LifeBOT Section
        $whySection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Why AI LifeBOT?',
            'description' => 'Join a team that values creativity, diversity, and continuous learning in the AI revolution.',
        ]);

        $whyFeatures = [
            [
                'icon' => 'fas fa-lightbulb',
                'title' => 'Innovative Environment',
                'description' => 'Work with cutting-edge AI technologies to transform customer interactions.'
            ],
            [
                'icon' => 'fas fa-globe-americas',
                'title' => 'Global Impact',
                'description' => 'Contribute to solutions that serve diverse industries worldwide.'
            ],
            [
                'icon' => 'fas fa-users',
                'title' => 'Collaborative Culture',
                'description' => 'Join a team that values creativity, diversity, and continuous learning.'
            ]
        ];

        foreach ($whyFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $whySection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        // Current Opportunities Section
        $opportunitiesSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Current Opportunities',
            'description' => "We're looking for passionate professionals to join our team in the following areas:",
        ]);

        $opportunityFeatures = [
            [
                'icon' => 'fas fa-laptop-code',
                'title' => 'Engineering',
                'description' => 'Develop and enhance our AI platforms.'
            ],
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Sales',
                'description' => 'Drive business growth and client relationships.'
            ],
            [
                'icon' => 'fas fa-bullhorn',
                'title' => 'Marketing',
                'description' => 'Promote our brand and engage with our audience.'
            ],
            [
                'icon' => 'fas fa-headset',
                'title' => 'Support',
                'description' => 'Ensure client success with our solutions.'
            ]
        ];

        foreach ($opportunityFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $opportunitiesSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        // Culture Section
        ServiceAboutSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/team-culture.jpg',
            'subheading' => 'Our Culture',
            'heading' => 'Why You’ll Love Being Part of AI LifeBOT',
            'description' => "At AI LifeBOT, we're more than just a team—we're a community of innovators shaping the future of AI-driven customer experiences. We foster a culture where creativity, collaboration, and ambition thrive, empowering everyone to push boundaries and make a lasting impact.",
            'features' => json_encode([
                [
                    'icon' => 'fas fa-users',
                    'title' => 'Collaboration',
                    'description' => 'Teamwork across disciplines to achieve common goals',
                ],
                [
                    'icon' => 'fas fa-shield-alt',
                    'title' => 'Integrity',
                    'description' => 'Ethical practices in all our AI solutions',
                ],
                [
                    'icon' => 'fas fa-rocket',
                    'title' => 'Innovation',
                    'description' => 'Constant pursuit of breakthrough technologies',
                ],
                [
                    'icon' => 'fas fa-eye',
                    'title' => 'Transparency',
                    'description' => 'Open communication at all organizational levels',
                ]
            ])
        ]);

        // Perks and Benefits Section
        $perksSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Perks and Benefits',
            'description' => 'We invest in our team members success and well-being',
        ]);

        $perkFeatures = [
            [
                'icon' => 'fas fa-calendar-alt',
                'title' => 'Flexible Work Arrangements',
                'description' => 'Balance work and life effectively with hybrid options'
            ],
            [
                'icon' => 'fas fa-graduation-cap',
                'title' => 'Professional Development',
                'description' => 'Access to training and growth opportunities'
            ],
            [
                'icon' => 'fas fa-heartbeat',
                'title' => 'Comprehensive Benefits',
                'description' => 'Health, wellness, and financial plans to support you'
            ]
        ];

        foreach ($perkFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $perksSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        // Industry Focus
        AiBusinessInteractionSection::create([
            'service_id' => $service->id,
            'title' => 'Make an Impact Across Industries',
            'features' => [
                [
                    'icon' => 'fas fa-university',
                    'title' => 'Banking & Finance',
                    'description' => 'Transform financial customer experiences',
                ],
                [
                    'icon' => 'fas fa-heartbeat',
                    'title' => 'Healthcare',
                    'description' => 'Revolutionize patient support systems',
                ],
                [
                    'icon' => 'fas fa-shopping-cart',
                    'title' => 'E-commerce',
                    'description' => 'Create next-gen shopping experiences',
                ],
                [
                    'icon' => 'fas fa-plug',
                    'title' => 'Telecommunications',
                    'description' => 'Redefine customer service automation',
                ],
            ],
        ]);

        // Call to Action
        VidhiraSection::create([
            'service_id' => $service->id,
            'title' => 'Ready to Innovate with Us?',
            'subtitle' => 'Launch Your Career in AI',
            'description' => 'Explore our open positions and apply today to be part of a team that\'s redefining customer service with AI. For more details on available roles and application procedures, please visit our Careers page.',
            'background_image' => 'assets/img/careers-cta-bg.jpg',
        ]);
    }
}
