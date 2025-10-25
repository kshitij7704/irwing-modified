@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h2>Unit Offices</h2>
    <a href="{{ route('admin.unit-offices.create') }}" class="btn btn-primary mb-3">Add Unit Office</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Unit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unitOffices as $office)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $office->name }}</td>
                    <td>{{ $office->unit->name ?? '-' }}</td>
                    <td>
                        <a href="{{ route('admin.unit-offices.edit', $office->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.unit-offices.destroy', $office->id) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this unit office?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $unitOffices->links() }}
</div>
@endsection
