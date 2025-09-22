@extends('frontend.partials.app')

@section('content')

<style>
    .press-card {
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        background-color: #fff;
    }
    .press-title {
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 5px;
    }
    .press-date {
        font-size: 0.9rem;
        color: #6c757d;
        margin-bottom: 10px;
    }
    .btn-download {
        text-decoration: none;
    }
</style>

<main class="main">
    <div class="page-header text-center" style="background-image: url('front/assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Press Releases</h1>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="breadcrumb-nav"></nav>

    <div class="page-content container">

        <p>Stay updated with the latest press releases from the Department of Telecommunications. You can view or download official documents and announcements below.</p>

        <div class="row">

            <!-- Sample Press Release Card -->
            <div class="col-md-6">
                <div class="press-card">
                    <div class="press-title">Launch of 5G Pilot Project in Urban Areas</div>
                    <div class="press-date">March 15, 2025</div>
                    <p>The Department of Telecommunications has officially launched the 5G pilot project in select urban regions to enhance connectivity and digital infrastructure.</p>
                    <a href="{{ asset('storage/press_releases/5g_pilot.pdf') }}" class="btn btn-primary btn-download" target="_blank">Download PDF</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="press-card">
                    <div class="press-title">Telecom Accessibility Initiative Award</div>
                    <div class="press-date">January 20, 2025</div>
                    <p>The department has been recognized nationally for improving telecommunication access in rural areas, expanding mobile networks and digital services.</p>
                    <a href="{{ asset('storage/press_releases/accessibility_award.pdf') }}" class="btn btn-primary btn-download" target="_blank">Download PDF</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="press-card">
                    <div class="press-title">National Fiber Optic Expansion Completed</div>
                    <div class="press-date">November 10, 2024</div>
                    <p>Fiber optic networks have been expanded to over 1,000 villages, improving high-speed internet access in remote areas.</p>
                    <a href="{{ asset('storage/press_releases/fiber_expansion.pdf') }}" class="btn btn-primary btn-download" target="_blank">Download PDF</a>
                </div>
            </div>

        </div>

    </div>
</main>

@endsection
