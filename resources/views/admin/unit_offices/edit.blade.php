@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h2>Edit Unit Office</h2>
    <form action="{{ route('admin.unit-offices.update', $unitOffice->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Unit</label>
            <select name="unit_id" class="form-control" required>
                @foreach($units as $id => $name)
                    <option value="{{ $id }}" {{ $unitOffice->unit_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Office Name</label>
            <input type="text" name="name" class="form-control" value="{{ $unitOffice->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.unit-offices.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
