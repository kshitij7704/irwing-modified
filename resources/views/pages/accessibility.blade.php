@extends('frontend.partials.app')

@section('content')

<style>
    /* Page Header */
    .accessibility-page-header {
        background: linear-gradient(135deg, #1abc9c 0%, #16a085 100%);
        color: white;
        padding: 50px 30px;
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 40px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    /* Breadcrumb */
    .breadcrumb-nav {
        background: #ecf0f1;
        padding: 15px 0;
        margin-bottom: 40px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    .breadcrumb {
        background: transparent;
        margin: 0;
        padding: 0 15px;
        justify-content: center;
    }
    .breadcrumb-item a {
        color: #16a085;
        text-decoration: none;
        font-weight: 500;
    }
    .breadcrumb-item a:hover {
        text-decoration: underline;
    }
    .breadcrumb-item.active {
        color: #7f8c8d;
    }

    /* Accessibility Card */
    .accessibility-card {
        background: #fff;
        border-left: 6px solid #16a085;
        border-radius: 15px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.08);
        margin-bottom: 30px;
        padding: 30px 25px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .accessibility-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }
    .accessibility-card h3 {
        font-size: 1.6rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 15px;
    }
    .accessibility-card p {
        font-size: 1rem;
        line-height: 1.7;
        color: #34495e;
        margin-bottom: 15px;
    }
    .accessibility-date {
        font-size: 0.85rem;
        color: #7f8c8d;
        margin-top: 10px;
        font-style: italic;
    }

    /* Highlighted notice */
    .accessibility-card .highlight {
        background-color: #d1f2eb;
        border-left: 4px solid #16a085;
        padding: 10px 15px;
        border-radius: 8px;
        margin-bottom: 15px;
        color: #1abc9c;
        font-weight: 500;
    }

    /* Responsive */
    @media (max-width: 767px) {
        .accessibility-page-header {
            font-size: 2rem;
            padding: 35px 20px;
        }
        .accessibility-card h3 {
            font-size: 1.4rem;
        }
    }
</style>

<div class="main">

    
    <div class="page-header text-center" style="background-image: url('{{ asset('front/assets/images/page-header-bg.jpg') }}')">
        <div class="container">
            <h1 class="page-title">Accessibility Statement</h1>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accessibility Statement</li>
            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="container">
            @foreach($accessibilities as $accessibility)
            <div class="accessibility-card">
                <h3>{{ $accessibility->title }}</h3>

                {{-- Optional highlighted notice --}}
                @if($accessibility->highlight)
                <div class="highlight">{{ $accessibility->highlight }}</div>
                @endif

                <p>{!! $accessibility->content !!}</p>
                <div class="accessibility-date">Last updated: {{ \Carbon\Carbon::parse($accessibility->updated_at)->format('d M, Y') }}</div>
            </div>
            @endforeach
        </div>
    </div>

</div>

@endsection
