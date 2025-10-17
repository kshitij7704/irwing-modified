@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">create or update Page Seo</h5>
            @can("pages create")
            <div class="card-body">
                <form action="{{ route('admin.pages.store') }}" method="POST" class="row" enctype="multipart/form-data">
                    @csrf

                    <!-- Title -->
                    <div class="mb-4">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $service->title }}" required readonly
                        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Slug -->
                    <div class="mb-4">
                        <label class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{ $service->slug }}" placeholder="e.g. about-us" readonly>
                        @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Page Content -->
                    <!-- <div class="mb-4">
                        <label class="form-label">Page Content</label>
                        <textarea class="form-control" id="editor" name="content" rows="6">{{ old('content') }}</textarea>
                        @error('content') <small class="text-danger">{{ $message }}</small> @enderror
                    </div> -->

                    <!-- Meta Title -->
                    <div class="mb-4">
                        <label class="form-label">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" value="{{ $page->meta_title ?? '' }}">
                        @error('meta_title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Meta Description -->
                    <div class="mb-4">
                        <label class="form-label">Meta Description</label>
                        <textarea class="form-control" name="meta_description" rows="2">{{ $page->meta_description ?? '' }}</textarea>
                        @error('meta_description') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    
                    <!-- Meta Keywords -->
                    <div class="mb-4">
                        <label class="form-label">Meta Keywords</label>
                        <input type="text" class="form-control" name="meta_keywords" value="{{ $page->meta_keywords ?? '' }}">
                        @error('meta_keywords') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Canonical URL -->
                    <div class="mb-4">
                        <label class="form-label">Canonical URL</label>
                        <input type="text" class="form-control" name="canonical_url" value="{{ $page->canonical_url ?? '' }}">
                        @error('canonical_url') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- OG Title -->
                    <div class="mb-4">
                        <label class="form-label">OG Title</label>
                        <input type="text" class="form-control" name="og_title" value="{{ $page->og_title ?? '' }}">
                        @error('og_title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- OG Description -->
                    <div class="mb-4">
                        <label class="form-label">OG Description</label>
                        <textarea class="form-control" name="og_description" rows="2">{{ $page->og_description ?? '' }}</textarea>
                        @error('og_description') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- OG Image -->
                    <div class="mb-4">
                        <label class="form-label">OG Image</label>
                        <input type="file" class="form-control" name="og_image">
                        @error('og_image') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Twitter Title -->
                    <div class="mb-4">
                        <label class="form-label">Twitter Title</label>
                        <input type="text" class="form-control" name="twitter_title" value="{{ $page->twitter_title ?? '' }}">
                        @error('twitter_title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Twitter Description -->
                    <div class="mb-4">
                        <label class="form-label">Twitter Description</label>
                        <textarea class="form-control" name="twitter_description" rows="2">{{ $page->twitter_description ?? '' }}</textarea>
                        @error('twitter_description') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Twitter Image -->
                    <div class="mb-4">
                        <label class="form-label">Twitter Image</label>
                        <input type="file" class="form-control" name="twitter_image">
                        @error('twitter_image') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <!-- JSON-LD -->
                    <div class="mb-4">
                        <label class="form-label">Meta Data</label>
                        <textarea class="form-control" name="meta_data" rows="4">{{ $page->meta_data ?? '' }}</textarea>
                        @error('meta_data') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <!-- JSON-LD -->
                    <div class="mb-4">
                        <label class="form-label">Structured Data (JSON-LD)</label>
                        <textarea class="form-control" name="json_ld" rows="4">{{ $page->json_ld ?? '' }}</textarea>
                        @error('json_ld') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Submit -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-2">Create Page</button>
                        <a href="{{ route('admin.pages.index') }}" class="btn btn-label-secondary">Cancel</a>
                    </div>
                </form>
            </div>
            @endcan
        </div>
    </div>
</div>

{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>CKEDITOR.replace('editor');</script>
@endsection
