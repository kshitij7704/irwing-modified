@extends('frontend.partials.app')

@section('content')

<style>
    .structure-section {
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
    }

    .structure-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .structure-header h1 {
        font-weight: 700;
        color: #0d6efd;
    }

    /* Cards layout */
    .structure-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .structure-card {
        background-color: #fff;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .structure-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .structure-card img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
    }

    .structure-card h4 {
        font-size: 1.1rem;
        color: #0d6efd;
        margin-bottom: 5px;
    }

    .structure-card p {
        font-size: 0.95rem;
        color: #495057;
    }

    /* Connector lines (optional for hierarchy style) */
    .structure-connector {
        text-align: center;
        font-size: 2rem;
        color: #0d6efd;
        margin: 10px 0;
    }

</style>

<main class="main">
    <div class="page-header text-center" style="background-image: url('front/assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Structure of IR Wing</h1>
        </div>
    </div>

    <div class="page-content structure-section">
        <p class="text-center mb-5">The Industrial Relations Wing has a hierarchical structure to ensure smooth communication and effective implementation of policies across the telecom sector.</p>

        <!-- Top Level -->
        <div class="structure-cards">
            <div class="structure-card">
                <img src="https://via.placeholder.com/80" alt="Head of IR Wing">
                <h4>Head of IR Wing</h4>
                <p>Mr. XYZ</p>
            </div>
        </div>

        <div class="structure-connector">↓</div>

        <!-- Middle Level -->
        <div class="structure-cards">
            <div class="structure-card">
                <img src="https://via.placeholder.com/80" alt="Senior Officer">
                <h4>Senior Officer</h4>
                <p>Responsible for Policy Implementation</p>
            </div>
            <div class="structure-card">
                <img src="https://via.placeholder.com/80" alt="Assistant Officer">
                <h4>Assistant Officer</h4>
                <p>Oversees Day-to-Day Operations</p>
            </div>
        </div>

        <div class="structure-connector">↓</div>

        <!-- Lower Level -->
        <div class="structure-cards">
            <div class="structure-card">
                <img src="https://via.placeholder.com/80" alt="Field Staff">
                <h4>Field Staff</h4>
                <p>Handles Local Dispute Resolution</p>
            </div>
            <div class="structure-card">
                <img src="https://via.placeholder.com/80" alt="Support Staff">
                <h4>Support Staff</h4>
                <p>Administrative & Documentation Support</p>
            </div>
            <div class="structure-card">
                <img src="https://via.placeholder.com/80" alt="Technical Staff">
                <h4>Technical Staff</h4>
                <p>Supports Digital Infrastructure & Tech Systems</p>
            </div>
        </div>

    </div>
</main>

@endsection
