@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h2>Add Unit Office</h2>
    <form action="{{ route('admin.unit-offices.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Unit</label>
            <select name="unit_id" class="form-control" required>
                <option value="">Select Unit</option>
                @foreach($units as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Office Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('unit-offices.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
