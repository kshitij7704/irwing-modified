@extends('layoutsBackend.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Ambitions</h3>
        <a href="{{ route('ambitions.create') }}" class="btn btn-primary">Add New</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ambitions as $index => $ambition)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        @if($ambition->image)
                            <img src="{{ asset('storage/'.$ambition->image) }}" alt="" width="80">
                        @endif
                    </td>
                    <td>{{ $ambition->title }}</td>
                    <td>{{ $ambition->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('ambitions.edit', $ambition->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <!-- <form action="{{ route('ambitions.destroy', $ambition->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Delete this item?')" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form> -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
