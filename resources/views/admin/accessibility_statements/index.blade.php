@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Accessibility Statements</h4>
        <a href="{{ route('admin.accessibility_statements.create') }}" class="btn btn-primary">Add New</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="table-responsive">
            <table class="table table-bordered mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($statements as $key => $statement)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $statement->title }}</td>
                            <td>
                                <span class="badge bg-{{ $statement->status == 'Active' ? 'success' : 'danger' }}">
                                    {{ $statement->status }}
                                </span>
                            </td>
                            <td>{{ $statement->created_at->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('admin.accessibility_statements.edit', $statement->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.accessibility_statements.destroy', $statement->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this record?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if($statements->isEmpty())
                        <tr><td colspan="5" class="text-center">No records found.</td></tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
