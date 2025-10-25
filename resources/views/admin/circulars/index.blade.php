@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h2>Circulars</h2>
    <a href="{{ route('admin.circulars.create') }}" class="btn btn-primary mb-3">Add New Circular</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>URL</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($circulars as $circular)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $circular->title }}</td>
                    <td>{{ Str::limit($circular->description, 50) }}</td>
                    <td><a href="{{ $circular->url }}" target="_blank">{{ $circular->url }}</a></td>
                    <td>{{ $circular->status }}</td>
                    <td>
                        <a href="{{ route('admin.circulars.edit', $circular->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.circulars.destroy', $circular->id) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center">No circulars found.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $circulars->links() }}
</div>
@endsection
