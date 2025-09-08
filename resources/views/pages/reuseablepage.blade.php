@extends('layout.app')
@section('content')

    <main class="main">
        <div class="aiServicePro-container">
            <!-- Cursor Follower -->
            <div class="aiServicePro-cursor-follower"></div>

            <!-- Hero Section -->
            <section class="aiServicePro-hero">
                <div class="container aiServicePro-animate-on-move">
                    <div class="row align-items-center mt-5">
                        <div class="col-lg-6">
                            <h1 class="display-4 fw-bold mb-4" style="font-size: 3rem">{{ $service->heroSection->heading }}</h1>
                            <p class="lead ai-lead mb-4 opacity-75">{!! $service->heroSection->description !!}</p>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="#" class="btn btn-light btn-lg px-4 py-3 ai-lead-service-re-d" data-bs-toggle="modal" data-bs-target="#serviceModal">{{ $service->heroSection->cta }}</a>
                            </div>
                            @if($service->slug=="about")
                            <p class="mt-3" style="color: #222;">Be part of the future of AI-driven customer engagement.</p>
                            @endif
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0 aiServicePro-animate-on-move">
                            <img src="{{ asset($service->heroSection->image) }}" alt="{{ $service->heroSection->heading }}"
                                class="img-fluid rounded-4 shadow" data-aos="fade-down" data-aos-delay="100" style="max-width: 75%;height: auto;">
                        </div>
                    </div>
                </div>
            </section>
            {{-- End Section --}}


            <!-- Features Sections -->
            @if (isset($service->featuresSections) && $service->featuresSections->count())
                @foreach ($service->featuresSections as $section)
                    <section class="py-5 py-lg-7 bg-white">
                        <div class="container">
                            <div class="row justify-content-center aiServicePro-animate-on-move">
                                <div class="col-lg-8 text-center mb-5" data-aos="fade-down" data-aos-delay="100">
                                    <h2 class="display-5 fw-bold ai-lead-service mb-3">
                                        {!! str_replace(
                                            'Voice Interaction',
                                            '<span class="brand-100">Voice Interaction</span>',
                                            $section->heading,
                                        ) !!}
                                    </h2>
                                    <p class="lead ai-lea">{{ $section->description }}</p>
                                    @if($section->cta)
                                    <a href="#" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#serviceModal">{{ $section->cta }}</a>
                                    @endif
                                </div>
                            </div>
                            <div class="row g-4 justify-content-center">
                                @if($section->features)
                                @foreach ($section->features as $index => $feature)
                                    <div class="col-md-6 col-lg-3 aiServicePro-animate-on-move">
                                        <div class="aiServicePro-feature-card text-center p-4" data-aos="fade-down"
                                            data-aos-delay="{{ ($index + 2) * 100 }}">
                                            <div class="aiServicePro-feature-icon">
                                                <i class="{{ $feature->icon }}"></i>
                                            </div>
                                            <h4 class="mb-3">{{ $feature->title }}</h4>
                                            <p>{{ $feature->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                @endif
                            </div>
                            <div class="row justify-content-center mt-4">
                                <div class="col-lg-8 text-center">
                                    <p class="lead ai-lea">{{ $section->subtitle }}</p>
                                </div>
                            </div>
                        </div>
                    </section>
                @endforeach
            @endif
            {{-- End Sections --}}

            <!-- Performance Stats Section -->
            @if ($service->performanceStat)
                <section class="py-5 py-lg-7 bg-white">
                    <div class="container">
                        <div class="row justify-content-center aiServicePro-animate-on-move">
                            <div class="col-lg-8 text-center mb-5">
                                <h2 class="display-5 fw-bold mb-3 ai-lead-service">{!! str_replace('Stats', '<span class="brand-100">Stats</span>', $service->performanceStat->title) !!}
                                </h2>
                                <p class="lead">{{ $service->performanceStat->subtitle }}</p>
                            </div>
                        </div>
                        @php
                            $stats = json_decode($service->performanceStat->stats, true);
                        @endphp

                        @if (!empty($stats) && is_array($stats))
                            <div class="row g-4">
                                @foreach ($stats as $stat)
                                    <div class="col-md-4 aiServicePro-animate-on-move">
                                        <div class="aiServicePro-stat-card text-center">
                                            <div class="aiServicePro-stat-number">{{ $stat['stat_number'] }}</div>
                                            <h4 class="aiServicePro-stat-title">{{ $stat['stat_title'] }}</h4>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-center">No statistics available at the moment.</p>
                        @endif

                    </div>
                </section>
            @endif
            {{-- End Section --}}

            {{-- Sustainability Commitment Section (only for about page) --}}
            @if(isset($service->slug) && $service->slug === 'about')
            <section class="sustain-earth-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <h2 class="sustain-section-title">Sustainability & Carbon Reduction Commitment</h2>
                        </div>
                    </div>
                    <div class="row g-4">
                        <!-- Energy Efficiency -->
                        <div class="col-md-4">
                            <div class="sustain-card">
                                <div class="sustain-icon">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <h3 class="h4 mb-3">Energy Efficiency</h3>
                                <p class="sustain-commitment-text">Optimized AI infrastructure for lower energy consumption through advanced algorithms and hardware optimization.</p>
                            </div>
                        </div>
                        <!-- Renewable Energy -->
                        <div class="col-md-4">
                            <div class="sustain-card">
                                <div class="sustain-icon">
                                    <i class="bi bi-sun"></i>
                                </div>
                                <h3 class="h4 mb-3">Renewable Energy Adoption</h3>
                                <p class="sustain-commitment-text">Transitioning to 100% sustainable power sources by 2025 through partnerships with green energy providers.</p>
                            </div>
                        </div>
                        <!-- Eco-Friendly Practices -->
                        <div class="col-md-4">
                            <div class="sustain-card">
                                <div class="sustain-icon">
                                    <i class="bi bi-recycle"></i>
                                </div>
                                <h3 class="h4 mb-3">Eco-Friendly Practices</h3>
                                <p class="sustain-commitment-text">Reducing carbon footprint through AI-driven efficiency in operations, logistics, and resource allocation.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Emissions Data -->
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="sustain-emissions">
                                <h3 class="h3 mb-4 text-center">Our 2023 Carbon Emissions Baseline</h3>
                                <div class="row">
                                    <!-- Scope 1 -->
                                    <div class="col-md-4 sustain-emission-item">
                                        <div class="sustain-emission-label">Scope 1 (Direct Emissions)</div>
                                        <div class="sustain-emission-value">1.5 tCO₂e</div>
                                        <div class="sustain-progress">
                                            <div class="sustain-progress-bar" style="width: 0.1%"></div>
                                        </div>
                                        <small class="text-muted">From company vehicles and facilities</small>
                                    </div>
                                    <!-- Scope 2 -->
                                    <div class="col-md-4 sustain-emission-item">
                                        <div class="sustain-emission-label">Scope 2 (Indirect Energy)</div>
                                        <div class="sustain-emission-value">11.5 tCO₂e</div>
                                        <div class="sustain-progress">
                                            <div class="sustain-progress-bar" style="width: 0.7%"></div>
                                        </div>
                                        <small class="text-muted">From purchased electricity and heating</small>
                                    </div>
                                    <!-- Scope 3 -->
                                    <div class="col-md-4 sustain-emission-item">
                                        <div class="sustain-emission-label">Scope 3 (Value Chain)</div>
                                        <div class="sustain-emission-value">1,582 tCO₂e</div>
                                        <div class="sustain-progress">
                                            <div class="sustain-progress-bar" style="width: 99.2%"></div>
                                        </div>
                                        <small class="text-muted">From business travel, commuting, and supply chain</small>
                                    </div>
                                </div>
                                <div class="text-center mt-4 pt-3">
                                    <div class="sustain-emission-label">Total Carbon Footprint</div>
                                    <div class="sustain-total-emissions mb-3">1,595 tCO₂e</div>
                                    <p class="lead mb-4">We are committed to reducing these emissions by 15% annually to support a greener planet.</p>
                                    <a href="#" class="btn btn-sustain" data-bs-toggle="modal" data-bs-target="#serviceModal">Learn About Our Reduction Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    :root {
                        --primary-color: #c5874d;
                        --secondary-color: #9b6976;
                        --dark-color: #3a3226;
                        --light-color: #f8f5f2;
                    }
                    .sustain-earth-section {
                        background-color: var(--light-color);
                        padding: 5rem 0;
                        position: relative;
                    }
                    .sustain-card {
                        border: none;
                        border-radius: 16px;
                        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
                        transition: all 0.3s ease;
                        height: 100%;
                        background: white;
                        padding: 2rem;
                        border-top: 4px solid transparent;
                    }
                    .sustain-card:hover {
                        transform: translateY(-8px);
                        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
                        border-top: 4px solid var(--primary-color);
                    }
                    .sustain-icon {
                        width: 60px;
                        height: 60px;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin-bottom: 1.5rem;
                        color: white;
                        font-size: 1.5rem;
                        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
                    }
                    .sustain-emissions {
                        background: white;
                        border-radius: 16px;
                        padding: 2.5rem;
                        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
                        margin-top: 3rem;
                        border-top: 4px solid var(--primary-color);
                    }
                    .sustain-progress {
                        height: 10px;
                        border-radius: 5px;
                        background-color: #e9ecef;
                        margin-bottom: 0.5rem;
                    }
                    .sustain-progress-bar {
                        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
                        border-radius: 5px;
                    }
                    .sustain-section-title {
                        position: relative;
                        margin-bottom: 3rem;
                        font-weight: 700;
                        color: var(--dark-color);
                        text-align: center;
                    }
                    .sustain-section-title::after {
                        content: '';
                        position: absolute;
                        bottom: -12px;
                        left: 50%;
                        transform: translateX(-50%);
                        width: 80px;
                        height: 4px;
                        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
                        border-radius: 2px;
                    }
                    .sustain-emission-item {
                        margin-bottom: 1.5rem;
                    }
                    .sustain-emission-label {
                        font-weight: 600;
                        color: var(--dark-color);
                        margin-bottom: 0.5rem;
                    }
                    .sustain-emission-value {
                        font-weight: 700;
                        font-size: 1.25rem;
                        color: var(--secondary-color);
                    }
                    .sustain-commitment-text {
                        color: #495057;
                        line-height: 1.7;
                        font-size: 1.1rem;
                    }
                    .sustain-total-emissions {
                        font-size: 1.75rem;
                        font-weight: 800;
                        color: var(--secondary-color);
                        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
                        -webkit-background-clip: text;
                        background-clip: text;
                        -webkit-text-fill-color: transparent;
                        display: inline-block;
                    }
                    .btn-sustain {
                        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
                        border: none;
                        color: white;
                        padding: 10px 25px;
                        border-radius: 8px;
                        font-weight: 600;
                        margin-top: 1.5rem;
                    }
                    .btn-sustain:hover {
                        background: linear-gradient(90deg, #b07a43, #8a5d6a);
                        color: white;
                    }
                </style>
            </section>
            @endif
            {{-- End Section --}}


            {{-- Vidhira Section --}}
            @if ($service->vidhiraSection)
                <section class="aiServicePro-parallax-section"
                    style="background-image: url('https://ncrbest.com/assets/img/Rectangle-304.png');">
                    <div class="aiServicePro-parallax-overlay"></div>
                    <div class="container position-relative text-white">
                        <div class="row justify-content-center text-center aiServicePro-animate-on-move">
                            <div class="col-lg-8">
                                <h2 class="display-5 fw-bold mb-4 Vidhira">{{ $service->vidhiraSection->title }}</h2>
                                <p class="lead ai-lead mb-5 Vidhira-p">{{ $service->vidhiraSection->subtitle }}</p>
                                <p class="mb-5">{!! $service->vidhiraSection->description !!}</p>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            {{-- End Section --}}


          
            {{-- AI Engagement Section --}}
            @if ($service->aiEngagementSection)
                <section class="py-5 py-lg-7 bg-white">
                    <div class="container">
                        <div class="row justify-content-center aiServicePro-animate-on-move">
                            <div class="col-lg-8 text-center mb-5">
                                <h2 class="display-5 fw-bold ai-lead-service mb-3">
                                    {{ $service->aiEngagementSection->title }}</h2>
                                <p class="lead ai-lea">{{ $service->aiEngagementSection->subtitle }}</p>
                            </div>
                        </div>
                        <div class="row g-4">
                            @foreach ($service->aiEngagementSection->features as $feature)
                                <div class="col-md-12 col-lg-6 aiServicePro-animate-on-move">
                                    <div class="aiServicePro-feature-card text-center p-4">
                                        <div class="aiServicePro-feature-icon">
                                            <i class="{{ $feature['icon'] }}"></i>
                                        </div>
                                        <h4 class="mb-3">{{ $feature['title'] }}</h4>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif
                {{-- End Section --}}



            {{-- Business Interaction Section --}}
            @if ($service->businessInteractionSection)
                <section class="py-5 py-lg-7 bg-white">
                    <div class="container">
                        <div class="row justify-content-center aiServicePro-animate-on-move">
                            <div class="col-lg-8 text-center mb-5">
                                <h2 class="display-5 fw-bold ai-lead-service mb-3">
                                    {{ $service->businessInteractionSection->title }}</h2>
                            </div>
                        </div>
                        <div class="row g-4">
                            @foreach ($service->businessInteractionSection->features as $feature)
                                <div class="col-md-12 col-lg-4 aiServicePro-animate-on-move">
                                    <div class="aiServicePro-feature-card text-center p-4">
                                        <div class="aiServicePro-feature-icon">
                                            <i class="{{ $feature['icon'] }}"></i>
                                        </div>
                                        <h4 class="mb-3">{{ $feature['title'] }}</h4>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif
            {{-- End Section --}}

           

            {{-- Statistical Highligh Section --}}
            @if ($service->statisticalHighlight)
                <section class="py-5 py-lg-7 bg-white">
                    <div class="container">
                        <div class="row g-4">
                            @foreach ($service->statisticalHighlight->stats as $stat)
                                <div class="col-md-4 aiServicePro-animate-on-move">
                                    <div class="aiServicePro-stat-card text-center">
                                        <div class="aiServicePro-stat-number">{{ $stat['number'] }}</div>
                                        <h4 class="aiServicePro-stat-title">{{ $stat['title'] }}</h4>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif
            {{-- End Section --}}

        </div>
    </main>

<script>
    // Animation for progress bars
    document.addEventListener('DOMContentLoaded', function() {
        const progressBars = document.querySelectorAll('.sustain-progress-bar');
        setTimeout(() => {
            progressBars.forEach(bar => {
                const targetWidth = bar.style.width;
                bar.style.width = '0';
                bar.style.transition = 'width 1.5s ease-out';
                setTimeout(() => {
                    bar.style.width = targetWidth;
                }, 100);
            });
        }, 500);

        // Test modal functionality
        const modalButton = document.querySelector('[data-bs-target="#serviceModal"]');
        const modal = document.getElementById('serviceModal');
        
        if (modalButton) {
            console.log('Modal button found:', modalButton);
            
            // Test if Bootstrap is loaded
            if (typeof bootstrap !== 'undefined') {
                console.log('Bootstrap is loaded');
                
                // Test modal instance
                const modalInstance = bootstrap.Modal.getOrCreateInstance(modal);
                console.log('Modal instance created:', modalInstance);
                
                // Add click event listener for debugging
                modalButton.addEventListener('click', function(e) {
                    console.log('Modal button clicked');
                    console.log('Bootstrap Modal available:', typeof bootstrap.Modal);
                    console.log('Modal element:', modal);
                });
            } else {
                console.error('Bootstrap is not loaded');
            }
        } else {
            console.error('Modal button not found');
        }
    });

    // Test modal function
    function testModal() {
        console.log('Test modal function called');
        const modal = document.getElementById('serviceModal');
        console.log('Modal element:', modal);
        
        if (typeof bootstrap !== 'undefined') {
            console.log('Bootstrap is available');
            const modalInstance = bootstrap.Modal.getOrCreateInstance(modal);
            console.log('Modal instance:', modalInstance);
            modalInstance.show();
        } else {
            console.error('Bootstrap is not available');
            alert('Bootstrap is not loaded. Please check the console for errors.');
        }
    }

    // Add click event debugging
    document.addEventListener('DOMContentLoaded', function() {
        const modalLink = document.querySelector('a[data-bs-target="#serviceModal"]');
        if (modalLink) {
            console.log('Modal link found:', modalLink);
            
            // Add click event listener
            modalLink.addEventListener('click', function(e) {
                console.log('Modal link clicked!');
                console.log('Event:', e);
                console.log('Bootstrap available:', typeof bootstrap);
                
                // Prevent default to see if our handler works
                e.preventDefault();
                
                // Manually trigger modal
                if (typeof bootstrap !== 'undefined') {
                    const modal = document.getElementById('serviceModal');
                    const modalInstance = bootstrap.Modal.getOrCreateInstance(modal);
                    modalInstance.show();
                } else {
                    alert('Bootstrap not loaded');
                }
            });
            
            // Also add mouseover to test if element is reachable
            modalLink.addEventListener('mouseover', function() {
                console.log('Mouse over modal link');
            });
        } else {
            console.error('Modal link not found');
        }
    });
</script>

<style>
    /* Ensure modal has highest z-index */
    .modal {
        z-index: 99999 !important;
    }
    .modal-backdrop {
        z-index: 99998 !important;
    }
    /* Ensure modal is visible */
    .modal.show {
        display: block !important;
    }
    /* Debug styles */
    .modal-dialog {
        pointer-events: auto !important;
    }
    
    /* Force clickability for the anchor */
    .ai-lead-service-re-d {
        pointer-events: auto !important;
        cursor: pointer !important;
        position: relative !important;
        z-index: 10 !important;
    }
    
    /* Ensure the anchor is clickable */
    a[data-bs-toggle="modal"] {
        pointer-events: auto !important;
        cursor: pointer !important;
        text-decoration: none !important;
    }
    
    
</style>

@endsection
