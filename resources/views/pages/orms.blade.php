@extends('frontend.partials.app')

@section('content')

<style>
    .table tr td {
        text-align: unset !important;
        padding-left: 10px;
    }
    .table tr th {
        text-align: unset !important;
        padding-left: 10px;
    }
</style>

    <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h4 class="card-header d-flex justify-content-between align-items-center">
            IR Wing Office Memoranda (OMs)
        </h4><br>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="ormsTable">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Order/Circular Name</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orms as $index => $orm)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td><a href="{{ asset('file/' . $orm->file) }}" target="_blank">{{ $orm->title }}</a></td>
                            <td>{{ $orm->date }}</td>
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

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#ormsTable').DataTable({
        pageLength: 10,
        lengthMenu: [5, 10, 25, 50],
        searching: true,
        ordering: true,
    });
});
</script>
@endpush
