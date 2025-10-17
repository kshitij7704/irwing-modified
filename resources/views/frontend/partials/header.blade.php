<header class="header government-header">
    <style>
        /* Government Header Styles - Exact Match to Reference */
        .government-header {
            font-family: 'Arial', 'Helvetica', sans-serif;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        /* Top Utility Bar */
        .header-top {
            background: #f8f9fa;
            padding: 6px 0;
            border-bottom: 1px solid #ddd;
            font-size: 12px;
        }
        
        .header-top .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .header-top .utility-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .header-top .utility-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .header-top a,
        .header-top button {
            color: #333;
            text-decoration: none;
            padding: 3px 8px;
            border-radius: 3px;
            transition: all 0.3s ease;
            font-weight: 500;
            border: none;
            background: none;
            cursor: pointer;
            font-size: 12px;
        }
        
        .header-top a:hover,
        .header-top button:hover {
            background: #007bff;
            color: white;
        }
        
        /* Main Government Header */
        .header-main {
            background: white;
            padding: 12px 0;
            border-bottom: 2px solid #ff8c00;
        }
        
        .header-main .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .govt-left {
            display: flex;
            align-items: center;
            flex: 1;
        }
        
        .govt-emblem {
            width: 65px;
            height: 65px;
            margin-right: 15px;
        }
        
        .govt-title {
            flex: 1;
        }
        
        .govt-title h1 {
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            color: #333;
            line-height: 1.2;
        }
        
        .govt-title h2 {
            font-size: 18px;
            font-weight: bold;
            margin: 2px 0;
            color: #333;
            line-height: 1.2;
        }
        
        .govt-title h3 {
            font-size: 12px;
            font-weight: normal;
            margin: 2px 0 0 0;
            color: #666;
            line-height: 1.2;
        }
        
        .header-logos {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .header-logos img {
            height: 55px;
            max-width: 100px;
            object-fit: contain;
        }
        
        /* Navigation Bar - Orange Theme Matching Reference */
        .header-nav {
            background: #ff8c00;
            position: relative;
        }
        
        .nav-menu {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
            flex-wrap: wrap;
        }
        
        .nav-item {
            position: relative;
        }
        
        .nav-link {
            display: flex;
            align-items: center;
            padding: 12px 16px;
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.3s ease;
            white-space: nowrap;
            border-right: 1px solid rgba(255,255,255,0.2);
        }
        
        .nav-item:first-child .nav-link {
            border-left: 1px solid rgba(255,255,255,0.2);
        }
        
        .nav-link i {
            margin-right: 4px;
            font-size: 12px;
        }
        
        .nav-link:hover,
        .nav-item.active .nav-link {
            background: rgba(255,255,255,0.15);
            color: white;
        }
        
        .nav-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            min-width: 250px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .nav-item:hover .nav-dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .nav-dropdown a {
            display: block;
            padding: 10px 16px;
            color: #333;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            border-bottom: 1px solid #f0f0f0;
            transition: all 0.3s ease;
        }
        
        .nav-dropdown a:last-child {
            border-bottom: none;
        }
        
        .nav-dropdown a:hover {
            background: #f8f9fa;
            color: #ff8c00;
            padding-left: 24px;
        }
        
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 18px;
            padding: 8px;
            cursor: pointer;
        }
        
        /* Responsive Design */
        @media (max-width: 1200px) {
            .nav-link {
                padding: 12px 12px;
                font-size: 12px;
            }
        }
        
        @media (max-width: 991px) {
            .govt-title h1 {
                font-size: 12px;
            }
            
            .govt-title h2 {
                font-size: 16px;
            }
            
            .govt-title h3 {
                font-size: 11px;
            }
            
            .header-logos img {
                height: 45px;
            }
            
            .mobile-menu-toggle {
                display: block;
            }
            
            .nav-menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: #ff8c00;
                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            }
            
            .nav-menu.active {
                display: flex;
            }
            
            .nav-link {
                padding: 12px 20px;
                border-right: none;
                border-bottom: 1px solid rgba(255,255,255,0.1);
                justify-content: flex-start;
            }
            
            .nav-item:first-child .nav-link {
                border-left: none;
            }
            
            .nav-dropdown {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                background: rgba(255,255,255,0.1);
                margin: 0;
            }
            
            .nav-dropdown a {
                color: white;
                border-bottom: 1px solid rgba(255,255,255,0.1);
                padding-left: 40px;
            }
            
            .nav-dropdown a:hover {
                background: rgba(255,255,255,0.1);
                color: white;
                padding-left: 48px;
            }
        }
        
        @media (max-width: 576px) {
            .header-main {
                padding: 10px 0;
            }
            
            .govt-emblem {
                width: 50px;
                height: 50px;
                margin-right: 10px;
            }
            
            .govt-title h1 {
                font-size: 10px;
            }
            
            .govt-title h2 {
                font-size: 14px;
            }
            
            .govt-title h3 {
                font-size: 9px;
            }
            
            .header-logos {
                gap: 8px;
            }
            
            .header-logos img {
                height: 35px;
            }
            
            .header-top .utility-left,
            .header-top .utility-right {
                gap: 8px;
            }
            
            .header-top a,
            .header-top button {
                padding: 2px 4px;
                font-size: 10px;
            }
        }
    </style>
    
    <!-- Top Utility Bar -->
    <div class="header-top">
        <div class="container">
            <div class="utility-left">
                <a href="#"><i class="bi bi-search"></i></a>
                <a href="#"><i class="bi bi-telephone"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
            </div>
            <div class="utility-right">
                <a href="#">Language</a>
                @guest
                    <a href="{{ route('login') }}">Login</a>
                @else
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>

    <!-- Main Government Header -->
    <div class="header-main">
        <div class="container">
            <div class="govt-left">
                <a href="{{url('/')}}">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Emblem_of_India.svg"
                        alt="Government of India Emblem" class="govt-emblem">
                </a>
                <div class="govt-title">
                    <h1>भारत सरकार GOVERNMENT OF INDIA</h1>
                    <h2>IR Wing Portal</h2>
                    <h3>Department of Telecommunications, Ministry of Communications</h3>
                </div>
            </div>
            <div class="header-logos d-none d-md-flex">
                <img src="{{asset('images/azadi.png')}}" 
                     alt="Azadi Ka Amrit Mahotsav">
                <img src="{{asset('images/swach.png')}}" 
                     alt="Swachh Bharat Mission">
                <img src="{{asset('images/WhatsApp Image 2025-09-13 at 17.48.33.jpeg')}}" 
                     alt="Department Logo">
            </div>
        </div>
    </div>

    <!-- Navigation Menu -->
    <div class="header-nav">
        <div class="container">
            <nav class="main-nav">
                <button class="mobile-menu-toggle d-lg-none" onclick="toggleMobileMenu()">
                    <i class="bi bi-list"></i>
                </button>
                <ul class="nav-menu" id="navMenu">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ url('/') }}" class="nav-link">
                            <i class="bi bi-house-door-fill"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            About Us <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="nav-dropdown">
                            <a href="{{ url('message') }}">Message from Hon'ble MoC</a>
                            <a href="{{ url('role-ir') }}">Role of IR Wing</a>
                            <a href="{{url('structure')}}">Organization Structure</a>
                            <a href="{{url('contact-us')}}">Contact Information</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Information <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="nav-dropdown">
                            <a href="{{url('promotional-videos')}}">Promotional Videos</a>
                            <a href="{{url('brouches')}}">Brochures</a>
                            <a href="{{url('pressrelease')}}">Press Releases</a>
                            <a href="{{url('social-media')}}">Social Media</a>
                            <a href="{{url('orms')}}">IR Wing OMs</a>
                            <a href="{{url('achivements')}}">Achievements</a>
                            <a href="{{url('internation-forums')}}">International Forums</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Telecom Policies <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="nav-dropdown">
                            <a href="#">National Telecom Policy</a>
                            <a href="#">Broadband Policy</a>
                            <a href="#">Spectrum Policy</a>
                            <a href="#">Digital India</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Telecom & Spectrum Licensing <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="nav-dropdown">
                            <a href="#">Licensing Framework</a>
                            <a href="#">Spectrum Allocation</a>
                            <a href="#">License Applications</a>
                            <a href="#">Compliance</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Investment Promotion <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="nav-dropdown">
                            <a href="#">FDI Policy</a>
                            <a href="#">Investment Opportunities</a>
                            <a href="#">Ease of Doing Business</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Telecom Reforms <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="nav-dropdown">
                            <a href="#">Reform Initiatives</a>
                            <a href="#">Policy Updates</a>
                            <a href="#">Consultation Papers</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    
    <script>
        function toggleMobileMenu() {
            const navMenu = document.getElementById('navMenu');
            navMenu.classList.toggle('active');
        }
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const navMenu = document.getElementById('navMenu');
            const toggleButton = document.querySelector('.mobile-menu-toggle');
            
            if (!navMenu.contains(event.target) && !toggleButton.contains(event.target)) {
                navMenu.classList.remove('active');
            }
        });
    </script>
</header>