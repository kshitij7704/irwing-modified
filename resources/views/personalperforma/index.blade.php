@extends('layoutsBackend.app')
@section('content')



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Personal Performa Details</span>
            @can("submission.personal_performa.create")
            <a href="{{ route('personal-performa.create') }}" class="add-new btn btn-primary">
                <i class="icon-base ti tabler-plus icon-xs me-0 me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add New Details</span>
            </a>
            @endcan

        </h5>
        @can("submission.personal_performa.view")
        <div class="card-datatable table-responsive">
             <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Staff No</th>
                            <th>Event Name</th>
                            <th>Event Location</th>
                            <th>Event From</th>
                            <th>Event To</th>
                            <th>Mobile</th>
                            <th>Email</th>
                        <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($performas as $performa)
                        <tr>
                            <td>{{ $performa->id }}</td>
                            <td>{{ $performa->staff_no }}</td>
                            <td>{{ $performa->event_name }}</td>
                            <td>{{ $performa->event_location }}</td>
                            <td>{{ $performa->event_date_from }}</td>
                            <td>{{ $performa->event_date_to }}</td>
                            <td>{{ $performa->mobile }}</td>
                            <td>{{ $performa->email }}</td>
                        <td>
                            @if(is_null($performa->status) || $performa->status === 'Pending')
                            <span class="badge bg-info">Pending</span>
                            @elseif($performa->status === 'Approved')
                            <span class="badge bg-success">Approved</span>
                            @elseif($performa->status === 'Rejected')
                            <span class="badge bg-danger">Rejected</span>
                            @endif
                        </td>
                            <td>
                                <a href="{{ route('personal-performa.show', $performa) }}" class="btn btn-info btn-sm">
                                    View
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center">No records found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @endcan
        <!-- Offcanvas to add new user -->

    </div>
</div>
@endsection
