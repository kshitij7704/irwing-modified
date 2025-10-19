@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl">
    <div class="card">
        <h5 class="card-header">Add Unit Office</h5>
        <div class="card-body">
            <form action="{{ route('admin.unit-offices.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Unit Office Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                    @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Select Unit</label>
                    <select name="unit_id" class="form-control" required>
                        <option value="">-- Select Unit --</option>
                        @foreach($units as $unit)
                            <option value="{{ $unit->id }}" {{ old('unit_id') == $unit->id ? 'selected' : '' }}>{{ $unit->name }}</option>
                        @endforeach
                    </select>
                    @error('unit_id')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <button class="btn btn-primary">Save</button>
                <a href="{{ route('admin.unit-offices.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
