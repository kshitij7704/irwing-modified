@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Terms of Use</h5>
            <a href="{{ route('admin.terms_of_use.create') }}" class="btn btn-primary btn-sm">+ Add New</a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th width="50%">Content (Preview)</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($terms as $index => $term)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $term->title }}</td>
                                <td>{!! Str::limit(strip_tags($term->content), 120) !!}</td>
                                <td>
                                    @if($term->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>{{ $term->created_at->format('d M, Y') }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('admin.terms_of_use.show', $term->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('admin.terms_of_use.edit', $term->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.terms_of_use.destroy', $term->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="6" class="text-center">No records found.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-3">{{ $terms->links() }}</div>
        </div>
    </div>
</div>
@endsection
