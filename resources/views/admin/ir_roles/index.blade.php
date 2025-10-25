@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4>IR Roles</h4>
    <!-- <a href="{{ route('admin.ir_roles.create') }}" class="btn btn-primary mb-3">Add Role</a> -->

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($roles as $role)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $role->title }}</td>
                    <td>{{ $role->description }}</td>
                    <td>{{ $role->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('admin.ir_roles.edit', $role->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <!-- <form action="{{ route('admin.ir_roles.destroy', $role->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                        </form> -->
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No roles found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
