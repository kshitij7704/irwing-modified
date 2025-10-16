@extends('layoutsBackend.app')
@section('content')



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Achievements</span>
            <a href="{{ route('achievements.create') }}" class="add-new btn btn-primary">
                <i class="icon-base ti tabler-plus icon-xs me-0 me-sm-2"></i>
                <span class="d-none d-sm-inline-block">+ Add Achievement</span>
            </a>

        </h5>
        <div class="card-datatable table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Achievement</th>
                            <th>Date</th>
                            <th>Details</th>
                            <th>Document</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($achievements as $key => $a)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $a->achievement }}</td>
                            <td>{{ \Carbon\Carbon::parse($a->date)->format('d M Y') }}</td>
                            <td>{{ $a->details ?? '-' }}</td>
                            <td>
                                @if($a->document)
                                    <a href="{{ asset('storage/'.$a->document) }}" target="_blank" class="btn btn-sm btn-info">View</a>
                                @else
                                    No file
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('achievements.edit', $a->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('achievements.destroy', $a->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this achievement?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
    </table>
            </div>
        </div>
        <!-- Offcanvas to add new user -->

    </div>
</div>
@endsection
