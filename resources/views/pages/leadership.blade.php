@extends('layout.app')

@section('content')
<style>
    :root {
        --primary-color: #c5874d;
        --secondary-color: #9b6976;
        --dark-color: #1a1a2e;
        --light-color: #f8f9fa;
    }
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: var(--dark-color);
        line-height: 1.6;
    }
    .hero-section {
        background: linear-gradient(90deg, #c5874d, #9b6976);
        color: white;
        padding: 5rem 0;
        position: relative;
        overflow: hidden;
        margin-top: 150px;
    }
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjA1KSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgZmlsbD0idXJsKCNwYXR0ZXJuKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIvPjwvc3ZnPg==');
    }
    .hero-section h1 {
        color: #fff;
        text-shadow: 0 2px 8px rgba(0,0,0,0.25), 0 1px 2px rgba(0,0,0,0.1);
    }
    .hero-section p, .hero-section .lead {
        color: #f5e9d7;
    }
    .leadership-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        margin-bottom: 2rem;
        overflow: hidden;
    }
    .leadership-card:hover {
        transform: translateY(-10px);
    }
    .leadership-img {
        height: 300px;
        object-fit: cover;
        object-position: top;
    }
    .card-body {
        padding: 2rem;
    }
    .name-title {
        color: var(--primary-color);
        font-weight: 700;
        margin-bottom: 1.5rem;
        position: relative;
    }
    .name-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 50px;
        height: 3px;
        background-color: var(--secondary-color);
    }
    .leadership-point {
        margin-bottom: 1.2rem;
        position: relative;
        padding-left: 1.5rem;
    }
    .leadership-point::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0.7em;
        width: 8px;
        height: 8px;
        background-color: var(--secondary-color);
        border-radius: 50%;
    }
    .cta-section {
        background-color: #f8f9fa;
        padding: 4rem 0;
        text-align: center;
    }
    .section-title {
        position: relative;
        margin-bottom: 3rem;
        font-weight: 700;
    }
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: var(--secondary-color);
    }
    .btn-primary {
        background-color: var(--primary-color);
        border: none;
        padding: 12px 30px;
        border-radius: 10px;
        font-weight: 600;
        margin-top: 1.5rem;
    }
    .btn-primary:hover {
        background-color: #b07a43;
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Meet the AI LifeBOT Leadership Team</h1>
                <p class="lead mb-4">Innovators Driving the Future of AI-Powered Customer Service</p>
                <p>At AI LifeBOT, our leadership team is dedicated to transforming customer interactions through cutting-edge AI solutions. With a wealth of experience in AI, automation, and business strategy, our leaders are committed to innovation, excellence, and delivering impactful AI-driven solutions to businesses worldwide.</p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team -->
<section class="py-5 my-5">
    <div class="container">
        <div class="row justify-content-center">
             <!-- Puneet Agrawal -->
             <div class="col-lg-8 mb-5">
                <div class="leadership-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('assets\img\Leaders\Puneet.jpg') }}" class="img-fluid leadership-img w-100 h-100" alt="Puneet Agrawal">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body h-100">
                                <h3 class="name-title">Puneet Agrawal – Founder & CEO</h3>
                                <div class="leadership-point">
                                    <strong>Strategic Growth & Business Development:</strong> As the Founder & CEO, Puneet Agrawal plays a vital role in business strategy, sales, and scalable growth, ensuring AI LifeBOT expands its reach and impact in the AI customer service industry.
                                </div>
                                <div class="leadership-point">
                                    <strong>Technology Visionary:</strong> With deep expertise in AI-powered automation and enterprise solutions, Puneet Agrawal has been instrumental in shaping AI LifeBOT's product innovations, driving the adoption of AI agents across industries.
                                </div>
                                <div class="leadership-point">
                                    <strong>Commitment to Innovation:</strong> Dedicated to delivering scalable, future-ready AI solutions, Puneet Agrawal ensures that AI LifeBOT remains at the cutting edge of customer service automation.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swati Gupta -->
            <div class="col-lg-8">
                <div class="leadership-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('assets\img\Leaders\Swati.jpg') }}" class="img-fluid leadership-img w-100 h-100" alt="Swati Gupta">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body h-100">
                                <h3 class="name-title">Swati Gupta –  Co-Founder</h3>
                                <div class="leadership-point">
                                    <strong>Visionary Leadership:</strong> As the  Co-Founder of AI LifeBOT, Swati Gupta brings extensive experience in AI, digital transformation, and business innovation. Her vision is to redefine customer service with intelligent automation.
                                </div>
                                <div class="leadership-point">
                                    <strong>AI & Tech Expertise:</strong> A pioneer in AI-driven solutions, Swati Gupta has been at the forefront of conversational AI and machine learning, ensuring that AI LifeBOT delivers next-gen automation that enhances customer engagement and operational efficiency.
                                </div>
                                <div class="leadership-point">
                                    <strong>Entrepreneurial Excellence:</strong> With a strong background in business leadership and technology, Swati Gupta has successfully led multiple initiatives in AI education, sustainable tech, and business transformation, making AI LifeBOT a global leader in the AI-powered customer service industry.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title">Join Us in Shaping the Future of AI-Powered Customer Service</h2>
                <p class="lead mb-4">Our leadership team is committed to empowering businesses with AI-driven solutions that enhance customer experience, streamline operations, and drive growth.</p>
                <p>Want to partner with us? Contact AI LifeBOT today and be part of the AI revolution!</p>
                <a href="{{ route('reuseablepage', ['service' => 'contact-us']) }}" class="btn btn-primary btn-lg">Contact Us</a>
            </div>
        </div>
    </div>
</section>
@endsection 