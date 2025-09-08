@extends('layout.app')
@section('content')

    <main>
        <div class="aiServicePro-container mt-5">
            <section
                class="stori-hero-stori-section d-flex align-items-center justify-content-center position-relative overflow-hidden">

                <div class="container position-relative " style="z-index:2;">
                    <div class="row align-items-center mt-5 mb-5 g-5 flex-column-reverse flex-lg-row">
                        <div class="col-lg-6 d-flex align-items-center justify-content-start" data-aos="fade-up"
                            data-aos-duration="1200">
                            <div class="stori-hero-content px-3 px-lg-5 py-5 rounded-4"
                                style="background: rgba(255,255,255,0.96); backdrop-filter: blur(3px); text-align: left;">
                                <h1 class="display-4 fw-bold mb-3" style="font-size: 3rem">
                                    {{ $service->heroSection->heading }}
                                </h1>
                                <p class="lead mb-4" style="color: #000000; font-size: 1.15rem; text-align: left;">
                                    {!! $service->heroSection->description !!}
                                </p>
                                
                                <button type="button" class="btn stori-btn-primary-custom btn-lg shadow" data-bs-toggle="modal" data-bs-target="#serviceModal"
                                    style="background: #bc8000; border: none; color: #fff; font-weight: 600; letter-spacing: 0.5px;">
                                    {{ $service->heroSection->cta }}
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4 mb-lg-0 text-center" data-aos="fade-left" data-aos-duration="1200">
                            <div class="p-3 rounded-4 border-0">
                                <img src="{{ asset($service->heroSection->image) }}" alt="AI Conversation Illustration"
                                    class="img-fluid rounded-4"
                                    style="max-height: 440px; object-fit: cover; box-shadow: 0 8px 32px rgba(76, 110, 245, 0.13);">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Get Started Section -->
            <stori-section id="get-started" class="py-5 bg-light-purple">
                <div class="container mt-5 mb-5">
                    <h2 class="stori-section-title" data-aos="fade-up">{{ $service->featuresSections[0]->heading }}</h2>
                    <p class="text-center mb-5 lead" data-aos="fade-up" data-aos-delay="100">{{ $service->featuresSections[0]->description }}</p>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">
                        @foreach($service->featuresSections[0]->features as $index => $feature)
                        <div class="col" data-aos="fade-up" data-aos-delay="{{ 200 + ($index * 100) }}">
                            <div class="stori-card border border-2" style="border-color: {{ $index % 2 == 0 ? '#bc8000' : '#459bbf' }};">
                              <img src="{{ asset($feature->image) }}" class="stori-card-img-top" alt="{{ $feature->title }}">
                                <div class="stori-card-body">
                                    <h5 class="stori-card-title" style="color: {{ $index % 2 == 0 ? '#bc8000' : '#459bbf' }};">{{ $feature->title }}</h5>
                                    <p class="stori-card-text" style="color: #000000;">{{ $feature->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </stori-section>

            <!-- Build & Design Section -->
            <stori-section class="py-5">
                <div class="container mb-5">
                    <h2 class="stori-section-title" data-aos="fade-up">{{ $service->featuresSections[1]->heading }}</h2>
                    <p class="text-center mb-5 lead" data-aos="fade-up" data-aos-delay="100">{{ $service->featuresSections[1]->description }}</p>
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                            <img src="{{ asset($service->aboutSection->image) }}" class="stori-content-image" alt="Design Workflow">
                        </div>
                        <div class="col-lg-6">
                            <div class="row row-cols-1 row-cols-md-2 g-3">
                                @foreach($service->featuresSections[1]->features as $index => $feature)
                                <div class="col" data-aos="fade-left" data-aos-delay="{{ 300 + ($index * 100) }}">
                                    <div class="stori-card h-100 border border-2" style="border-color: {{ $index % 2 == 0 ? '#bc8000' : '#459bbf' }};">
                                        <div class="stori-card-body">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="{{ $feature->icon }} fs-3 me-2" style="color: {{ $index % 2 == 0 ? '#bc8000' : '#459bbf' }};"></i>
                                                <h5 class="stori-card-title mb-0" style="color: {{ $index % 2 == 0 ? '#bc8000' : '#459bbf' }};">{{ $feature->title }}</h5>
                                            </div>
                                            <p class="stori-card-text" style="color: #000000;">{{ $feature->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </stori-section>

            <!-- AI Intelligence Section (Skip first feature section) -->
            <stori-section class="py-5 stori-bg-dark-blue">
                <div class="container mb-5">
                    @for($sectionIndex = 1; $sectionIndex < count($service->featuresSections); $sectionIndex++)
                        @php
                            $section = $service->featuresSections[$sectionIndex];
                        @endphp
                        <h2 class="stori-section-title" data-aos="fade-up">{{ $section->heading }}</h2>
                        <p class="text-center mb-5 lead" data-aos="fade-up" data-aos-delay="100">{{ $section->description }}</p>
                        <div class="row justify-content-center g-4 mb-5">
                            @foreach($section->features as $index => $feature)
                                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center" data-aos="zoom-in"
                                    data-aos-delay="{{ 200 + ($index * 100) }}">
                                    <div class="stori-card w-100 h-100 text-center">
                                        <div class="stori-card-body">
                                            <div class="mb-2">
                                                @if(isset($feature->icon))
                                                    <i class="{{ $feature->icon }} fs-1" style="color: {{ $index % 3 == 0 ? '#bc8000' : ($index % 3 == 1 ? '#459bbf' : '#000000') }};"></i>
                                                @endif
                                            </div>
                                            <h5 class="stori-card-title" style="color: {{ $index % 3 == 0 ? '#bc8000' : ($index % 3 == 1 ? '#459bbf' : '#000000') }};">{{ $feature->title }}</h5>
                                            <p class="stori-card-text" style="color: #000000;">{{ $feature->description }}</p>
                                            @if(isset($feature->image))
                                                <img src="{{ asset($feature->image) }}" alt="{{ $feature->title }}" class="img-fluid mt-2" style="max-height: 120px;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endfor
                </div>
            </stori-section>

            <!-- Test & Optimize Section -->
            <stori-section class="py-5">
                <div class="container">
                    <h2 class="stori-section-title" data-aos="fade-up">{{ $service->agentSupportSection->heading }}</h2>
                    <p class="text-center mb-5 lead" data-aos="fade-up" data-aos-delay="100">{{ $service->agentSupportSection->description }}</p>
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-left" data-aos-delay="200">
                            <img src="{{ asset($service->agentSupportSection->image) }}" class="stori-content-image" alt="Testing Panel">
                        </div>
                        <div class="col-lg-6">
                            <div class="row g-4">
                                @foreach(json_decode($service->agentSupportSection->features) as $index => $feature)
                                <div class="col-12 col-md-6" data-aos="fade-right" data-aos-delay="{{ 300 + ($index * 100) }}">
                                    <div class="stori-card h-100 border border-2 border-light rounded-4 shadow-sm bg-white">
                                        <div class="stori-card-body text-center py-4">
                                            <div class="mb-3">
                                                <i class="{{ $feature->icon }} fs-2 text-primary"></i>
                                            </div>
                                            <h5 class="stori-card-title mb-2">{{ $feature->title }}</h5>
                                            <p class="stori-card-text small text-muted">{{ $feature->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </stori-section>

            <!-- Deploy Section -->
            <stori-section class="py-5 bg-light-purple">
                <div class="container mt-5 mb-5">
                    <h2 class="stori-section-title" data-aos="fade-up">{{ $service->proactiveSection->heading }}</h2>
                    <p class="text-center mb-5 lead" data-aos="fade-up" data-aos-delay="100">{{ $service->proactiveSection->description }}</p>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach(json_decode($service->proactiveSection->features) as $index => $feature)
                        <div class="col" data-aos="fade-up" data-aos-delay="{{ 200 + ($index * 100) }}">
                            <div class="stori-card h-100 border-0 shadow-sm">
                                <div class="stori-card-body text-center">
                                    <div class="mb-3">
                                        <i class="{{ $feature->icon }} fs-2 text-primary"></i>
                                    </div>
                                    <h5 class="stori-card-title mb-2">{{ $feature->title }}</h5>
                                    <p class="stori-card-text">{{ $feature->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </stori-section>

            <!-- Analyze Section -->
            <stori-section class="py-5">
                <div class="container">
                    <h2 class="stori-section-title" data-aos="fade-up">{{ $service->performanceStat->title }}</h2>
                    <p class="text-center mb-5 lead" data-aos="fade-up" data-aos-delay="100">{{ $service->performanceStat->subtitle }}</p>
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                            <img src="/assets/img/0013.jpg" class="stori-content-image" alt="Analytics Dashboard">
                        </div>
                        <div class="col-lg-6">
                            <div class="row row-cols-1 row-cols-md-2 g-3">
                                @foreach(json_decode($service->performanceStat->stats) as $index => $stat)
                                <div class="col" data-aos="fade-left" data-aos-delay="{{ 300 + ($index * 100) }}">
                                    <div class="stori-card h-100 border border-2 border-light rounded-4 shadow-sm bg-white">
                                        <div class="stori-card-body">
                                            <h5 class="stori-card-title">{{ $stat->stat_title }}</h5>
                                            <p class="stori-card-text">{{ $stat->stat_description }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </stori-section>

            <!-- Contact Centers Section -->
            <stori-section class="py-5 stori-bg-dark-blue position-relative">
                <img src="{{ asset($service->vidhiraSection->background_image) }}" alt="" class="img-fluid position-absolute top-0 start-0 w-100 h-100" style="object-fit:cover; z-index:0; pointer-events:none; max-width:100%; height:auto;">
                <div class="container mb-5 mt-5 position-relative" style="z-index:1;">
                    <h2 class="stori-section-title" data-aos="fade-up">{{ $service->aiEngagementSection->title }}</h2>
                    <p class="text-center mb-5 lead" data-aos="fade-up" data-aos-delay="100">{{ $service->aiEngagementSection->subtitle }}</p>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        @foreach($service->aiEngagementSection->features as $index => $feature)
                        <div class="col" data-aos="zoom-in" data-aos-delay="{{ 200 + ($index * 100) }}">
                            <div class="stori-card" style="background: #ffffff00; backdrop-filter: blur(4px);">
                                <div class="stori-card-body text-center">
                                    <div class="mb-3">
                                        <i class="{{ $feature['icon'] }} fs-2" style="color: #bc8000;"></i>
                                    </div>
                                    <h5 class="stori-card-title mb-2" style="color: #bc8000;">{{ $feature['title'] }}</h5>
                                    <p class="stori-card-text">{{ $feature['description'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </stori-section>

            <!-- Manage & Scale Section -->
            <stori-section class="py-5">
                <div class="container">
                    <h2 class="stori-section-title" data-aos="fade-up">{{ $service->businessInteractionSection->title }}</h2>
                    <p class="text-center mb-5 lead" data-aos="fade-up" data-aos-delay="100">Effortlessly control projects, users, and AI resources with advanced admin tools.</p>
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-left" data-aos-delay="200">
                            <img src="/assets/img/0014.jpg" class="stori-content-image" alt="Admin Dashboard">
                        </div>
                        <div class="col-lg-6">
                            <div class="row row-cols-1 row-cols-md-2 g-3">
                                @foreach($service->businessInteractionSection->features as $index => $feature)
                                <div class="col" data-aos="fade-right" data-aos-delay="{{ 300 + ($index * 100) }}">
                                    <div class="stori-card h-100 border border-2 border-light rounded-4 shadow-sm bg-white">
                                        <div class="stori-card-body">
                                            <h5 class="stori-card-title">{{ $feature['title'] }}</h5>
                                            <p class="stori-card-text">{{ $feature['description'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </stori-section>

            <!-- Developer Resources Section -->
            <stori-section class="py-5 bg-light-purple position-relative">
                <img src="/assets/img/Rectangle-304.png" alt="" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit:cover; z-index:0; pointer-events:none;">
                <div class="container mt-5 mb-5 position-relative" style="z-index:1;">
                    <h2 class="stori-section-title" data-aos="fade-up" style="color: #fff;">Developer Resources</h2>
                    <p class="text-center mb-5 lead" data-aos="fade-up" data-aos-delay="100" style="color: #fff;">For advanced AI builders and developers, AI LifeBot provides extensive customization options.</p>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 pb-5 g-4">
                        @foreach($service->statisticalHighlight->stats as $index => $stat)
                        <div class="col" data-aos="fade-up" data-aos-delay="{{ 200 + ($index * 100) }}">
                            <div class="stori-card border border-2 border-light rounded-4 shadow-sm h-100" style="background: aliceblue">
                                <div class="stori-card-body d-flex flex-column align-items-center text-center">
                                    <div class="mb-3">
                                        <i class="bi bi-terminal fs-2 text-primary"></i>
                                    </div>
                                    <h5 class="stori-card-title mb-2">{{ $stat['title'] }}</h5>
                                    <p class="stori-card-text mb-0">{{ $stat['description'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </stori-section>

            <!-- Voice Gateway Section - Keep the existing complex content as it's too detailed to dynamically map 
            <stori-section class="py-5 stori-bg-dark-blue">
                <div class="container">
                    <h2 class="stori-section-title" data-aos="fade-up">AI LifeBot Voice Gateway</h2>
                    <p class="text-center mb-5 lead" data-aos="fade-up" data-aos-delay="100">AI-Powered Voice Automation for Seamless Customer Engagement. Note: AI LifeBot Voice Gateway is an add-on feature and requires AI LifeBot to function.</p>

                    <!-- Keep existing Voice Gateway content
                    <div class="container-fluid px-lg-5">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-5">
                            Voice Gateway cards content remains the same
                            <div class="col d-flex" data-aos="fade-right" data-aos-delay="200">
                                <div class="card vg-card-custom shadow h-100 bg-light">
                                    <div class="card-body d-flex flex-column p-4" style="color: #222;">
                                        <div class="vg-card-icon-wrapper mb-3">
                                            <i class="bi bi-megaphone-fill"></i>
                                        </div>
                                        <h5 class="vg-card-title text-primary-custom">Introduction to Voice Gateway</h5>
                                        <p class="vg-card-info flex-grow-1">Gain a comprehensive overview of how AI-driven voice automation transforms customer service and enhances business communications.</p>
                                        <ul class="list-unstyled mt-auto mb-0">
                                            <li class="mb-2 vg-list-item-text"><i class="bi bi-info-circle me-2 text-primary-custom"></i>Overview</li>
                                            <li class="mb-2 vg-list-item-text"><i class="bi bi-stars me-2 text-primary-custom"></i>Key Features &amp; Capabilities</li>
                                            <li class="vg-list-item-text"><i class="bi bi-rocket-takeoff me-2 text-primary-custom"></i>Getting Started Guide</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                             Continue with other Voice Gateway cards... -->
                        </div>
                    </div>
                </div>
            </stori-section>

            <!-- Final CTA Section -->
            <stori-section class="cta-stori-section py-5 my-5 position-relative">
                <div class="container position-relative mt-5 mb-5" style="z-index:2; background: url('{{ asset($service->vidhiraSection->background_image) }}') center center/cover no-repeat;">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h2 class="fw-bold mb-3" style="color: #000; letter-spacing: -1px; text-shadow: 0 2px 8px rgba(76,110,245,0.18);">
                                {{ $service->vidhiraSection->title }}
                            </h2>
                            <p class="lead mb-4" style="color: #000; text-shadow: 0 1px 4px rgba(76,110,245,0.10);">
                                {{ $service->vidhiraSection->description }}
                            </p>
                            @php
                            $url = ($service->slug=="academy") ? "https://ailifebot.in/" : route('reuseablepage', ['service' => 'contact-us']);
                            @endphp
                            <a href="{{ $url }}" class="btn stori-btn-cta btn-lg px-5 shadow"
                                style="background: #fff; color: #4A00E0; font-weight: 600; border-radius: 2rem; letter-spacing: 0.5px;">
                                Start Building with AI LifeBot Today!
                            </a>
                        </div>
                    </div>
                </div>
            </stori-section>

            <script>
                // Initialize AOS
                AOS.init({
                    duration: 800,
                    once: true,
                    mirror: false,
                });

                // Simple parallax effect for the hero section
                window.addEventListener('scroll', function() {
                    const hero = document.querySelector('.stori-hero-stori-section');
                    if (hero) {
                        const scrollPosition = window.pageYOffset;
                        hero.style.backgroundPositionY = -scrollPosition * 0.2 + 'px';
                    }
                });
            </script>
        </div>
    </main>
@endsection
