@extends('layout.app')
@section('content')
    <main>
        <div class="aiServicePro-container mt-5">
            <!-- Hero Section -->
            @if(!empty($service->heroSection))
            <section class="aiLifeBOT-hero d-flex align-items-center" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            @if(!empty($service->heroSection->heading))
                            <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown" data-aos="fade-down" style="font-size: 3rem">
                                {{ $service->heroSection->heading }}
                            </h1>
                            @endif

                            @if(!empty($service->heroSection->description))
                            <p class="lead mb-5 animate__animated animate__fadeIn animate__delay-1s" data-aos="fade-up"
                                data-aos-delay="200">{!! $service->heroSection->description !!}</p>
                            @endif

                            <div class="d-flex gap-3 animate__animated animate__fadeInUp animate__delay-2s"
                                data-aos="fade-up" data-aos-delay="400">
                                @if(!empty($service->heroSection->cta))
                                <a href="#join" class="btn aiLifeBOT-btn-primary" data-bs-toggle="modal" data-bs-target="#serviceModal">{{ $service->heroSection->cta }}</a>
                                @endif
                                <a href="#solutions" class="btn aiLifeBOT-btn-outline" data-bs-toggle="modal" data-bs-target="#serviceModal">Our Solutions</a>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            @if(!empty($service->heroSection->image))
                            <img src="{{ asset($service->heroSection->image) }}" alt="{{ $service->heroSection->heading }}" class="img-fluid rounded-4 shadow" style="max-width: 75%; height: auto;">
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            @endif



            <!-- Mission Section -->
            @if(!empty($service->featuresSections[0]))
            @php $missionSection = $service->featuresSections[0]; @endphp
            <section id="mission" class="aiLifeBOT-parallax aiLifeBOT-section"
                style="background-image: url('/assets/img/our-mission.jpg');">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center mb-5">
                            @if(!empty($missionSection->heading))
                            <h2 class="aiLifeBOT-heading text-black">{{ $missionSection->heading }}</h2>
                            @endif
                        </div>
                    </div>

                    @if(!empty($missionSection->features) && count($missionSection->features) > 0)
                    <div class="row g-4 justify-content-center">
                        @foreach($missionSection->features as $index => $feature)
                            @if(!empty($feature->icon) && !empty($feature->title) && !empty($feature->description))
                            <div class="col-md-4 animate__animated animate__fadeInUp" data-aos="slide-down" data-aos-delay="{{ $index * 150 }}">
                                <div class="aiLifeBOT-card p-4 h-100">
                                    <i class="{{ $feature->icon }} aiLifeBOT-icon aiLifeBOT-icon-{{ $index == 0 ? 'gold' : ($index == 1 ? 'blue' : 'black') }}"></i>
                                    <h4 class="mb-3">{{ $feature->title }}</h4>
                                    <p>{{ $feature->description }}</p>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    @endif

                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            @if(!empty($missionSection->description))
                            <p class="lead text-black">{{ $missionSection->description }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            @endif

            <!-- Expertise Section -->
            @if(!empty($service->featuresSections[1]))
            @php $expertiseSection = $service->featuresSections[1]; @endphp
            <section class="aiLifeBOT-section aiLifeBOT-bg-light">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            @if(!empty($expertiseSection->heading))
                            <h2 class="aiLifeBOT-heading">{{ $expertiseSection->heading }}</h2>
                            @endif

                            @if(!empty($expertiseSection->description))
                            <p class="lead">{{ $expertiseSection->description }}</p>
                            @endif
                        </div>
                    </div>

                    @if(!empty($expertiseSection->features) && count($expertiseSection->features) > 0)
                    <div class="aiLifeBOT-expertise-container">
                        <div class="container">
                            <div class="row g-4 justify-content-center">
                                @foreach($expertiseSection->features as $index => $feature)
                                    @if(!empty($feature->icon) && !empty($feature->title) && !empty($feature->description))
                                    <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp{{ $index > 0 ? ' animate__delay-' . $index . 's' : '' }}" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                                        <div class="aiLifeBOT-expertise-item">
                                            <i class="{{ $feature->icon }} aiLifeBOT-expertise-icon"></i>
                                            <h3>{{ $feature->title }}</h3>
                                            <p>{{ $feature->description }}</p>
                                            
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </section>
            @endif

            <!-- Solutions Section -->
            @if(!empty($service->agentSupportSection))
            <section id="solutions" class="aiLifeBOT-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            @if(!empty($service->agentSupportSection->heading))
                            <h2 class="aiLifeBOT-heading">{{ $service->agentSupportSection->heading }}</h2>
                            @endif

                            @if(!empty($service->agentSupportSection->description))
                            <p class="lead">{{ $service->agentSupportSection->description }}</p>
                            @endif
                        </div>
                    </div>

                    @if(!empty($service->agentSupportSection->features))
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs aiLifeBOT-nav-tabs mb-4 justify-content-center" id="solutionTabs" role="tablist">
                                @foreach(json_decode($service->agentSupportSection->features) as $index => $feature)
                                    @if(!empty($feature->title))
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link{{ $index == 0 ? ' active' : '' }}" id="tab-{{ $index }}" data-bs-toggle="tab"
                                            data-bs-target="#content-{{ $index }}" type="button" role="tab">{{ $feature->title }}</button>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>

                            <div class="tab-content aiLifeBOT-tab-content" id="solutionTabsContent">
                              @foreach(json_decode($service->agentSupportSection->features) as $index => $feature)
                            @if(!empty($feature->title) && !empty($feature->description))
                                <div class="tab-pane fade{{ $index == 0 ? ' show active' : '' }}" id="content-{{ $index }}" role="tabpanel">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6" data-aos="slide-right">
                                            <h3 class="aiLifeBOT-text-blue mb-4"><span class="aiLifeBOT-text-gold">{{ $feature->title }}</span></h3>
                                            <p>{{ $feature->description }}</p>
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><i class="fas fa-check-circle me-2 aiLifeBOT-text-gold"></i> Advanced AI capabilities</li>
                                                <li class="mb-2"><i class="fas fa-check-circle me-2 aiLifeBOT-text-gold"></i> Real-time processing</li>
                                                <li class="mb-2"><i class="fas fa-check-circle me-2 aiLifeBOT-text-gold"></i> Seamless integration</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6" data-aos="slide-left">
                                            @if(!empty($feature->image))
                                                <img src="{{ asset($feature->image) }}" alt="{{ $feature->title }}" class="img-fluid rounded shadow">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @endforeach

                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </section>
            @endif

            <!-- Why Choose Us Section -->
            @if(!empty($service->featuresSections[2]))
            @php $chooseSection = $service->featuresSections[2]; @endphp
            <section class="aiLifeBOT-section aiLifeBOT-bg-light">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            @if(!empty($chooseSection->heading))
                            <h2 class="aiLifeBOT-heading">{{ $chooseSection->heading }}</h2>
                            @endif
                        </div>
                    </div>

                    @if(!empty($chooseSection->features) && count($chooseSection->features) > 0)
                    <div class="row g-4 justify-content-center">
                        @foreach($chooseSection->features as $index => $feature)
                            @if(!empty($feature->icon) && !empty($feature->title) && !empty($feature->description))
                            <div class="col-md-6 col-lg-3">
                                <div class="aiLifeBOT-card p-4 h-100 animate__animated animate__fadeInUp{{ $index > 0 ? ' animate__delay-' . $index . 's' : '' }}" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                                    <i class="{{ $feature->icon }} aiLifeBOT-icon aiLifeBOT-icon-{{ $index % 2 == 0 ? 'blue' : 'gold' }}"></i>
                                    <h4 class="mb-3">{{ $feature->title }}</h4>
                                    <p>{{ $feature->description }}</p>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    @endif

                    @if(!empty($service->businessInteractionSection))
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="aiLifeBOT-card p-5 text-center animate__animated animate__fadeIn">
                                @if(!empty($service->businessInteractionSection->title))
                                <h3 class="mb-4">{{ $service->businessInteractionSection->title }}</h3>
                                @endif

                                @if(!empty($service->businessInteractionSection->subtitle))
                                <p class="lead">{{ $service->businessInteractionSection->subtitle }}</p>
                                @endif

                                @if(!empty($service->businessInteractionSection->features) && count($service->businessInteractionSection->features) > 0)
                                <div class="d-flex flex-wrap justify-content-center gap-3 mt-4" data-aos="slide-down">
                                    @foreach($service->businessInteractionSection->features as $index => $industry)
                                        @if(!empty($industry['title']))
                                        <span class="badge bg-opacity-10 text-white p-3 animate__animated animate__fadeInUp"
                                            data-aos="slide-down" data-aos-delay="{{ $index * 100 }}"
                                            style="background: #c5874d">{{ $industry['title'] }}</span>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </section>
            @endif

            <!-- Sustainability Section -->
            @if(!empty($service->proactiveSection) && !empty($service->aiEngagementSection))
            <section class="aiLifeBOT-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-5 mb-lg-0" data-aos="zoom-in">
                            @if(!empty($service->proactiveSection->heading))
                            <h2 class="aiLifeBOT-heading" data-aos="zoom-in" data-aos-delay="50">{{ $service->proactiveSection->heading }}</h2>
                            @endif

                            @if(!empty($service->proactiveSection->description))
                            <p class="mb-4" data-aos="zoom-in" data-aos-delay="100">{{ $service->proactiveSection->description }}</p>
                            @endif

                            @if(!empty($service->proactiveSection->features))
                            @foreach(json_decode($service->proactiveSection->features) as $index => $feature)
                                @if(!empty($feature->icon) && !empty($feature->title) && !empty($feature->description))
                                <div class="aiLifeBOT-feature-item" data-aos="zoom-in" data-aos-delay="{{ 150 + ($index * 50) }}">
                                    <h4><i class="{{ $feature->icon }} me-2 aiLifeBOT-text-{{ $index % 2 == 0 ? 'gold' : 'blue' }}"></i> {{ $feature->title }}</h4>
                                    <p>{{ $feature->description }}</p>
                                </div>
                                @endif
                            @endforeach
                            @endif
                        </div>

                        <div class="col-lg-6">
                            @if(!empty($service->aiEngagementSection))
                            <div class="aiLifeBOT-carbon-container d-flex flex-column h-100 justify-content-between">
                                <div class="aiLifeBOT-carbon-header mb-4">
                                    @if(!empty($service->aiEngagementSection->title))
                                    <h3 class="aiLifeBOT-heading mb-2">{{ $service->aiEngagementSection->title }}</h3>
                                    @endif

                                    @if(!empty($service->aiEngagementSection->subtitle))
                                    <p class="mb-0">{{ $service->aiEngagementSection->subtitle }}</p>
                                    @endif
                                </div>

                                @if(!empty($service->aiEngagementSection->features) && count($service->aiEngagementSection->features) > 0)
                                <div class="row g-3 align-items-end aiLifeBOT-carbon-stats-row mb-4">
                                    @foreach($service->aiEngagementSection->features as $index => $scope)
                                        @if(!empty($scope['title']))
                                        <div class="col-4 text-center">
                                            <div class="aiLifeBOT-carbon-circle bg-light mx-auto mb-2"
                                                style="width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 2px solid {{ $index == 0 ? '#c5874d' : ($index == 1 ? '#007bff' : '#222') }};">
                                                @if(!empty($scope['value']))
                                                <span class="fw-bold aiLifeBOT-text-{{ $index == 0 ? 'gold' : ($index == 1 ? 'blue' : 'dark') }} aiLifeBOT-count"
                                                    data-target="{{ $scope['value'] }}"
                                                    style="font-size: 1.1rem;">0</span>
                                                @endif
                                            </div>
                                            <div class="small text-muted">{{ $scope['unit'] ?? '' }}</div>
                                            <div class="fw-semibold mt-1">{{ $scope['title'] }}</div>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                                @endif

                                <div class="text-center mt-auto">
                                    @if(!empty($service->statisticalHighlight->stats[0]))
                                    <div class="aiLifeBOT-stats display-6 fw-bold mb-1" style="color: #c5874d;">
                                        <span class="aiLifeBOT-count" data-target="{{ $service->statisticalHighlight->stats[0]['number'] }}">0</span> {{ $service->statisticalHighlight->stats[0]['unit'] ?? '' }}
                                    </div>
                                    @endif

                                    @if(!empty($service->statisticalHighlight->stats[0]['title']))
                                    <div class="aiLifeBOT-stats-label text-muted">{{ $service->statisticalHighlight->stats[0]['title'] }}</div>
                                    @endif
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            @endif
                        <!-- Intro Section -->
                        @if(!empty($service->aboutSection))
                        <section class="aiLifeBOT-section aiLifeBOT-bg-light">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 mb-5 mb-lg-0 animate__animated animate__fadeInLeft" data-aos="slide-right"
                                        data-aos-delay="200">
                                        @if(!empty($service->aboutSection->heading))
                                        <h2 class="aiLifeBOT-heading"
                                            style="display: inline-block; position: relative; padding-bottom: 16px;">
                                            {{ $service->aboutSection->heading }}
                                            <span
                                                style="position: absolute; width: 60%; height: 3px; background: linear-gradient(to right, var(--ai-gold), var(--ai-blue)); bottom: -10px; left: 0; border-radius: 2px;"></span>
                                        </h2>
                                        @endif
            
                                        @if(!empty($service->aboutSection->description))
                                        <p class="mb-4">{{ $service->aboutSection->description }}</p>
                                        @endif
            
                                        @if(!empty($service->aboutSection->features))
                                        <ul class="list-unstyled">
                                            @foreach(json_decode($service->aboutSection->features) as $feature)
                                                @if(!empty($feature->icon) && !empty($feature->title))
                                                <li class="mb-3 d-flex align-items-center">
                                                    <i class="{{ $feature->icon }} me-3 aiLifeBOT-text-blue"></i>
                                                    {{ $feature->title }} - {{ $feature->description }}
                                                </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        @endif
            
                                        <a href="#mission" class="btn aiLifeBOT-btn-primary mt-3">Learn More</a>
                                    </div>
                                    <div class="col-lg-6 animate__animated animate__fadeInRight" data-aos="slide-left"
                                        data-aos-delay="200">
                                        <div class="aiLifeBOT-slider">
                                            @if(!empty($service->aboutSection->image))
                                            <div class="aiLifeBOT-slide" style="background-image: url('{{ asset($service->aboutSection->image) }}');">
                                                @if($service->slug=="partner-program")
                                                <div class="aiLifeBOT-slide-content">
                                                    <h3 class="aiLifeBOT-text-blue">Join the AI Revolution</h3>
                                                    <p>Let's build the future of customer engagement—together!</p>
                                                </div>
                                                @endif
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @endif
            <!-- Join Us Section -->
            @if(!empty($service->vidhiraSection))
            <section id="join" class="aiLifeBOT-section aiLifeBOT-bg-light" data-aos="fade-up">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="aiLifeBOT-join-box text-center">
                                @if(!empty($service->vidhiraSection->title))
                                <h2 class="aiLifeBOT-heading mb-4" data-aos="fade-up" data-aos-delay="100">{{ $service->vidhiraSection->title }}</h2>
                                @endif

                                @if(!empty($service->vidhiraSection->subtitle))
                                <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">{{ $service->vidhiraSection->subtitle }}</p>
                                @endif

                                <div class="d-flex justify-content-center gap-3 flex-wrap" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <a href="#" class="btn aiLifeBOT-btn-primary aiLifeBOT-pulse">Schedule a Demo</a>
                                    <a href="#" class="btn aiLifeBOT-btn-outline">Start Your Free Trial</a>
                                </div>

                                @if(!empty($service->vidhiraSection->description) && $service->slug!="partner-program")
                                <p class="mt-5 mb-0" data-aos="fade-up" data-aos-delay="500">{{ $service->vidhiraSection->description }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif

            <!-- Scripts -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Animation trigger logic
                    setTimeout(() => {
                        document.querySelectorAll('.animate__animated').forEach(el => {
                            el.classList.add('animate__fadeIn');
                        });
                    }, 100);

                    // Counter animation
                    function animateCount(el, target, duration = 1900) {
                        let start = 0;
                        let isFloat = String(target).includes('.');
                        let decimals = isFloat ? String(target).split('.')[1].length : 0;
                        target = parseFloat(target);
                        let startTime = null;

                        function step(timestamp) {
                            if (!startTime) startTime = timestamp;
                            let progress = Math.min((timestamp - startTime) / duration, 1);
                            let value = start + (target - start) * progress;
                            el.textContent = isFloat ? value.toFixed(decimals) : Math.floor(value);
                            if (progress < 1) {
                                requestAnimationFrame(step);
                            } else {
                                el.textContent = isFloat ? target.toFixed(decimals) : target;
                            }
                        }
                        requestAnimationFrame(step);
                    }

                    document.querySelectorAll('.aiLifeBOT-count').forEach(function(el) {
                        let target = el.getAttribute('data-target');
                        if (target) animateCount(el, target);
                    });
                });
            </script>
        </div>
    </main>
@endsection
