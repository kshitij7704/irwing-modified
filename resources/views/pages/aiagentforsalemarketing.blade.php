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
              <h1 class="ailife-headline animate__animated animate__fadeInDown">AI Agents for Sales & Marketing</h1>
              <p class="ailife-subhead animate__animated animate__fadeIn animate__delay-1s">Supercharge your sales and marketing strategy with AI-driven engagement that proactively connects with prospects, nurtures leads, and personalizes customer journeys.</p>
              <div class="d-flex gap-3 animate__animated animate__fadeIn animate__delay-2s">
                  <button class="ailife-btn-primary">Request Demo</button>
                  <button class="ailife-btn-outline">Learn More</button>
              </div>
          </div>
          <div class="col-lg-5 d-none d-lg-block animate__animated animate__fadeInRight animate__delay-1s">
              <img src="assets/img/ai-sale-marketing.png" alt="AI Sales Dashboard" class="img-fluid rounded-4 shadow-lg">
          </div>
      </div>
  </div>
</section>

<!-- Boost Sales Section -->
<section class="py-5 my-5">
  <div class="container">
      <h2 class="text-center ailife-section-title animate__animated animate__fadeIn">Boost Sales with AI-Powered Engagement</h2>
      <div class="row g-4">
          <div class="col-md-4 animate__animated animate__fadeInUp ailife-animate-delay-1">
              <div class="ailife-feature-card  ">
                  <div class="ailife-feature-icon">
                      <i class="bi bi-funnel"></i>
                  </div>
                  <h3 class="ailife-feature-title">Smart Lead Qualification</h3>
                  <p>Instantly analyze and prioritize leads based on engagement and intent.</p>
              </div>
          </div>
          <div class="col-md-4 animate__animated animate__fadeInUp ailife-animate-delay-2">
              <div class="ailife-feature-card">
                  <div class="ailife-feature-icon">
                      <i class="bi bi-chat-left-text"></i>
                  </div>
                  <h3 class="ailife-feature-title">Conversational AI Outreach</h3>
                  <p>Engage prospects with real-time, personalized interactions across multiple channels.</p>
              </div>
          </div>
          <div class="col-md-4 animate__animated animate__fadeInUp ailife-animate-delay-3">
              <div class="ailife-feature-card">
                  <div class="ailife-feature-icon">
                      <i class="bi bi-arrow-repeat"></i>
                  </div>
                  <h3 class="ailife-feature-title">Automated Follow-Ups</h3>
                  <p>Keep leads warm with timely, AI-driven communications that increase conversion rates.</p>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- Optimize Marketing Section -->
<section class="ailife-benefit-section">
  <div class="container">
      <h2 class="text-center ailife-section-title animate__animated animate__fadeIn">Optimize Marketing with AI-Driven Insights</h2>
      <div class="row">
          <div class="col-lg-6 animate__animated animate__fadeInLeft">
              <div class="ailife-benefit-box">
                  <h3 class="ailife-benefit-title">Predictive Customer Analytics</h3>
                  <p>Identify trends and preferences to deliver highly targeted campaigns that resonate with your audience and drive engagement.</p>
              </div>
          </div>
          <div class="col-lg-6 animate__animated animate__fadeInRight">
              <div class="ailife-benefit-box">
                  <h3 class="ailife-benefit-title">Personalized Content & Offers</h3>
                  <p>Tailor messages and promotions based on customer behavior and interests to maximize conversion rates and customer satisfaction.</p>
              </div>
          </div>
          <div class="col-lg-6 animate__animated animate__fadeInLeft">
              <div class="ailife-benefit-box">
                  <h3 class="ailife-benefit-title">AI-Powered Chat & Email Campaigns</h3>
                  <p>Automate marketing workflows for seamless customer engagement across all touchpoints in the buyer's journey.</p>
              </div>
          </div>
          <div class="col-lg-6 animate__animated animate__fadeInRight">
              <div class="ailife-benefit-box">
                  <h3 class="ailife-benefit-title">Omnichannel AI Assistance</h3>
                  <p>Engage customers across chat, email, social media, and voice platforms for a consistent brand experience.</p>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- Accelerate Growth Section -->
<section class="py-5">
  <div class="container">
      <h2 class="text-center ailife-section-title animate__animated animate__fadeIn">Accelerate Growth with Smarter AI Integration</h2>
      <div class="row g-4">
          <div class="col-md-4 animate__animated animate__fadeInUp ailife-animate-delay-1">
              <div class="ailife-feature-card">
                  <div class="ailife-feature-icon">
                      <i class="bi bi-people"></i>
                  </div>
                  <h3 class="ailife-feature-title">CRM & Marketing Automation</h3>
                  <p>Connect with tools like Salesforce, HubSpot, and more for seamless operations across your tech stack.</p>
              </div>
          </div>
          <div class="col-md-4 animate__animated animate__fadeInUp ailife-animate-delay-2">
              <div class="ailife-feature-card">
                  <div class="ailife-feature-icon">
                      <i class="bi bi-collection"></i>
                  </div>
                  <h3 class="ailife-feature-title">Omnichannel AI Assistance</h3>
                  <p>Engage customers across all platforms for a unified customer experience.</p>
              </div>
          </div>
          <div class="col-md-4 animate__animated animate__fadeInUp ailife-animate-delay-3">
              <div class="ailife-feature-card">
                  <div class="ailife-feature-icon">
                      <i class="bi bi-graph-up-arrow"></i>
                  </div>
                  <h3 class="ailife-feature-title">Continuous Learning</h3>
                  <p>AI adapts to customer behaviors, refining strategies for maximum ROI and performance.</p>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-white">
  <div class="container">
      <div class="row g-4">
          <div class="col-md-4">
              <div class="ailife-stat-card animate__animated animate__fadeIn">
                  <div class="ailife-stat-value">50%</div>
                  <div class="ailife-stat-label">Decrease in agent turnover</div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="ailife-stat-card animate__animated animate__fadeIn animate__delay-1s">
                  <div class="ailife-stat-value">>3 min</div>
                  <div class="ailife-stat-label">Time saving with automated call wrap-up</div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="ailife-stat-card animate__animated animate__fadeIn animate__delay-2s">
                  <div class="ailife-stat-value">32%</div>
                  <div class="ailife-stat-label">CSAT improvement</div>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- CTA Section -->
<section class="ailife-cta-section">
  <div class="container">
      <h2 class="ailife-cta-heading animate__animated animate__fadeIn">Ready to Transform Your Sales & Marketing?</h2>
      <p class="fs-5 mb-4 animate__animated animate__fadeIn animate__delay-1s">Discover how AI Agents can revolutionize your customer engagement and drive revenue growth.</p>
      <button class="ailife-btn-primary animate__animated animate__pulse animate__infinite">Get Started Today</button>
  </div>
</section>

</main>
