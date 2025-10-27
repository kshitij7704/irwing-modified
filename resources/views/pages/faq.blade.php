@extends('frontend.partials.app')

@section('content')

<style>
    /* Page Header */
    .faq-page-header {
        background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%);
        color: white;
        padding: 40px 30px;
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 30px;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    /* Breadcrumb */
    .breadcrumb-nav {
        background: #f1f3f4;
        padding: 15px 0;
        margin-bottom: 30px;
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

    /* FAQ Card */
    .faq-card {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        margin-bottom: 20px;
        padding: 25px 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .faq-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    .faq-question {
        font-size: 1.4rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 10px;
        cursor: pointer;
        position: relative;
    }
    .faq-question::after {
        content: '+';
        position: absolute;
        right: 0;
        font-size: 1.5rem;
        transition: transform 0.3s ease;
    }
    .faq-card.active .faq-question::after {
        transform: rotate(45deg);
    }

    .faq-answer {
        display: none;
        font-size: 1rem;
        color: #495057;
        line-height: 1.6;
        margin-top: 10px;
    }
    .faq-card.active .faq-answer {
        display: block;
    }

    .faq-date {
        font-size: 0.85rem;
        color: #6c757d;
        margin-top: 10px;
    }

    @media (max-width: 767px) {
        .faq-page-header {
            font-size: 2rem;
            padding: 30px 20px;
        }
        .faq-question {
            font-size: 1.2rem;
        }
    }
</style>

<div class="main">

    
    <div class="page-header text-center" style="background-image: url('{{ asset('front/assets/images/page-header-bg.jpg') }}')">
        <div class="container">
            <h1 class="page-title">FAQ</h1>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="container">
            @foreach($faqs as $faq)
            <div class="faq-card">
                <div class="faq-question">{{ $faq->question }}</div>
                <div class="faq-answer">{{ $faq->answer }}</div>
                <div class="faq-date">Last updated: {{ \Carbon\Carbon::parse($faq->updated_at)->format('d M, Y') }}</div>
            </div>
            @endforeach
        </div>
    </div>

</div>

@endsection

@push('scripts')
<script>
    // Toggle FAQ answers
    document.querySelectorAll('.faq-card').forEach(card => {
        const question = card.querySelector('.faq-question');
        question.addEventListener('click', () => {
            card.classList.toggle('active');
        });
    });
</script>
@endpush
