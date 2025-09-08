<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['slug', 'title'];

    public function heroSection()
    {
        return $this->hasOne(ServiceHeroSection::class);
    }

    public function featuresSection()
    {
        return $this->hasOne(ServiceFeaturesSection::class);
    }

    public function featuresSections()
    {
        return $this->hasMany(ServiceFeaturesSection::class);
    }

    public function aboutSection()
    {
        return $this->hasOne(ServiceAboutSection::class);
    }
    public function agentSupportSection()
    {
        return $this->hasOne(ServiceAgentSupportSection::class);
    }
    public function proactiveSection()
    {
        return $this->hasOne(ServiceProactiveSection::class);
    }

    public function performanceStat()
    {
        return $this->hasOne(PerformanceStat::class);
    }

    public function vidhiraSection()
    {
        return $this->hasOne(VidhiraSection::class);
    }

    public function aiEngagementSection()
    {
        return $this->hasOne(AiPoweredEngagementSection::class);
    }

    public function businessInteractionSection()
    {
        return $this->hasOne(AiBusinessInteractionSection::class);
    }

    public function statisticalHighlight()
    {
        return $this->hasOne(AiStatisticalHighlight::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }

    public function ctaSection()
    {
        return $this->hasOne(CtaSection::class);
    }
}
