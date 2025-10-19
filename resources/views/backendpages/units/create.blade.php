@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl">
    <div class="card">
        <h5 class="card-header">Add Unit</h5>
        <div class="card-body">
            <form action="{{ route('admin.units.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Unit Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                    @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <button class="btn btn-primary">Save</button>
                <a href="{{ route('admin.units.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
