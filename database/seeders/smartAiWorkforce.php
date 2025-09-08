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

class SmartAiWorkforce extends Seeder
{
    public function run()
    {
        // Create or update the service
        $service = Service::updateOrCreate(
            ['slug' => 'smart-ai-work-forces'],
            ['title' => 'Smart AI Workforce']
        );

        // Clean up existing data
        ServiceHeroSection::where('service_id', $service->id)->delete();

        $featureSections = ServiceFeaturesSection::where('service_id', $service->id)->get();
        foreach ($featureSections as $section) {
            ServiceFeature::where('features_section_id', $section->id)->delete();
            $section->delete();
        }

        ServiceAboutSection::where('service_id', $service->id)->delete();
        ServiceAgentSupportSection::where('service_id', $service->id)->delete();
        ServiceProactiveSection::where('service_id', $service->id)->delete();
        PerformanceStat::where('service_id', $service->id)->delete();
        VidhiraSection::where('service_id', $service->id)->delete();
        AiPoweredEngagementSection::where('service_id', $service->id)->delete();
        AiBusinessInteractionSection::where('service_id', $service->id)->delete();
        AiStatisticalHighlight::where('service_id', $service->id)->delete();

        // 1. Hero Section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Introducing Smart AI Workforce',
                'subheading' => 'AI That Thinks, Learns, and Evolves With You',
                'description' => 'At AI Life Bot, we are revolutionizing intelligent automation with our next-generation AI Agent Copilot. Our advanced AI-driven solutions empower businesses to enhance efficiency, elevate customer engagement, and drive scalable growth. With seamless adaptability across industries, we ensure smarter operations, faster decision-making, and intuitive interactions—delivering unmatched precision, intelligence, and responsiveness.',
                'image' => 'assets/img/Explore Enterprise AI Agent/image10.png',
                'cta' => 'Book a Demo',
                'features' => json_encode([
                    ['icon' => 'fas fa-robot', 'title' => 'Smarter Automation'],
                    ['icon' => 'fas fa-chart-line', 'title' => 'Scalable Growth'],
                    ['icon' => 'fas fa-cogs', 'title' => 'Seamless Engagement']
                ]),
            ]
        );

        // 2. Innovation at the Core Section
        $innovationSection = ServiceFeaturesSection::updateOrCreate(
      ['service_id' => $service->id, 'heading' => 'Innovation at the Core'],
      [
          'subheading' => 'Empowering Businesses with AI for Unmatched Precision & Performance',
          'description' => 'Harnessing cutting-edge Conversational AI, NLP, and Machine Learning, AI Life Bot seamlessly integrates into your enterprise, offering:',
          'image' => 'assets/img/innovation-bg.png', // Section background image
      ]
  );

  $innovationFeatures = [
      [
          'icon' => 'fas fa-brain',
          'title' => 'Context-Aware AI Assistants',
          'description' => 'Understand and adapt to complex queries for natural, human-like interactions.',
          'image' => 'assets/img/Explore Enterprise AI Agent/image1.jpeg'
      ],
      [
          'icon' => 'fas fa-sync-alt',
          'title' => 'Intelligent Automation',
          'description' => 'Optimize workflows, eliminate repetitive tasks, and minimize manual effort.',
          'image' => 'assets/img/Explore Enterprise AI Agent/image2.jpeg'
      ],
      [
          'icon' => 'fas fa-microchip',
          'title' => 'Omnichannel Presence',
          'description' => 'Deliver seamless support across voice, chat, email, and social media.',
          'image' => 'assets/img/Explore Enterprise AI Agent/image3.jpeg'
      ],
      [
          'icon' => 'fas fa-chart-bar',
          'title' => 'Real-Time Insights & Analytics',
          'description' => 'Drive smarter, data-backed decision-making.',
          'image' => 'assets/img/Explore Enterprise AI Agent/image4.jpeg'
      ],
  ];

  foreach ($innovationFeatures as $feature) {
      ServiceFeature::updateOrCreate(
          [
              'features_section_id' => $innovationSection->id,
              'title' => $feature['title']
          ],
          [
              'icon' => $feature['icon'],
              'description' => $feature['description'],
              'image' => $feature['image'] // Add image for each feature
          ]
      );
  }
        // 3. Vision Section (using AboutSection model)
        ServiceAboutSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'image' => 'assets/img/placeholder.jpg', // Added placeholder image
                'subheading' => 'Our mission is to redefine the future of AI-driven automation with intelligent, ethical, and human-centric solutions.',
                'heading' => 'Our Vision & Core Principles',
                'description' => 'At AI LifeBot, we believe in technology that enhances, not replaces, human potential—boosting productivity while keeping a human touch.',
                'features' => json_encode([
                    [
                        'icon' => 'fas fa-flask',
                        'title' => 'Relentless Innovation',
                        'description' => 'Pioneering AI solutions that set new industry benchmarks.'
                    ],
                    [
                        'icon' => 'fas fa-users',
                        'title' => 'Customer-First Approach',
                        'description' => 'Creating intuitive, seamless AI experiences.'
                    ],
                    [
                        'icon' => 'fas fa-globe',
                        'title' => 'Global Intelligence, Local Precision',
                        'description' => 'Scalable AI, tailored to regional nuances.'
                    ],
                    [
                        'icon' => 'fas fa-balance-scale',
                        'title' => 'Ethical & Transparent AI',
                        'description' => 'Upholding integrity, security, and fairness in AI development.'
                    ],
                ])
            ]
        );

        // 4. Sustainability Section (using AgentSupportSection model)
        ServiceAgentSupportSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'image' => 'assets/img/Explore Enterprise AI Agent/image5.jpeg', // Added placeholder image
                'subheading' => 'Sustainable and Ethical AI Practices',
                'heading' => 'Commitment to Sustainability & Ethical AI',
                'description' => 'As a responsible AI innovator, AI Life Bot is dedicated to sustainable and ethical AI practices. Our initiatives focus on:',
                'features' => json_encode([
                    [
                        'icon' => 'fas fa-leaf',
                        'title' => 'Optimized AI Models',
                        'description' => 'Minimize energy consumption and environmental impact'
                    ],
                    [
                        'icon' => 'fas fa-cloud',
                        'title' => 'Cloud-Based Efficiencies',
                        'description' => 'Reduce unnecessary data processing waste'
                    ],
                    [
                        'icon' => 'fas fa-shield-alt',
                        'title' => 'Responsible AI Governance',
                        'description' => 'Ensure transparency, fairness, and data security'
                    ],
                ])
            ]
        );

        // 5. CTA Section (using ProactiveSection model)
        ServiceProactiveSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'image' => 'assets/img/placeholder.jpg', // Added placeholder image
                'subheading' => 'Unlock the Next Era of Automation',
                'heading' => 'Experience the Future of AI-Powered Virtual Assistance',
                'description' => 'Discover how AI Life Bot can elevate your business operations, enhance customer interactions, and drive intelligent automation.',
                'features' => json_encode([])
            ]
        );

        // 6. Create minimal placeholder records for other required sections
        PerformanceStat::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'Performance Stats',
                'subtitle' => 'Our AI Workforce delivers measurable results',
                'stats' => json_encode([
                    [
                        'stat_number' => '99%',
                        'stat_title' => 'Efficiency',
                        'stat_description' => 'improvement in operations'
                    ]
                ])
            ]
        );

        VidhiraSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'AI Solutions',
                'subtitle' => 'Advanced AI-powered solutions for your business',
                'description' => 'Transform your business operations with our intelligent AI workforce',
                'background_image' => 'assets/img/placeholder.jpg',
            ]
        );

        AiPoweredEngagementSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'AI-Powered Engagement',
                'subtitle' => 'Transform customer interactions with AI',
                'features' => json_encode([
                    [
                        'icon' => 'fas fa-robot',
                        'title' => 'Intelligent Assistance',
                        'description' => 'AI-powered support for your customers'
                    ]
                ])
            ]
        );

        AiBusinessInteractionSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'Business Interactions',
                'features' => json_encode([
                    [
                        'icon' => 'fas fa-chart-line',
                        'title' => 'Performance',
                        'description' => 'Boost business performance with AI'
                    ]
                ])
            ]
        );

        AiStatisticalHighlight::updateOrCreate(
            ['service_id' => $service->id],
            [
                'stats' => json_encode([
                    [
                        'number' => '40%',
                        'title' => 'Growth',
                        'description' => 'increase in productivity'
                    ]
                ])
            ]
        );
    }
}
