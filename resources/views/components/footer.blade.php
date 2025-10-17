<footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-2 col-md-6 footer-about">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <img src="{{ asset('assets/img/Logo@2x.png') }}" alt="logo">
                </a>
                <p class="footer-p">Ignited Wings Technology Pvt. Ltd. </p>
                <div class="footer-contact pt-3">
                    <p><strong>Address:</strong> <span> 3rd Floor, Orchid Center, Golf Course Road,
                            DLF QE, Sec-53, Gurugram, Haryana (122002) </span>
                    </p>

                    <p class="mt-3"><strong>Phone:</strong> <span><a href="tel:+918439266770">+91 8439266770</a></span></p>
                    <p><strong>Email:</strong> <span><a
                                href="mailto:contact@Ailifebot.com">contact@Ailifebot.com</a></span></p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Solutions</h4>
                <ul>
                    <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'smart-ai-work-forces']) }}">Introducing
                            Smart AI Workforce</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-customer-service']) }}">AI Agents
                            for Customer Service</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-contact-center']) }}">AI Agents for
                            Contact Center</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-sales-marketing']) }}">AI Agents for
                            Sales & Marketing</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-voice-agents']) }}">AI Voice Agents</a>
                    </li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-avatar-vidhira']) }}">AI Avataar
                            Vidhira</a></li>

                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Industries</h4>
                <ul>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-automotive']) }}">Automotive</a>
                    </li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-aviation-logistics']) }}">Aviation &
                            Logistics</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-banking-financial']) }}">Banking &
                            Financial Services</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-healthcare']) }}">Healthcare</a>
                    </li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-insurance']) }}">Insurance</a></li>
                    <li><a
                            href="{{ route('reuseablepage', ['service' => 'ai-agents-manufacturing']) }}">Manufacturing</a>
                    </li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-retail']) }}">Retail &
                            E-Commerce</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-public-services']) }}">Public
                            Services & Utilities</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-education']) }}">Education</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'travel-ai-agents']) }}">Travel & Tourism</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Platform</h4>
                <ul>
                    <li><a href="{{ route('reuseablepage', ['service' => 'ai-lifebot']) }}">AI LifeBOT Platform</a>
                    </li>
                    <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'ai-agent-copilot-talk-series']) }}">AI
                            Agent Co-Pilot</a></li>
                    <li><a href="">AI Search</a></li>
                    <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'vernacular-ai']) }}">Vernacular</a>
                    </li>
                    <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'multimodal-ai']) }}">Multimodal</a>
                    </li>
                    <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'ai-multi-agents']) }}">AI
                            Multi-Agents</a></li>
                    <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'analytics-and-reporting']) }}">Analytics
                            & Reporting</a></li>
                    <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'enterprise-integrations']) }}">Enterprise
                            Integrations</a></li>
                    <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'live-chat-agent']) }}">Live Chat
                            Agent</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Resources</h4>
                <ul>
                    <li><a href="{{ route('reuseablepage', ['service' => 'customers-success-stories']) }}">Customer
                            Success Stories</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'technical-documentation']) }}">Technical
                            Documentation</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'case-studies']) }}">Case Studies & White
                            Papers</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'blogs']) }}">Blogs</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'academy']) }}">AI LifeBOT Academy</a></li>
                    <li><a href="">Industry Showcase</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Company</h4>
                <ul>
                    <li><a href="{{ route('reuseablepage', ['service' => 'about']) }}">About Us</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'partner-program']) }}">Become Our Partner</a>
                    </li>
                    <li><a href="{{ route('leadership') }}">Leadership</a></li>
                    <li><a href="">News & Updates</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'careers']) }}">Careers</a></li>
                    <li><a href="{{ route('reuseablepage', ['service' => 'contact-us']) }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <section class="footer-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="newsletter-content">
                            <p class="newsletter-title mb-2">
                                Subscribe to Ai LifeBOT Edge Digest: A biweekly newsletter curated to keep you updated
                                with the developments in Agentic AI
                            </p>
                            
                            <form action="{{ route('newsletter.store') }}" method="POST" class="subscription-form">
                                @csrf
                                <input type="email" name="email" class="email-input" placeholder="Your work email" required>
                                <button type="submit" class="subscribe-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 pb-3">
                        <div class="certification-badges  justify-content-center me-1">
                            <div class="badge-item" title="ISO Certification">
                                <img src="{{ asset('assets/img/soc-22.png') }}" class="certificate_img" />
                            </div>
                            <div class="badge-item" title="Global Standards">
                                <img src="{{ asset('assets/img/27001.png') }}" class="certificate_img" />
                            </div>
                            <div class="badge-item" title="Quality Assurance">
                                <img src="{{ asset('assets/img/iso9001.png') }}" class="certificate_img" />
                            </div>
                            <div class="badge-item" title="Enterprise Security">
                                <img src="{{ asset('assets/img/cmmi-1.png') }}" class="certificate_img" />
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div>
                                <h5 class="mb-3">Strategic Planner</h5>
                            </div>
                            <div class="certification-badges  justify-content-center me-1" style="padding-bottom: 50px">
                                
                                <div title="ISO Certification">
                                    <img src="{{ asset('assets/img/partner.png') }}" class="certificate_img-partner" />
                                </div>
                                <div title="Global Standards">
                                    <img src="{{ asset('assets/img/p-1.png') }}" class="certificate_img-partner" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-links">
                    <div class="footer-bottom">
                        <div class="copyright" style="border: none">
                            © AI LifeBOT Inc. All rights reserved.
                        </div>
                        <nav class="footer-nav">
                            <a href="{{ route('pdf.view', ['filename' => 'AI Lifebot terms and conditions.pdf']) }}"
                                target="_blank">Terms and Conditions</a>
                            <a href="{{ route('pdf.view', ['filename' => 'AI Lifebot privacy policy.pdf']) }}"
                                target="_blank">Privacy Policy</a>
                            <a href="{{ route('pdf.view', ['filename' => 'AI Lifebot terms Refund.pdf']) }}"
                                target="_blank">Refund Policy</a>
                            {{-- <a href="#">Trust Center</a> --}}
                            <a href="{{ route('pdf.view', ['filename' => 'AI Lifebot cookies.pdf']) }}"
                                target="_blank">Cookie Policy</a>
                        </nav>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/company/ailifebot" class="social-icon linkedin"
                                title="LinkedIn" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                            <a href="https://www.instagram.com/ailifebot/?hl=en" class="social-icon instagram"
                                title="Instagram" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="https://www.facebook.com/ailifebotnoida/" class="social-icon facebook"
                                title="Facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="https://x.com/ailifebot" class="social-icon twitter" title="Twitter/X"
                                target="_blank">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
    @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Subscribed!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#3085d6',
            });
        @endif

        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Oops!',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                confirmButtonColor: '#d33',
            });
        @endif
            // Form submission handler
            // document.querySelector('.subscription-form').addEventListener('submit', function(e) {
            //     e.preventDefault();
            //     const email = this.querySelector('.email-input').value;
            //     if (email) {
            //         alert('Thank you for subscribing to AI LifeBOT\'s newsletter!');
            //         this.querySelector('.email-input').value = '';
            //     }
            // });

            // Add hover effects to certification badges
            document.querySelectorAll('.badge-item').forEach(badge => {
                badge.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05)';
                });

                badge.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        </script>
    </div>

</footer>

<!-- Scroll Top -->
<a href="" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<script>
    document.querySelectorAll(".navmenu .dropdown-toggle").forEach((dropdown) => {
        dropdown.addEventListener("click", function(event) {
            if (window.innerWidth < 1200) { // Only for mobile
                event.stopPropagation();
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".navmenu .dropdown-toggle").forEach((dropdown) => {
            dropdown.addEventListener("click", function(event) {
                let parentDropdown = this.parentElement;
                if (parentDropdown.classList.contains("dropdown-active")) {
                    parentDropdown.classList.remove("dropdown-active");
                } else {
                    document
                        .querySelectorAll(".navmenu .dropdown .dropdown-active")
                        .forEach((el) => el.classList.remove("dropdown-active"));
                    parentDropdown.classList.add("dropdown-active");
                }
                event.preventDefault();
            });
        });
    });
</script>
