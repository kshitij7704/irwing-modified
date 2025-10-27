@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h2>Edit Engagement</h2>

    <form method="POST" action="{{ route('engagements.update', $engagement->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" 
                   value="{{ old('title', $engagement->title) }}" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description', $engagement->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Current Image</label><br>
            @if ($engagement->image && file_exists(public_path('storage/' . $engagement->image)))
                <img src="{{ asset('storage/' . $engagement->image) }}" 
                     alt="Engagement Image" 
                     class="img-thumbnail mb-2" 
                     width="150">
            @else
                <p>No image uploaded</p>
            @endif
        </div>

        <div class="mb-3">
            <label>Change Image</label>
            <input type="file" name="image" class="form-control">
            <small class="text-muted">Leave blank to keep the current image.</small>
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" {{ old('status', $engagement->status) == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('status', $engagement->status) == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button class="btn btn-primary">Update Engagement</button>
        <a href="{{ route('engagements.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
