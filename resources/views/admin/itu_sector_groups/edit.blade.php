@extends('layoutsBackend.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header"><h4>Edit ITU Sector Group</h4></div>
        <div class="card-body">
            <form action="{{ route('admin.itu-sector-groups.update', $group->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label>ITU Sector</label>
                    <select name="sector_id" class="form-control" required>
                        @foreach($sectors as $sector)
                            <option value="{{ $sector->id }}" {{ $sector->id == $group->sector_id ? 'selected' : '' }}>
                                {{ $sector->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Group Name</label>
                    <input type="text" name="name" value="{{ $group->name }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ $group->description }}</textarea>
                </div>
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('admin.itu-sector-groups.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
