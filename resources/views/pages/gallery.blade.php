@extends('layout.app')

@section('content')
<!-- Hero Section -->
<section class="container-fluid d-flex align-items-center justify-content-center min-vh-75 mt-5" style="background: linear-gradient(180deg, #fff 60%, #fffbe6 100%); min-height: 60vh;">
    <div class="w-100 mt-5" style="max-width: 900px;">
        {{-- <div class="d-flex justify-content-center mb-3">
            <span class="badge rounded-pill bg-light text-dark px-4 py-2 shadow-sm" style="font-size: 1rem;">Introducing our new components <a href="#" class="ms-1 text-decoration-underline text-dark">Learn more <i class="bi bi-arrow-right"></i></a></span>
        </div> --}}
        <h1 class="display-3 fw-bold text-center mb-4" style="letter-spacing: -2px;">Welcome to our Gallery</h1>
        <p class="lead text-center mb-5 text-secondary">A visual journey through AI Lifebot's key moments. From press releases to webinars and events, explore the highlights that shape our story.</p>
        {{-- <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#" class="btn btn-dark btn-lg px-4">Get Started</a>
            <a href="#" class="btn btn-outline-dark btn-lg px-4 d-flex align-items-center"><i class="bi bi-github me-2"></i>GitHub</a>
        </div> --}}
    </div>
</section>

<!-- Custom CSS for Masonry Gallery -->
<style>
    .masonry-gallery-container {
        column-count: 3;
        column-gap: 1.5rem;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .masonry-gallery-item {
        display: inline-block;
        width: 100%;
        margin-bottom: 1.5rem;
        break-inside: avoid;
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    .masonry-gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
    .masonry-gallery-img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
    }
    
    .masonry-gallery-item:hover .masonry-gallery-img {
        transform: scale(1.05);
    }
    
    .masonry-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0,0,0,0.8));
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: flex-start;
        padding: 1rem;
        opacity: 1;
        transition: opacity 0.3s ease;
    }
    
    .masonry-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin: 0 0 0.5rem 0;
        line-height: 1.3;
        text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        text-align: left;
    }
    
    .masonry-desc {
        font-size: 0.9rem;
        opacity: 0.95;
        line-height: 1.4;
        margin: 0;
        text-shadow: 0 1px 3px rgba(0,0,0,0.5);
        text-align: left;
    }
    
    .video-play-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(255, 255, 255, 0.95);
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        z-index: 2;
    }
    
    .video-play-icon i {
        font-size: 1.5rem;
        color: #007bff;
    }
    
    .masonry-gallery-item:hover .video-play-icon {
        background: rgba(255, 255, 255, 1);
        transform: translate(-50%, -50%) scale(1.1);
    }
    
    @media (max-width: 991px) {
        .masonry-gallery-container {
            column-count: 2;
            column-gap: 1rem;
        }
        
        .masonry-gallery-item {
            margin-bottom: 1rem;
        }
    }
    
    @media (max-width: 576px) {
        .masonry-gallery-container {
            column-count: 1;
            column-gap: 0.8rem;
        }
        
        .masonry-gallery-item {
            margin-bottom: 0.8rem;
        }
        
        .masonry-overlay {
            padding: 0.8rem;
        }
        
        .masonry-title {
            font-size: 1rem;
        }
        
        .masonry-desc {
            font-size: 0.85rem;
        }
    }
</style>

<section class="py-5" style="background: linear-gradient(180deg, #fff 60%, #f7fafd 100%);">
    <div class="container">
        <div class="masonry-gallery-container">
            @foreach($galleryItems as $item)
                <div class="masonry-gallery-item">
                    @if($item->type === 'video')
                        <a href="{{ asset($item->src) }}" class="glightbox" data-gallery="gallery1" data-type="video" data-title="{{ $item->heading }}" data-description="{{ $item->desc }}">
                            <img src="{{ asset($item->poster) }}" alt="{{ $item->heading }}" class="masonry-gallery-img" loading="lazy">
                            <div class="video-play-icon">
                                <i class="bi bi-play-circle-fill"></i>
                            </div>
                            <div class="masonry-overlay">
                                <h5 class="masonry-title">{{ $item->heading }}</h5>
                                <p class="masonry-desc">{{ $item->desc }}</p>
                            </div>
                        </a>
                    @else
                        <a href="{{ asset($item->src) }}" class="glightbox" data-gallery="gallery1" data-title="{{ $item->heading }}" data-description="{{ $item->desc }}">
                            <img src="{{ asset($item->src) }}" alt="{{ $item->heading }}" class="masonry-gallery-img" loading="lazy">
                            <div class="masonry-overlay">
                                <h5 class="masonry-title">{{ $item->heading }}</h5>
                                <p class="masonry-desc">{{ $item->desc }}</p>
                            </div>
                        </a>
                    @endif
                </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
