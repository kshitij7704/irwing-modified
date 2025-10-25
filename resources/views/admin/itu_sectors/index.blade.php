@extends('layoutsBackend.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>ITU Sectors</h4>
            <a href="{{ route('admin.itu-sectors.create') }}" class="btn btn-primary btn-sm">Add Sector</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Agency</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($sectors as $sector)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $sector->agency->name ?? '—' }}</td>
                            <td>{{ $sector->name }}</td>
                            <td>{{ $sector->description }}</td>
                            <td>
                                <a href="{{ route('admin.itu-sectors.edit', $sector->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.itu-sectors.destroy', $sector->id) }}" method="POST" style="display:inline-block;">
                                    @csrf @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-center">No sectors found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
