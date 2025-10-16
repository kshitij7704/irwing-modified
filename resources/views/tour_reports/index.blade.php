@extends('layoutsBackend.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Tour Reports </span>
            <a href="{{ route('tour-reports.create') }}" class="add-new btn btn-primary">
                <i class="icon-base ti tabler-plus icon-xs me-0 me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add New Details</span>
            </a>
        </h5>

        <div class="card-datatable table-responsive">
            <form action="{{ route('qrps.bulkSubmit') }}" method="POST" id="bulkForm">
                @csrf
                <table class="table border-top">
                    <thead>
                        <tr>
                            <td colspan="9" style="text-align:right;">
                                <button type="button" class="btn btn-info btn-sm">Add More Qrp</button>
                                <button type="submit" class="btn btn-success btn-sm">Submit Qrps</button>
                            </td>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Meeting Name</th>
                            <th>Purpose</th>
                            <th>Country</th>
                            <th>Officers</th>
                            <th>Tour Report</th>
                            <th>Presentation</th>
                            <th>Key Contributions</th>
                            <th>Followup Actions</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $submittedIndex = 1; @endphp
                        @foreach($reports as $qrp)
                        <tr>
                            <td>#
                            </td>
            </form>
            <td>{{ $qrp->meeting_from }}</td>
            <td>{{ $qrp->meeting_to }}</td>
            <td>{{ $qrp->meeting_name }} - {{ $qrp->meeting_to }}</td>
            <td>{{ $qrp->purpose }}</td>
          
            <td>{{ $qrp->country ?? 'N/A' }}</td>
            <td>{{ $qrp->city ?? 'N/A' }}</td>
            <td>{{ $qrp->tour_report_pdf ?? 'N/A' }}</td>
            <td>{{ $qrp->presentation ?? 'N/A' }}
            </td>
            <td>{{ $qrp->key_contributions ?? 'N/A' }}</td>
            <td>
                <a href="{{ route('qrp.show', $qrp) }}" class="btn btn-info btn-sm">View</a>
                @if(is_null($qrp->nodal_status) || $qrp->nodal_status === 'Saved')
                <a href="{{ route('qrp.edit', $qrp) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('qrp.destroy', $qrp) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
                @endif

            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Select All Script -->
<script>
    document.getElementById('select-all').addEventListener('change', function (e) {
        let checkboxes = document.querySelectorAll('input[name="qrp_ids[]"]');
        checkboxes.forEach(cb => cb.checked = e.target.checked);
    });

</script>

@endsection
