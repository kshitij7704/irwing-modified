@extends('layout.app')
@section('content')
<main class="main">
<div class="aiServicePro-container">
        <!-- Cursor Follower -->
        <div class="aiServicePro-cursor-follower"></div>

        <!-- Hero Section -->
        <section class="aiServicePro-hero">
            <div class="container aiServicePro-animate-on-move">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 fw-bold mb-4">AI Agents for Customer Service</h1>
                        <p class="lead ai-lead mb-4 opacity-75">Deliver seamless, AI-powered customer service that operates 24/7 across voice, chat, email, and social channels.</p>
                        {{-- <div class="d-flex flex-wrap gap-3" style="cursor: pointer">
                            <button class="cta-btn fw-bold request-d">Request Demo</button>
                        </div> --}}
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#" class="btn btn-light fw-bold ai-lead-service get-started ailife-cta-btn-modern">Request Demo</a>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0 aiServicePro-animate-on-move">
                        <img src="assets/img/ai-img.png" alt="AI Customer Service" class="img-fluid rounded-4 shadow">
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-5 py-lg-7 bg-white">
            <div class="container">
                <div class="row justify-content-center aiServicePro-animate-on-move">
                    <div class="col-lg-8 text-center mb-5">
                        <h2 class="display-5 fw-bold ai-lead-service mb-3">Transform Your Customer Service</h2>
                        <p class="lead ai-lea">AI Agents handle routine inquiries, troubleshoot issues, and provide personalized recommendations, reducing response times and enhancing customer satisfaction.</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 aiServicePro-animate-on-move">
                        <div class="aiServicePro-feature-card text-center p-4">
                            <div class="aiServicePro-feature-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h4 class="mb-3">24/7 Support</h4>
                            <p>AI Agents ensure round-the-clock availability for seamless customer interactions across all channels.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 aiServicePro-animate-on-move">
                        <div class="aiServicePro-feature-card text-center p-4">
                            <div class="aiServicePro-feature-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <h4 class="mb-3">Instant Resolution</h4>
                            <p>Handle FAQs, troubleshoot issues, and provide personalized solutions effortlessly in real-time.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 aiServicePro-animate-on-move">
                        <div class="aiServicePro-feature-card text-center p-4">
                            <div class="aiServicePro-feature-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h4 class="mb-3">Personalization</h4>
                            <p>Analyze customer history to deliver relevant recommendations and proactive support.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 aiServicePro-animate-on-move">
                        <div class="aiServicePro-feature-card text-center p-4">
                            <div class="aiServicePro-feature-icon">
                                <i class="fas fa-people-arrows"></i>
                            </div>
                            <h4 class="mb-3">Team Collaboration</h4>
                            <p>Free up live agents for complex queries while AI handles repetitive tasks efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="py-5 py-lg-7 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0 aiServicePro-animate-on-move">
                        <img src="assets/img/ai-img-2.png"AI Automation" class="img-fluid rounded-4 shadow">
                    </div>
                    <div class="col-lg-6 aiServicePro-animate-on-move">
                        <h2 class="display-5 fw-bold mb-4 ai-lead-service ">Intelligent Customer Service Automation</h2>
                        <p class="mb-4">Automate repetitive tasks, free up human agents for complex queries, and ensure a consistent, high-quality customer experience with intelligent AI-driven automation.</p>
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Natural language processing for human-like interactions</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Omnichannel support across all customer touchpoints</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Seamless handoff to human agents when needed</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Continuous learning and improvement</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-5 py-lg-7 bg-white">
            <div class="container">
                <div class="row justify-content-center aiServicePro-animate-on-move">
                    <div class="col-lg-8 text-center mb-5">
                        <h2 class="display-5 fw-bold mb-3 ai-lead-service">Proven Performance</h2>
                        <p class="lead">Our AI-powered customer service solutions deliver measurable results for businesses of all sizes.</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 aiServicePro-animate-on-move">
                        <div class="aiServicePro-stat-card text-center">
                            <div class="aiServicePro-stat-number">95%</div>
                            <h4 class="aiServicePro-stat-title">Accurate Query Resolution</h4>
                            <p class="mb-0">for routine inquiries with our advanced AI algorithms</p>
                        </div>
                    </div>
                    <div class="col-md-4 aiServicePro-animate-on-move">
                        <div class="aiServicePro-stat-card text-center">
                            <div class="aiServicePro-stat-number">30%</div>
                            <h4 class="aiServicePro-stat-title">Cost Reduction</h4>
                            <p class="mb-0">in customer support costs through automation</p>
                        </div>
                    </div>
                    <div class="col-md-4 aiServicePro-animate-on-move">
                        <div class="aiServicePro-stat-card text-center">
                            <div class="aiServicePro-stat-number">40%</div>
                            <h4 class="aiServicePro-stat-title">Faster Resolution</h4>
                            <p class="mb-0">of customer issues with AI automation</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Parallax CTA Section -->
        <section class="aiServicePro-parallax-section" style="background-image: url('https://via.placeholder.com/1920x1080/003366/ffffff?text=AI+Background');">
            <div class="aiServicePro-parallax-overlay"></div>
            <div class="container position-relative text-white">
                <div class="row justify-content-center text-center aiServicePro-animate-on-move">
                    <div class="col-lg-8">
                        <h2 class="display-5 fw-bold mb-4">Ready to Transform Your Customer Service?</h2>
                        <p class="lead ai-lead mb-5">Join thousands of businesses that are already delivering exceptional customer experiences with our AI-powered solutions.</p>
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="#" class="btn btn-light btn-lg px-4 py-3 fw-bold ai-lead-service get-started ailife-cta-btn-modern">Get Started Now</a>
                            <a href="#" class="btn btn-outline-light btn-lg px-4 py-3 ailife-cta-btn-modern">Schedule a Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  </main>
  @endsection
