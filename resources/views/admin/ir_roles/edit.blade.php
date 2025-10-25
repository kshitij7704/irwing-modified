@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4>Edit Role</h4>
    <form action="{{ route('admin.ir_roles.update', $ir_role->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ $ir_role->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control text-editor">{{ old('url', $ir_role->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" {{ $ir_role->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$ir_role->status ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.ir_roles.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
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

