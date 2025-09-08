@extends('layout.app')
@section('content')
<main class="main">

   <!-- Hero Section -->
   <section class="ailife-hero">
    <div class="ailife-floating-shape ailife-shape-1"></div>
    <div class="ailife-floating-shape ailife-shape-2"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="ailife-headline animate__animated animate__fadeInDown">AI Agents for Contact Centers</h1>
                <p class="ailife-subhead animate__animated animate__fadeIn animate__delay-1s">Revolutionize your contact center operations with AI-powered automation that reduces wait times, optimizes workflows, and boosts agent productivity.</p>
                <div class="d-flex gap-3 animate__animated animate__fadeIn animate__delay-2s">
                    <button class="ailife-btn-primary">Request Demo</button>
                    <button class="ailife-btn-outline">Learn More</button>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block animate__animated animate__fadeInRight animate__delay-1s">
                <img src="assets/img/ai-agent -contact-center.png" alt="AI Agent Dashboard" class="img-fluid rounded-4 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 my-5">
    <div class="container">
        <h2 class="text-center ailife-section-title animate__animated animate__fadeIn">How AI Agents Enhance Contact Centers</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp ailife-animate-delay-1">
                <div class="ailife-feature-card">
                    <div class="ailife-feature-icon">
                        <i class="bi bi-diagram-3"></i>
                    </div>
                    <h3 class="ailife-feature-title">Intelligent Call Routing</h3>
                    <p>Direct customers to the most suitable agent or AI assistant for quick resolution.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp ailife-animate-delay-2">
                <div class="ailife-feature-card">
                    <div class="ailife-feature-icon">
                        <i class="bi bi-chat-square-text"></i>
                    </div>
                    <h3 class="ailife-feature-title">Context-Aware Interactions</h3>
                    <p>AI captures and retains conversation history for personalized, efficient responses.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp ailife-animate-delay-3">
                <div class="ailife-feature-card">
                    <div class="ailife-feature-icon">
                        <i class="bi bi-gear"></i>
                    </div>
                    <h3 class="ailife-feature-title">Automated Workflows</h3>
                    <p>Reduce agent workload by addressing common queries in real time.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp ailife-animate-delay-4">
                <div class="ailife-feature-card">
                    <div class="ailife-feature-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h3 class="ailife-feature-title">Live Agent Assistance</h3>
                    <p>AI provides real-time recommendations and sentiment analysis to support agents.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="ailife-stats-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="ailife-stat-card animate__animated animate__fadeIn">
                    <div class="ailife-stat-value">99.7%</div>
                    <div class="ailife-stat-label">Successful Intent Recognition</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ailife-stat-card animate__animated animate__fadeIn animate__delay-1s">
                    <div class="ailife-stat-value">40%</div>
                    <div class="ailife-stat-label">Increase in Routing Accuracy</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ailife-stat-card animate__animated animate__fadeIn animate__delay-2s">
                    <div class="ailife-stat-value">68%</div>
                    <div class="ailife-stat-label">Lower Average Handling Time</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="ailife-cta-section">
    <div class="container">
        <h2 class="ailife-cta-heading animate__animated animate__fadeIn">Ready to Transform Your Contact Center?</h2>
        <p class="fs-5 mb-4 animate__animated animate__fadeIn animate__delay-1s">Discover how AI Agents can revolutionize your customer service operations.</p>
        <button class="ailife-btn-primary animate__animated animate__pulse animate__infinite">Get Started Today</button>
    </div>
</section>

  </main>
