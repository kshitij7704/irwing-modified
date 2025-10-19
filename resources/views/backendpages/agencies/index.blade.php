@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Agencies</span>
            <a href="{{ route('agencies.create') }}" class="btn btn-primary">+ Add Agency</a>
        </h5>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($agencies as $agency)
                        <tr>
                            <td>{{ $agency->name }}</td>
                            <td>{{ $agency->description }}</td>
                            <td>
                                <a href="{{ route('agencies.edit', $agency->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('agencies.destroy', $agency->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No agencies found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $agencies->links() }}
        </div>
    </div>
</div>
@endsection
