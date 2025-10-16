@extends('frontend.partials.app')

@section('content')

<style>
    /* Page header */
    .page-header {
        padding: 50px 0;
        color: #fff;
        background-size: cover;
        background-position: center;
    }

    /* Forum links section */
    .forums-section {
        max-width: 1100px;
        margin: 30px auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 15px;
        padding: 0 15px;
    }
    .forum-card {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px;
        background: #f8f9fa;
        border: 1px solid #e1e8ed;
        border-radius: 10px;
        font-weight: 600;
        color: #0d6efd;
        text-decoration: none;
        transition: all 0.2s ease-in-out;
        text-align: center;
    }
    .forum-card:hover {
        background: #0d6efd;
        color: #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
</style>

<main class="main">
    <div class="page-header text-center" style="background-image: url('{{ asset('front/assets/images/page-header-bg.jpg') }}')">
        <div class="container">
            <h1 class="page-title">International Forums</h1>
        </div>
    </div>

    <!-- Forums Links -->
    <div class="forums-section">
        @foreach($InternationalForm as $data)
        <a href="{{$data->url}}" class="forum-card" target="_blank">{{$data->title}}</a>
        @endforeach
    </div>
</main>

@endsection
