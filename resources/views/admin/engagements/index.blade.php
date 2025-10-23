@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h2>Engagements</h2>
    <a href="{{ route('engagements.create') }}" class="btn btn-primary mb-3">+ Add Engagement</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Status</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($engagements as $key => $eng)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $eng->title }}</td>
                <td>{{ $eng->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    @if($eng->image)
                        <img src="{{ asset('storage/' . $eng->image) }}" width="80">
                    @endif
                </td>
                <td>
                    <a href="{{ route('engagements.edit', $eng->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('engagements.destroy', $eng->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Delete this record?')" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $engagements->links() }}
</div>
@endsection
