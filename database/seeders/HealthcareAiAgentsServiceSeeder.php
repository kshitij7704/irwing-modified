<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\PerformanceStat;

class HealthcareAiAgentsServiceSeeder extends Seeder
{
    public function run()
    {
        // Create or update service
        $service = Service::updateOrCreate(
            ['slug' => 'ai-agents-healthcare'],
            ['title' => 'AI Agents for Healthcare']
        );

        // Update hero section
        ServiceHeroSection::updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'The Future of Smart Healthcare Assistance',
                'description' => 'Revolutionizing patient care with AI-powered virtual assistants that provide instant, personalized, and secure healthcare support—anytime, anywhere.',
                'image' => 'assets/img/Solution/Industry/ai-agents-healthcare/1.jpg',
                'cta' => 'Request Demo',
            ]
        );

        // Remove existing feature sections and features
        ServiceFeaturesSection::where('service_id', $service->id)->delete();


        // Section 2: What is AI LifeBOT?
        $section2 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'What is AI LifeBOT?',
            'description' => 'AI LifeBOT is a next-gen AI assistant designed to enhance patient experiences, support medical staff, and automate routine healthcare processes. From answering medical queries to scheduling appointments, AI LifeBOT ensures seamless, 24/7 patient support across chat, voice, and digital platforms.'
        ]);

        // Section 3: 24/7 AI-Powered Patient Support
        $section3 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => '24/7 AI-Powered Patient Support',
            'description' => 'Provide immediate assistance via chat, voice, and digital touchpoints, ensuring patients get answers without long wait times.'
        ]);

        // Section 4: Automated Key Healthcare Services
        $section4 = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Automated Key Healthcare Services',
            'description' => 'AI-powered solutions for comprehensive patient support'
        ]);

        $features4 = [
            [
                'icon' => 'fas fa-calendar-check',
                'title' => 'Appointment Scheduling',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-pills',
                'title' => 'Medication Reminders & Refills',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-file-invoice-dollar',
                'title' => 'Billing & Insurance Assistance',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-stethoscope',
                'title' => 'Symptom Checker & Triage',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-user-md',
                'title' => 'Doctor & Specialist Referrals',
                'description' => ''
            ],
            [
                'icon' => 'fas fa-file-medical',
                'title' => 'Test Results & Reports',
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
            'description' => 'Advanced AI solutions designed specifically for healthcare'
        ]);

        $features5 = [
            [
                'icon' => 'fas fa-brain',
                'title' => 'Pretrained with Healthcare Intelligence',
                'description' => 'Understands medical terms, insurance processes, and patient needs to provide accurate, human-like responses.'
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'HIPAA & GDPR-Compliant AI',
                'description' => 'AI LifeBOT ensures complete data security and privacy, adhering to global healthcare regulations.'
            ],
            [
                'icon' => 'fas fa-user-nurse',
                'title' => 'AI That Works Alongside Your Team',
                'description' => 'Supports medical staff by automating repetitive tasks, reducing workload, and improving operational efficiency.'
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Multilingual & Omnichannel Support',
                'description' => 'AI LifeBOT communicates in over 100 languages and integrates seamlessly with EHR/EMR systems, hospital CRMs, and telehealth platforms.'
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
            'heading' => 'Revolutionize Patient Experience with AI LifeBOT',
            'description' => 'Transform healthcare services with AI-powered solutions'
        ]);

        $features6 = [
            [
                'icon' => 'fas fa-smile',
                'title' => 'Boost patient satisfaction',
                'description' => 'with faster, personalized healthcare support'
            ],
            [
                'icon' => 'fas fa-money-bill-wave',
                'title' => 'Reduce operational costs',
                'description' => 'by automating repetitive tasks and optimizing resources'
            ],
            [
                'icon' => 'fas fa-hands-helping',
                'title' => 'Empower healthcare teams',
                'description' => 'by freeing up medical staff for critical care'
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
                'title' => 'Transforming Healthcare with AI LifeBOT',
                'subtitle' => 'Measurable results that transform patient care',
                'stats' => json_encode([
                    [
                        'stat_number' => '85%',
                        'stat_title' => 'Routine Inquiries Handled',
                        'stat_description' => 'of routine inquiries handled by AI Agents'
                    ],
                    [
                        'stat_number' => '70%',
                        'stat_title' => 'Patient Wait Times Reduced',
                        'stat_description' => 'reduction in patient wait times'
                    ],
                    [
                        'stat_number' => '95%',
                        'stat_title' => 'Patient Satisfaction',
                        'stat_description' => 'patient satisfaction with AI-driven support'
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
            'image' => 'assets/img/Solution/Industry/ai-agents-healthcare/cta.jpg'
        ]);
    }
}
