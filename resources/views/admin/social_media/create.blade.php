@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h2>Add Social Media</h2>
    <form action="{{ route('admin.social_media.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Platform</label>
            <select name="platform" class="form-control" required>
                @php
                    $platforms = ['instagram', 'facebook', 'twitter', 'youtube', 'linkedin'];
                @endphp

                    <option value="" selected desabled>
                        Select a platform
                    </option>
                @foreach($platforms as $platform)
                    <option value="{{ $platform }}">
                        {{ ucfirst($platform) }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>URL</label>
            <input type="url" name="url" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" name="status" value="1" class="form-check-input" checked>
            <label class="form-check-label">Active</label>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
