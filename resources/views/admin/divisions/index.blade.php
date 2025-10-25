@extends('layoutsBackend.app')
@section('content')
<div class="container">
    <h2>Divisions</h2>
    <a href="{{ route('admin.divisions.create') }}" class="btn btn-primary mb-3">Add Division</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Division Name</th>
                <th>Unit Office</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($divisions as $division)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $division->name }}</td>
                    <td>{{ $division->unitOffice->name ?? '-' }}</td>
                    <td>
                        <a href="{{ route('admin.divisions.edit', $division->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.divisions.destroy', $division->id) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this division?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $divisions->links() }}
</div>
@endsection
