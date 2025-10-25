@extends('layoutsBackend.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header"><h4>Edit ITU Sector</h4></div>
        <div class="card-body">
            <form action="{{ route('admin.itu-sectors.update', $sector->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label>Agency</label>
                    <select name="agency_id" class="form-control" required>
                        @foreach($agencies as $agency)
                            <option value="{{ $agency->id }}" {{ $agency->id == $sector->agency_id ? 'selected' : '' }}>
                                {{ $agency->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Sector Name</label>
                    <input type="text" name="name" value="{{ $sector->name }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ $sector->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.itu-sectors.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
