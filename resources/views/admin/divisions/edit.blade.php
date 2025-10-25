@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h2>Edit Division</h2>
    <form action="{{ route('admin.divisions.update', $division->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Unit Office</label>
            <select name="unit_office_id" class="form-control" required>
                @foreach($unitOffices as $id => $name)
                    <option value="{{ $id }}" {{ $division->unit_office_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Division Name</label>
            <input type="text" name="name" class="form-control" value="{{ $division->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.divisions.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
