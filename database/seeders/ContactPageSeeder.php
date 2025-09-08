<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceHeroSection;
use App\Models\ServiceFeaturesSection;
use App\Models\ServiceFeature;
use App\Models\ServiceAboutSection;
use App\Models\VidhiraSection;

class ContactPageSeeder extends Seeder
{
    public function run()
    {
        $service = Service::updateOrCreate(
            ['slug' => 'contact-us'],
            ['title' => 'Contact AI LifeBOT']
        );


        // Hero Section
        ServiceHeroSection::create([
            'service_id' => $service->id,
            'heading' => 'Get in Touch with Us',
            'description' => 'Fill out the form below, and one of our specialists will reach out to assist you.',
            'image' => 'assets/img/contact-hero.jpg',
            'cta' => 'Submit Inquiry',
        ]);

        // Contact Form Section - Your Details
        $yourDetailsSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Your Details',
            'description' => 'Provide your basic information so we can understand how to help you',
        ]);

        $yourDetailsFields = [
            ['icon' => 'fas fa-user', 'title' => 'First Name', 'description' => ''],
            ['icon' => 'fas fa-user', 'title' => 'Last Name', 'description' => ''],
            ['icon' => 'fas fa-envelope', 'title' => 'Business Email', 'description' => ''],
            ['icon' => 'fas fa-phone', 'title' => 'Phone Number', 'description' => ''],
            ['icon' => 'fas fa-building', 'title' => 'Company Name', 'description' => ''],
        ];

        foreach ($yourDetailsFields as $field) {
            ServiceFeature::create([
                'features_section_id' => $yourDetailsSection->id,
                'icon' => $field['icon'],
                'title' => $field['title'],
                'description' => $field['description'],
            ]);
        }

        // Contact Form Section - Additional Information
        $additionalInfoSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Additional Information',
            'description' => 'Help us understand your needs better',
        ]);

        $additionalInfoFields = [
            ['icon' => 'fas fa-users', 'title' => 'Number of Employees', 'description' => ''],
            ['icon' => 'fas fa-briefcase', 'title' => 'Your Role', 'description' => 'Select from options'],
            ['icon' => 'fas fa-industry', 'title' => 'Industry', 'description' => ''],
            ['icon' => 'fas fa-globe', 'title' => 'Country/Region', 'description' => 'Select from options'],
            ['icon' => 'fas fa-question-circle', 'title' => 'How Can We Assist You?', 'description' => 'Specify your request'],
        ];

        foreach ($additionalInfoFields as $field) {
            ServiceFeature::create([
                'features_section_id' => $additionalInfoSection->id,
                'icon' => $field['icon'],
                'title' => $field['title'],
                'description' => $field['description'],
            ]);
        }

        // Consent Section
        ServiceAboutSection::create([
            'service_id' => $service->id,
            'image' => 'assets/img/privacy-policy.jpg',
            'subheading' => 'Your Privacy Matters',
            'heading' => 'Data Protection',
            'description' => '✅ I consent to AI LifeBOT contacting me regarding products, services, and events.',
            'features' => json_encode([
                [
                    'icon' => 'fas fa-shield-alt',
                    'title' => 'Privacy Commitment',
                    'description' => 'By submitting this form, you agree to AI LifeBOT processing your data as outlined in our Privacy Policy. You can opt out of communications at any time.',
                ]
            ])
        ]);

        // Contact Methods Section
        $contactMethodsSection = ServiceFeaturesSection::create([
            'service_id' => $service->id,
            'heading' => 'Other Ways to Reach Us',
            'description' => 'Prefer to contact us directly? Here are alternative methods',
        ]);

        $contactMethods = [
            ['icon' => 'fas fa-envelope', 'title' => 'Email', 'description' => 'contact@ailifebot.com'],
            ['icon' => 'fas fa-phone', 'title' => 'Phone', 'description' => '+1 (800) 123-4567'],
            ['icon' => 'fas fa-map-marker-alt', 'title' => 'Office', 'description' => '123 AI Street, Tech City, TC 10101'],
            ['icon' => 'fas fa-calendar', 'title' => 'Schedule Meeting', 'description' => 'Book a direct consultation with our team'],
        ];

        foreach ($contactMethods as $method) {
            ServiceFeature::create([
                'features_section_id' => $contactMethodsSection->id,
                'icon' => $method['icon'],
                'title' => $method['title'],
                'description' => $method['description'],
            ]);
        }

        // CTA Section
        VidhiraSection::create([
            'service_id' => $service->id,
            'title' => 'Ready to Transform Your Business?',
            'subtitle' => 'We\'re Here to Help',
            'description' => 'Submit your inquiry today and our AI solutions experts will contact you within 24 hours to discuss how we can help your business grow.',
            'background_image' => 'assets/img/contact-cta-bg.jpg',
        ]);
    }

    protected function deleteExistingSections($serviceId)
    {
        $models = [
            \App\Models\ServiceHeroSection::class,
            \App\Models\ServiceFeaturesSection::class,
            \App\Models\ServiceFeature::class,
            \App\Models\ServiceAboutSection::class,
            \App\Models\VidhiraSection::class,
        ];

        foreach ($models as $model) {
            $model::where('service_id', $serviceId)->delete();
        }
    }
}
