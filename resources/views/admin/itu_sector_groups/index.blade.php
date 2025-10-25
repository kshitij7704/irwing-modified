@extends('layoutsBackend.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>ITU Sector Groups</h4>
            <a href="{{ route('admin.itu-sector-groups.create') }}" class="btn btn-primary btn-sm">Add Group</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sector</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($groups as $group)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $group->sector->name ?? '—' }}</td>
                            <td>{{ $group->name }}</td>
                            <td>{{ $group->description }}</td>
                            <td>
                                <a href="{{ route('admin.itu-sector-groups.edit', $group->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.itu-sector-groups.destroy', $group->id) }}" method="POST" style="display:inline-block;">
                                    @csrf @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-center">No groups found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
