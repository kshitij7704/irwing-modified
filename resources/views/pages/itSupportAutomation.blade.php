@extends('layout.app')
@section('content')

<!-- Hero Section -->
    <section class="hero-gradient-ai text-center text-lg-start parallax-section" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); padding: 110px 0; color: #232526; font-family: 'Inter', sans-serif;">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <!-- Left: Content -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="fw-bold mb-3 heading-shadow-ai" style="font-size: 3.2rem; color: #232526;">
                        {{ $service->heroSection->heading }}
                    </h1>
                    <p class="lead mb-4" style="color: #414345; font-size: 1.1rem;">
                        {!! $service->heroSection->description !!}
                    </p>
                    <button type="button" class="btn btn-gold-ai btn-md px-4 py-2 fw-bold shadow gradient-btn" data-bs-toggle="modal" data-bs-target="#serviceModal"
                        style="font-size: 1rem; background: linear-gradient(135deg, #d96c6f, #e3a582); border: none; color: #fff;">
                        {{ $service->heroSection->cta }}
                    </button>
                    <style>
                    .gradient-btn {
                        background: linear-gradient(135deg, #d96c6f, #e3a582) !important;
                        border: none !important;
                        color: #fff !important;
                        transition: all 0.3s;
                        position: relative;
                        z-index: 1;
                    }
                    .gradient-btn:hover, .gradient-btn:focus {
                        background: transparent !important;
                        color: transparent !important;
                        border: 2px solid;
                        border-image: linear-gradient(135deg, #d96c6f, #e3a582) 1;
                        background-clip: padding-box;
                    }
                    .gradient-btn:hover::before, .gradient-btn:focus::before {
                        content: '{{ $service->heroSection->cta }}';
                        background: linear-gradient(135deg, #d96c6f, #e3a582);
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        background-clip: text;
                        text-fill-color: transparent;
                        position: absolute;
                        left: 0;
                        right: 0;
                        top: 0;
                        bottom: 0;
                        z-index: 2;
                        width: 100%;
                        height: 100%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-weight: bold;
                        font-size: 1rem;
                        pointer-events: none;
                    }
                    .gradient-btn::before {
                        content: '';
                    }
                    </style>
                    <p class="mt-3 mb-0" style="color: #636363; font-size: 1rem;">
                        <i class="fas fa-check-circle text-gold-ai me-2"></i>
                        Trusted by global Fortune 500 enterprises
                    </p>
                </div>
                <!-- Right: Demo Image -->
                <div class="col-lg-6 d-flex justify-content-center">
                    <img src="{{ asset($service->heroSection->image) }}" alt="AI IT Support Demo" class="img-fluid rounded shadow" style="max-width: 90%; height: auto;">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                @foreach($service->featuresSections->flatMap->features as $feature)
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="feature-card shadow-lg border-0 rounded-4 p-4 flex-fill d-flex flex-column align-items-center text-center h-100 bg-white">
                        <div class="feature-icon mb-3 rounded-circle d-flex align-items-center justify-content-center bg-feature-light" style="width:60px;height:60px;color:#d96c6f;font-size:2rem;">
                            <i class="{{ $feature->icon }}"></i>
                        </div>
                        <h3 class="h5 fw-bold mb-2">{{ $feature->title }}</h3>
                        <p class="mb-3 small">{{ $feature->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <style>
            .feature-card {
                transition: transform 0.2s, box-shadow 0.2s;
            }
            .feature-card:hover {
                transform: translateY(-8px) scale(1.03);
                box-shadow: 0 8px 32px rgba(217,108,111,0.12), 0 1.5px 8px rgba(0,0,0,0.06);
            }
            .feature-icon {
                box-shadow: 0 2px 12px rgba(217,108,111,0.15);
            }
            .bg-feature-light {
                background: #f8fafc !important;
            }
            .text-gold-ai {
                color: #d96c6f !important;
            }
            .btn-link.text-gold-ai {
                text-decoration: none;
            }
            .btn-link.text-gold-ai:hover {
                color: #e3a582 !important;
                text-decoration: underline;
            }
        </style>
    </section>

    <!-- Stats Section -->
    <section class="section-gradient-1 py-5 parallax-section" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
        <div class="container py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title title-light" style="font-weight: 700; color: #232526;">{{ $service->performanceStat->title }}</h2>
                    <p class="lead" style="color: #414345;">{{ $service->performanceStat->subtitle }}</p>
                </div>
            </div>
            <div class="row g-4">
                @foreach(json_decode($service->performanceStat->stats) as $stat)
                <div class="col-md-4">
                    <div class="stat-card bg-white text-center p-4 shadow rounded-4 h-100 d-flex flex-column justify-content-center align-items-center">
                        <div class="stat-number" style="font-size: 2.8rem; font-weight: 700; color: #d96c6f;">{{ $stat->number }}</div>
                        <div class="stat-label mt-2" style="font-size: 1.1rem; color: #414345;">{{ $stat->label }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <style>
            .stat-card {
                transition: transform 0.2s, box-shadow 0.2s;
            }
            .stat-card:hover {
                transform: translateY(-6px) scale(1.03);
                box-shadow: 0 8px 32px rgba(217,108,111,0.12), 0 1.5px 8px rgba(0,0,0,0.06);
            }
            @media (max-width: 767.98px) {
                .stat-number {
                    font-size: 2rem !important;
                }
                .stat-label {
                    font-size: 1rem !important;
                }
            }
        </style>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Transforming Businesses <span style="background: linear-gradient(135deg, #d96c6f 0%, #e3a582 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; color: transparent;">One Customer at a Time</span></h2>
                </div>
            </div>

            <div class="row g-4">
                @foreach($service->testimonials as $testimonial)
                <div class="col-md-6 col-lg-3">
                    <div class="testimonial-card">
                        <div class="testimonial-stat">{{ $testimonial->stat_number }}</div>
                        <p class="mb-0">{{ $testimonial->stat_label }}</p>
                        <hr class="my-3">
                        <p class="mb-0">{{ $testimonial->testimonial }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <style>
            .testimonial-stat {
                font-size: 2.2rem;
                font-weight: 700;
                background: linear-gradient(135deg, #d96c6f 0%, #e3a582 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                color: transparent;
                display: inline-block;
            }
            .testimonial-card {
                background: #fff;
                border-radius: 1.2rem;
                box-shadow: 0 4px 24px rgba(217,108,111,0.08);
                padding: 2rem 1.2rem;
                text-align: center;
                height: 100%;
                transition: transform 0.2s, box-shadow 0.2s;
            }
            .testimonial-card:hover {
                transform: translateY(-6px) scale(1.03);
                box-shadow: 0 8px 32px rgba(217,108,111,0.12), 0 1.5px 8px rgba(0,0,0,0.06);
            }
        </style>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-3" style="font-weight:700;">Frequently <span style="background: linear-gradient(135deg, #d96c6f 0%, #e3a582 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; color: transparent;">Asked Questions</span></h2>
                    <p class="lead text-muted">Find answers to common questions about IT support automation and AI Lifebot.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        @foreach($service->faqs as $index => $faq)
                        <div class="accordion-item mb-3 rounded-4 shadow-sm border-0">
                            <h2 class="accordion-header" id="faqHeading{{ $index + 1 }}">
                                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $index + 1 }}" aria-expanded="false" aria-controls="faqCollapse{{ $index + 1 }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="faqCollapse{{ $index + 1 }}" class="accordion-collapse collapse" aria-labelledby="faqHeading{{ $index + 1 }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <style>
            .accordion-button {
                background: #fff;
                color: #232526;
                border-radius: 1rem !important;
                font-size: 1.1rem;
                transition: background 0.2s, color 0.2s;
            }
            .accordion-button:not(.collapsed) {
                background: linear-gradient(135deg, #d96c6f 0%, #e3a582 100%);
                color: #fff;
                box-shadow: 0 4px 16px rgba(217,108,111,0.08);
            }
            .accordion-item {
                border-radius: 1rem !important;
                overflow: hidden;
            }
            .accordion-body {
                background: #f8fafc;
                border-radius: 0 0 1rem 1rem;
                font-size: 1rem;
                color: #414345;
            }
        </style>
    </section>
    <!-- CTA Section -->
    <section class="cta-section parallax-section" style="background-image: url('https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
        <div class="cta-overlay"></div>
        <div class="container text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold mb-4 text-white">{{ $service->ctaSection->heading }}</h2>
                    <p class="lead mb-5 text-white-50">{!! $service->ctaSection->description !!}</p>
                    <button type="button" class="btn btn-gold btn-lg px-5 py-3 fw-bold" data-bs-toggle="modal" data-bs-target="#serviceModal"
                        style="background: linear-gradient(135deg, #d96c6f 0%, #e3a582 100%); border: none; color: #fff;">
                        {{ $service->ctaSection->cta_text }}
                    </button>
                </div>
            </div>
        </div>
    </section>

@endsection
