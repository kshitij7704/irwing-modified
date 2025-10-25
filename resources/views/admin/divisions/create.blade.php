@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h2>Add Division</h2>
    <form action="{{ route('admin.divisions.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Unit Office</label>
            <select name="unit_office_id" class="form-control" required>
                <option value="">Select Unit Office</option>
                @foreach($unitOffices as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Division Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('admin.divisions.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
