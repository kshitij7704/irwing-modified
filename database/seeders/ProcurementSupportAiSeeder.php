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

class ProcurementSupportAiSeeder extends Seeder
{
    public function run()
    {
        // Create or update the main service record
        $service = Service::updateOrCreate(
            ['slug' => 'procurement-support-ai'],
            [
                'title' => 'Procurement Support AI',
                'description' => 'Achieve 70% Self-Service Across the Procure-to-Pay Lifecycle',
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
                'heading' => 'Achieve 70% Self-Service Across the Procure-to-Pay Lifecycle',
                'subheading' => 'Drive Real Procurement Outcomes with AI LifeBOT\'s Agentic AI',
                'description' => 'Empower employees and procurement teams with a unified interface to execute procurement actions, track requests, and follow up — all with 70% guaranteed self-service.',
                'image' => 'assets/img/Ai Agent/5.png',
                'cta' => 'Schedule a Demo',
                'features' => json_encode([
                    ['icon' => 'fas fa-percentage', 'title' => '70% Self-Service Guarantee'],
                    ['icon' => 'fas fa-robot', 'title' => 'Autonomous Procurement Support'],
                    ['icon' => 'fas fa-clock', 'title' => '80% Time Savings']
                ])
            ]
        );

        // Create features section
        $featuresSection = $service->featuresSections()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Smarter Procurement with Autonomous Agents',
                'description' => 'AI LifeBOT delivers autonomous procurement support that boosts operational efficiency and eliminates delays.',
                'image' => 'assets/img/procurement-ai-features.jpg'
            ]
        );

        // Features List
        $features = [
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Automate Key Actions',
                'description' => 'Handle PR and PO creation, updates, and follow-ups without manual intervention.'
            ],
            [
                'icon' => 'fas fa-file-invoice',
                'title' => 'Accelerate Invoice Approvals',
                'description' => 'Route, remind, and reconcile — ensuring on-time invoice approvals and payments.'
            ],
            [
                'icon' => 'fas fa-boxes',
                'title' => 'Real-Time Inventory Tracking',
                'description' => 'Enable instant insights into inventory status across multiple systems and locations.'
            ],
            [
                'icon' => 'fas fa-handshake',
                'title' => 'Streamlined Vendor Support',
                'description' => 'Keep vendors informed and paid on time through AI-driven updates and reminders.'
            ],
            [
                'icon' => 'fas fa-shipping-fast',
                'title' => 'Shipment Notifications and Workflow Closure',
                'description' => 'Notify teams of incoming shipments, update relevant systems when goods are received, and automatically close the procurement loop.'
            ],
            [
                'icon' => 'fas fa-plug',
                'title' => 'Seamless Integration with Procurement Ecosystems',
                'description' => 'Works natively with platforms like SAP Ariba, Coupa, Oracle, and more — no rework required.'
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
                'title' => 'Proven Procurement Transformation Results',
                'subtitle' => 'Trusted by Leading Global Enterprises, Including Fortune 500 Organizations',
                'stats' => json_encode([
                    [
                        'number' => '80%',
                        'label' => 'Time savings in critical procurement use cases'
                    ],
                    [
                        'number' => '58%',
                        'label' => 'Of supply chain processes can be restructured using AI'
                    ],
                    [
                        'number' => '29%',
                        'label' => 'Of working hours redirected to strategic activities'
                    ]
                ])
            ]
        );

        // Create testimonials
        $testimonials = [
            [
                'stat_number' => '2x',
                'stat_label' => 'Market Leader Recognition',
                'testimonial' => 'Recognized as a Leader in the Emerging Market Quadrant — two years in a row for transforming enterprise procurement with AI.'
            ],
            [
                'stat_number' => '50+',
                'stat_label' => 'Industry Reports',
                'testimonial' => 'Featured in 50+ industry reports for best-in-class UI/UX, ease of implementation, and customer satisfaction in procurement automation.'
            ],
            [
                'stat_number' => '2024',
                'stat_label' => 'Forbes Recognition',
                'testimonial' => 'Highlighted by Forbes as one of the essential Gen AI tools transforming enterprise operations and procurement workflows.'
            ],
            [
                'stat_number' => '70%',
                'stat_label' => 'Self-Service Achievement',
                'testimonial' => 'Autonomous agents reduce cycle time, increase compliance, and deliver real business impact across the entire procure-to-pay lifecycle.'
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
                'question' => 'What can AI-powered procurement automation actually do?',
                'answer' => 'It streamlines PR, PO, invoicing, shipment, and vendor communication with minimal human input.'
            ],
            [
                'question' => 'How is AI LifeBOT used in procurement?',
                'answer' => 'AI LifeBOT acts as an autonomous agent that executes procurement workflows and provides real-time updates across systems.'
            ],
            [
                'question' => 'Can procurement software integrate with our existing tools?',
                'answer' => 'Yes, AI LifeBOT integrates seamlessly with leading ERP, supply chain, and logistics platforms.'
            ],
            [
                'question' => 'Will AI replace procurement roles?',
                'answer' => 'No, it enhances human capability by removing repetitive tasks so teams can focus on strategic priorities.'
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
                'heading' => 'Ready to Transform Procurement with AI LifeBOT?',
                'description' => 'Experience the power of autonomous agents that reduce cycle time, increase compliance, and deliver real business impact.',
                'cta_text' => 'Book Your Personalized Demo Today',
                'cta_link' => '#',
                'background_image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80'
            ]
        );
    }
}
