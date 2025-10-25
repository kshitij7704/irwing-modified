@extends('layoutsBackend.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header"><h4>Add ITU Sector</h4></div>
        <div class="card-body">
            <form action="{{ route('admin.itu-sectors.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Agency</label>
                    <select name="agency_id" class="form-control" required>
                        <option value="">-- Select Agency --</option>
                        @foreach($agencies as $agency)
                            <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Sector Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('admin.itu-sectors.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
