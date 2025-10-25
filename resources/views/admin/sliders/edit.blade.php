@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <h5 class="card-header">Edit Slider</h5>
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
                <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Slider Title </label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ old('title', $slider->title) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Redirect Link (optional)</label>
                        <input type="url" name="link" id="link" class="form-control"
                            value="{{ old('link', $slider->link) }}" placeholder="https://example.com">
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $slider->date) }}" >
                    </div>

      
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control text-editor"></textarea>
                    </div>


                    <div class="mb-3">
                        <label for="image" class="form-label">Current Image</label><br>
                        <img src="{{ asset('storage/' . $slider->image) }}" alt="Slider Image" width="200"
                            class="mb-3"><br>
                        <label for="image" class="form-label">Replace Image (optional)</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Update Slider</button>
                    <a href="{{ route('sliders.index') }}" class="btn btn-secondary">Cancel</a>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Summernote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

<script>
$(document).ready(function() {
    $('.text-editor').summernote({
        height: 300,
        placeholder: 'Write description here...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['fontsize', 'color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview']]
        ]
    });
});
</script>
@endpush

