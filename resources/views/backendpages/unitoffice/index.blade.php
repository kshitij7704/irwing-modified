@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Unit Offices</span>
            <a href="{{ route('admin.unit-offices.create') }}" class="btn btn-primary">+ Add Unit Office</a>
        </h5>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Unit</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($unitOffices as $office)
                        <tr>
                            <td>{{ $office->name }}</td>
                            <td>{{ $office->unit->name ?? '-' }}</td>
                            <td>
                                <a href="{{ route('admin.unit-offices.edit', $office->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.unit-offices.destroy', $office->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No unit offices found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $unitOffices->links() }}
        </div>
    </div>
</div>
@endsection
