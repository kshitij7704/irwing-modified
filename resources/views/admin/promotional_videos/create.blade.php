@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <h5 class="card-header">Add Promotional Video</h5>
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
    <form action="{{ route('promotional_videos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Category</label>
            <input type="text" name="category" class="form-control">
        </div>
        <div class="mb-3">
            <label>Title *</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Upload Video (optional)</label>
            <input type="file" name="path" class="form-control">
        </div>
        <div class="mb-3">
            <label>YouTube URL (optional)</label>
            <input type="text" name="url" class="form-control">
        </div>
        <div class="mb-3">
            <label>Thumbnail (Image)</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>
        <button class="btn btn-success">Save</button>
    </form>

            </div>
        </div>
    </div>
</div>
@endsection
