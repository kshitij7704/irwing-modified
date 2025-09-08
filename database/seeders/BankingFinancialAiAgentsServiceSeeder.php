<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class BankingFinancialAiAgentsServiceSeeder extends Seeder
{
    public function run()
    {
        // Create or update service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agents-banking-financial'],
            ['title' => 'AI Agents for Banking & Financial Services']
        );

        // Hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'The Future of Smart Banking Assistance',
                'description' => 'Revolutionizing financial services with AI-powered virtual assistants that provide instant, personalized, and secure banking support—anytime, anywhere.',
                'image' => 'assets/img/Solution/Industry/ai-agents-banking-financial/1.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Remove existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();


        // What is AI LifeBOT?
        $whatIsSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'What is AI LifeBOT?',
            'description' => 'AI LifeBOT is a next-gen AI assistant designed to enhance customer banking experiences, support financial teams, and automate routine banking operations. From handling account inquiries to fraud detection, AI LifeBOT ensures seamless, 24/7 financial support across chat, voice, and digital platforms.'
        ]);

        // Performance stats
        PerformanceStat::updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'Transforming Banking with AI LifeBOT',
                'subtitle' => null,
                'stats' => json_encode([
                    [
                        'stat_number' => '90%',
                        'stat_title' => 'Customer Queries Handled',
                        'stat_description' => 'of customer queries handled by AI Agents'
                    ],
                    [
                        'stat_number' => '60%',
                        'stat_title' => 'Call Center Volume Reduction',
                        'stat_description' => 'reduction in call center volume'
                    ],
                    [
                        'stat_number' => '80%',
                        'stat_title' => 'Customer Satisfaction Increase',
                        'stat_description' => 'increase in customer satisfaction with AI-driven interactions'
                    ]
                ])
            ]
        );

        // How AI LifeBOT Enhances Banking Services
        $enhanceSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'How AI LifeBOT Enhances Banking Services',
            'description' => ''
        ]);
        $enhanceFeatures = [
            ['icon' => 'fas fa-headset', 'title' => '24/7 AI-Powered Customer Support', 'description' => 'Provide instant banking assistance via chat, voice, and digital channels, ensuring customers get quick and accurate responses.'],
            ['icon' => 'fas fa-piggy-bank', 'title' => 'Account Management', 'description' => 'Automated account inquiries and management.'],
            ['icon' => 'fas fa-shield-alt', 'title' => 'Fraud Detection & Security Alerts', 'description' => 'AI-driven fraud monitoring and security notifications.'],
            ['icon' => 'fas fa-home', 'title' => 'Loan & Mortgage Assistance', 'description' => 'Support for loan and mortgage queries.'],
            ['icon' => 'fas fa-exchange-alt', 'title' => 'Payments & Fund Transfers', 'description' => 'Automated payments and fund transfers.'],
            ['icon' => 'fas fa-credit-card', 'title' => 'Credit Card & Investment Advisory', 'description' => 'AI-powered credit card and investment guidance.'],
            ['icon' => 'fas fa-file-contract', 'title' => 'KYC & Compliance Automation', 'description' => 'Automated KYC and compliance processes.'],
        ];
        foreach ($enhanceFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $enhanceSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Why Choose AI LifeBOT?
        $whySection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Why Choose AI LifeBOT?',
            'description' => ''
        ]);
        $whyFeatures = [
            ['icon' => 'fas fa-brain', 'title' => 'Pretrained with Financial Intelligence', 'description' => 'Understands banking terminology, regulatory requirements, and customer needs to provide accurate, human-like responses.'],
            ['icon' => 'fas fa-balance-scale', 'title' => 'Regulatory-Compliant AI', 'description' => 'AI LifeBOT ensures complete data security and privacy, adhering to global financial regulations such as PCI DSS, GDPR, and KYC norms.'],
            ['icon' => 'fas fa-users', 'title' => 'AI That Works Alongside Your Banking Teams', 'description' => 'Supports financial service representatives by automating repetitive tasks, reducing workload, and improving operational efficiency.'],
            ['icon' => 'fas fa-globe', 'title' => 'Multilingual & Omnichannel Support', 'description' => 'AI LifeBOT communicates in over 100 languages and integrates seamlessly with banking CRMs, mobile apps, and online portals.'],
        ];
        foreach ($whyFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $whySection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Benefits
        $benefitsSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Revolutionize Banking with AI LifeBOT',
            'description' => ''
        ]);
        $benefitsFeatures = [
            ['icon' => 'fas fa-smile', 'title' => 'Enhance customer experience', 'description' => 'with 24/7 personalized financial support'],
            ['icon' => 'fas fa-money-bill-wave', 'title' => 'Reduce operational costs', 'description' => 'by automating routine banking inquiries'],
            ['icon' => 'fas fa-user-shield', 'title' => 'Boost fraud prevention', 'description' => 'with AI-driven security monitoring'],
        ];
        foreach ($benefitsFeatures as $feature) {
            ServiceFeature::create([
                'features_section_id' => $benefitsSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Final CTA Section
        ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Get Started with AI LifeBOT Today',
            'description' => 'Explore AI LifeBOT',
            'cta' => 'Request a Demo',
            'image' => 'assets/img/Solution/Industry/ai-agents-banking-financial/cta.jpg'
        ]);
    }
}
