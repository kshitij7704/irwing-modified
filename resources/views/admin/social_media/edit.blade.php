@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h2>Edit Social Media</h2>
    <form action="{{ route('admin.social_media.update', $social_media->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Platform</label>
            <input type="text" name="platform" class="form-control" value="{{ $social_media->platform }}" required>
        </div>
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $social_media->title }}" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $social_media->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>URL</label>
            <input type="url" name="url" class="form-control" value="{{ $social_media->url }}" required>
        </div>
        <div class="mb-3">
            <label>Image</label><br>
            @if($social_media->image)
                <img src="{{ asset('storage/' . $social_media->image) }}" width="80"><br><br>
            @endif
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" name="status" value="1" class="form-check-input" {{ $social_media->status ? 'checked' : '' }}>
            <label class="form-check-label">Active</label>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
