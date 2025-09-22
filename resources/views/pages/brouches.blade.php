@extends('frontend.partials.app')

@section('content')

<style>
    .brochure-card {
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .brochure-title {
        font-weight: 600;
        font-size: 1.1rem;
    }
    .brochure-date {
        font-size: 0.9rem;
        color: #6c757d;
    }
    .btn-download {
        text-decoration: none;
    }
</style>

<main class="main">
    <div class="page-header text-center" style="background-image: url('front/assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Brochures</h1>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="breadcrumb-nav"></nav>

    <div class="page-content container">

        <p>Welcome to the Department of Telecommunications Brochures page. Here you can find and download our latest informational brochures regarding policies, programs, and projects.</p>

        <div class="row">

            <!-- Sample Brochure Card -->
            <div class="col-md-6">
                <div class="brochure-card">
                    <div>
                        <div class="brochure-title">Digital India Initiative Brochure</div>
                        <div class="brochure-date">Published: March 2025</div>
                    </div>
                    <a href="{{ asset('storage/brochures/digital_india.pdf') }}" class="btn btn-primary btn-download" target="_blank">Download PDF</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="brochure-card">
                    <div>
                        <div class="brochure-title">Rural Connectivity Programs</div>
                        <div class="brochure-date">Published: January 2025</div>
                    </div>
                    <a href="{{ asset('storage/brochures/rural_connectivity.pdf') }}" class="btn btn-primary btn-download" target="_blank">Download PDF</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="brochure-card">
                    <div>
                        <div class="brochure-title">5G Pilot Project Overview</div>
                        <div class="brochure-date">Published: December 2024</div>
                    </div>
                    <a href="{{ asset('storage/brochures/5g_pilot.pdf') }}" class="btn btn-primary btn-download" target="_blank">Download PDF</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="brochure-card">
                    <div>
                        <div class="brochure-title">Telecom Accessibility Report</div>
                        <div class="brochure-date">Published: November 2024</div>
                    </div>
                    <a href="{{ asset('storage/brochures/accessibility.pdf') }}" class="btn btn-primary btn-download" target="_blank">Download PDF</a>
                </div>
            </div>

        </div>

    </div>
</main>

@endsection
