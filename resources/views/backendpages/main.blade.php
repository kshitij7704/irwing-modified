@extends('frontend.partials.app')
@section('content')
<div class="main-content">

<style>
    /* Government Website Design - Matching Reference */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Arial', 'Helvetica', sans-serif;
        line-height: 1.6;
        color: #333;
        background: #f5f5f5;
    }

    /* Fix for content behind navbar */
    .main-content {
        padding-top: 0;
        margin-top: 0;
    }

    /* Blue Banner Section - Split Layout Design */
    .blue-banner-section {
        background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
        color: white;
        padding: 0;
        position: relative;
        overflow: hidden;
        margin-top: 0;
        padding-top: 0;
        z-index: 1;
        min-height: 300px; /* Reduced height */
    }

    .blue-banner-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:white;
        z-index: 1;
    }

    .banner-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        min-height: 300px; /* Reduced height */
        position: relative;
        z-index: 3;
        gap: 0;
        margin-bottom: 1px;
        background: white;
    }

    /* Left side - Image */
    .banner-image-side {
        height: 300px;
        background: #4a90e2;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .banner-image-side img {
        width: 70%;
        height: 90%;
        object-fit:fill;
        object-position: center;
    }

    /* Right side - Content */
    .banner-content-side {
        padding: 30px 40px;
        height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: #4a90e2;
    }

    .banner-date {
        font-size: 1.4rem;
        color: #e1f5fe;
        margin-bottom: 12px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .banner-date i {
        color: #81d4fa;
    }

    .banner-title-new {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 15px;
        line-height: 1.3;
        color: white !important;
    }

    .banner-navigation {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 15px;
    }

    .nav-arrows {
        display: flex;
        gap: 8px;
    }

    .nav-arrow {
        width: 35px;
        height: 35px;
        background: rgba(255,255,255,0.15);
        border: 1px solid rgba(255,255,255,0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }

    .nav-arrow:hover {
        background: rgba(255,255,255,0.25);
        transform: scale(1.1);
    }

    .view-all-link {
        color: #e1f5fe;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.85rem;
        transition: color 0.3s ease;
    }

    .view-all-link:hover {
        color: white;
    }

    /* Thumbnail gallery */
    .thumbnail-gallery {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }

    .thumbnail {
        width: 50px;
        height: 38px;
        border-radius: 4px;
        overflow: hidden;
        border: 2px solid transparent;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .thumbnail.active {
        border-color: #81d4fa;
    }

    .thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Responsive Design for Banner */
    @media (max-width: 768px) {
        .banner-container {
            grid-template-columns: 1fr;
            min-height: auto;
        }

        .banner-image-side {
            height: 200px;
        }

        .banner-content-side {
            height: auto;
            padding: 25px 20px;
        }

        .banner-title-new {
            font-size: 1.2rem;
        }

        .thumbnail-gallery {
            justify-content: center;
        }
    }

    .banner-logo {
        width: 180px;
        height: 180px;
        background: linear-gradient(135deg, rgba(255,255,255,0.25) 0%, rgba(255,255,255,0.15) 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 50px;
        flex-shrink: 0;
        box-shadow:
            0 20px 40px rgba(0,0,0,0.1),
            inset 0 1px 0 rgba(255,255,255,0.3);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255,255,255,0.2);
        position: relative;
        overflow: hidden;
    }

    .banner-logo::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
        animation: shimmer 3s infinite;
    }

    @keyframes shimmer {
        0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
        100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
    }

    .banner-logo img {
        width: 100px;
        height: 100px;
        filter: brightness(0) invert(1);
        position: relative;
        z-index: 2;
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .banner-content {
        flex: 1;
        padding-right: 40px;
    }

    .banner-title {
        font-size: 3.8rem;
        font-weight: 900;
        margin-bottom: 20px;
        text-shadow:
            2px 2px 4px rgba(0,0,0,0.3),
            0 0 20px rgba(255,255,255,0.2);
        line-height: 1.1;
        background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        position: relative;
    }

    .banner-subtitle {
        font-size: 1.9rem;
        margin-bottom: 25px;
        opacity: 0.95;
        font-weight: 500;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        line-height: 1.3;
    }

    .banner-description {
        font-size: 1.3rem;
        opacity: 0.9;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .banner-features {
        display: flex;
        gap: 30px;
        margin-bottom: 25px;
    }

    .banner-feature {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1.1rem;
        font-weight: 600;
    }

    .banner-feature i {
        font-size: 1.3rem;
        color: #fbbf24;
    }

    .banner-character {
        width: 200px;
        height: auto;
        flex-shrink: 0;
    }

    /* Cool Access Bar */
    .access-bar {
        background: linear-gradient(135deg, #4a90e2 0%, #48c9b0 100%);
        color: white;
        padding: 15px 0;
        font-size: 1.3rem;
        font-weight: 600;
    }

    .access-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .access-text {
        flex: 1;
    }

    .access-button {
        background: rgba(255,255,255,0.2);
        color: white;
        border: 2px solid rgba(255,255,255,0.3);
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 700;
        font-size: 1.1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .access-button:hover {
        background: white;
        color: #4a90e2;
        border-color: white;
    }

    /* Main Content Layout */
    .main-layout {
        background: white;
        padding: 0;
        margin: 0;
    }

    .content-wrapper {
        display: flex;
        min-height: 600px;
    }

    /* Left Sidebar - Ministers */
    .ministers-sidebar {
        width: 300px;
        background: white;
        padding: 30px 20px;
        /* border-right: 1px solid #dee2e6; */
        margin-top:0px;
        border-radius: 8px;
    }

    .sidebar-title {
        background: #4a90e2;
        color: white;
        padding: 20px 20px;
        margin: -30px -20px 25px -20px;
        font-size: 1.4rem;
        font-weight: 700;
        text-align: center;
        border-radius: 8px;
    }

    .card-title {
        background: #4a90e2;
        color: white;
        padding: 15px 15px;
        margin: -15px -15px 15px -15px;
        font-size: 1.2rem;
        font-weight: 600;
        text-align: center;
        border-radius: 8px 8px 0 0;
    }

    .minister-card {
        background: white;
        border-radius: 15px;
        padding: 15px;
        margin-bottom: 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        text-align: center;
        transition: all 0.3s ease;
    }

    .minister-card:hover {
        transform: translateY(-5px);
        /* box-shadow: 0 8px 25px rgba(0,0,0,0.15); */
    }

    .minister-photo {
        width: 100px;
        height: 100px;
        border-radius: 10px;
        overflow: hidden;
        margin: 0 auto 15px;
        border: 3px solid #4a90e2;
    }

    .minister-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .minister-name {
        font-size: 1.3rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 5px;
    }

    .minister-title {
        font-size: 1.25rem;
        color: #6c757d;
        margin-bottom: 15px;
        line-height: 1.3;
    }

    .minister-message {
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid #e9ecef;
    }

    .minister-message p {
        font-size: 1.11rem;
        color: #495057;
        line-height: 1.5;
        margin: 0;
        font-style: italic;
        text-align: left;
    }

    .minister-card:hover .minister-message p {
        color: #2c3e50;
    }

    .minister-social {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .social-icon {
        width: 35px;
        height: 35px;
        background: #4a90e2;
        color: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        background: #357abd;
        transform: scale(1.1);
    }

    /* Right Content Area */
    .content-area {
        flex: 1;
        padding: 30px;
    }

    /* Tabbed Navigation */
    .content-tabs {
        display: flex;
        background: #4a90e2;
        border-radius: 10px 10px 0 0;
        overflow: hidden;
        margin-bottom: 0;
    }

    .tab-button {
        flex: 1;
        padding: 18px 20px;
        background: #4a90e2;
        color: white;
        border: none;
        font-size: 1.7rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        border-right: 1px solid rgba(255,255,255,0.2);
    }

    .tab-button:last-child {
        border-right: none;
    }

    .tab-button.active,
    .tab-button:hover {
        background: #4a90e2;
    }

    /* Tab Content */
    .tab-content {
        background: white;
        border: 1px solid #dee2e6;
        border-top: none;
        border-radius: 0 0 10px 10px;
        padding-left: 5px;
        min-height: 450px;
    }

    .tab-pane {
        display: none;
    }

    .tab-pane.active {
        display: block;
    }

    .update-item {
        padding: 20px 0;
        border-bottom: 1px solid #eee;
        transition: all 0.3s ease;
    }

    .update-item:last-child {
        border-bottom: none;
    }

    .update-item:hover {
        background: #f8f9fa;
        margin: 0 -30px;
        padding-left: 40px;
        padding-right: 30px;
        border-radius: 8px;
    }

    .update-date {
        color: #4a90e2;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 8px;
        line-height: 1.4;
    }

    .update-text {
        color: #2c3e50;
        font-size: 1.15rem;
        line-height: 1.6;
    }

    .read-more-btn {
        background: #4a90e2;
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 600;
        font-size: 1.1rem;
        margin-top: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .read-more-btn:hover {
        background: #357abd;
        transform: translateY(-2px);
    }

    /* Auto-scroll container for updates */
    .updates-scroll-container {
        height: 600px;
        overflow: hidden;
        position: relative;
        border-radius: 10px;
        background: white;
        /* border: 1px solid #dee2e6; */
        padding: 20px;
    }

    .updates-scroll-content {
        animation: continuousScroll 90s linear infinite;
        position: relative;
    }

    .updates-scroll-content:hover {
        animation-play-state: paused;
    }

    @keyframes continuousScroll {
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-100%);
        }
    }

    .update-item {
        padding: 15px 0;
        border-bottom: 1px solid #eee;
        transition: background 0.3s ease;
        min-height: 100px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* Service Tiles Grid */
    .services-section {
        background: white;
        padding: 50px 0;
    }

    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 15px;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 40px;
    }

    .service-tile {
        background: white;
        border-radius: 15px;
        padding: 25px 20px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        height: 160px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        border-left: 5px solid;
        position: relative;
        overflow: hidden;
    }

    .service-tile::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0.1;
        transition: opacity 0.3s ease;
    }

    .service-tile:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    }

    .service-tile:hover::before {
        opacity: 0.2;
    }

    /* Color variations for tiles */
    .service-tile.blue {
        border-left-color: #3b82f6;
        background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
    }
    .service-tile.green {
        border-left-color: #10b981;
        background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
    }
    .service-tile.purple {
        border-left-color: #8b5cf6;
        background: linear-gradient(135deg, #ede9fe 0%, #ddd6fe 100%);
    }
    .service-tile.cool-blue {
        border-left-color: #4a90e2;
        background: linear-gradient(135deg, #e8f4fd 0%, #d1e9fb 100%);
    }
    .service-tile.red {
        border-left-color: #ef4444;
        background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
    }
    .service-tile.teal {
        border-left-color: #14b8a6;
        background: linear-gradient(135deg, #ccfbf1 0%, #99f6e4 100%);
    }
    .service-tile.indigo {
        border-left-color: #6366f1;
        background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
    }
    .service-tile.pink {
        border-left-color: #ec4899;
        background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 100%);
    }

    .service-tile-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 8px;
    }

    .service-tile-number {
        font-size: 1.8rem;
        font-weight: 800;
        color: #2c3e50;
        margin-bottom: 5px;
    }

    .service-tile-subtitle {
        font-size: 0.9rem;
        color: #6c757d;
        font-weight: 500;
    }

    /* Social Media Cards */
    .social-media-section {
        background: #f8f9fa;
        padding: 50px 0;
    }

    .social-cards-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .social-media-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        text-align: center;
        transition: all 0.3s ease;
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .social-media-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }

    .social-card-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
    }

    .social-card-logo {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
    }

    .social-card-info h5 {
        font-size: 1.3rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 5px;
    }

    .social-card-info p {
        font-size: 0.9rem;
        color: #6c757d;
        margin: 0;
    }

    .social-card-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .social-card-stats {
        display: flex;
        justify-content: space-around;
        margin: 20px 0;
    }

    .social-stat {
        text-align: center;
    }

    .social-stat-number {
        font-size: 1.5rem;
        font-weight: 800;
        color: #2c3e50;
        display: block;
    }

    .social-stat-label {
        font-size: 0.8rem;
        color: #6c757d;
        text-transform: uppercase;
        font-weight: 600;
    }

    .social-follow-btn {
        background: #4a90e2;
        color: white !important;
        border: none;
        padding: 12px 25px;
        border-radius: 25px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .social-follow-btn:hover {
        background: #357abd;
        transform: scale(1.05);
        color: white;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .services-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 991px) {
        .main.government-home {
            padding-top: 30px !important;
        }

        .banner-container {
            flex-direction: column;
            text-align: center;
            padding: 50px 0 40px 0;
        }

        .banner-logo {
            margin-right: 0;
            margin-bottom: 30px;
        }

        .banner-content {
            padding-right: 0;
        }

        .banner-features {
            justify-content: center;
            flex-wrap: wrap;
        }

        .content-wrapper {
            flex-direction: column;
        }

        .ministers-sidebar {
            width: 100%;
        }

        .services-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .social-cards-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .banner-title {
            font-size: 2.5rem;
        }

        .banner-subtitle {
            font-size: 1.4rem;
        }

        .services-grid {
            grid-template-columns: 1fr;
        }

        .content-tabs {
            flex-direction: column;
        }

        .tab-button {
            border-right: none;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .tab-button:last-child {
            border-bottom: none;
        }
    }

    @media (max-width: 576px) {
        .main.government-home {
            padding-top: 40px !important;
        }

        .banner-container {
            padding: 40px 0 30px 0;
        }

        .banner-title {
            font-size: 2rem;
        }

        .banner-subtitle {
            font-size: 1.2rem;
        }

        .content-area {
            padding: 20px;
        }

        .ministers-sidebar {
            padding: 20px 15px;
        }

        .service-tile {
            height: 140px;
            padding: 20px 15px;
        }
    }
</style>

<main class="main government-home" style="padding-top: 0;">
    <!-- Blue Banner Section - Split Layout -->
    <section class="blue-banner-section">
        <div class="container-fluid p-0">
            <div class="banner-container">
                <!-- Left side - Image -->
                <div class="banner-image-side">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&h=600&fit=crop&crop=face" alt="Prime Minister Meeting" id="mainBannerImage">
                </div>

                <!-- Right side - Content -->
                <div class="banner-content-side">
                    <div class="banner-date">
                        <i class="bi bi-calendar3"></i>
                        <span id="bannerDate">October 17, 2025</span>
                    </div>

                    <h1 class="banner-title-new" id="bannerTitle">
                        Prime Minister of Sri Lanka, H.E. Dr. Harini Amarasuriya called on Prime Minister Shri Narendra Modi in New Delhi
                    </h1>

                    <div class="banner-navigation">
                        <div class="nav-arrows">
                            <button class="nav-arrow" onclick="previousSlide()">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <button class="nav-arrow" onclick="togglePause()">
                                <i class="bi bi-pause-fill" id="pauseIcon"></i>
                            </button>
                            <button class="nav-arrow" onclick="nextSlide()">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>

                        <a href="#updates" class="view-all-link">View All Updates</a>
                    </div>

                    <div class="thumbnail-gallery">
                        <div class="thumbnail active" onclick="goToSlide(0)">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=76&fit=crop&crop=face" alt="Thumbnail 1">
                        </div>
                        <div class="thumbnail" onclick="goToSlide(1)">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=100&h=76&fit=crop" alt="Thumbnail 2">
                        </div>
                        <div class="thumbnail" onclick="goToSlide(2)">
                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=100&h=76&fit=crop" alt="Thumbnail 3">
                        </div>
                        {{-- <div class="thumbnail" onclick="goToSlide(3)">
                            <img src="https://images.unsplash.com/photo-1594736797933-d0601ba2fe65?w=100&h=76&fit=crop" alt="Thumbnail 4">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let currentSlide = 0;
        let isPaused = false;
        let slideInterval;

        const slides = [
            {
                image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&h=600&fit=crop&crop=face",
                date: "October 17, 2025",
                title: "Prime Minister of Sri Lanka, H.E. Dr. Harini Amarasuriya called on Prime Minister Shri Narendra Modi in New Delhi"
            },
            {
                image: "https://images.unsplash.com/photo-1560250097-0b93528c311a?w=800&h=600&fit=crop",
                date: "October 16, 2025",
                title: "External Affairs Minister Dr. S. Jaishankar called on H.E. Mr. Geraldo Alckmin, Vice President of Brazil"
            },
            {
                image: "https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=800&h=600&fit=crop",
                date: "October 15, 2025",
                title: "India-Canada Diplomatic Relations: Important Updates on Trade and Security Cooperation"
            },
            // {
            //     image: "https://images.unsplash.com/photo-1594736797933-d0601ba2fe65?w=800&h=600&fit=crop",
            //     date: "October 14, 2025",
            //     title: "International Conference on Digital Governance and Public Service Delivery"
            // }
        ];

        function updateSlide(index) {
            const slide = slides[index];
            document.getElementById('mainBannerImage').src = slide.image;
            document.getElementById('bannerDate').textContent = slide.date;
            document.getElementById('bannerTitle').textContent = slide.title;

            // Update thumbnails
            document.querySelectorAll('.thumbnail').forEach((thumb, i) => {
                thumb.classList.toggle('active', i === index);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            updateSlide(currentSlide);
        }

        function previousSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            updateSlide(currentSlide);
        }

        function goToSlide(index) {
            currentSlide = index;
            updateSlide(currentSlide);
        }

        function togglePause() {
            const pauseIcon = document.getElementById('pauseIcon');
            if (isPaused) {
                isPaused = false;
                pauseIcon.classList.remove('bi-play-fill');
                pauseIcon.classList.add('bi-pause-fill');
                startAutoSlide();
            } else {
                isPaused = true;
                pauseIcon.classList.remove('bi-pause-fill');
                pauseIcon.classList.add('bi-play-fill');
                clearInterval(slideInterval);
            }
        }

        function startAutoSlide() {
            slideInterval = setInterval(() => {
                if (!isPaused) {
                    nextSlide();
                }
            }, 4000);
        }

        // Initialize auto-slide
        startAutoSlide();

        // Pause on hover
        document.querySelector('.blue-banner-section').addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });

        document.querySelector('.blue-banner-section').addEventListener('mouseleave', () => {
            if (!isPaused) {
                startAutoSlide();
            }
        });
    </script>

    <!-- Cool Access Bar -->
    {{-- <section class="access-bar">
        <div class="container">
            <div class="access-content">
                <div class="access-text">
                    "Sanchar Saathi" - an Integrated Citizen Centric Web Portal
                </div>
                <a href="#" class="access-button">ACCESS NOW</a>
            </div>
        </div>
    </section> --}}
    {{-- <br></br> --}}

    <!-- Main Content Layout -->
    <section class="main-layout">
        <div class="container-fluid">
            <div class="content-wrapper">
                <br></br>
                <!-- Left Sidebar - Ministers -->
                <div class="ministers-sidebar">
                    <div class="minister-card" onclick="window.location.href='/message/moc'" style="cursor: pointer;">
                        <div class="card-title">Message from Hon'ble MoC</div>
                        <div class="minister-photo">
                            <img src="{{asset('images/j.png')}}" alt="Minister">
                        </div>
                        <div class="minister-name">Hon'ble Union Minister</div>
                        <div class="minister-title">Shri Jyotiraditya M Scindia</div>
                        <div class="minister-message">
                            <p>Welcome to the Department of Telecommunications. Our commitment is to ensure seamless digital connectivity for every citizen of India. Through innovative programs, improved infrastructure, and technology-driven policies...</p>
                        </div>
                        {{-- <div class="minister-social">
                            <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        </div> --}}
                    </div>

                    <div class="minister-card" onclick="window.location.href='/message/smoc'" style="cursor: pointer;">
                        <div class="card-title">Message from Hon'ble SMoC</div>
                        <div class="minister-photo">
                            <img src="{{asset('images/p.png')}}" alt="Secretary">
                        </div>
                        <div class="minister-name">Hon'ble Minister of State</div>
                        <div class="minister-title">Dr. Pemmasani Chandra Sekhar</div>
                        <div class="minister-message">
                            <p>Innovation in telecommunications is key to bridging the digital divide. We are working tirelessly to ensure every citizen has access to quality communication services and emerging technologies.</p>
                        </div>
                        {{-- <div class="minister-social">
                            <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        </div> --}}
                    </div>
                </div>                <!-- Right Content Area -->
                <div class="content-area">
                    <!-- Single Tab Header -->
                    <div class="content-tabs">
                        <button class="tab-button active" style="width: 100%;">Latest Updates and Circulars</button>
                    </div>

                    <!-- Single Tab Content -->
                    <div class="tab-content">
                        <div id="all-updates" class="tab-pane active">
                            <div class="updates-scroll-container">
                                <div class="updates-scroll-content" id="scrollContent">
                                    <!-- First set of items -->
                                    <div class="update-item">
                                        <div class="update-date">WP No. 20117 of 2025 in Hon'ble High Court of Madras - DoT instructions dated 16.10.2025 to ISPs</div>
                                        <div class="update-text">Guidelines and instructions for Internet Service Providers regarding compliance with court orders</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">CS Comm No 977 of 2025 in Hon'ble High Court of Delhi - Additional list DoT instructions dated 16.10.2025 to ISPs</div>
                                        <div class="update-text">Additional compliance requirements for telecommunications service providers</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Guidelines for Use, Retention, and Disposal of Wireless Equipment under WOL (Experimental) Demo Licenses</div>
                                        <div class="update-text">New guidelines for experimental wireless equipment usage and disposal procedures</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Addendum/modification in guidelines regarding Telecom Technology development Fund issued on dated 01.10.2022</div>
                                        <div class="update-text">Updated guidelines for technology development fund allocation and utilization</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Honourable Union Minister Shri Jyotiraditya M Scindia will chair the Joint Media Briefing on 17th October 2025</div>
                                        <div class="update-text">Press briefing announcement for upcoming telecommunications policy updates</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Strategy Paper for ITU Engagement & Outreach Initiative</div>
                                        <div class="update-text">Comprehensive strategy for International Telecommunication Union engagement</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Action Plan to Showcase Indigenous Telecom/ICT Technologies</div>
                                        <div class="update-text">Framework for promoting Indian telecommunications technologies globally</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Prioritization of ITU-T Study Group Questions and Guidelines</div>
                                        <div class="update-text">Guidelines for participation in ITU-T study groups and question prioritization</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Tender for 5G Infrastructure Development</div>
                                        <div class="update-text">National tender for 5G network infrastructure across major cities</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Rural Connectivity Enhancement Project</div>
                                        <div class="update-text">Tender for expanding telecommunications infrastructure in rural areas</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Recruitment for Technical Officers</div>
                                        <div class="update-text">Open positions for technical officers in various telecommunications divisions</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">International Relations Specialist Positions</div>
                                        <div class="update-text">Vacancies for specialists in international telecommunications cooperation</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Annual Telecommunications Report 2024-25</div>
                                        <div class="update-text">Comprehensive report on India's telecommunications sector performance</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">5G Deployment Statistics</div>
                                        <div class="update-text">Latest statistics on 5G network deployment across India</div>
                                    </div>

                                    <!-- Duplicate set for seamless looping -->
                                    <div class="update-item">
                                        <div class="update-date">WP No. 20117 of 2025 in Hon'ble High Court of Madras - DoT instructions dated 16.10.2025 to ISPs</div>
                                        <div class="update-text">Guidelines and instructions for Internet Service Providers regarding compliance with court orders</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">CS Comm No 977 of 2025 in Hon'ble High Court of Delhi - Additional list DoT instructions dated 16.10.2025 to ISPs</div>
                                        <div class="update-text">Additional compliance requirements for telecommunications service providers</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Guidelines for Use, Retention, and Disposal of Wireless Equipment under WOL (Experimental) Demo Licenses</div>
                                        <div class="update-text">New guidelines for experimental wireless equipment usage and disposal procedures</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Addendum/modification in guidelines regarding Telecom Technology development Fund issued on dated 01.10.2022</div>
                                        <div class="update-text">Updated guidelines for technology development fund allocation and utilization</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Honourable Union Minister Shri Jyotiraditya M Scindia will chair the Joint Media Briefing on 17th October 2025</div>
                                        <div class="update-text">Press briefing announcement for upcoming telecommunications policy updates</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Strategy Paper for ITU Engagement & Outreach Initiative</div>
                                        <div class="update-text">Comprehensive strategy for International Telecommunication Union engagement</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Action Plan to Showcase Indigenous Telecom/ICT Technologies</div>
                                        <div class="update-text">Framework for promoting Indian telecommunications technologies globally</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Prioritization of ITU-T Study Group Questions and Guidelines</div>
                                        <div class="update-text">Guidelines for participation in ITU-T study groups and question prioritization</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Tender for 5G Infrastructure Development</div>
                                        <div class="update-text">National tender for 5G network infrastructure across major cities</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Rural Connectivity Enhancement Project</div>
                                        <div class="update-text">Tender for expanding telecommunications infrastructure in rural areas</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Recruitment for Technical Officers</div>
                                        <div class="update-text">Open positions for technical officers in various telecommunications divisions</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">International Relations Specialist Positions</div>
                                        <div class="update-text">Vacancies for specialists in international telecommunications cooperation</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">Annual Telecommunications Report 2024-25</div>
                                        <div class="update-text">Comprehensive report on India's telecommunications sector performance</div>
                                    </div>
                                    <div class="update-item">
                                        <div class="update-date">5G Deployment Statistics</div>
                                        <div class="update-text">Latest statistics on 5G network deployment across India</div>
                                    </div>
                                </div>
                            </div>

                            <button class="read-more-btn">Read more ></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EVENTS CALENDAR - Event Tiles -->
    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">UPCOMING EVENTS & CONFERENCES</h2>
            </div>
            <div class="services-grid">
                <!-- Row 1 -->
                <div class="service-tile blue">
                    <div class="service-tile-title">5G India Summit</div>
                    <div class="service-tile-number">Nov 15</div>
                    <div class="service-tile-subtitle">National Conference on 5G Technology</div>
                </div>
                <div class="service-tile green">
                    <div class="service-tile-title">Digital India Week</div>
                    <div class="service-tile-number">Nov 20-26</div>
                    <div class="service-tile-subtitle">Celebrating Digital Transformation</div>
                </div>
                <div class="service-tile purple">
                    <div class="service-tile-title">Telecom Policy Forum</div>
                    <div class="service-tile-number">Dec 05</div>
                    <div class="service-tile-subtitle">Policy Discussions & Reforms</div>
                </div>
                <div class="service-tile cool-blue">
                    <div class="service-tile-title">Spectrum Auction</div>
                    <div class="service-tile-number">Dec 12</div>
                    <div class="service-tile-subtitle">5G Spectrum Allocation Event</div>
                </div>

                <!-- Row 2 -->
                <div class="service-tile red">
                    <div class="service-tile-title">Cybersecurity Summit</div>
                    <div class="service-tile-number">Jan 08</div>
                    <div class="service-tile-subtitle">National Telecom Security Conference</div>
                </div>
                <div class="service-tile teal">
                    <div class="service-tile-title">Rural Connectivity</div>
                    <div class="service-tile-number">Jan 15</div>
                    <div class="service-tile-subtitle">BharatNet Phase III Launch</div>
                </div>
                <div class="service-tile indigo">
                    <div class="service-tile-title">Innovation Awards</div>
                    <div class="service-tile-number">Jan 26</div>
                    <div class="service-tile-subtitle">Telecom Innovation Excellence</div>
                </div>
                <div class="service-tile pink">
                    <div class="service-tile-title">Industry Meet</div>
                    <div class="service-tile-number">Feb 02</div>
                    <div class="service-tile-subtitle">Stakeholder Consultation Meeting</div>
                </div>

                <!-- Row 3 -->
                <div class="service-tile blue">
                    <div class="service-tile-title">World Telecom Day</div>
                    <div class="service-tile-number">May 17</div>
                    <div class="service-tile-subtitle">International Telecommunications Day</div>
                </div>
                <div class="service-tile green">
                    <div class="service-tile-title">Startup Conclave</div>
                    <div class="service-tile-number">Mar 10</div>
                    <div class="service-tile-subtitle">Telecom Startup Ecosystem Meet</div>
                </div>
                <div class="service-tile purple">
                    <div class="service-tile-title">AI in Telecom</div>
                    <div class="service-tile-number">Mar 22</div>
                    <div class="service-tile-subtitle">Artificial Intelligence Summit</div>
                </div>
                <div class="service-tile cool-blue">
                    <div class="service-tile-title">Satellite Comm</div>
                    <div class="service-tile-number">Apr 05</div>
                    <div class="service-tile-subtitle">Satellite Communication Conference</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="social-media-section">
        <div class="container">
            <div class="social-cards-grid">
                <div class="social-media-card">
                    <div class="social-card-header">
                        <div class="social-card-logo" style="background: #E4405F;">
                            <i class="bi bi-instagram"></i>
                        </div>
                        <div class="social-card-info">
                            <h5>Instagram</h5>
                            <p>@department_of_telecom</p>
                        </div>
                    </div>
                    <div class="social-card-content">
                        <div class="social-card-stats">
                            <div class="social-stat">
                                <span class="social-stat-number">391</span>
                                <span class="social-stat-label">Posts</span>
                            </div>
                            <div class="social-stat">
                                <span class="social-stat-number">2,815</span>
                                <span class="social-stat-label">Followers</span>
                            </div>
                            <div class="social-stat">
                                <span class="social-stat-number">16</span>
                                <span class="social-stat-label">Following</span>
                            </div>
                        </div>
                        <p>DoT_India (Department of Telecommunications) • Department of Telecommunications, Ministry of Communications, Government of India •</p>
                    </div>
                    <a href="#" class="social-follow-btn">Follow</a>
                </div>

                <div class="social-media-card">
                    <div class="social-card-header">
                        <div class="social-card-logo" style="background: #1877F2;">
                            <i class="bi bi-facebook"></i>
                        </div>
                        <div class="social-card-info">
                            <h5>Facebook</h5>
                            <p>Department of Telecommunications</p>
                        </div>
                    </div>
                    <div class="social-card-content">
                        <p>Government of India, India Post, and Department of Telecommunications. The session will highlight key achievements, milestones, and citizen-centric initiatives driving India's journey towards inclus... See more</p>
                        <div style="margin: 20px 0;">
                            <div style="background: #f0f2f5; padding: 15px; border-radius: 10px;">
                                <strong>Tiranga</strong><br>
                                <small>Telecommunications will highlight key achievements, milestones, and citizen-centric initiatives driving India's journey towards inclusive development.</small>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="social-follow-btn">Like Page</a>
                </div>

                <div class="social-media-card">
                    <div class="social-card-header">
                        <div class="social-card-logo" style="background: #FF0000;">
                            <i class="bi bi-youtube"></i>
                        </div>
                        <div class="social-card-info">
                            <h5>YouTube</h5>
                            <p>DoT India</p>
                        </div>
                    </div>
                    <div class="social-card-content">
                        <div style="background: #000; color: white; padding: 60px 20px; border-radius: 10px; text-align: center; margin: 20px 0;">
                            <i class="bi bi-play-circle" style="font-size: 3rem;"></i>
                            <p style="margin: 10px 0 0 0; color: white;">1 Year Achieveme...</p>
                        </div>
                    </div>
                    <a href="#" class="social-follow-btn">Subscribe</a>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
function showTab(tabId) {
    // Hide all tab panes
    const tabPanes = document.querySelectorAll('.tab-pane');
    tabPanes.forEach(pane => pane.classList.remove('active'));

    // Remove active class from all buttons
    const tabButtons = document.querySelectorAll('.tab-button');
    tabButtons.forEach(button => button.classList.remove('active'));

    // Show selected tab pane
    document.getElementById(tabId).classList.add('active');

    // Add active class to clicked button
    event.target.classList.add('active');
}
</script>
</script>

</div>
@endsection