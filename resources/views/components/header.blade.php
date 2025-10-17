<!-- Marquee (mobile only) -->
<div id="ai-agent" class="text-white px-3 py-2">
    <div class="marquee-wrapper">
        <div class="marquee-content">
            <b>Introducing AI Agent Co-Pilot:</b> Powering Outcome-Driven Autonomous 24x7 Customer Engagements for
            Enterprises
        </div>
        <div class="marquee-content">
            <b>Introducing AI Agent Co-Pilot:</b> Powering Outcome-Driven Autonomous 24x7 Customer Engagements for
            Enterprises
        </div>
    </div>
</div>



<style>

@media (max-width: 768px) {
    #santeck-menu-column1 {
      border: none;
    }
  }

  @media (min-width: 769px) {
    #santeck-menu-column1 {
  border-right: 1px solid #6F6F6F;
    }
  }
  @media (max-width: 768px) {
      #santeck-menu-column2 {

        padding:none;
      }
    }

    @media (min-width: 769px) {
      #santeck-menu-column2 {

    padding-left:80px;
      }
    }
    @media (max-width: 768px) {
        #santeck-menu-column3 {
            border: none;
          padding:none;
        }
      }

      @media (min-width: 769px) {
        #santeck-menu-column3 {
           border-right: 1px solid #6F6F6F;
             border-left: 1px solid #6F6F6F;

        }
      }

    #ai-agent {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #333;
        font-size: 14px;
        z-index: 1030;
        overflow: hidden;
        text-align: center;
        /* Center the text */
    }

    /* Marquee wrapper default (desktop): no animation, hide duplicate */
    .marquee-wrapper {
        display: flex;
        justify-content: center;
        /* Center horizontally */
        white-space: nowrap;
        width: 100%;
        overflow: hidden;
    }

    .marquee-content {
        display: inline-block;
        padding-right: 0;
        animation: none;
    }

    /* Only show first content on desktop */
    .marquee-content:nth-child(2) {
        display: none;
    }

    /* Mobile-only: activate seamless marquee */
    @media (max-width: 767.98px) {
        .marquee-wrapper {
            width: fit-content;
            animation: seamless-marquee 15s linear infinite;
            justify-content: flex-start;
            /* Start from left for scroll */
        }

        .marquee-content {
            padding-right: 100px;
        }

        .marquee-content:nth-child(2) {
            display: inline-block;
        }
    }

    /* Keyframes for mobile marquee */
    @keyframes seamless-marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }
</style>

<header id="header" class="header mt-3 d-flex align-items-center fixed-top">

    <div class="container-fluid container-xl header-container position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <img src="{{ asset('assets/img/logo-01.jpg') }}" alt="ailifebot logo" class="img-fluid">
            <!-- <h1 class="sitename">QuickStart</h1> -->
        </a>

        <!-- Mega Menu -->

        <!-- End of Megamenu -->


        <nav id="navmenu" class="navmenu">
            <ul>
                <!-- Mega Menu Item - Solutions -->
                <li class="nav-item dropdown santeck-mega-menu">
                    <a class="nav-link" href="#" id="solutionsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Solutions <i class="fas fa-angle-down toggle-dropdown"></i>
                    </a>
                    <div class="santeck-2 dropdown-menu" aria-labelledby="solutionsDropdown">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 santeck-menu-column">
                                    <div class="row">
                                        <h5 class="santeck-menu-title1 dropdown-item">Introducing Smart Al Workforce
                                        </h5>
                                        <div class="features-image col-lg-5 pb-5" data-bs-auto-close="false"
                                            data-aos="fade-up" data-aos-delay="200">
                                            <!-- test -->
                                            <div class="unique-background-nav">
                                                <div class="ripple-effect ripple-1"></div>
                                                <div class="ripple-effect ripple-2"></div>
                                                <div class="unique-circle-containernav" id="unique-circle-containernav">
                                                    <div class="unique-icon-boxnav" data-index="0"
                                                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                        <i class="fab fa-instagram" style="color: #fff;"></i>
                                                    </div>
                                                <div class="unique-icon-boxnav" data-index="1"><i class="fab fa-whatsapp"
                                                        style="color: #fff;"></i></div>
                                                <div class="unique-icon-boxnav" data-index="2"><i class="fab fa-facebook-messenger"
                                                        style="color: #fff;"></i></div>
                                                <div class="unique-icon-boxnav" data-index="3"><i class="fab fa-microsoft"
                                                        style="color: #fff;"></i></div>
                                                <div class="unique-icon-boxnav" data-index="4"><i class="fab fa-slack"
                                                        style="color: #fff;"></i></div>
                                                <div class="unique-icon-boxnav" data-index="5"><i class="fas fa-phone-alt"
                                                        style="color: #fff;"></i></div>
                                            </div>
                                          </div>
                                        </div>
                                        <script>
                                   const circle = document.getElementById('unique-circle-containernav');
                                   const icons = document.querySelectorAll('.unique-icon-boxnav');
                                   const iconSets = [
                                     ['fab fa-instagram', 'fab fa-whatsapp', 'fab fa-facebook-messenger', 'fab fa-microsoft', 'fab fa-slack', 'fas fa-phone-alt'],
                                     ['fab fa-whatsapp', 'fab fa-facebook-messenger', 'fab fa-instagram', 'fab fa-slack', 'fab fa-microsoft', 'fas fa-phone-alt']
                                   ];

                                   const iconBackgroundColors = [
                                     '#E4405F', // Instagram
                                     '#25D366', // WhatsApp
                                     '#0084FF', // Messenger
                                     '#02B5EB', // Microsoft
                                     '#4A154B', // Slack
                                     '#000000'  // Phone
                                   ];

                                   let angles = Array(6).fill(0).map((_, i) => (i * 2 * Math.PI) / 5);
                                   let setIndices = [0, 0, 0, 0, 0, 0];
                                   const speed = 0.005;
                                   let hiddenIndex = 5;
                                   const iconSize = 50;

                                   function getIconColor(iconClass) {
                                     if (iconClass.includes('fa-instagram')) return '#fff';
                                     if (iconClass.includes('fa-whatsapp')) return '#fff';
                                     if (iconClass.includes('fa-facebook-messenger')) return '#fff';
                                     if (iconClass.includes('fa-microsoft')) return '#fff';
                                     if (iconClass.includes('fa-slack')) return '#fff';
                                     if (iconClass.includes('fa-phone-alt')) return '#fff';
                                     return '#fff';
                                   }

                                   function updateIcons() {
                                     const circleRect = circle.getBoundingClientRect();
                                     const circleRadius = circleRect.width / 2;
                                     const orbitRadius = circleRadius - (iconSize / 8);

                                     icons.forEach((icon, index) => {
                                       if (index === hiddenIndex) {
                                         icon.style.display = 'none';
                                         return;
                                       }

                                       icon.style.display = 'flex';
                                       angles[index] += speed;

                                       const x = Math.cos(angles[index]) * orbitRadius;
                                       const y = Math.sin(angles[index]) * orbitRadius;

                                       icon.style.left = `calc(50% + ${x}px)`;
                                       icon.style.top = `calc(50% + ${y}px)`;
                                       icon.style.backgroundColor = iconBackgroundColors[index % iconBackgroundColors.length];

                                       if (angles[index] >= 2 * Math.PI) {
                                         angles[index] = 0;

                                         const newlyHiddenIndex = index;
                                         const newlyShownIndex = hiddenIndex;
                                         hiddenIndex = newlyHiddenIndex;

                                         icons[newlyShownIndex].style.display = 'flex';
                                         icons[newlyShownIndex].innerHTML = `<i class="${iconSets[setIndices[newlyShownIndex]][newlyShownIndex]}" style="color: ${getIconColor(iconSets[setIndices[newlyShownIndex]][newlyShownIndex])};"></i>`;
                                         icons[newlyShownIndex].classList.add('unique-bounce-effect');
                                         icons[newlyShownIndex].style.backgroundColor = iconBackgroundColors[newlyShownIndex % iconBackgroundColors.length];

                                         setTimeout(() => {
                                           icons[newlyShownIndex].classList.remove('unique-bounce-effect');
                                         }, 500);

                                         angles[newlyShownIndex] = angles[newlyHiddenIndex];
                                       }
                                     });

                                     requestAnimationFrame(updateIcons);
                                   }

                                   icons.forEach((icon, index) => {
                                     icon.style.display = index === hiddenIndex ? 'none' : 'flex';
                                     icon.style.backgroundColor = iconBackgroundColors[index % iconBackgroundColors.length];
                                   });

                                   updateIcons();
                                 </script>
                                        <div class="col-lg-7 pt-4">
                                            <p class="sidetitle1">Turn your Traditional Customer Engagements into 24X7
                                                customer delightful Experience.</p>
                                            <a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'smart-ai-work-forces']) }}" class="p-0">
                                                <p class="sidetitle2">Explore Enterprise AI Agent</p>
                                            </a>
                                        </div>
                                    </div>
                                    <h5>Meet our AI Agent vidhira</h5>
                                    <h5 class="santeck-menu-title ">By Category</h5>
                                    <ul class="santeck-menu-list">
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-customer-service']) }}"><span
                                                    class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Category/Group45.png') }}"></span>Al
                                                Agents for Customer Service</a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-contact-center']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Category/Group706.png') }}"></span>Al
                                                Agents for Contact Center</a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-sales-marketing']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Category/Group708.png') }}"></span>Al
                                                Agent for Sales & Marketing </a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-voice-agents']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Category/Group710.png') }}"></span>AI
                                                Voice Agent</a></li>

                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6 santeck-menu-column" id="santeck-menu-column1" >
                                    <h5 class="santeck-menu-title">Enterprise Integrations</h5>
                                    <ul class="santeck-menu-list">
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-life-bot']) }}"><span
                                                    class="imgdiv"><img
                                                        src="{{ asset('assets/img/Solution/Enterprises/shopify-logo-svgrepo-com.svg') }}"></span><span>Shopify</span></a>
                                        </li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-life-bot']) }}"><span class="imgdiv"><img
                                                        src=" {{ asset('assets/img/Solution/Enterprises/zoho-logo_brandlogos.net_titlb.svg') }}"></span><span>ZOHO<span></a>
                                        </li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-life-bot']) }}"><span class="imgdiv"><img
                                                        src="{{ asset('assets/img/Solution/Enterprises/unnamed.png') }}"></span>LeadSquared</a>
                                        </li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-life-bot']) }}"><span class="imgdiv"><img
                                                        src="{{ asset('assets/img/Solution/Enterprises/1621402410_Kylas_Logo_png_(2).svg') }}"></span>Kylas</a>
                                        </li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-life-bot']) }}"><span class="imgdiv"><img
                                                        src="{{ asset('assets/img/Solution/Enterprises/SAP_logo.svg') }}"></span>SAP</a>
                                        </li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-life-bot']) }}"><span class="imgdiv"><img
                                                        src="{{ asset('assets/img/Solution/Enterprises/Microsoft-Dynamics-Sales-Marketing-and-Service-280x300.svg') }}"></span>Microsoft
                                                Dynamics</a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-life-bot']) }}"><span class="imgdiv"><img
                                                        src="{{ asset('assets/img/Solution/Enterprises/Salesforce_1050x1050.svg') }}"></span>Sales
                                                Force</a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-life-bot']) }}"><span class="imgdiv"><img
                                                        src="{{ asset('assets/img/Solution/Enterprises/Zapier-Emblem.svg') }}"></span>Zapier</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-5 col-md-6 santeck-menu-column" id="santeck-menu-column2">
                                    <h5 class="santeck-menu-title">By Industry</h5>
                                    <ul class="santeck-menu-list">
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-automotive']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Industry/Group 712.png') }}"></span><span>Al
                                                    Agents for Automotive</span></a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-aviation-logistics']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Industry/Group 714.png') }}"></span><span>Al
                                                    Agents for Aviation & logistics</span></a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-banking-financial']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Industry/Group 716.png') }}"></span><span>AI
                                                    Agent for Banking & Financial services
                                                </span></a></li>
                                                <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-insurance']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Industry/Group 720.png') }}"></span><span>AI
                                                    Agent for Insurance
                                                </span></a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-healthcare']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Industry/Group 718.png') }}"></span><span>Al
                                                    Agents for Healthcare</span></a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-manufacturing']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Industry/Group 724.png') }}"></span><span>AI
                                                    Agent Manufacturing</span></a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-retail']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Industry/Group 722.png') }}"></span><span>Al
                                                    Agents for Retail & E-Commerce</span></a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-public-services']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Industry/Group 724.png') }}"></span><span>Al
                                                    Agents for Public Services & Utilities</span></a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'ai-agents-education']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Industry/Group 726.png') }}"></span><span>Al
                                                    Agents for Education</span></a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'travel-ai-agents']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Industry/Group 728.png') }}"></span><span>Al
                                                    Agents for Travel & Tourism</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Mega Menu Item - Platform -->
                <li class="nav-item dropdown santeck-mega-menu">
                    <a class="nav-link" href="#" id="platformDropdown"
                        data-bs-auto-close="false" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Platform <i class="fas fa-angle-down toggle-dropdown"></i>
                    </a>
                    <div class=" santeck-2 dropdown-menu" aria-labelledby="solutionsDropdown">
                        <div class="container ">
                            <div class="row pt-4">
                                <div class="col-lg-4 col-md-4 santeck-menu-column px-3">
                                    <h5 class="santeck-menu-title" style="color:#BD9774 !important">Enterprise GPT Platform</h5>
                                    <div class="santeck-menu-image">
                                        <img src="/assets/img/Platform/Cognigy.AI Collage.png" alt="Platform Image"
                                            class="img-fluid">
                                        <div class="res">
                                            <p class="p-0 m-0">Enterprise-grade Omnichannel Gen Al powered</p>
                                            <p class="p-0 m-0">Multi-Agent platform</p>
                                            <a class=" m-0"
                                                href="{{ route('reuseablepage', ['service' => 'ai-lifebot']) }}">Explore
                                                Al LifeBOT</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 santeck-menu-column ps-5" id="santeck-menu-column1">
                                    <h5 class="santeck-menu-title">Platform Capabilities</h5>
                                    <ul class="santeck-menu-list">
                                        <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'ai-agent-copilot-talk-series']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Platform/PlatfprmCapebilite/Group 730.png') }}"></span><span
                                                    class="pb-2">Al Agent Co-Pilot</span></a></li>
                                        {{-- <li><a href="#"><span class="imgdiv1"><img src="{{asset('assets/img/Platform/PlatfprmCapebilite/Group 732.png')}}"></span><span class="pb-2">Al Search</span></a></li> --}}
                                        <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'vernacular-ai']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Platform/PlatfprmCapebilite/Group 734.png') }}"></span><span
                                                    class="pb-2">Vernacular</img></a></li>
                                        <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'multimodal-ai']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Platform/PlatfprmCapebilite/Group 736.png') }}"></span><span
                                                    class="pb-2"> Multimodal</span></a></li>
                                        <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'ai-multi-agents']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Platform/PlatfprmCapebilite/Group 738.png') }}"></span><span
                                                    class="pb-2">Al Multi Agents</span></a></li>
                                        <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'analytics-and-reporting']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Platform/PlatfprmCapebilite/Group 740.png') }}"></span><span
                                                    class="pb-2">Analytics and Reporting</span></a></li>
                                        <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'enterprise-integrations']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Platform/PlatfprmCapebilite/Group 742.png') }}"></span><span
                                                    class="pb-2">Enterprise Integrations</span></a></li>
                                        <li><a href="{{ route('smartAiWorkforce', ['serviceSlug' => 'live-chat-agent']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Platform/PlatfprmCapebilite/Group 744.png') }}"></span><span
                                                    class="pb-2">Live Chat Agent</span></a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 santeck-menu-column " id="santeck-menu-column2">
                                    <h5 class="santeck-menu-title">Infuse into Agentic AI </h5>
                                    <div class="card1 shadow-sm p-2 border rounded">
                                        <img src="/assets/img/Platform/Infusun into ai agent/Mask Group 59.png"
                                            alt="AI Agent" class="rounded">
                                        <div class="card-body">
                                            <h6 class="card-title">Introducing Agentic AI</h6>
                                            <a href="#" class="watch-now">Watch Now</a>
                                        </div>
                                    </div>
                                    <div class="card1 shadow-sm p-2 border rounded">
                                        <img src="/assets/img/Platform/Infusun into ai agent/Mask Group 60.png"
                                            alt="AI Agent" class="rounded">
                                        <div class="card-body">
                                            <h6 class="card-title">Meet our Agent Co-Pilot Vidhira</h6>
                                            <a href="#" class="watch-now">Watch Now</a>
                                        </div>
                                    </div>
                                    <div class="card1 shadow-sm p-2 border rounded">
                                        <img src="/assets/img/Platform/Infusun into ai agent/Mask Group 61.png"
                                            alt="AI Agent" class="rounded">
                                        <div class="card-body">
                                            <h6 class="card-title">AI LifeBOT Talk Series</h6>
                                            <a href="#" class="watch-now">Watch Now</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown santeck-mega-menu"><a class="nav-link" href="#"
                        id="aiagents" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false"
                        aria-expanded="false">Resources <i class="fas fa-angle-down toggle-dropdown"></i></a>
                    <div class=" santeck-2 dropdown-menu" aria-labelledby="solutionsDropdown">
                        <div class="container ">
                            <div class="row pt-4">
                                <div class="col-lg-4 col-md-4 santeck-menu-column px-4">
                                    <h5 class="santeck-menu-title" style="color:#BD9774 !important">Resources</h5>
                                    <div class="santeck-menu-image">
                                        <img src="/assets/img/Resources/Untitled design (5).png" alt="Platform Image"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 santeck-menu-column ps-5">
                                    <h5 class="santeck-menu-title" style="color:#BD9774 !important">Explore</h5>
                                    <ul class="santeck-menu-list">
                                        <li><a href="{{ route('reuseablepage', ['service' => 'customers-success-stories']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Resources/Group 747.png') }}"></span><span
                                                    class="pb-2">Customer Success Stories</span></a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'technical-documentation']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Resources/Group 749.png') }}"></span><span
                                                    class="pb-2">Technical Documentation</span></a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'case-studies']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Resources/Group 751.png') }}"></span><span
                                                    class="pb-2">Case Studies & white papers</span></a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'blogs']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Resources/Group 753.png') }}"></span><span
                                                    class="pb-2">Blogs</span></a></li>
                                        {{-- <li><a href="#"><span class="imgdiv1"><img src="{{asset('assets/img/Resources/Group 755.png')}}"></span><span class="pb-2">Al LifeBOT Academy</span></a></li> --}}
                                        <li><a href="#"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Resources/Group 755.png') }}"></span><span
                                                    class="pb-2">Industry Showcase</span></a></li>
                                                    <li><a href="{{ route('reuseablepage', ['service' => 'academy']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Solution/Industry/Group 716.png') }}"></span><span
                                                                class="pb-2">Al LifeBOT Academy</span></a></li>

                                    </ul>
                                </div>
                          <!--  <div class="col-lg-3 col-md-4 santeck-menu-column" id="santeck-menu-column3">
                                    <h5 class="santeck-menu-title" style="color:#BD9774 !important">Learn</h5>
                                    <ul class="santeck-menu-list">
                                        <li><a href="#"><span class="imgdiv1"><img
                                            src="{{ asset('assets/img/Solution/Industry/Group 716.png') }}"></span><span
                                                    class="pb-2">Al LifeBOT Academy</span></a></li>
                                        <li><a href="#"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Nav-icons/Resources/Group 818.png') }}"></span><span
                                                    class="pb-2">Voice first certification AI Chat Bots</span></a>
                                        </li>
                                        <li><a href="#"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Nav-icons/Resources/Group 816.png') }}"></span><span
                                                    class="pb-2">Execution certification courses</span></a></li>
                                        <li><a href="#"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Nav-icons/Resources/Group 814.png') }}"></span><span
                                                    class="pb-2">Agenetic AI</span></a></li>
                                        <li><a href="#"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Nav-icons/Resources/Group 812.png') }}"></span><span
                                                    class="pb-2">Conversational AI</span></a></li>
                                        {{-- <li><a href="#"><span class="imgdiv1"><img src="{{asset('assets/img/Resources/Group 757.png')}}"></span><span class="pb-2">Industry Showcase</span></a></li> --}}

                                    </ul>
                                </div> -->

                                <div class="col-lg-4 col-md-4 santeck-menu-column px-4">
                                    <h5 class="santeck-menu-title">Get the Latest</h5>
                                    <div class="card1 shadow-sm p-2 border rounded">
                                        <div style="position: relative; overflow: hidden; border-radius: 5px;">
                                            <img src="/assets/img/Platform/Infusun into ai agent/Mask Group 66.png"
                                                alt="AI Agent" style="width: 100%; height: auto; object-fit: cover;">
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title">E-Book: A Blueprint for AI Customer Service Agents
                                            </h6>
                                            <a href="#" class="watch-now">Download now</a>
                                        </div>
                                    </div>
                                    <div class="card1 shadow-sm p-2 border rounded">
                                        <div style="position: relative; overflow: hidden; border-radius: 5px;">
                                            <img src="/assets/img/Platform/Infusun into ai agent/Mask Group 59.png"
                                                alt="AI Agent" style="width: 100%; height: auto; object-fit: cover;">
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title">Marketing Gets Smart: Your Gen AI Agent Playbook</h6>
                                            <a href="#" class="watch-now">Download now</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown santeck-mega-menu"><a class="nav-link " href="#"
                        id="aiagents" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false"
                        aria-expanded="false">Company <i class="fas fa-angle-down toggle-dropdown"></i></a>
                    <div class=" santeck-2 dropdown-menu" aria-labelledby="solutionsDropdown">
                        <div class="container ">
                            <div class="row pt-4">
                                 <div class="col-lg-6 col-md-4 santeck-menu-column ps-5">
                                    <h5 class="santeck-menu-title" style="color:#BD9774 !important">Who we are</h5>
                                    <ul class="santeck-menu-list">
                                        <li><a href="{{ route('reuseablepage', ['service' => 'about']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Nav-icons/Company/Group 764.png') }}"></span><span
                                                    class="pb-2">About us</span></a></li>
                                        <li><a href="{{ route('reuseablepage', ['service' => 'partner-program']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Nav-icons/Company/Group 762.png') }}"></span><span
                                                    class="pb-2">Become our Partner</span></a></li>
                                        <li><a href="{{ route('leadership') }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Nav-icons/Company/Group 766.png') }}"></span><span
                                                    class="pb-2">Leadership</span></a></li>
                                        <li><a href="#"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Nav-icons/Company/Group 768.png') }}"></span><span
                                                    class="pb-2">News & Updates</span></a></li>
                                        {{-- <li><a href="#"><span class="imgdiv1"><img src="{{asset('assets/img/Resources/Group 755.png')}}"></span><span class="pb-2">Al LifeBOT Academy</span></a></li> --}}
                                        <li><a href="{{ route('reuseablepage', ['service' => 'careers']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Nav-icons/Company/Group 770.png') }}"></span><span
                                                    class="pb-2">Careers</span></a></li>

                                        <li><a href="{{ route('reuseablepage', ['service' => 'contact-us']) }}"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Nav-icons/Company/Group 772.png') }}"></span><span
                                                    class="pb-2">Contact Us</span></a></li>

                                    </ul>
                                </div>
                                {{-- <div class="col-lg-4 col-md-4 santeck-menu-column" >
                                    <h5 class="santeck-menu-title" style="color:#BD9774 !important">Accreditations</h5>
                                    <ul class="santeck-menu-list">
                                        <li><a href="#"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Resources/Group 747.png') }}"></span><span
                                                    class="pb-2">Startup India</span></a></li>
                                        <li><a href="#"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Resources/Group 749.png') }}"></span><span
                                                    class="pb-2">MSME Udyam Registered</span></a>
                                        </li>
                                        <li><a href="#"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Resources/Group 751.png') }}"></span><span
                                                    class="pb-2">ISO-9001 Certified </span></a></li>
                                        <li><a href="#"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Resources/Group 753.png') }}"></span><span
                                                    class="pb-2">ISO-27001 Certified</span></a></li>
                                        <li><a href="#"><span class="imgdiv1"><img
                                                        src="{{ asset('assets/img/Resources/Group 755.png') }}"></span><span
                                                    class="pb-2">AI lifeBot is officially CMMI-Level 3 certified company</span></a></li>
                                        <li><a href="#"><span class="imgdiv1"><img
                                            src="{{ asset('assets/img/Resources/Group 755.png') }}"></span><span
                                        class="pb-2 text-wrap">We are a SOC 2 Compliant company
                                        Security. Trust. Transparency
                                        </span></a></li>
                                    </ul>
                                </div> --}}

                                {{-- Test
                                <div class="col-lg-4 col-md-4 santeck-menu-column ps-5" id="santeck-menu-column3">
                                    <h5 class="santeck-menu-title" style="color:#BD9774 !important">Accreditations</h5>
                                    <ul class="santeck-menu-list">
                                        <li><a href="#"><span class="pb-2">Startup India</span></a></li>
                                        <li><a href="#"><span class="pb-2">MSME Udyam Registered</span></a></li>
                                        <li><a href="#"><span class="pb-2">ISO-9001 Certified</span></a></li>
                                        <li><a href="#"><span class="pb-2">ISO-27001 Certified</span></a></li>
                                        <li><a href="#"><span class="pb-2">AI lifeBot is officially CMMI-Level 3 certified company</span></a></li>
                                        <li><a href="#"><span class="pb-2 text-wrap">We are a SOC 2 Compliant company<br>Security. Trust. Transparency</span></a></li>
                                    </ul>
                                </div>--}}
                                {{-- End Test --}}

                                <div class="col-lg-6 col-md-4 santeck-menu-column px-4">
                                    <h5 class="santeck-menu-title">In the Loop</h5>
                                    <div class="card1 shadow-sm border rounded" style="max-width: 100%;height:130px; background: #524DE9; display: flex; align-items: center; padding: 10px;">
                                        <div style="flex: 1; position: relative; overflow: hidden; border-radius: 5px; max-width: 20%;">
                                            <img src="/assets/img/Platform/Infusun into ai agent/Mask Group 67.png"
                                                alt="AI Agent" style="width: 80px; height: 80px; object-fit: cover; display: block;">
                                        </div>
                                        <div class="card-body" style="flex: 2; padding-left: 15px;">
                                            <h6 class="card-title" style="margin-bottom: 5px; color: white;">News</h6>
                                            <p class="card-title" style="font-size: 0.9rem; margin: 0; color: white;">AI lifeBot is awarded as a Best Emerging Automation specialist of the year Company in year 2024</p>
                                        </div>
                                    </div>
                                    <div class="card1 shadow-sm border rounded" style="max-width: 100%;height:130px; background: #524DE9; display: flex; align-items: center; padding: 10px;">
                                        <div style="flex: 1; position: relative; overflow: hidden; border-radius: 5px; max-width: 20%;">
                                            <img src="/assets/img/Platform/Infusun into ai agent/group-007.png"
                                                alt="AI Agent" style="width: 80px; height: 80px; object-fit: cover; display: block;">
                                        </div>
                                        <div class="card-body" style="flex: 2; padding-left: 15px;">
                                            <h6 class="card-title" style="margin-bottom: 5px; color: white;">Awards</h6>
                                            <p class="card-title" style="font-size: 0.9rem; margin: 0; color: white;">AI lifeBot is awarded as a Best Emerging Automation specialist of the year Company in year 2024</p>
                                        </div>
                                    </div>
                                </div>
                            

                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown santeck-mega-menu"><a class="nav-link " href="#"
                        id="aiagents" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false"
                        aria-expanded="false">AI Agents <i class="fas fa-angle-down toggle-dropdown"></i></a>
                        <div class=" santeck-2 dropdown-menu" aria-labelledby="solutionsDropdown">
                            <div class="container ">
                                <div class="row pt-4">
                                    <div class="col-lg-4 col-md-4 santeck-menu-column px-3">
                                        <h5 class="santeck-menu-title" style="color:#BD9774 !important">Agentic AI, Tailored for Your Enterprise</h5>
                                        <div class="santeck-menu-image">
                                            <img src="/assets/img/Ai Agent/Image 45@2x.png" alt="Platform Image"
                                                class="img-fluid">
                                            <div class="res">
                                                <p class="p-0 m-0 mt-3">Discover how AI LifeBOT empowers enterprise teams to enhance performance across key functions.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-md-4 santeck-menu-column ps-5" id="santeck-menu-column1">
                                        <h5 class="santeck-menu-title">By Function</h5>
                                        <ul class="santeck-menu-list">
                                            <li><a href="{{ route('reuseablepage', ['service' => 'it-support-agentic-ai']) }}"><span class="imgdiv1"><img
                                                            src="{{ asset('assets/img/Nav-icons/aiAgent/Group 821.png') }}"></span><span
                                                        class="pb-2 text-wrap"><small >IT</small><br><span style="color: #6F6F6F; font-weight: normal;">Streamline operations and elevate service delivery with intelligent automation</span></span></a></li>
                                            <li><a href="{{ route('reuseablepage', ['service' => 'sales-support-ai']) }}"><span class="imgdiv1"><img
                                                            src="{{ asset('assets/img/Nav-icons/aiAgent/Group 822.png') }}"></span><span
                                                        class="pb-2 text-wrap"><small >Sales</small><br><span style="color: #6F6F6F; font-weight: normal;">Enable your sales team to focus on closing deals—AI handles the rest</span></span></a></li>
                                            <li><a href="{{ route('reuseablepage', ['service' => 'hr-support-agentic-ai']) }}"><span class="imgdiv1"><img
                                                            src="{{ asset('assets/img/Nav-icons/aiAgent/Group 825.png') }}"></span><span
                                                        class="pb-2 text-wrap"><small >HR</small><br><span style="color: #6F6F6F; font-weight: normal;">Automatically handle employee requests and streamline HR processes</span></span></a></li>
                                            <li><a href="{{ route('reuseablepage', ['service' => 'procurement-support-ai']) }}"><span class="imgdiv1"><img
                                                            src="{{ asset('assets/img/Nav-icons/aiAgent/Group 827.png') }}"></span><span
                                                        class="pb-2 text-wrap"><small >Procurement</small><br><span style="color: #6F6F6F; font-weight: normal;">Digitize and optimize your source-to-pay workflow with precision</span></span></a></li>
                                            <li><a href="{{ route('reuseablepage', ['service' => 'finance-ai']) }}"><span class="imgdiv1"><img
                                                            src="{{ asset('assets/img/Nav-icons/aiAgent/Group 829.png') }}"></span><span
                                                        class="pb-2 text-wrap"><small >Finance</small><br><span style="color: #6F6F6F; font-weight: normal;">Simplify and accelerate financial processes for better agility</span></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 santeck-menu-column ps-5" id="santeck-menu-column2">
                                        <h5 class="santeck-menu-title">By Use Case</h5>
                                        <ul class="santeck-menu-list">
                                            <li><a href="{{ route('reuseablepage', ['service' => 'agentic-ai-use-cases']) }}"><span class="pb-2 text-wrap"><small >Agentic AI Use Case Library</small><br><span style="color: #6F6F6F; font-weight: normal;">Leverage 1,000+ prebuilt templates to scale your AI adoption faster</span></span></a></li>
                                            <li><a href="{{ route('reuseablepage', ['service' => 'helpdesk-insights']) }}"><span class="pb-2 text-wrap"><small >Helpdesk Intelligence</small><br><span style="color: #6F6F6F; font-weight: normal;">Turn every ticket into a learning opportunity</span></span></a></li>
                                            <li><a href="{{ route('reuseablepage', ['service' => 'employee-onboarding-ai']) }}"><span class="pb-2 text-wrap"><small >AI-Driven Employee Onboarding</small><br> <span style="color: #6F6F6F; font-weight: normal;">Deliver a personalized, automated onboarding experience</span></span></a></li>
                                            <li><a href="{{ route('reuseablepage', ['service' => 'it-support-automation']) }}"><span class="pb-2 text-wrap"><small >IT Support Automation</small><br><span style="color: #6F6F6F; font-weight: normal;">Automatically resolve repetitive IT issues and tickets</span></span></a></li>
                                            <li><a href="{{ route('reuseablepage', ['service' => 'enterprise-knowledge-management-ai']) }}"><span class="pb-2 text-wrap"><small >Enterprise Knowledge Search</small><br><span style="color: #6F6F6F; font-weight: normal;">Make key information instantly discoverable across the organization</span></span></a></li>
                                            <li><a href="{{ route('reuseablepage', ['service' => 'it-knowledge-management-ai']) }}"><span class="pb-2 text-wrap"><small >Dynamic IT Knowledge Management</small><br><span style="color: #6F6F6F; font-weight: normal;">Create a self-updating, AI-powered knowledge ecosystem</span></span></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Gallery</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

        </nav>


        <a class="btn-getstarted" href="" data-bs-toggle="modal" data-bs-target="#serviceModal">
            Start Enterprise Trial &nbsp;
            <svg xmlns="http://www.w3.org/2000/svg" width="10.156" height="10.156" viewBox="0 0 15.156 15.156" class="arrow-icon">
            <path id="Path_22930" data-name="Path 22930"
                d="M13.949,0V11.209H12.487V2.5L1.034,13.949,0,12.915,11.453,1.462H2.739V0Z"
                transform="translate(0.707 0.5)" fill="#ab713b" stroke="#c07f42" stroke-width="1" />
            </svg>
        </a>

        <style>
            .btn-getstarted {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            transition: transform 0.3s ease;
            }

            .btn-getstarted:hover .arrow-icon {
            transform: translateX(5px);
            transition: transform 0.3s ease;
            }
        </style>

    </div>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
