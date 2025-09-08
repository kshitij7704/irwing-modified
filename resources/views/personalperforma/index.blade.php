@extends('layoutsBackend.app')
@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Personal Performa Details</span>
            @can("blog create")
            <a href="{{ route('personal-performa.create') }}" class="add-new btn btn-primary">
                <i class="icon-base ti tabler-plus icon-xs me-0 me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add New Details</span>
            </a>
            @endcan

        </h5>
        @can("blog read")
        <div class="card-datatable table-responsive">
            <table class=" table border-top">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Staff No.</th>
                        <th>Name of Officer</th>
                        <th>Meeting Name</th>
                        <th>Meeting Duration</th>
                        <th>Download</th>
                    </tr>
                </thead>
            </table>
        </div>
        @endcan
        <!-- Offcanvas to add new user -->

    </div>
</div>
@endsection
