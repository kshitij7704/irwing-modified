@extends('layoutsBackend.app')
@section('content')



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Press Releases</span>
            <a href="{{ route('press-releases.create') }}" class="add-new btn btn-primary">
                <i class="icon-base ti tabler-plus icon-xs me-0 me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add Data</span>
            </a>

        </h5>
        <div class="card-datatable table-responsive">
            <div class="table-responsive">
<table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Ministry</th>
                <th>Date</th>
                <th>PDF</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pressReleases as $pr)
            <tr>
                <td>{{ $pr->title }}</td>
                <td>{{ $pr->ministry }}</td>
                <td>{{ $pr->date }}</td>
                <td>
                    @if($pr->pdf)
                        <a href="{{ asset('storage/'.$pr->pdf) }}" target="_blank">View PDF</a>
                    @endif
                </td>
                <td>
                    <a href="{{ route('press-releases.edit', $pr->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('press-releases.destroy', $pr->id) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $pressReleases->links() }}
            </div>
        </div>
        <!-- Offcanvas to add new user -->

    </div>
</div>
@endsection
