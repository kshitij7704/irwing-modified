@extends('frontend.partials.app')

@section('content')

<style>
    .brochure-card {
        border: 1px solid #dee2e6;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
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

        <p>Welcome to the Department of Telecommunications Brochures page. Here you can find and download our latest
            informational brochures regarding policies, programs, and projects.</p>

        <div class="row">

            <!-- Sample Brochure Card -->
            @foreach($brochures as $data)
            <div class="col-md-6">
                <div class="brochure-card">
                    <div>
                        <div class="brochure-title">{{ $data->title }}</div>
                        <div class="brochure-date">Published: {{ $data->published_at->format('F Y') }}</div>
                    </div>
                    <a href="{{ asset('storage/'.$data->file_path) }}" class="btn btn-primary btn-download"
                        download class="btn btn-primary">
                        Download PDF
                    </a>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</main>

@endsection
