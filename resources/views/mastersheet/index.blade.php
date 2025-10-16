@extends('layoutsBackend.app')
@section('content')



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            @can("generation.qrp.view")

            Master Sheet generation
            @endcan

        </h5>
        @roleCan('generation.qrp.view')
        <div class="card-datatable table-responsive">
            <!-- Filter Form -->
            <form action="{{ route('qrp-generation.index') }}" method="GET" class="row mb-3"
                style="padding-left: 20px;">
                <div class="col-md-3">
                    <label for="quarter" class="form-label">Select Quarter</label>
                    <select name="quarter" id="quarter" class="form-select">
                        <option value="">-- All Quarters --</option>
                        <option value="Quater 1 (Jan-Mar)" {{ request('quarter') == 'Q1' ? 'selected' : '' }}>Quater 1
                            (Oct-Dec)</option>
                        <option value="Quater 2 (Apr-Jun)" {{ request('quarter') == 'Q2' ? 'selected' : '' }}>Quater 2
                            (Apr-Jun)</option>
                        <option value="Quater 3 (Jul-Sep)" {{ request('quarter') == 'Q3' ? 'selected' : '' }}>Quater 3
                            (Jul-Sep)</option>
                        <option value="Quater 4 (Oct-Dec)" {{ request('quarter') == 'Q4' ? 'selected' : '' }}>Quater 4
                            (Oct-Dec)</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="itu" class="form-label">ITU List</label>
                    <select name="itu" id="itu" class="form-select">
                        <option value="">-- All ITU --</option>
                        @foreach($agencies as $agencydata)
                        <option value="{{ $agencydata->id }}" {{ request('itu') == $agencydata->id ? 'selected' : '' }}>
                            {{ $agencydata->name }}
                        </option>
                        @endforeach
                        <!-- add your ITU categories -->
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="nodal" class="form-label">Select Nodal</label>
                    <select name="nodal_id" id="nodal" class="form-select">
                        <option value="">-- Select Nodal --</option>
                        @foreach($nodalUsers as $user)
                        <option value="{{ $user->id }}" {{ request('nodal_id') == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Filter</button>&nbsp;
                    <a href="{{ route('qrp-generation.index') }}" type="submit" class="btn btn-secondary">Reset</a>
                </div>
            </form>
            @if($qrps->count() > 0)
            <form action="{{ route('qrp-generation.bulk-update-status') }}" method="POST" style="padding-left: 20px;">
                @csrf

                <div class="card-datatable" style="overflow-x:auto; white-space:nowrap;">
                    <table class="table border-top table-striped table-bordered" style="min-width: 1500px;">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Staff No.</th>
                                <th>Name of the Officer</th>
                                <th>Designation</th>
                                <th>Calander Year</th>
                                <th>Delegation proposed</th>
                                <th>Meeting</th>
                                <th>Period </th>
                                <th>Country </th>
                                <th>Title</th>
                                <th>Date of Birth Approval</th>
                                <th>Gender (M/F) </th>
                                <th>Cadre Clearance</th>
                                <th>Grade </th>
                                <th>Equivalent Rank </th>
                                <th>Level </th>
                                <th>Office </th>
                                <th>Expenditure (Directorate) </th>
                                <th>Expenditure (WPC) </th>
                                <th>Expenditure (Secretariat) </th>
                                <th>Expenditure (TEC) </th>
                                <th>Expenditure (NCA-T) </th>
                                <th>Download Excel Pdf</th>
                            </tr>
                        </thead>
                        <tbody>
    @foreach($qrps as $index => $officer)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $officer->staff_no ?? 'N/A' }}</td>
            <td>{{ $officer->officer_name ?? 'N/A' }}</td>
            <td>{{ $officer->designation ?? 'N/A' }}</td>
            <td>{{ $officer->qrpForm->calendar_year ?? 'N/A' }}</td>
            <td>{{ $officer->delegation_proposed ?? 'N/A' }}</td>
            <td>{{ $officer->qrpForm->meeting_name ?? 'N/A' }}</td>
            <td>
                {{ $officer->qrpForm->meeting_from ?? '' }}
                -
                {{ $officer->qrpForm->meeting_to ?? '' }}
            </td>
            <td>
                @php
                    $countries = App\Models\Country::pluck('name','id');
                    $countriii = json_decode($officer->qrpForm->country, true) ?? [];
                    $countryIds = collect($countriii)->pluck('country')->filter()->toArray();
                    $CountryNames = [];
                    foreach ($countryIds as $cid) {
                        if (isset($countries[$cid])) {
                            $CountryNames[] = $countries[$cid];
                        }
                    }
                    $countryStr = implode(', ', $CountryNames);
                @endphp
                {{ $countryStr ?: 'N/A' }}
            </td>
            @php 

                $checkprofile = App\Models\Profile::find($officer->profile_id)->first();
            @endphp
            <td>{{ $checkprofile->title ?? 'N/A' }}</td>
            <td>{{ $checkprofile->date_of_birth ?? 'N/A' }}</td>
            <td>{{ $checkprofile->gender ?? 'Male' }}</td>
            <td>{{ $officer->cadre_clearance ?? 'N/A' }}</td>
            <td>{{ $officer->grade ?? 'N/A' }}</td>
            <td>{{ $officer->equivalent_rank ?? 'N/A' }}</td>
            <td>{{ $officer->level_in_pay_matrix ?? 'N/A' }}</td>
            <td>{{ $officer->office ?? 'N/A' }}</td>
            <td>
                <textarea class="form-control expenditure-textarea"
                    rows="1"
                    data-id="{{ $officer->id }}"
                    data-field="expenditure_directorate">{{ $officer->expenditure_directorate ?? '' }}</textarea>
            </td>
            <td>
                <textarea class="form-control expenditure-textarea"
                    rows="1"
                    data-id="{{ $officer->id }}"
                    data-field="expenditure_wpc">{{ $officer->expenditure_wpc ?? '' }}</textarea>
            </td>
            <td>
                <textarea class="form-control expenditure-textarea"
                    rows="1"
                    data-id="{{ $officer->id }}"
                    data-field="expenditure_secretariat">{{ $officer->expenditure_secretariat ?? '' }}</textarea>
            </td>
            <td>
                <textarea class="form-control expenditure-textarea"
                    rows="1"
                    data-id="{{ $officer->id }}"
                    data-field="expenditure_tec">{{ $officer->expenditure_tec ?? '' }}</textarea>
            </td>
            <td>
                <textarea class="form-control expenditure-textarea"
                    rows="1"
                    data-id="{{ $officer->id }}"
                    data-field="expenditure_ncat">{{ $officer->expenditure_ncat ?? '' }}</textarea>
            </td>

            <td>
                <a href="{{ route('master-sheet.export', ['id' => $officer->id, 'format' => 'excel']) }}" class="btn btn-sm btn-success">Excel</a>
                <a href="{{ route('master-sheet.export', ['id' => $officer->id, 'format' => 'pdf']) }}" class="btn btn-sm btn-danger">PDF</a>
            </td>
        </tr>
    @endforeach
</tbody>

                    </table>
                </div>

                <!-- Bulk status update section -->

            </form>
            @else
            <div class="alert alert-info" style="    margin-left: 20px;margin-right: 20px;">
                No Pending QRPs found.
            </div>
            @endif
        </div>
        @endroleCan
        <!-- Offcanvas to add new user -->

    </div>
</div>

<script>
    // select all checkbox functionality
    document.getElementById('select-all').addEventListener('change', function () {
        let checkboxes = document.querySelectorAll('input[name="selected_ids[]"]');
        for (let cb of checkboxes) {
            cb.checked = this.checked;
        }
    });

</script><script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.expenditure-textarea').forEach(textarea => {
        textarea.addEventListener('keypress', function (e) {
            if (e.key === 'Enter' && !e.shiftKey) { // Shift+Enter = new line
                e.preventDefault();

                const id = this.dataset.id;
                const field = this.dataset.field;
                const value = this.value.trim();

                fetch("{{ route('qrp-generation.update-expenditure') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        id: id,
                        field: field,
                        value: value
                    })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        toastr.success(`${field.replaceAll('_', ' ')} updated successfully`);
                    } else {
                        toastr.error('Update failed');
                    }
                })
                .catch(() => toastr.error('An error occurred while updating'));
            }
        });
    });
});
</script>

@endsection
