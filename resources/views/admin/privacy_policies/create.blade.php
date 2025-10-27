@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl">
    <h4>Add Privacy Policy</h4>

    <form action="{{ route('admin.privacy_policies.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Content</label>
            <textarea name="content" class="form-control text-editor"></textarea>
        </div>


        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-select">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button class="btn btn-success">Save</button>
        <a href="{{ route('admin.privacy_policies.index') }}" class="btn btn-secondary">Back</a>
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
        placeholder: 'Write Content here...',
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

 