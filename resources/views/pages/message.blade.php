@extends('frontend.partials.app')

@section('content')

<style>
    .minister-section {
        max-width            <h1 class="page-title">Messages from Hon'ble Ministers</h1> 900px;
        margin: 40px auto;
        padding: 30px;
        background-color: #f8f9fa;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
    }

    .minister-image {
        flex: 0 0 150px;
        margin-right: 30px;
        border-radius: 10px;
        overflow: hidden;
    }

    .minister-image img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
    }

    .minister-content {
        flex: 1;
    }

    .minister-name {
        font-weight: 700;
        font-size: 1.4rem;
        margin-bottom: 5px;
        color: #0d6efd;
    }

    .minister-designation {
        font-size: 1rem;
        font-weight: 500;
        color: #6c757d;
        margin-bottom: 15px;
    }

    .minister-message {
        font-size: 1rem;
        line-height: 1.6;
        color: #343a40;
    }

    .cards-section {
        margin-top: 40px;
    }

    .card-tab {
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        margin-bottom: 20px;
        transition: transform 0.2s;
        cursor: pointer;
    }

    .card-tab:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.1);
    }

    .card-tab .card-body {
        padding: 20px;
    }

    .card-tab-title {
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 10px;
        color: #0d6efd;
    }

    .card-tab-text {
        font-size: 0.95rem;
        color: #495057;
    }

    @media screen and (max-width: 576px) {
        .minister-section {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .minister-image {
            margin-right: 0;
            margin-bottom: 20px;
        }
    }
</style>

<main class="main">
    <div class="page-header text-center" style="background-image: url('front/assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">
                {{ $minister->title }}
            </h1>
        </div>
    </div>

    <div class="page-content container">
        <!-- Minister Section -->
        
        <div class="minister-section">
            <div class="minister-image">
                <img src="{{ asset('storage/' . $minister->photo) }}" alt="Senior Minister of State for Communications">
            </div>
            <div class="minister-content">
                <div class="minister-name">{{$minister->minister_name}}</div>
                <div class="minister-designation">{{$minister->postion}}</div>
                <div class="minister-message">
                    <p>{{$minister->message}}</p>
                </div>
            </div>
        </div>      <!-- Cards / Tabs Section -->
        <!-- <div class="cards-section row mt-5">
            <div class="col-md-6">
                <div class="card-tab">
                    <div class="card-body">
                        <div class="card-tab-title">Key Initiatives</div>
                        <div class="card-tab-text">
                            Launch of 5G pilot projects, expansion of broadband connectivity, and digital infrastructure development across urban and rural areas.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-tab">
                    <div class="card-body">
                        <div class="card-tab-title">Programs</div>
                        <div class="card-tab-text">
                            Rural Connectivity Programs, Digital India initiatives, Mobile Network Expansion, and National Fiber Optic Projects to improve communication services.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-tab">
                    <div class="card-body">
                        <div class="card-tab-title">Achievements</div>
                        <div class="card-tab-text">
                            Successful 5G pilot launch, reduction in call drop rates, telecom accessibility awards, and fiber optic expansion in over 1,000 villages.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-tab">
                    <div class="card-body">
                        <div class="card-tab-title">Future Plans</div>
                        <div class="card-tab-text">
                            Further expansion of 5G services, bridging the digital divide, improving rural connectivity, and implementing advanced telecommunication technologies nationwide.
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
</main>

@endsection
