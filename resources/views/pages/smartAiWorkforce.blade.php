@extends('layout.app')

@php
    function numberToWord($number) {
        $words = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'];
        return $words[$number - 1] ?? 'one';
    }
@endphp

@section('content')

    <main class="main">
        <!-- Hero Section -->
        <section class="Smart-AI-hero-section mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-start">
                        <div class="Smart-AI-content-wrapper" data-aos="fade-right">
                            <h1 class="Smart-AI-heading" style="font-size: 3rem">{{ $service->heroSection->heading }}</h1>
                            <p class="Smart-AI-subheading">{{ $service->heroSection->subheading }}</p>

                            <div class="Smart-AI-features-grid" data-aos="fade-up">
                                @if($service->heroSection && $service->heroSection->features && is_array(json_decode($service->heroSection->features)))
                                    @foreach(json_decode($service->heroSection->features) as $feature)
                                        <div class="Smart-AI-feature-pill">
                                            <i class="{{ $feature->icon }} me-2" style="color: #C0804A;"></i>{{ $feature->title }}
                                        </div>
                                    @endforeach
                                    
                                @else
                                    <!-- Fallback content -->
                                    <div class="Smart-AI-feature-pill">
                                        <i class="fas fa-bolt me-2" style="color: #C0804A;"></i>Smarter Automation
                                    </div>
                                    <div class="Smart-AI-feature-pill">
                                        <i class="fas fa-handshake me-2" style="color: #C0804A;"></i>Seamless Engagement
                                    </div>
                                    <div class="Smart-AI-feature-pill">
                                        <i class="fas fa-chart-line me-2" style="color: #C0804A;"></i>Scalable Growth
                                    </div>
                                @endif
                            </div>
                            @if($service->heroSection->description)
                            <p >{{ $service->heroSection->description }}</p>
                        @endif
                            <a href="#" class="Smart-AI-primary-button" data-aos="fade-up" data-aos-delay="100"
                                style="background: linear-gradient(90deg, #c5874d, #9b6976); color: #fff; border: none; border-radius: 30px; padding: 10px 20px;">
                                <i class="fas fa-user-plus me-2"></i>
                                {{ $service->heroSection->cta  }}
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img data-aos="fade-left" data-aos-delay="300"
                            src="{{ asset($service->heroSection->image) }}" alt="Smart AI Workforce"
                            class="img-fluid Smart-AI-image Smart-AI-animated-image" style="max-width: 75%; height: auto;">
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1nqEdZx9xEoohEzPCcK9pOFnKzQ9f" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Innovation at the Core Section -->
        <!-- Innovation at the Core Section -->
        @if($service->featuresSections->isNotEmpty())
            @php $innovationSection = $service->featuresSections->first(); @endphp
            <section id="about" class="about section">
                <div class="container">
                    <div class="row gy-4 brand-container-1 bc-2">
                        <div class="col-lg-12 content " data-aos="fade-up" data-aos-delay="100">
                            <h2 class="brand-99 text-center"><b>{{ $innovationSection->heading }}</b></h2>
                            <p class="text-center">{{ $innovationSection->subheading }}</p>
                            <div class="row gy-4 brand-images">

                                <!-- Content Sections -->
                                <div class="container">
                                    <div class="content-section active" id="section-0">
                                        <div class="content-left-1" data-aos="fade-right" data-aos-delay="00">
                                            <p>{{ $innovationSection->description }}</p>
                                            <div class="row mt-4">

                                                <div class="accordion" id="innovationsAccordion">
                                                    @if($innovationSection->features && $innovationSection->features->count() > 0)
                                                        @foreach($innovationSection->features as $index => $feature)
                                                            <!-- Item {{ $index + 1 }} -->
                                                            <div class="accordion-item" data-aos="fade-right" data-aos-delay="{{ ($index + 1) * 100 }}">
                                                                <h2 class="accordion-header" id="heading{{ ucfirst(numberToWord($index + 1)) }}">
                                                                    <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }}" type="button"
                                                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ ucfirst(numberToWord($index + 1)) }}"
                                                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ ucfirst(numberToWord($index + 1)) }}"
                                                                        data-image="{{ asset($feature->image) ?? 'assets/img/placeholder.jpg' }}">
                                                                        <i class="{{ $feature->icon }} feature-icon"
                                                                            style="color: #BA7F58;"></i>
                                                                        {{ $feature->title }}
                                                                    </button>
                                                                </h2>
                                                                <div id="collapse{{ ucfirst(numberToWord($index + 1)) }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                                                    aria-labelledby="heading{{ ucfirst(numberToWord($index + 1)) }}"
                                                                    data-bs-parent="#innovationsAccordion">
                                                                    <div class="accordion-body">
                                                                        <ul class="list-unstyled">
                                                                            @if(is_array(json_decode($feature->description)))
                                                                                @foreach(json_decode($feature->description) as $item)
                                                                                    <li><img class="tick" src="assets/img/Group-381.png"
                                                                                            alt=""> {{  $item }}</li>
                                                                                @endforeach
                                                                            @else
                                                                                <li><img class="tick" src="assets/img/Group-381.png"
                                                                                        alt=""> {{ $feature->description  }}</li>
                                                                            @endif
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-right-1 position-relative" data-aos="fade-left"
                                            data-aos-delay="100">
                                            <img id="accordion-image" src="{{ asset($innovationSection->features->first()->image) ?? 'assets/img/placeholder.jpg' }}"
                                                alt="Context-Aware AI Assistants" class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const accordionButtons = document.querySelectorAll('#innovationsAccordion .accordion-button');
                        const image = document.getElementById('accordion-image');

                        accordionButtons.forEach(btn => {
                            btn.addEventListener('click', function () {
                                const imgUrl = this.getAttribute('data-image');
                                if (imgUrl && image) {
                                    image.src = imgUrl;
                                }
                            });
                        });
                    });
                </script>
            </section>
        @endif
        <!-- /Innovation at the Core Section -->

        <!-- Vision & Core Principles Section -->
        @if($service->aboutSection)
            <div class="container-fluid img-background"
                style="background-image: url('assets/img/profile-bg.png'); background-size: cover; background-position: center; padding:0px;">
                <section id="features" class="features section ">
                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up">
                        <h2 style="color: #000;">{{ $service->aboutSection->heading }} </h2>
                        <p><span class="brand-100">{{ $service->aboutSection->subheading }}</span></p>
                    </div><!-- End Section Title -->

                    <div class="row justify-content-between ">
                        <div class="col-lg-12 d-flex align-items-center card-custom">
                            <div class="custom-card-container">
                                <div class="container">
                                    <div class="row g-4">
                                        @php
                                            $principles = json_decode($service->aboutSection->features);
                                            $count = count($principles);
                                            $lgCol = $count === 3 ? 4 : ($count === 4 ? 3 : 4);
                                        @endphp

                                        @foreach($principles as $index => $principle)
                                            <div class="col-md-6 col-lg-{{ $lgCol }}" data-aos="slide-{{ $index < 2 ? 'left' : 'right' }}" data-aos-delay="{{ ($index + 1) * 100 }}">
                                                <div class="ailife-principle-card ailife-float-animation" style="animation-delay: {{ $index * 0.2 }}s;">
                                                    <div class="ailife-card-body">
                                                        <div class="ailife-card-icon-container">
                                                            <div class="ailife-card-icon">
                                                                <i class="{{ $principle->icon }}"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ailife-card-title-container">
                                                            <h3 class="ailife-card-title">{{ $principle->title }}</h3>
                                                        </div>
                                                        <p class="ailife-card-text">
                                                            {{ $principle->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        {{-- <div class="text-center">
                                            <div class="ailife-brand-statement">
                                                <p class="lead fw-bold mb-0">
                                                    <i class="fas fa-sparkle ailife-brand-icon me-2"></i>
                                                    At AI LifeBot, we believe in technology that enhances, not replaces, human
                                                    potential—boosting productivity while keeping a human touch
                                                </p>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        @endif
        <!-- /Vision & Core Principles Section -->

        <!-- Sustainability & Ethical AI Section -->
        @if($service->agentSupportSection)
            <div class="container-fluid w-100">
                <section class="ailife-sustain-modern">
                    <div class="ailife-diagonal-bg"></div>
                    <div class="container position-relative">
                        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="col-lg-12">
                                <div class="ailife-modern-card p-4 p-md-5">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                            <span class="ailife-pill-tag">Our Commitment</span>
                                            <h2 class="ailife-modern-title display-5 mb-4">{{ $service->agentSupportSection->heading }}</h2>
                                            <p class="lead mb-4" style="color: var(--ailife-dark);">{{ $service->agentSupportSection->description }}</p>

                                            @php $sustainabilityFeatures = json_decode($service->agentSupportSection->features); @endphp
                                            @foreach($sustainabilityFeatures as $feature)
                                                <div class="ailife-feature-blob">
                                                    <i class="{{ $feature->icon }}"></i>
                                                    <h4 style="color: var(--ailife-primary);">{{ $feature->title }}</h4>
                                                    <p style="color: var(--ailife-dark);">{{ $feature->description }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="col-lg-6 text-center">
                                            <img src="{{ asset($service->agentSupportSection->image) ?? 'assets/img/placeholder.jpg' }}"
                                                alt="{{$service->agentSupportSection->heading}}" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
{{-- 
                <div class="row justify-content-between features-item"
                    style="background-image: url('assets/img/experience-zone.png'); background-size: cover; background-position: center; padding:0px;">

                    <div class="col-lg-12 d-flex align-items-center order-2 order-lg-1 experience-zone" data-aos="fade-up"
                        data-aos-delay="100">
                        <!-- Experience Zone -->
                        <section id="services" class="services section light-background">
                            <!-- Section Title -->
                            <div class="container">
                                <div class="row g-5">
                                    <!-- Card 1 -->
                                    <div class="col-lg-12 d-flex align-items-stretch">
                                        <div class="p-4 rounded-3 w-100"
                                            style="background: #ffffff; border-left: #BA7F58;">
                                            <h3 class="mb-3" style="color: var(--ailife-primary);text-align:center;">Innovation with
                                                Accountability</h3>
                                            <p class="mb-0" style="color: var(--ailife-dark);text-align:center;">{{ $service->agentSupportSection->description }}</p>
                                                <i class="fas fa-quote-left me-3"
                                                    style="color: var(--ailife-secondary); font-size: 2rem; opacity: 0.3;display:flex;position:relative;left:205px;top:28px;text-align:center;"></i>
                                                <div>
                                                    <p class="mb-1 fst-italic" style="color: var(--ailife-dark);text-align:center;">
                                                        "True progress comes when technology serves both business and humanity."
                                                    </p>
                                                    <p class="mb-0 small fw-bold" style="color: var(--ailife-primary);text-align:center;">— AI
                                                        LifeBot Principle
                                                    </p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </section><!-- Experience Zone -->
                    </div>
                </div><!-- Features Item --> --}}

                <!-- CTA Section -->
                @if($service->proactiveSection)
                    <div class="ailife-cta-modern text-center text-white">
                        <div class="position-relative" style="z-index: 2;">
                            <h3 class="display-5 mb-3 ai-transformation">{{ $service->proactiveSection->heading }}</h3>
                            <p class="lead-2 mb-5 opacity-75">{{ $service->proactiveSection->description }}</p>
                            <a href="#" class="btn btn-light btn-lg rounded-pill px-4 py-2">
                                <i class="fas fa-calendar-check me-2"></i> {{ $service->proactiveSection->cta ?? 'Book a Demo' }}
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        @endif
        <!-- /Sustainability & Ethical AI Section -->
    </main>

@endsection
