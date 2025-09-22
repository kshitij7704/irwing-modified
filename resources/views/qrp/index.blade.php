@extends('layoutsBackend.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Qrp Details</span>
            @roleCan('submission.qrp.create')
            <a href="{{ route('qrp.create') }}" class="add-new btn btn-primary">
                <i class="icon-base ti tabler-plus icon-xs me-0 me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add New Details</span>
            </a>
            @endroleCan
        </h5>

        @roleCan('submission.qrp.view')
        <div class="card-datatable table-responsive">
            <form action="{{ route('qrps.bulkSubmit') }}" method="POST" id="bulkForm">
                @csrf
                <table class="table border-top">
                    <thead>
                        <tr>
                            <td colspan="8" style="text-align:right;">
                                <button type="button" class="btn btn-info btn-sm">Add More Qrp</button>
                                <button type="submit" class="btn btn-success btn-sm">Submit Qrps</button>
                            </td>
                        </tr>
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>Meeting Name</th>
                            <th>Duration</th>
                            <th>Country</th>
                            <th>Agency</th>
                            <th>Officers</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $submittedIndex = 1; @endphp
                        @foreach($qrps as $qrp)
                        <tr>
                            <td>
                                @if(is_null($qrp->nodal_status) || $qrp->nodal_status === 'Saved')
                                <input type="checkbox" name="qrp_ids[]" value="{{ $qrp->id }}">
                                @elseif($qrp->nodal_status === 'Submitted')
                                {{ $submittedIndex++ }}
                                @endif
                            </td>
            </form>
            <td>{{ $qrp->meeting_name }}</td>
            <td>{{ $qrp->meeting_from }} - {{ $qrp->meeting_to }}</td>
            <td>{{ $qrp->countryy->name ?? 'N/A' }}</td>
            <td>{{ $qrp->agencyy->name ?? 'N/A' }}</td>
            <td>
                @foreach($qrp->officers as $officers)
                *{{ $officers->officer_name ?? 'N/A' }}<br>
                @endforeach
            </td>
            <td>
                @if(is_null($qrp->nodal_status) || $qrp->nodal_status === 'Saved')
                <span class="badge bg-info">Saved</span>
                @elseif($qrp->nodal_status === 'Submitted')
                <span class="badge bg-success">Submitted</span>
                @endif
            </td>
            <td>
                <a href="{{ route('qrp.show', $qrp) }}" class="btn btn-info btn-sm">View</a>
                @if(is_null($qrp->nodal_status) || $qrp->nodal_status === 'Saved')
                <a href="{{ route('qrp.edit', $qrp) }}" class="btn btn-warning btn-sm">Edit</a>
                @endif
                <form action="{{ route('qrp.destroy', $qrp) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>

            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        @endroleCan
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
