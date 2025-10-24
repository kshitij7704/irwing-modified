@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h1>Designations</h1>
    <a href="{{ route('designations.create') }}" class="btn btn-primary mb-3">Add New Designation</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($designations as $designation)
            <tr>
                <td>{{ $designation->name }}</td>
                <td>{{ ucfirst($designation->status) }}</td>
                <td>
                    <a href="{{ route('designations.edit', $designation->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('designations.destroy', $designation->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this designation?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
