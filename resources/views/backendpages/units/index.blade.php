@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Units</span>
            <a href="{{ route('admin.units.create') }}" class="btn btn-primary">+ Add Unit</a>
        </h5>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($units as $unit)
                        <tr>
                            <td>{{ $unit->name }}</td>
                            <td>
                                <a href="{{ route('admin.units.edit', $unit->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.units.destroy', $unit->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No units found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $units->links() }}
        </div>
    </div>
</div>
@endsection
