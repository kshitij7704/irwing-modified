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
                        <label for="title" class="form-label">Slider Title (optional)</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ old('title', $slider->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Redirect Link (optional)</label>
                        <input type="url" name="link" id="link" class="form-control"
                            value="{{ old('link', $slider->link) }}" placeholder="https://example.com">
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
