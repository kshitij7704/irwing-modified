@extends('frontend.partials.app')

@section('content')

<style>
    /* Card */
    .card {
        border: 1px solid #e1e1e1;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }
    .card-body {
    padding: 0rem 0rem 0rem 0rem !important;
}
    .card-header {
        background: #0d6efd;
        color: #fff;
        font-weight: 600;
        border-radius: 10px 10px 0 0;
        padding: 15px 20px;
    }

    /* Table styling */
    .table {
        border-collapse: separate;
        border-spacing: 0;
    }
    .table thead th {
        background: #f8f9fa;
        font-weight: 600;
        color: #333;
        padding: 12px 15px;
        text-align: left !important;
    }
    .table tbody td {
        padding: 12px 15px;
        vertical-align: middle;
        text-align: left !important;
    }
    .table tbody tr:hover {
        background-color: #f1f5f9;
        transition: 0.2s;
    }

    /* Links */
    .table a {
        color: #0d6efd;
        font-weight: 500;
        text-decoration: none;
    }
    .table a:hover {
        text-decoration: underline;
    }

    /* DataTables search & pagination */
    .dataTables_wrapper .dataTables_filter input {
        border: 1px solid #ced4da;
        border-radius: 6px;
        padding: 6px 10px;
        margin-left: 8px;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 4px 10px;
        border-radius: 6px;
        border: 1px solid #dee2e6;
        margin: 2px;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background: #0d6efd;
        color: #fff !important;
        border: 1px solid #0d6efd;
    }
</style>

<div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h4 class="card-header d-flex justify-content-between align-items-center">
            IR Wing Office Memoranda (OMs)
        </h4>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="ormsTable">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Order / Circular Name</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orms as $index => $orm)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <a href="{{ asset('file/' . $orm->file) }}" target="_blank">
                                    {{ $orm->title }}
                                </a>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($orm->date)->format('F d, Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS + CSS -->
<link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#ormsTable').DataTable({
        "pageLength": 10,
        "ordering": false,
        "lengthChange": false
    });
});
</script>
@endpush
