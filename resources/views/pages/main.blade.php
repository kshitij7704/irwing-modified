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

    /* Calendar Styles */
    .calendar-section {
        background: white;
        padding: 50px 0;
        text-align: center;
    }

    .calendar-section .section-header {
        text-align: left;
        margin-bottom: 40px;
    }

    .calendar-section .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 15px;
        text-align: left;
        display: inline-block;
        width: 100%;
    }

    .calendar-content-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        align-items: start;
    }

    .calendar-left-column {
        /* Calendar takes full left column */
    }

    .calendar-right-column {
        background: white;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    .social-media-header {
        background: #4a90e2;
        color: white;
        padding: 20px;
        font-size: 1.4rem;
        font-weight: 700;
        text-align: center;
        border-radius: 15px 15px 0 0;
    }

    .social-media-scroll-container {
        height: 650px;
        overflow: hidden;
        position: relative;
        background: white;
        padding: 20px;
    }

    .social-media-scroll-content {
        animation: continuousScroll 60s linear infinite;
        position: relative;
    }

    .social-media-scroll-content:hover {
        animation-play-state: paused;
    }

    .social-media-item {
        background: white;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 15px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .social-media-item:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .social-simple-row {
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }

    .social-platform-icon {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .social-text-content {
        flex: 1;
        padding-top: 5px;
    }

    .social-text-content .social-link {
        color: #2c3e50;
        text-decoration: none;
        line-height: 1.5;
        font-size: 1.1rem;
        display: block;
    }

    .social-text-content .social-link:hover {
        color: #4a90e2;
        text-decoration: underline;
    }

    .social-card-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    .social-card-logo {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .social-card-info h5 {
        font-size: 1.1rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 3px;
    }

    .social-card-info p {
        font-size: 0.8rem;
        color: #6c757d;
        margin: 0;
    }

    .social-card-content {
        margin-bottom: 15px;
    }

    .social-card-content p {
        font-size: 0.9rem;
        color: #495057;
        line-height: 1.5;
        margin: 0 0 10px 0;
    }

    .social-card-stats {
        display: flex;
        justify-content: space-around;
        margin: 15px 0;
        padding: 10px 0;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
    }

    .social-stat {
        text-align: center;
    }

    .social-stat-number {
        font-size: 1.2rem;
        font-weight: 800;
        color: #2c3e50;
        display: block;
    }

    .social-stat-label {
        font-size: 0.7rem;
        color: #6c757d;
        text-transform: uppercase;
        font-weight: 600;
    }

    .social-follow-btn {
        background: #4a90e2;
        color: white !important;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        width: 100%;
        text-align: center;
    }

    .social-follow-btn:hover {
        background: #357abd;
        transform: scale(1.02);
        color: white;
    }

    .calendar-container {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        border-radius: 15px;
        overflow: hidden;
    }

    .calendar-header {
        background: #4a90e2;
        color: white;
        padding: 13px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
    }

    .calendar-nav {
        background: rgba(255,255,255,0.2);
        border: none;
        color: white;
        font-size: 1.5rem;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }

    .calendar-nav:hover {
        background: rgba(255,255,255,0.3);
        transform: scale(1.1);
    }

    .calendar-selectors {
        display: flex;
        gap: 10px;
        align-items: center;
        flex: 1;
        justify-content: center;
    }

    .calendar-dropdown {
        background: rgba(255,255,255,0.15);
        color: white;
        border: 1px solid rgba(255,255,255,0.3);
        border-radius: 6px;
        padding: 8px 12px;
        font-size: 1.3rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        min-width: 120px;
        backdrop-filter: blur(10px);
    }

    .calendar-dropdown:focus {
        outline: none;
        border-color: white;
        box-shadow: 0 0 0 2px rgba(255,255,255,0.3);
        background: rgba(255,255,255,0.2);
    }

    .calendar-dropdown:hover {
        background: rgba(255,255,255,0.2);
        border-color: rgba(255,255,255,0.5);
        transform: translateY(-1px);
    }

    .calendar-dropdown option {
        background: #4a90e2;
        color: white;
        padding: 8px;
    }

    #calendarTitle {
        font-size: 1.8rem;
        font-weight: 700;
        margin: 0;
    }

    .calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        width: 100%;
    }

    .calendar-day-header {
        background: #f8f9fa;
        padding: 15px;
        text-align: center;
        font-weight: 600;
        color: #2c3e50;
        border-right: 1px solid #dee2e6;
    }

    .calendar-day-header:last-child {
        border-right: none;
    }

    .calendar-days {
        grid-column: 1 / -1;
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        width: 100%;
    }

    .calendar-day {
        min-height: 120px;
        padding: 8px;
        border-right: 1px solid #dee2e6;
        border-bottom: 1px solid #dee2e6;
        position: relative;
        background: white;
        transition: background 0.3s ease;
        box-sizing: border-box;
        width: 100%;
        overflow: hidden;
    }

    .calendar-day:hover {
        background: #f8f9fa;
    }

    .calendar-day.empty {
        background: #f5f5f5;
    }

    .calendar-day-number {
        font-size: 1.2rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 5px;
    }

    .calendar-day.today {
        background: #e8f4fd;
    }

    .calendar-day.today .calendar-day-number {
        color: #4a90e2;
        font-weight: 700;
    }

    .event-item {
        background: #4a90e2;
        color: white;
        padding: 2px 4px;
        border-radius: 3px;
        font-size: 0.7rem;
        margin-bottom: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        overflow: hidden;
        word-wrap: break-word;
        white-space: normal;
        line-height: 1.1;
        max-width: 100%;
        box-sizing: border-box;
    }

    .event-item:hover {
        background: #357abd;
        transform: scale(1.02);
    }

    .event-item.multi-day {
        background: linear-gradient(135deg, #4a90e2 0%, #48c9b0 100%);
    }

    /* Responsive Calendar */
    @media (max-width: 768px) {
        .calendar-container {
            margin: 0 15px;
        }

        .calendar-header {
            padding: 15px;
            flex-direction: column;
            gap: 10px;
        }

        .calendar-selectors {
            order: -1;
            flex-direction: column;
            gap: 8px;
        }

        .calendar-dropdown {
            min-width: 100px;
            font-size: 0.9rem;
            padding: 6px 10px;
        }

        .calendar-day {
            min-height: 80px;
            padding: 5px;
        }

        .calendar-day-number {
            font-size: 1rem;
        }

        .event-item {
            font-size: 0.7rem;
            padding: 2px 4px;
        }

        .calendar-content-wrapper {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .social-media-scroll-container {
            height: 400px;
        }
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

    /* Social Media Links */
    .social-link {
        color: #2c3e50;
        text-decoration: none;
        transition: color 0.3s ease;

    }

    .social-link:hover {
        color: #4a90e2;
        text-decoration: underline;
    }

    .video-link {
        color: white !important;
        text-decoration: none;
    }

    .video-link:hover {
        text-decoration: underline;
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

        /* Calendar responsive design */
        .calendar-content-wrapper {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .calendar-left-column,
        .calendar-right-column {
            width: 100%;
        }

        .calendar-container {
            max-width: 100%;
        }

        .social-media-scroll-container {
            max-height: 400px;
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

        /* Calendar mobile adjustments */
        .calendar-header {
            flex-direction: column;
            gap: 15px;
        }

        .calendar-selectors {
            order: 1;
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .calendar-nav {
            order: 2;
            align-self: center;
        }

        .calendar-dropdown {
            font-size: 0.9rem;
            padding: 8px 12px;
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

        /* Calendar mobile optimizations */
        .calendar-section {
            padding: 30px 0;
        }

        .section-title {
            font-size: 1.8rem;
        }

        .calendar-content-wrapper {
            gap: 20px;
        }

        .calendar-grid {
            font-size: 0.85rem;
        }

        .calendar-day-number {
            font-size: 1rem;
        }

        .event-item {
            font-size: 0.75rem;
            padding: 2px 4px;
        }

        .social-media-header {
            font-size: 1.1rem;
        }

        .social-media-scroll-container {
            max-height: 350px;
        }

        .social-media-item {
            padding: 15px;
        }

        .social-platform-icon {
            width: 35px;
            height: 35px;
            font-size: 1.1rem;
        }

        .social-text-content .social-link {
            font-size: 1rem;
        }
    }
    /* --- NEW CSS for Priority Areas Section --- */
    .priority-areas-section {
        padding: 50px 0;
        background: #f8f9fa; /* Light background to separate sections */
    }

    .priority-areas-header {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 30px;
    }

    .engagement-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .engagement-card {
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .engagement-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .card-image-wrapper {
        height: 150px;
        background: #e9ecef; /* Placeholder color */
        overflow: hidden;
        border-bottom: 1px solid #dee2e6;
    }

    .card-image {
        /* Ensures the image covers the container without distortion */
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.85; /* Dims the image slightly to match the provided image */
    }

    .card-content {
        padding: 20px;
        min-height: 110px;
        display: flex;
        flex-direction: column;
    }

    .card-content h3 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .card-content p {
        font-size: 1.2rem;
        color: #495057;
        line-height: 1.5;
    }

    /* Responsive adjustments for the new section */
    @media (max-width: 991px) {
        .engagement-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .engagement-grid {
            grid-template-columns: 1fr;
        }
        .priority-areas-header {
            font-size: 2rem;
            margin-bottom: 20px;
            padding-left: 15px;
        }
        .priority-areas-section {
            padding: 30px 0;
        }
    }
    /* --- NEW CSS for India's Ambitions in ITU Section --- */
    .itu-ambitions-section {
        padding: 50px 0;
        background: #ffffff; /* White background */
    }

    .itu-section-header {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 30px;
        padding-left: 15px; /* Adjust padding to match container if needed */
    }

    .itu-card {
        padding: 30px;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        background: #fff;
    }

    .itu-content-wrapper {
        display: flex;
        gap: 30px;
        align-items: flex-start;
    }

    .itu-image-container {
        flex-shrink: 0;
        width: 250px;
        height: 180px;
        border: 1px solid #ccc;
        border-radius: 4px;
        overflow: hidden;
    }

    .itu-collaboration-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.8;
    }

    .itu-text-content {
        flex-grow: 1;
        font-size: 1.3rem;
        color: #495057;
    }

    .itu-text-content p {
        margin-bottom: 15px;
        font-size: 1.3rem;
        line-height: 1.6;
    }

    .itu-text-content ul {
        list-style: none;
        font-size: 1.3rem;
        padding: 0;
        margin-bottom: 20px;
    }

    .itu-text-content li {
        font-size: 1.3rem;
        position: relative;
        padding-left: 1.5em;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .itu-text-content li::before {
        content: '\2022'; /* Bullet point character */
        color: #4a90e2; /* Blue color for bullet */
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
        font-size: 1.2em;
    }

    .itu-more-link {
        color: #4a90e2;
        text-decoration: none;
        font-weight: 600;
        display: block;
        text-align: right;
    }

    .itu-more-link:hover {
        text-decoration: underline;
        color: #357abd;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .itu-content-wrapper {
            flex-direction: column;
            gap: 20px;
        }

        .itu-image-container {
            width: 100%;
            height: 200px;
        }

        .itu-section-header {
            font-size: 2rem;
            padding-left: 0;
        }

        .itu-card {
            padding: 20px;
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
                <img src="{{ $sliders->first() ? asset('storage/' . $sliders->first()->image) : asset('images/default.jpg') }}" 
                     alt="Banner Image" id="mainBannerImage">
            </div>

            <!-- Right side - Content -->
            <div class="banner-content-side">
                <div class="banner-date">
                    <i class="bi bi-calendar3"></i>
                    <span id="bannerDate">{{ optional($sliders->first())->created_at ? $sliders->first()->created_at->format('F d, Y') : '' }}
</span>
                </div>

                <h1 class="banner-title-new" id="bannerTitle">
                    {{ $sliders->first()->title ?? '' }}
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
                    @foreach ($sliders as $index => $slider)
                        <div class="thumbnail {{ $loop->first ? 'active' : '' }}" onclick="goToSlide({{ $index }})">
                            <img src="{{ asset('storage/' . $slider->image) }}" alt="Thumbnail {{ $index + 1 }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@php
$slideData = $sliders->map(function($slider) {
    return [
        'image' => asset('storage/' . $slider->image),
        'title' => $slider->title,
        'date'  => $slider->created_at,
    ];
});
@endphp

<script>
    let currentSlide = 0;
    let isPaused = false;
    let slideInterval;

    const slides = @json($slideData);

    function updateSlide(index) {
        const slide = slides[index];
        document.getElementById('mainBannerImage').src = slide.image;
        document.getElementById('bannerDate').textContent = slide.date ?? '';
        document.getElementById('bannerTitle').textContent = slide.title ?? '';

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
            if (!isPaused) nextSlide();
        }, 4000);
    }

    startAutoSlide();

    document.querySelector('.blue-banner-section').addEventListener('mouseenter', () => clearInterval(slideInterval));
    document.querySelector('.blue-banner-section').addEventListener('mouseleave', () => {
        if (!isPaused) startAutoSlide();
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
                    <!-- <div class="minister-card" onclick="window.location.href='/message/moc'" style="cursor: pointer;">
                        <div class="card-title">Message from Hon'ble MoC</div>
                        <div class="minister-photo">
                            <img src="{{asset('images/j.png')}}" alt="Minister">
                        </div>
                        <div class="minister-name">Hon'ble Union Minister</div>
                        <div class="minister-title">Shri Jyotiraditya M Scindia</div>
                        <div class="minister-message">
                            <p>Welcome to the Department of Telecommunications. Our commitment is to ensure seamless digital connectivity for every citizen of India. Through innovative programs, improved infrastructure, and technology-driven policies...</p>
                        </div>
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
                    </div>
                </div>      -->
                

    @foreach ($ministers as $minister)
        <div class="minister-card" onclick="window.location.href='/message/{{ $minister->id }}'" style="cursor: pointer;">
            <div class="card-title">{{ $minister->title }}</div>
            <div class="minister-photo">
                <img src="{{ asset('storage/' . $minister->photo) }}" alt="{{ $minister->minister_name }}">
            </div>
            <div class="minister-name">{{ $minister->postion }}</div>
            <div class="minister-title">{{ $minister->minister_name }}</div>
            <div class="minister-message">
                <p>{{ Str::limit($minister->message, 180, '...') }}</p>
            </div>
        </div>
    @endforeach
</div>         
                
                <!-- Right Content Area -->
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

    <!-- EVENTS CALENDAR -->
    <section class="calendar-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">EVENTS CALENDAR</h2>
            </div>
            <div class="calendar-content-wrapper">
                <!-- Left Column - Calendar -->
                <div class="calendar-left-column">
                    <div class="calendar-container">
                        <div class="calendar-header">
                            <button class="calendar-nav" id="prevMonth">&lt;</button>
                            <div class="calendar-selectors">
                                <select class="calendar-dropdown" id="monthSelect">
                                    <option value="0">January</option>
                                    <option value="1">February</option>
                                    <option value="2">March</option>
                                    <option value="3">April</option>
                                    <option value="4">May</option>
                                    <option value="5">June</option>
                                    <option value="6">July</option>
                                    <option value="7">August</option>
                                    <option value="8">September</option>
                                    <option value="9">October</option>
                                    <option value="10">November</option>
                                    <option value="11">December</option>
                                </select>
                                <select class="calendar-dropdown" id="yearSelect">
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                </select>
                            </div>
                            <button class="calendar-nav" id="nextMonth">&gt;</button>
                        </div>
                        <div class="calendar-grid">
                            <div class="calendar-day-header">Sun</div>
                            <div class="calendar-day-header">Mon</div>
                            <div class="calendar-day-header">Tue</div>
                            <div class="calendar-day-header">Wed</div>
                            <div class="calendar-day-header">Thu</div>
                            <div class="calendar-day-header">Fri</div>
                            <div class="calendar-day-header">Sat</div>
                            <div id="calendarDays" class="calendar-days"></div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Social Media Feed -->
                <div class="calendar-right-column">
                    <div class="social-media-header">Social Media Feed</div>
                    <div class="social-media-scroll-container">
                        <div class="social-media-scroll-content" id="socialScrollContent">
                            <!-- Instagram Card -->
                            <div class="social-media-item">
                                <div class="social-simple-row">
                                    <div class="social-platform-icon" style="background: #E4405F;">
                                        <i class="bi bi-instagram"></i>
                                    </div>
                                    <div class="social-text-content">
                                        <a href="https://www.instagram.com/department_of_telecom" target="_blank" class="social-link">DoT_India (Department of Telecommunications) • Department of Telecommunications, Ministry of Communications, Government of India</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Facebook Card -->
                            <div class="social-media-item">
                                <div class="social-simple-row">
                                    <div class="social-platform-icon" style="background: #1877F2;">
                                        <i class="bi bi-facebook"></i>
                                    </div>
                                    <div class="social-text-content">
                                        <a href="https://www.facebook.com/DepartmentOfTelecommunications" target="_blank" class="social-link">Government of India, India Post, and Department of Telecommunications. The session will highlight key achievements, milestones, and citizen-centric initiatives driving India's journey towards inclusive development</a>
                                    </div>
                                </div>
                            </div>

                            <!-- YouTube Card -->
                            <div class="social-media-item">
                                <div class="social-simple-row">
                                    <div class="social-platform-icon" style="background: #FF0000;">
                                        <i class="bi bi-youtube"></i>
                                    </div>
                                    <div class="social-text-content">
                                        <a href="https://www.youtube.com/watch?v=example" target="_blank" class="social-link">1 Year Achievement Video - Department of Telecommunications showcasing digital transformation initiatives and infrastructure development across India</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Duplicate for seamless scrolling -->
                            <div class="social-media-item">
                                <div class="social-simple-row">
                                    <div class="social-platform-icon" style="background: #E4405F;">
                                        <i class="bi bi-instagram"></i>
                                    </div>
                                    <div class="social-text-content">
                                        <a href="https://www.instagram.com/department_of_telecom" target="_blank" class="social-link">DoT_India (Department of Telecommunications) • Department of Telecommunications, Ministry of Communications, Government of India</a>
                                    </div>
                                </div>
                            </div>

                            <div class="social-media-item">
                                <div class="social-simple-row">
                                    <div class="social-platform-icon" style="background: #1877F2;">
                                        <i class="bi bi-facebook"></i>
                                    </div>
                                    <div class="social-text-content">
                                        <a href="https://www.facebook.com/DepartmentOfTelecommunications" target="_blank" class="social-link">Government of India, India Post, and Department of Telecommunications. The session will highlight key achievements, milestones, and citizen-centric initiatives driving India's journey towards inclusive development</a>
                                    </div>
                                </div>
                            </div>

                            <div class="social-media-item">
                                <div class="social-simple-row">
                                    <div class="social-platform-icon" style="background: #FF0000;">
                                        <i class="bi bi-youtube"></i>
                                    </div>
                                    <div class="social-text-content">
                                        <a href="https://www.youtube.com/watch?v=example" target="_blank" class="social-link">1 Year Achievement Video - Department of Telecommunications showcasing digital transformation initiatives and infrastructure development across India</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="priority-areas-section">
        <div class="container">
            <h1 class="priority-areas-header">Priority Areas for Engagements</h1>
            <div class="engagement-grid">

                <div class="engagement-card">
                    <div class="card-image-wrapper">
                        <img src="https://media.istockphoto.com/id/1455319441/photo/planet-earth-at-night-global-meteor.webp?a=1&b=1&s=612x612&w=0&k=20&c=Xe2cKlKk-hlsxa7UgBSrvpwU_4_ow_RXGZ0zPwsKCmk=" alt="Disaster Early Warning" class="card-image">
                    </div>
                    <div class="card-content">
                        <h3>Disaster Early Warning Solutions</h3>
                        <p>India offers expertise in early warning systems, providing solutions to global partners for disaster preparedness.</p>
                    </div>
                </div>

                <div class="engagement-card">
                    <div class="card-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1631718631303-7840218c1c19?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8c3VibWFyaW5lJTIwY2FibGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&q=60&w=600" alt="Submarine Cable Repairs" class="card-image">
                    </div>
                    <div class="card-content">
                        <h3>Submarine Cable Repairs</h3>
                        <p>Seeking international collaborations to enhance capabilities in submarine cable maintenance and repairs.</p>
                    </div>
                </div>

                <div class="engagement-card">
                    <div class="card-image-wrapper">
                        <img src="https://plus.unsplash.com/premium_photo-1688700437364-c689f27093ed?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8T3BlbiUyMHJhZGlvJTIwYWNjZXNzfGVufDB8fDB8fHww&auto=format&fit=crop&q=60&w=600" alt="Open RAN" class="card-image">
                    </div>
                    <div class="card-content">
                        <h3>Open RAN</h3>
                        <p>Partnering globally for joint research and development in Open Radio Access Network technologies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="itu-ambitions-section">
        <div class="container">
            <h1 class="itu-section-header">India's Ambitions in ITU</h1>

            <div class="itu-card">
                <div class="itu-content-wrapper">
                    <div class="itu-image-container">
                        <img src="data:image/jpeg;base64,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" alt="ITU Collaboration" class="itu-collaboration-image">
                    </div>

                    <div class="itu-text-content">
                        <p>India is committed to a leadership role in the International Telecommunication Union (ITU) with the following objectives:</p>
                        <ul>
                            <li>Re-election as Member of ITU Council in 2026.</li>
                            <li>Hosting the ITU Plenipotentiary Conference in 2030.</li>
                            <li>Nomination of Ms. Revathi as Director BR ITU.</li>
                            <li>Increasing contributions to ITU standards and initiatives.</li>
                            <li>Securing leadership positions in ITU study groups and sectors.</li>
                        </ul>
                        <a href="#" class="itu-more-link">More...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

// Calendar functionality
let currentDate = new Date(2025, 9, 19); // October 19, 2025

const events = [
    { title: "5G India Summit", date: new Date(2025, 10, 15), description: "National Conference on 5G Technology" },
    { title: "Digital India Week", date: new Date(2025, 10, 20), endDate: new Date(2025, 10, 26), description: "Celebrating Digital Transformation" },
    { title: "Telecom Policy Forum", date: new Date(2025, 11, 5), description: "Policy Discussions & Reforms" },
    { title: "Spectrum Auction", date: new Date(2025, 11, 12), description: "5G Spectrum Allocation Event" },
    { title: "Cybersecurity Summit", date: new Date(2026, 0, 8), description: "National Telecom Security Conference" },
    { title: "Rural Connectivity", date: new Date(2026, 0, 15), description: "BharatNet Phase III Launch" },
    { title: "Innovation Awards", date: new Date(2026, 0, 26), description: "Telecom Innovation Excellence" },
    { title: "Industry Meet", date: new Date(2026, 1, 2), description: "Stakeholder Consultation Meeting" },
    { title: "World Telecom Day", date: new Date(2026, 4, 17), description: "International Telecommunications Day" },
    { title: "Startup Conclave", date: new Date(2026, 2, 10), description: "Telecom Startup Ecosystem Meet" },
    { title: "AI in Telecom", date: new Date(2026, 2, 22), description: "Artificial Intelligence Summit" },
    { title: "Satellite Comm", date: new Date(2026, 3, 5), description: "Satellite Communication Conference" }
];

function renderCalendar() {
    const calendarDays = document.getElementById('calendarDays');
    const monthSelect = document.getElementById('monthSelect');
    const yearSelect = document.getElementById('yearSelect');

    // Update dropdowns to match current date
    monthSelect.value = currentDate.getMonth();
    yearSelect.value = currentDate.getFullYear();

    const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
    const startDate = new Date(firstDay);
    startDate.setDate(startDate.getDate() - firstDay.getDay());

    const endDate = new Date(lastDay);
    endDate.setDate(endDate.getDate() + (6 - lastDay.getDay()));

    calendarDays.innerHTML = '';

    let currentDay = new Date(startDate);

    while (currentDay <= endDate) {
        const dayDiv = document.createElement('div');
        dayDiv.className = 'calendar-day';

        if (currentDay.getMonth() !== currentDate.getMonth()) {
            dayDiv.classList.add('empty');
        } else {
            const dayNumber = document.createElement('div');
            dayNumber.className = 'calendar-day-number';
            dayNumber.textContent = currentDay.getDate();

            if (currentDay.toDateString() === new Date(2025, 9, 19).toDateString()) {
                dayDiv.classList.add('today');
            }

            dayDiv.appendChild(dayNumber);

            // Check for events on this day
            const dayEvents = events.filter(event => {
                if (event.endDate) {
                    return currentDay >= event.date && currentDay <= event.endDate;
                }
                return currentDay.toDateString() === event.date.toDateString();
            });

            dayEvents.forEach(event => {
                const eventDiv = document.createElement('div');
                eventDiv.className = 'event-item';
                if (event.endDate) {
                    eventDiv.classList.add('multi-day');
                }
                eventDiv.textContent = event.title;
                eventDiv.title = event.description;
                dayDiv.appendChild(eventDiv);
            });
        }

        calendarDays.appendChild(dayDiv);
        currentDay.setDate(currentDay.getDate() + 1);
    }
}

document.getElementById('prevMonth').addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
});

document.getElementById('nextMonth').addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
});

// Dropdown change handlers
document.getElementById('monthSelect').addEventListener('change', (e) => {
    currentDate.setMonth(parseInt(e.target.value));
    renderCalendar();
});

document.getElementById('yearSelect').addEventListener('change', (e) => {
    currentDate.setFullYear(parseInt(e.target.value));
    renderCalendar();
});

// Initialize calendar
renderCalendar();
</script>

</div>
@endsection