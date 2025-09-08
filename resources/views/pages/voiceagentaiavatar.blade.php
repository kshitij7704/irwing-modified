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
          <h1 class="display-4 fw-bold mb-4">AI Voice Agents</h1>
          <p class="lead ai-lead mb-4 opacity-75">Redefine voice-based customer interactions with AI Voice Agents
            that provide natural, human-like conversations over phone calls. These AI-powered assistants manage
            inbound inquiries, conduct outbound sales calls, and offer real-time support, ensuring instant responses
            and smooth call handling.</p>
          <div class="d-flex flex-wrap gap-3">
            <a href="#" class="btn btn-light btn-lg fw-bold px-4 py-3 ai-lead-service">Request Demo</a>
          </div>
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0 aiServicePro-animate-on-move">
          <img src="assets/img/ai-voice-agent.png" alt="AI Customer Service" class="img-fluid rounded-4 shadow" data-aos="fade-down" data-aos-delay="100">
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-5 py-lg-7 bg-white">
    <div class="container">
      <div class="row justify-content-center aiServicePro-animate-on-move">
        <div class="col-lg-8 text-center mb-5" data-aos="fade-down" data-aos-delay="100">
          <h2 class="display-5 fw-bold ai-lead-service mb-3">Seamless & Smart Voice Interaction</h2>
          <p class="lead ai-lea">Designed to understand intent, detect sentiment, and personalize conversations, AI
            Voice Agents improve call center efficiency while reducing operational costs.</p>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 aiServicePro-animate-on-move">
          <div class="aiServicePro-feature-card text-center p-4" data-aos="fade-down" data-aos-delay="200">
            <div class="aiServicePro-feature-icon">
              <i class="fas fa-comments"></i>
            </div>
            <h4 class="mb-3">Natural Interactions</h4>
            <p>Understands user intent and delivers accurate responses in real time.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 aiServicePro-animate-on-move">
          <div class="aiServicePro-feature-card text-center p-4" data-aos="fade-down" data-aos-delay="300">
            <div class="aiServicePro-feature-icon">
              <i class="fas fa-language"></i>
            </div>
            <h4 class="mb-3">Multilingual</h4>
            <p>Communicates fluently in over 100 languages globally.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 aiServicePro-animate-on-move">
          <div class="aiServicePro-feature-card text-center p-4" data-aos="fade-down" data-aos-delay="400">
            <div class="aiServicePro-feature-icon">
              <i class="fas fa-clock"></i>
            </div>
            <h4 class="mb-3">24/7 Availability</h4>
            <p>Handles inbound queries instantly, reducing wait times.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 aiServicePro-animate-on-move">
          <div class="aiServicePro-feature-card text-center p-4" data-aos="fade-down" data-aos-delay="500">
            <div class="aiServicePro-feature-icon">
              <i class="fas fa-route"></i>
            </div>
            <h4 class="mb-3">Smart Routing</h4>
            <p>Directs queries to the best-suited human agent when needed.</p>
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
          <img src="assets/img/ai-voice-agent-1.png" AI Automation" class="img-fluid rounded-4 shadow">
        </div>
        <div class="col-lg-6 aiServicePro-animate-on-move">
          <h3 class="h4">Smart Interaction</h3>
          <h2 class="display-5 fw-bold mb-4 ai-lead-service">Human-Like Conversational Experience</h2>
          <p class="mb-4">Empathetic & Lifelike Voices – Creates engaging, expressive interactions that build
            stronger customer relationships.</p>

          <div class="row g-4 mb-4">
            <div class="col-md-6">
              <div class="aiServicePro-feature-card p-4 h-100">
                <div class="aiServicePro-feature-icon mb-3">
                  <i class="fas fa-microphone-alt"></i>
                </div>
                <h4 class="h5">Advanced Speech Recognition</h4>
                <p class="mb-0">Detects sentiment, tone, and intent for a more meaningful dialogue.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="aiServicePro-feature-card p-4 h-100">
                <div class="aiServicePro-feature-icon mb-3">
                  <i class="fas fa-language"></i>
                </div>
                <h4 class="h5">Multilingual Support</h4>
                <p class="mb-0">Communicates fluently in over 100 languages for a truly global reach.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ------------------------ Agent Support Section ------------------------ -->

  <section class="py-5 py-lg-7 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 aiServicePro-animate-on-move">
          <h3 class="h4">Agent Support</h3>
          <h2 class="display-5 fw-bold mb-4 ai-lead-service">Smart Assistance for Live Agents</h2>
          <p class="mb-4">Intelligent Call Routing – Captures customer context and directs queries to the
            best-suited human agent when needed.</p>

            <div class="row g-4">
              <div class="col-md-6">
                  <div class="aiServicePro-feature-card p-4 h-100">
                      <div class="aiServicePro-feature-icon mb-3">
                          <i class="fas fa-user-shield"></i>
                      </div>
                      <h4 class="h5">Live Agent Support</h4>
                      <p class="mb-0">Provides real-time suggestions to human agents, improving response accuracy and efficiency.</p>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="aiServicePro-feature-card p-4 h-100">
                      <div class="aiServicePro-feature-icon mb-3">
                          <i class="fas fa-cogs"></i>
                      </div>
                      <h4 class="h5">Self-Service Automation</h4>
                      <p class="mb-0">Enables customers to complete tasks without human intervention, enhancing efficiency.</p>
                  </div>
              </div>
          </div>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 aiServicePro-animate-on-move">
          <img src="assets/img/ai-voice-agent-1.jpg" AI Automation class="img-fluid rounded-4 shadow">
        </div>
      </div>
    </div>
  </section>
  <!-- -------------------- End of Agent Support Section --------------------- -->

  <!-- ------------------------- Proactive Outreach -------------------------- -->
  <section class="py-5 py-lg-7 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 aiServicePro-animate-on-move">
                <img src="assets/img/ai-voice-agent-2.jpg" alt="AI Automation" class="img-fluid rounded-4 shadow">
            </div>
            <div class="col-lg-6 aiServicePro-animate-on-move">
                <h3 class="h4">Proactive Outreach</h3>
                <h2 class="display-5 fw-bold mb-4 ai-lead-service">Proactive & Personalized Outreach</h2>
                <p class="mb-4">Automated Outbound Calls – AI-driven follow-ups, appointment reminders, and promotional offers at scale.</p>

                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="aiServicePro-feature-card p-4 h-100">
                            <div class="aiServicePro-feature-icon mb-3">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h4 class="h5">Predictive Customer Engagement</h4>
                            <p class="mb-0">Anticipates needs and delivers tailored recommendations before customers even ask.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="aiServicePro-feature-card p-4 h-100">
                            <div class="aiServicePro-feature-icon mb-3">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4 class="h5">Performance Optimization</h4>
                            <p class="mb-0">Continuously improves based on interaction data and outcomes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
   <!-- ---------------------- End of Proactive Outreach ---------------------- -->

  <!-- End About Section -->
  <!-- Stats Section -->
  <section class="py-5 py-lg-7 bg-white">
    <div class="container">
        <div class="row justify-content-center aiServicePro-animate-on-move">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3 ai-lead-service">Performance Stats</h2>
                <p class="lead">Our AI Voice Agents deliver measurable results that transform customer service operations</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4 aiServicePro-animate-on-move">
                <div class="aiServicePro-stat-card text-center">
                    <div class="aiServicePro-stat-number">99.7%</div>
                    <h4 class="aiServicePro-stat-title">Intent Recognition</h4>
                    <p class="mb-0">successful intent understanding</p>
                </div>
            </div>
            <div class="col-md-4 aiServicePro-animate-on-move">
                <div class="aiServicePro-stat-card text-center">
                    <div class="aiServicePro-stat-number">40%</div>
                    <h4 class="aiServicePro-stat-title">Routing Accuracy</h4>
                    <p class="mb-0">improvement in call routing</p>
                </div>
            </div>
            <div class="col-md-4 aiServicePro-animate-on-move">
                <div class="aiServicePro-stat-card text-center">
                    <div class="aiServicePro-stat-number">68%</div>
                    <h4 class="aiServicePro-stat-title">Efficiency Gain</h4>
                    <p class="mb-0">reduction in average handling time</p>
                </div>
            </div>
        </div>
    </div>
 </section>

  <!-- Parallax CTA Section -->
  <section class="aiServicePro-parallax-section"
    style="background-image: url('https://via.placeholder.com/1920x1080/003366/ffffff?text=AI+Avatar+Vidhira');">
    <div class="aiServicePro-parallax-overlay"></div>
    <div class="container position-relative text-white">
      <div class="row justify-content-center text-center aiServicePro-animate-on-move">
        <div class="col-lg-8">
          <h2 class="display-5 fw-bold mb-4 ai-avatar-vidhira">AI Avatar Vidhira</h2>
          <p class="lead mb-5 ai-avatar-vidhira">Meet Vidhira, an advanced AI-powered avatar designed to transform digital interactions with human-like intelligence, emotions, and adaptability.</p>

          <p class="mb-5 standard-ai">Unlike standard AI Agents, Vidhira combines conversational AI with visual representation, offering a face-to-face virtual experience that enhances engagement in customer service, virtual sales, and digital events. Available in multiple languages, with dynamic expressions and contextual awareness, Vidhira creates immersive, lifelike conversations that redefine how businesses connect with their audiences.</p>

        </div>
      </div>
    </div>
  </section>

  <!-- ----------------- A New Era of AI-Powered Engagement ------------------ -->

  <section class="py-5 py-lg-7 bg-white">
    <div class="container">
        <div class="row justify-content-center aiServicePro-animate-on-move">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="display-5 fw-bold ai-lead-service mb-3">A New Era of AI-Powered Engagement</h2>
                <p class="lead ai-lea">Available in multiple languages, with dynamic expressions and contextual awareness, Vidhira creates immersive, lifelike conversations.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-12 col-lg-6 aiServicePro-animate-on-move">
                <div class="aiServicePro-feature-card text-center p-4">
                    <div class="aiServicePro-feature-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h4 class="mb-3">Human Touch AI</h4>
                    <p>Conversational AI with a Human Touch – Understands context, tone, and emotions for more natural interactions.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 aiServicePro-animate-on-move">
                <div class="aiServicePro-feature-card text-center p-4">
                    <div class="aiServicePro-feature-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h4 class="mb-3">Lifelike Visuals</h4>
                    <p>Lifelike Visual Representation – Engages users through realistic facial expressions and dynamic responses.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 aiServicePro-animate-on-move">
                <div class="aiServicePro-feature-card text-center p-4">
                    <div class="aiServicePro-feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4 class="mb-3">Multilingual</h4>
                    <p>Supports Multiple Languages – Communicates effectively with diverse audiences.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 aiServicePro-animate-on-move">
                <div class="aiServicePro-feature-card text-center p-4">
                    <div class="aiServicePro-feature-icon">
                        <i class="fas fa-memory"></i>
                    </div>
                    <h4 class="mb-3">Context Aware</h4>
                    <p>Contextual Awareness – Remembers past interactions, making conversations feel more natural and intuitive.</p>
                </div>
            </div>
        </div>
    </div>
  </section>
   <!-- --------------- End A New Era of AI-Powered Engagement ---------------- -->

   <!-- ------------- Redefining Customer & Business Interactions ------------- -->
  <section class="py-5 py-lg-7 bg-white">
    <div class="container">
        <div class="row justify-content-center aiServicePro-animate-on-move">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="display-5 fw-bold ai-lead-service mb-3">Redefining Customer & Business Interactions</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-12 col-lg-4 aiServicePro-animate-on-move">
                <div class="aiServicePro-feature-card text-center p-4">
                    <div class="aiServicePro-feature-icon">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <h4 class="mb-3">Virtual Customer Service</h4>
                    <p>Provides personalized support with a human-like presence, enhancing user experience.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 aiServicePro-animate-on-move">
                <div class="aiServicePro-feature-card text-center p-4">
                    <div class="aiServicePro-feature-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h4 class="mb-3">Virtual Sales Assistant</h4>
                    <p>Assists customers in making informed decisions with real-time product recommendations.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 aiServicePro-animate-on-move">
                <div class="aiServicePro-feature-card text-center p-4">
                    <div class="aiServicePro-feature-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h4 class="mb-3">Digital Event Host</h4>
                    <p>Engages audiences with interactive, intelligent responses in multiple languages.</p>
                </div>
            </div>
        </div>
    </div>
  </section>
    <!-- --------- End of Redefining Customer & Business Interactions ---------- -->

    <section class="py-5 py-lg-7 bg-white">
      <div class="container">

          <div class="row g-4">
              <div class="col-md-4 aiServicePro-animate-on-move">
                  <div class="aiServicePro-stat-card text-center">
                      <div class="aiServicePro-stat-number">>90%</div>
                      <h4 class="aiServicePro-stat-title">Engagement Rate</h4>
                      <p class="mb-0">in virtual interactions</p>
                  </div>
              </div>
              <div class="col-md-4 aiServicePro-animate-on-move">
                  <div class="aiServicePro-stat-card text-center">
                      <div class="aiServicePro-stat-number">50%</div>
                      <h4 class="aiServicePro-stat-title">Retention Boost</h4>
                      <p class="mb-0">for personalized experiences</p>
                  </div>
              </div>
              <div class="col-md-4 aiServicePro-animate-on-move">
                  <div class="aiServicePro-stat-card text-center">
                      <div class="aiServicePro-stat-number">3x</div>
                      <h4 class="aiServicePro-stat-title">Higher Conversions</h4>
                      <p class="mb-0">with interactive sales support</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

</div>

</main>
