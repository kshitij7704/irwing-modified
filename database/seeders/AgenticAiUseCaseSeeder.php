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

class AgenticAiUseCaseSeeder extends Seeder
{
    public function run()
    {
        // Create or update the main service record
        $service = Service::updateOrCreate(
            ['slug' => 'agentic-ai-use-cases'],
            [
                'title' => 'Agentic AI Use Case Library',
                'description' => 'Explore what Agentic AI can do for your enterprise',
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
                'heading' => 'Agentic AI Use Case Library',
                'subheading' => 'AI LifeBOT Device Agent',
                'description' => 'Explore what Agentic AI can do for your enterprise with our comprehensive library of automated solutions.',
                'image' => 'assets/img/Ai Agent/7.png',
                'cta' => 'Request a Demo',
                'features' => json_encode([
                    ['icon' => 'fas fa-desktop', 'title' => 'IT Use Cases'],
                    ['icon' => 'fas fa-users', 'title' => 'HR Use Cases'],
                    ['icon' => 'fas fa-chart-pie', 'title' => 'Finance Use Cases']
                ])
            ]
        );

        // Create IT features section
        $itFeaturesSection = $service->featuresSections()->create([
            'service_id' => $service->id,
            'heading' => 'IT Use Cases',
            'description' => 'Automate IT operations and support with intelligent agents',
            'image' => 'assets/img/it-use-cases.jpg'
        ]);

        // IT Features
        $itFeatures = [
            [
                'icon' => 'fas fa-key',
                'title' => 'Manage Password',
                'description' => 'Automate password management and resetting'
            ],
            [
                'icon' => 'fas fa-download',
                'title' => 'Install and Manage Software',
                'description' => 'Install, uninstall and update software automatically'
            ],
            [
                'icon' => 'fas fa-globe',
                'title' => 'Manage Website Access',
                'description' => 'Provide option to whitelist and blacklist websites'
            ],
            [
                'icon' => 'fas fa-envelope',
                'title' => 'Fix Email Send Issues',
                'description' => 'Fix issues regarding sending and receiving emails'
            ],
            [
                'icon' => 'fas fa-list',
                'title' => 'Modify Distribution List',
                'description' => 'Manage and automate email distribution list updates'
            ],
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Set Up and Manage Device',
                'description' => 'Access and troubleshoot devices like printer, mic etc'
            ],
            [
                'icon' => 'fas fa-user-plus',
                'title' => 'Create and Update User',
                'description' => 'Automate user creation and update details'
            ],
            [
                'icon' => 'fas fa-tachometer-alt',
                'title' => 'Fix Device Slowness',
                'description' => 'Automate troubleshooting to resolve device slowness'
            ]
        ];

        foreach ($itFeatures as $feature) {
            $itFeaturesSection->features()->create([
                'features_section_id' => $itFeaturesSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Create HR features section
        $hrFeaturesSection = $service->featuresSections()->create([
            'service_id' => $service->id,
            'heading' => 'HR Use Cases',
            'description' => 'Streamline HR processes with automated workflows',
            'image' => 'assets/img/hr-use-cases.jpg'
        ]);

        // HR Features
        $hrFeatures = [
            [
                'icon' => 'fas fa-calendar-check',
                'title' => 'Request and Approve Time Off',
                'description' => 'Request and approve time off requests in one click'
            ],
            [
                'icon' => 'fas fa-dollar-sign',
                'title' => 'Resolve Salary Discrepancy',
                'description' => 'Investigate and raise ticket to fix salary discrepancies'
            ],
            [
                'icon' => 'fas fa-comments',
                'title' => 'Request Peer Feedback',
                'description' => 'Ask for and track status of peer feedback for appraisal'
            ],
            [
                'icon' => 'fas fa-sign-out-alt',
                'title' => 'Initiate Exit Process',
                'description' => 'Start employee offboarding formalities'
            ],
            [
                'icon' => 'fas fa-user-edit',
                'title' => 'Update Personal Records',
                'description' => 'Update personal info like address, name, number etc'
            ],
            [
                'icon' => 'fas fa-plane',
                'title' => 'Claim Travel Reimbursement',
                'description' => 'Submit claims for travel reimbursement'
            ]
        ];

        foreach ($hrFeatures as $feature) {
            $hrFeaturesSection->features()->create([
                'features_section_id' => $hrFeaturesSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Create Finance features section
        $financeFeaturesSection = $service->featuresSections()->create([
            'service_id' => $service->id,
            'heading' => 'Finance Use Cases',
            'description' => 'Automate financial processes and procurement workflows',
            'image' => 'assets/img/finance-use-cases.jpg'
        ]);

        // Finance Features
        $financeFeatures = [
            [
                'icon' => 'fas fa-file-invoice',
                'title' => 'Generate PR and PO',
                'description' => 'Create Purchase Requisition (PR) and Purchase Order (PO) automatically'
            ]
        ];

        foreach ($financeFeatures as $feature) {
            $financeFeaturesSection->features()->create([
                'features_section_id' => $financeFeaturesSection->id,
                'icon' => $feature['icon'],
                'title' => $feature['title'],
                'description' => $feature['description']
            ]);
        }

        // Create integration compatibility section as performance stats
        $service->performanceStat()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'title' => 'Compatible with Leading Enterprise Platforms',
                'subtitle' => 'Seamlessly integrates with your existing technology stack',
                'stats' => json_encode([
                    [
                        'number' => '50+',
                        'label' => 'Enterprise integrations including Google, ServiceNow, Microsoft, and more'
                    ],
                    [
                        'number' => '100%',
                        'label' => 'Cloud-native compatibility across major platforms'
                    ],
                    [
                        'number' => '24/7',
                        'label' => 'Automated support and monitoring capabilities'
                    ]
                ])
            ]
        );

        // Create integration testimonials
        $integrations = [
            [
                'stat_number' => 'Google',
                'stat_label' => 'Cloud Integration',
                'testimonial' => 'Native integration with Google Workspace, ServiceNow, and Microsoft Active Directory for seamless enterprise operations.'
            ],
            [
                'stat_number' => 'Microsoft',
                'stat_label' => 'Enterprise Suite',
                'testimonial' => 'Full compatibility with Microsoft Dynamics 365, SharePoint, and Entra ID for comprehensive business automation.'
            ],
            [
                'stat_number' => 'SAP',
                'stat_label' => 'ERP Systems',
                'testimonial' => 'Deep integration with SAP Ariba, S4HANA, Concur, and other leading ERP solutions for end-to-end process automation.'
            ],
            [
                'stat_number' => 'Security',
                'stat_label' => 'Enterprise Grade',
                'testimonial' => 'Compatible with Okta, Zscaler, Cloudflare, and Netskope for enterprise-grade security and access management.'
            ]
        ];

        foreach ($integrations as $integration) {
            $service->testimonials()->create([
                'service_id' => $service->id,
                'stat_number' => $integration['stat_number'],
                'stat_label' => $integration['stat_label'],
                'testimonial' => $integration['testimonial']
            ]);
        }

        // Create FAQs
        $faqs = [
            [
                'question' => 'What is Agentic AI and how does it work?',
                'answer' => 'Agentic AI refers to autonomous agents that can perform tasks independently, making decisions and taking actions across various enterprise systems without constant human supervision.'
            ],
            [
                'question' => 'Which enterprise systems does AI LifeBOT integrate with?',
                'answer' => 'AI LifeBOT integrates with 50+ platforms including Google, ServiceNow, Microsoft, SAP, Oracle, Workday, and many other leading enterprise solutions.'
            ],
            [
                'question' => 'Can I customize use cases for my specific business needs?',
                'answer' => 'Yes, AI LifeBOT can be customized to handle specific workflows and processes unique to your organization while maintaining compatibility with existing systems.'
            ],
            [
                'question' => 'How secure is the AI LifeBOT Device Agent?',
                'answer' => 'AI LifeBOT maintains enterprise-grade security with compatibility across leading security platforms like Okta, Zscaler, and Cloudflare.'
            ],
            [
                'question' => 'What departments can benefit from these use cases?',
                'answer' => 'IT, HR, and Finance departments can immediately benefit, with use cases spanning password management, employee onboarding, procurement, and more.'
            ]
        ];

        foreach ($faqs as $faq) {
            $service->faqs()->create([
                'service_id' => $service->id,
                'question' => $faq['question'],
                'answer' => $faq['answer']
            ]);
        }

        // Create CTA section
        $service->ctaSection()->updateOrCreate(
            ['service_id' => $service->id],
            [
                'heading' => 'Discover the Power of Enterprise Agentic AI',
                'description' => 'See how AI LifeBOT can transform your business operations with intelligent automation across IT, HR, and Finance.',
                'cta_text' => 'Book a Personalized Demo',
                'cta_link' => '#',
                'background_image' => 'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80'
            ]
        );
    }
}
