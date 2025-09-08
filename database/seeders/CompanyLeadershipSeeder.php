<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceAboutSection;
use App\Models\VidhiraSection;

class CompanyLeadershipSeeder extends Seeder
{
    public function run()
    {
        $service = Service::updateOrCreate(
            ['slug' => 'leadership'],
            ['title' => 'Leadership at AI LifeBOT']
        );



        // Hero Section
        ServiceHeroSection::create([
            'service_id' => $service->id,
            'heading' => 'Meet the Visionaries Behind AI LifeBOT',
            'description' => 'Driving the Future of AI-Powered Customer Experience',
            'image' => 'assets/img/profile/Mask Group 39.png',
            'cta' => 'Meet Our Team',
        ]);

        // Company Intro Section
        ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Our Leadership',
            'description' => 'At AI LifeBOT, our leadership team is focused on revolutionizing customer service through intelligent, scalable AI solutions. With deep expertise in artificial intelligence, automation, and enterprise strategy, our leaders are building a future where customer interactions are seamless, personalized, and efficient.',
        ]);

        // Leadership Profile - Swati Gupta
        ServiceAboutSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/profile/Mask Group 38.png',
            'subheading' => 'Founder & CEO',
            'heading' => 'Swati Gupta',
            'description' => 'Swati Gupta leads AI LifeBOT with a bold vision to transform customer service through next-generation AI. With a strong background in digital transformation and business innovation, she has been a driving force in the evolution of conversational AI and machine learning technologies.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-lightbulb',
                    'title' => 'Thought Leadership',
                    'description' => 'Championed impactful initiatives in AI education and sustainable technology',
                ],
                [
                    'icon' => 'fas fa-globe',
                    'title' => 'Industry Recognition',
                    'description' => 'Recognized entrepreneur in conversational AI and machine learning',
                ],
                [
                    'icon' => 'fas fa-rocket',
                    'title' => 'Visionary Approach',
                    'description' => 'Redefining how global enterprises engage with customers',
                ]
            ])
        ]);

        // Leadership Profile - Puneet Agrawal
        ServiceAboutSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/puneet-agrawal.jpg',
            'subheading' => 'Co-Founder',
            'heading' => 'Puneet Agrawal',
            'description' => 'As Co-Founder, Puneet Agrawal oversees AI LifeBOT\'s growth strategy, sales enablement, and market expansion. With a strong foundation in AI automation and enterprise technology, Puneet has played a critical role in developing innovative product solutions that power intelligent customer interactions.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-chart-line',
                    'title' => 'Growth Strategy',
                    'description' => 'Driving market expansion and sales enablement',
                ],
                [
                    'icon' => 'fas fa-cogs',
                    'title' => 'Product Innovation',
                    'description' => 'Developing solutions for intelligent customer interactions',
                ],
                [
                    'icon' => 'fas fa-users',
                    'title' => 'Customer Focus',
                    'description' => 'Ensuring solutions meet evolving business needs',
                ]
            ])
        ]);

        // Leadership Impact Section
        ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Our Leadership Impact',
            'description' => 'AI LifeBOT\'s leadership is committed to delivering impactful AI solutions that empower organizations to:',
        ]);

        // CTA Section
        VidhiraSection::create([
            'service_id' => $service->id,
            'title' => 'Join the AI Customer Experience Revolution',
            'subtitle' => 'Partner with AI LifeBOT Leadership',
            'description' => 'Partner with us today—let\'s build the future of customer service, powered by AI.',
            'background_image' => 'assets/img/leadership-cta-bg.jpg',
        ]);
    }

    protected function deleteExistingSections($serviceId)
    {
        $models = [
            \App\Models\ServiceHeroSection::class,
            \App\Models\ServiceFeaturesSection::class,
            \App\Models\ServiceFeature::class,
            \App\Models\ServiceAboutSection::class,
            \App\Models\ServiceAgentSupportSection::class,
            \App\Models\ServiceProactiveSection::class,
            \App\Models\PerformanceStat::class,
            \App\Models\VidhiraSection::class,
            \App\Models\AiPoweredEngagementSection::class,
            \App\Models\AiBusinessInteractionSection::class,
            \App\Models\AiStatisticalHighlight::class,
        ];

        foreach ($models as $model) {
            $model::where('service_id', $serviceId)->delete();
        }
    }
}
