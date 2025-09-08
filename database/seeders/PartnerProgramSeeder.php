<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\ServiceAboutSection;
use App\Models\VidhiraSection;

class PartnerProgramSeeder extends Seeder
{
    public function run()
    {
        // Create or update the service
        $service = Service::updateOrCreate(
            ['slug' => 'partner-program'],
            ['title' => 'Become an AI LifeBOT Partner']
        );

        // Clean up existing sections
        $this->deleteExistingSections($service->id);

        // Hero Section
        ServiceHeroSection::updateOrCreate(
            [
                'service_id' => $service->id,
                'heading' => 'Become an AI LifeBOT Partner',
            ],
            [
                'description' => "<b>Empower businesses with AI-driven customer service solutions</b> Join the <b>AI LifeBOT Partner Program</b> and be part of the revolution in <b>AI-powered customer engagement</b>. Our cutting-edge <b>Conversational AI solutions</b> help businesses deliver instant, <b>personalized, and seamless customer experiences</b> across all channels.<ul><li><b>Drive business growth</b></li><li><b>Enhance customer support</b></li><li><b>Expand your market reach</b></li></ul>",
                'image' => 'assets/img/partner-hero.jpg',
                'cta' => 'Apply Now',
            ]
        );

        // Why Partner Section
        $whySection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Why Partner with AI LifeBOT?',
            'description' => 'Transform your business with AI-powered customer service today!',
        ]);

        $whyFeatures = [
            ['icon' => 'fas fa-lightbulb', 'title' => 'Innovative AI Technology', 'description' => 'Leverage industry-leading AI chatbot solutions for next-gen automation.'],
            ['icon' => 'fas fa-expand', 'title' => 'Scalable Solutions', 'description' => 'From startups to enterprises, our AI agents adapt to any business size.'],
            ['icon' => 'fas fa-chart-line', 'title' => 'High Revenue Potential', 'description' => 'Unlock new revenue streams by delivering AI-powered automation.'],
            ['icon' => 'fas fa-graduation-cap', 'title' => 'Expert Training & Support', 'description' => 'Get access to exclusive resources, training, and technical assistance.'],
            ['icon' => 'fas fa-plug', 'title' => 'Seamless Integration', 'description' => 'Works with CRM, ERP, and enterprise tools for easy deployment.'],
        ];

        foreach ($whyFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $whySection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        // Benefits Section
        $benefitsSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Partner Benefits',
            'description' => 'Empower your clients with AI-driven automation and become a leader in customer service innovation.',
        ]);

        $benefitsFeatures = [
            ['icon' => 'fas fa-bullhorn', 'title' => 'Go-To-Market Support', 'description' => 'Marketing materials, sales enablement, and joint campaigns.'],
            ['icon' => 'fas fa-user-tie', 'title' => 'Dedicated Partner Manager', 'description' => 'Work closely with experts to maximize success.'],
            ['icon' => 'fas fa-chart-bar', 'title' => 'Exclusive AI Insights', 'description' => 'Stay ahead with research, trends, and product updates.'],
            ['icon' => 'fas fa-cogs', 'title' => 'Customizable Solutions', 'description' => 'Tailor AI chatbots to fit clients\' specific needs.'],
        ];

        foreach ($benefitsFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $benefitsSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description'],
            ]);
        }

        // Partner Types Section
        $partnerTypesSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Who Can Partner with Us?',
            'description' => 'Join our global partner network and deliver the future of AI-driven customer service.',
        ]);

        $partnerTypes = [
            ['icon' => 'fas fa-laptop-code', 'title' => 'Technology Providers', 'description' => 'Enhance your software with intelligent chatbot capabilities.'],
            ['icon' => 'fas fa-robot', 'title' => 'Consulting & AI Firms', 'description' => 'Help businesses automate and optimize customer interactions.'],
            ['icon' => 'fas fa-puzzle-piece', 'title' => 'System Integrators', 'description' => 'Seamlessly integrate AI LifeBOT into enterprise ecosystems.'],
            ['icon' => 'fas fa-boxes', 'title' => 'Resellers & Distributors', 'description' => 'Offer AI-powered solutions and expand your portfolio.'],
        ];

        foreach ($partnerTypes as $type) {
            ServiceFeature::create([
                'features_section_id' => $partnerTypesSection->id,
                'icon' => $type['icon'],
                'title' => $type['title'],
                'description' => $type['description'],
            ]);
        }

        // Process Section
        ServiceAboutSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/partner-process.jpg',
            'subheading' => 'Get Started',
            'heading' => 'How to Become a Partner?',
            'description' => 'Apply now and transform customer service with AI LifeBOT!',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-edit',
                    'title' => 'Apply',
                    'description' => 'Submit your application and tell us about your business.',
                ],
                [
                    'icon' => 'fas fa-check-circle',
                    'title' => 'Get Approved',
                    'description' => 'Our team reviews applications and onboards qualified partners.',
                ],
                [
                    'icon' => 'fas fa-rocket',
                    'title' => 'Start Selling',
                    'description' => 'Access partner resources and bring AI automation to clients.',
                ]
            ])
        ]);

        // Final CTA Section
        VidhiraSection::create([
            'service_id' => $service->id,
            'title' => 'Join the AI LifeBOT Partner Program',
            'subtitle' => 'Let\'s build the future of customer engagement-together!',
            'description' => 'Partner with AI LifeBOT and help businesses transform customer engagement through AI-powered solutions. Contact us today to unlock new revenue streams.',
            'background_image' => 'assets/img/partner-cta-bg.jpg',
        ]);
    }

    private function deleteExistingSections($serviceId)
    {
        ServiceHeroSection::where('service_id', $serviceId)->delete();

        $featureSections = ServiceFeaturesSection::where('service_id', $serviceId)->get();
        foreach ($featureSections as $section) {
            ServiceFeature::where('features_section_id', $section->id)->delete();
            $section->delete();
        }

        ServiceAboutSection::where('service_id', $serviceId)->delete();
        VidhiraSection::where('service_id', $serviceId)->delete();
    }
}
