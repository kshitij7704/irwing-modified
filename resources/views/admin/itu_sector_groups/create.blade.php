@extends('layoutsBackend.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header"><h4>Add ITU Sector Group</h4></div>
        <div class="card-body">
            <form action="{{ route('admin.itu-sector-groups.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>ITU Sector</label>
                    <select name="sector_id" class="form-control" required>
                        <option value="">-- Select Sector --</option>
                        @foreach($sectors as $sector)
                            <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Group Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter group name" required>
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>
                <button class="btn btn-success">Save</button>
                <a href="{{ route('admin.itu-sector-groups.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
