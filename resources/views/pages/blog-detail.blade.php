@extends('layout.app')

@section('content')
    <!-- Hero Section -->
    <section class="position-relative bg-dark text-white d-flex align-items-end justify-content-center"
        style="background: linear-gradient(180deg, #fff 60%, #fffbe6 100%);height: 45vh; min-height: 420px; overflow: hidden;">
        {{-- <img src="{{ $blog['featured_image'] }}" alt="{{ $blog['title'] }}"
            onerror="this.onerror=null;this.src='{{ asset('assets/img/default.jpg') }}';"
            class="position-absolute top-0 start-0 w-100 h-100"
            style="object-fit: cover; opacity: 0.65;"> --}}
        <div class="container position-relative z-2 pb-4 d-flex flex-column align-items-center text-center"
            style="max-width: 900px; padding-left: 1rem; padding-right: 1rem;">
            <h1 class="display-4 fw-bold mb-2 text-wrap text-break" style="overflow: hidden; text-overflow: ellipsis; font-size:clamp(2rem,6vw,2.8rem);">
                {{ $blog['title'] }}
            </h1>
            <div class="lead text-light-emphasis small">
                By {{ $blog['author_name'] }} &bull; {{ $blog['created_at']->format('M d, Y') }}
            </div>
        </div>
    </section>

    <!-- Blog Content & Sidebar -->
    <section class="container py-5">
        <div class="row g-4">
            <!-- Blog Content -->
            <div class="col-lg-12">
                @if(!empty($blog['featured_image']))
                    <div class="mb-4">
                        <img src="{{ asset($blog['featured_image']) }}" alt="{{ $blog['title'] }}"
                            onerror="this.onerror=null;this.src='{{ asset('assets/img/default.jpg') }}';"
                            class="img-fluid rounded mb-3 w-100"
                            style="width: 100%; height: 450px; object-fit: cover; max-width: 100%;">
                    </div>
                @endif
                <article class="bg-white p-4 rounded shadow-sm" style="min-height: 300px;">
                {!! html_entity_decode($blog['content']) !!}
                </article>
            </div>
            <!-- Sidebar -->
            {{-- <div class="col-lg-4" style="z-index: 1">
                <div class="position-sticky" style="top: 30px;">
                    <div class="card shadow-sm rounded-4 overflow-hidden">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <ul class="nav nav-tabs nav-justified" id="blogTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="latest-tab" data-bs-toggle="tab"
                                        data-bs-target="#latest" type="button" role="tab" aria-controls="latest"
                                        aria-selected="true">Latest</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="related-tab" data-bs-toggle="tab" data-bs-target="#related"
                                        type="button" role="tab" aria-controls="related"
                                        aria-selected="false">Related</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body tab-content p-0" id="blogTabContent">
                            <div class="tab-pane fade show active" id="latest" role="tabpanel"
                                aria-labelledby="latest-tab">
                                <ul class="list-unstyled mb-0">
                                    @foreach ($latest as $post)
                                        <li class="d-flex align-items-center border-bottom px-3 py-3 bg-white">
                                            <div class="sidebar-thumb rounded me-3 flex-shrink-0"
                                                style="width: 60px; height: 60px; background: #f4f4f4; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                                                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <div style="min-width:0;">
                                                <a href="{{ route('blog.show', $post['slug']) }}"
                                                    class="fw-semibold text-dark text-decoration-none"
                                                    style="font-size: 1rem; line-height: 1.3;">{{ $post['title'] }}</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="related" role="tabpanel" aria-labelledby="related-tab">
                                <ul class="list-unstyled mb-0">
                                    @foreach ($related as $post)
                                        <li class="d-flex align-items-center border-bottom px-3 py-3 bg-white">
                                            <div class="sidebar-thumb rounded me-3 flex-shrink-0"
                                                style="width: 60px; height: 60px; background: #f4f4f4; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                                                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <div style="min-width:0;">
                                                <a href="{{ route('blog.show', $post['slug']) }}"
                                                    class="fw-semibold text-dark text-decoration-none"
                                                    style="font-size: 1rem; line-height: 1.3;">{{ $post['title'] }}</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
