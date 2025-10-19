@extends('frontend.partials.app')

@section('content')

<style>
    /* General Styles for the page content */
    body {
        font-family: 'Inter', sans-serif; /* Example font, adjust to your theme's primary font */
        background-color: #f8f9fa; /* Light background for the page */
    }

    /* --- Page Header (matching the tree-header from International Forums) --- */
    .promo-page-header {
        background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%);
        color: white;
        padding: 40px 30px; /* Increased padding for a more prominent header */
        font-size: 2.8rem; /* Larger font size */
        font-weight: 700;
        text-align: center;
        margin-bottom: 30px; /* Space below the header */
        border-radius: 15px; /* Rounded corners for the header */
        overflow: hidden; /* Ensures gradient fills rounded corners */
        box-shadow: 0 8px 25px rgba(0,0,0,0.1); /* Subtle shadow */
    }
    .promo-page-header .container {
        max-width: 1200px; /* Limit width of content inside header */
        margin: 0 auto;
    }
    .promo-page-header .page-title {
        font-size: 2.8rem;
        font-weight: 700;
        color: #fff;
        margin: 0;
        line-height: 1.2;
    }

    /* --- Breadcrumb (matching the International Forums page) --- */
    .breadcrumb-nav {
        background: #f1f3f4; /* Lighter background for breadcrumbs */
        padding: 15px 0;
        margin-bottom: 30px; /* Space below breadcrumb */
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 2px 10px rgba(0,0,0,0.05); /* Subtle shadow */
    }
    .breadcrumb {
        background: transparent;
        margin: 0;
        padding: 0 15px;
        justify-content: center; /* Center align breadcrumbs */
    }
    .breadcrumb-item a {
        color: #4a90e2;
        text-decoration: none;
        font-weight: 500;
    }
    .breadcrumb-item a:hover {
        text-decoration: underline;
    }
    .breadcrumb-item.active {
        color: #6c757d;
    }

    /* --- Card & Video Banner Styles (Themed to dashboard/International Forums cards) --- */
    .video-card {
        background: #fff;
        border-radius: 15px; /* Consistent rounded corners */
        box-shadow: 0 4px 15px rgba(0,0,0,0.1); /* Consistent shadow */
        margin-bottom: 30px; /* Space between video cards */
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .video-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .video-card-body {
        padding: 30px;
    }

    .video-banner-title {
        font-size: 2rem; /* Larger title for main banner */
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 15px;
        line-height: 1.3;
        text-align: center; /* Center text within its container */
    }
    /* Specific styling for the title overlay on the main banner */
    .video-poster-content .video-banner-title.main-banner-overlay-title {
        color: #fff; /* White text for main banner title */
        font-size: 2.5rem; /* Even larger for main banner */
        margin-bottom: 20px;
        text-align: center; /* Ensure centered text */
        width: 100%; /* Take full width */
        max-width: 600px; /* Limit max width for readability */
    }
    .video-poster-content .video-banner-title.main-banner-overlay-title span {
        font-size: 1.5rem; /* Adjust size for "New Video" */
        color: #fff; /* Ensure it's white as well */
        display: block; /* Ensure it's on its own line */
        margin-bottom: 10px;
    }
    .video-poster-content .video-banner-title.main-banner-overlay-title strong {
        color: #fff; /* Ensure strong text is white too */
        display: block; /* Put on separate line */
        margin-top: 10px;
    }

    .video-banner-title span {
        color: #4a90e2; /* Accent color for category/highlight */
        display: block; /* Ensures "New Video" is on its own line if needed */
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 5px;
    }
    .video-banner-title strong {
        color: #212529; /* Stronger color for main title part */
    }

    .video-poster {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        background-color: #000; /* Fallback for video poster background */
        width: 100%; /* Ensure full width */
        min-height: 300px; /* Set minimum height */
        display: block; /* Ensure block display */
    }
    .video-poster img {
        width: 100%;
        height: 100%;
        min-height: 300px; /* Match container min-height */
        object-fit: cover; /* Ensure image covers entire area */
        display: block;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    .video-poster:hover img {
        transform: scale(1.05); /* Slight zoom on hover */
    }

    /* --- FIX: Overlay now covers entire poster and centers content --- */
    .video-poster-content {
        position: absolute;
        width: 100%; /* Make it cover full width */
        height: 100%; /* Make it cover full height */
        top: 0; /* Align to top */
        left: 0; /* Align to left */
        right: 0; /* Align to right */
        bottom: 0; /* Align to bottom */
        display: flex;
        flex-direction: column; /* Stack title and button vertically */
        align-items: center; /* Center horizontally */
        justify-content: center; /* Center vertically */
        background-color: rgba(0,0,0,0.4); /* Dark overlay */
        transition: all 0.3s ease;
        text-align: center; /* Ensure text is centered */
        padding: 20px; /* Add some padding */
        opacity: 0; /* Hide by default */
        transform: translateY(20px); /* Slide up effect */
    }
    .video-poster:hover .video-poster-content {
        background-color: rgba(0,0,0,0.6);
        opacity: 1; /* Show on hover */
        transform: translateY(0); /* Slide to position */
    }

    /* Special styling for main banner - always visible */
    .video-poster .video-poster-content:has(.main-banner-overlay-title) {
        opacity: 1;
        transform: translateY(0);
        background-color: rgba(0,0,0,0.5);
    }

    /* Alternative selector for main banner if :has() is not supported */
    .video-card.mb-5 .video-poster-content {
        opacity: 1;
        transform: translateY(0);
        background-color: rgba(0,0,0,0.5);
    }

    /* Play button for the main video banner */
    .main-video-play-button {
        margin-top: 25px; /* Space between title and button */
    }

    /* Play button for regular video cards (smaller, just icon) */
    .video-poster-content:not(:has(.main-banner-overlay-title)) .btn-video {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
        background-color: rgba(255,255,255,0.95);
    }

    /* Alternative selector for regular cards if :has() is not supported */
    .video-card:not(.mb-5) .video-poster-content .btn-video {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
        background-color: rgba(255,255,255,0.95);
    }

    .btn-video {
        width: 70px; /* Larger play button */
        height: 70px;
        background-color: rgba(255,255,255,0.9);
        border-radius: 50%;
        display: inline-flex; /* Use inline-flex for better centering */
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: #4a90e2; /* Play icon color */
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        z-index: 10; /* Ensure button is above other elements if needed */
        text-decoration: none; /* Remove underline from button */
        border: none; /* Remove any border */
        cursor: pointer; /* Ensure pointer cursor */
        flex-shrink: 0; /* Prevent shrinking */
    }
    .btn-video:hover {
        background-color: #4a90e2;
        color: #fff;
        transform: scale(1.1);
        box-shadow: 0 6px 15px rgba(0,0,0,0.3);
    }

    /* Icon inside play button */
    .btn-video i {
        margin-left: 3px; /* Slight offset to center the play triangle */
    }

    /* Specific adjustments for description text */
    .video-card p {
        color: #495057;
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    hr {
        border-top: 1px solid #e9ecef; /* Lighter separator */
        margin-top: 50px;
        margin-bottom: 50px;
    }

    /* Responsive adjustments */
    @media (max-width: 767px) {
        .promo-page-header {
            font-size: 2rem;
            padding: 30px 20px;
        }
        .promo-page-header .page-title {
            font-size: 2rem;
        }
        .video-banner-title {
            font-size: 1.5rem;
        }
        .video-banner-title span {
            font-size: 1rem;
        }
        .video-poster-content .video-banner-title.main-banner-overlay-title {
            font-size: 1.8rem;
            max-width: 90%; /* Reduce max width on mobile */
        }
        .video-poster-content .video-banner-title.main-banner-overlay-title span {
            font-size: 1.2rem;
        }
        .btn-video {
            width: 50px;
            height: 50px;
            font-size: 1.5rem;
        }
        .video-poster-content {
            padding: 15px; /* Reduce padding on mobile */
        }
    }

    /* Additional mobile fixes */
    @media (max-width: 480px) {
        .video-poster-content .video-banner-title.main-banner-overlay-title {
            font-size: 1.5rem;
        }
        .video-poster-content .video-banner-title.main-banner-overlay-title span {
            font-size: 1rem;
        }
        .btn-video {
            width: 45px;
            height: 45px;
            font-size: 1.3rem;
        }
        .video-poster {
            min-height: 250px; /* Reduce min-height on mobile */
        }
        .video-poster img {
            min-height: 250px;
        }
    }

    /* Debug styles - remove after testing */
    .video-poster {
        border: 2px solid red; /* Temporary border to see container */
    }
    .video-poster-content {
        border: 2px solid blue; /* Temporary border to see overlay */
    }
</style>

<div class="main">
    {{-- <div class="promo-page-header">
        <div class="container">
            <h1 class="page-title">Promotional Videos</h1>
        </div>
    </div> --}}

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Promotional Videos</li>
            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="container">
            <div class="video-card mb-5">
                <div class="video-card-body text-center">
                    <h2 class="title mb-4">Latest Promotional Video</h2>
                    <div class="video-poster">
                        <img src="{{ asset('images/videobanner.png') }}" alt="Promotional Video Poster">
                        <div class="video-poster-content"> {{-- Removed main-video-banner-content --}}
                            <h3 class="video-banner-title main-banner-overlay-title"><span>New Video</span><strong>Support India for Re-election to ITU Council 2027-2030</strong></h3>
                            <a href="https://www.youtube.com/watch?v=YM3Cih_O9Fk" class="btn-video btn-iframe main-video-play-button"><i class="icon-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            {{-- @foreach($PromotionalVideo as $video)
            <div class="video-card">
                <div class="video-card-body">
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h3 class="video-banner-title h3">
                                <span class="text-primary">{{ $video->category }}</span>
                                {{ $video->title }}
                            </h3>
                            <p>{{ $video->description }}</p>
                        </div>
                        <div class="col-md-6">
                            <div class="video-poster">
                                <img src="{{ asset('storage/'.$video->thumbnail) }}" alt="Video Thumbnail">
                                <div class="video-poster-content">
                                    <a href="{{ $video->url}}" class="btn-video btn-iframe"><i class="icon-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach --}}
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // If you have a custom iframe script (like magnific popup), ensure it's loaded.
    // Otherwise, direct YouTube links will open in a new tab.
    // Example for a simple iframe modal might look like this (requires more setup):
    // $(document).ready(function() {
    //     $('.btn-iframe').magnificPopup({
    //         type: 'iframe',
    //         mainClass: 'mfp-fade',
    //         removalDelay: 160,
    //         preloader: false,
    //         fixedContentPos: false
    //     });
    // });
</script>
@endpush