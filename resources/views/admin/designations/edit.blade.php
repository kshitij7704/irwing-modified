@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h1>Edit Designation</h1>

    <form action="{{ route('designations.update', $designation->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $designation->name }}" required>
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-select" required>
                <option value="active" {{ $designation->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $designation->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
