@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <h5 class="card-header">Edit Promotional Video</h5>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

              <form action="{{ route('promotional_videos.update', $promotionalVideo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Category</label>
            <input type="text" name="category" class="form-control" value="{{ $promotionalVideo->category }}">
        </div>
        <div class="mb-3">
            <label>Title *</label>
            <input type="text" name="title" class="form-control" value="{{ $promotionalVideo->title }}" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $promotionalVideo->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Upload Video (optional)</label>
            <input type="file" name="path" class="form-control">
            @if($promotionalVideo->path)
                <small>Current: {{ $promotionalVideo->path }}</small>
            @endif
        </div>
        <div class="mb-3">
            <label>YouTube URL (optional)</label>
            <input type="text" name="url" class="form-control" value="{{ $promotionalVideo->url }}">
        </div>
        <div class="mb-3">
            <label>Thumbnail (Image)</label>
            <input type="file" name="thumbnail" class="form-control">
            @if($promotionalVideo->thumbnail)
                <img src="{{ asset('storage/'.$promotionalVideo->thumbnail) }}" width="80">
            @endif
        </div>
        <button class="btn btn-success">Update</button>
    </form>

            </div>
        </div>
    </div>
</div>
@endsection
