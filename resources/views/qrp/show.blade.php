@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        @roleCan('submission.qrp.view')
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="mb-4">QRP Form Details</h4>

            <table class="table table-striped table-bordered">
                <tr>
                    <th>Agency</th>
                    <td>{{ $form->agencyy->name ?? $form->agency_other ?? 'N/A' }}</td>
                </tr>
                @if($form->itu_sector)
                <tr>
                    <th>Sector</th>
                    <td>{{ $form->ituSector->name ?? 'N/A' }}</td>
                </tr>
                @endif
                @if($form->sector_group)
                <tr>
                    <th>Sector</th>
                    <td>{{ $form->sectorGroup->name ?? 'N/A' }}</td>
                </tr>
                @endif
                @if($form->agency_other)
                <tr>
                    <th>Sector</th>
                    <td>{{ $form->agency_other}}</td>
                </tr>
                @endif
                <tr>
                    <th>Meeting Name</th>
                    <td>{{ $form->meeting_name }}</td>
                </tr>
                <tr>
                    <th>Duration</th>
                    <td>{{ $form->meeting_from }} to {{ $form->meeting_to }}</td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td>{{ $form->countryy->name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>{{ $form->city }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        @if(is_null($form->nodal_status) || $form->nodal_status === 'Saved')
                            <span class="badge bg-info">Saved</span>
                        @elseif($form->nodal_status === 'Submitted')
                            <span class="badge bg-success">Submitted</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Officers</th>
                    <td>
                        @foreach($form->officers as $officer)
                            <div class="border p-2 mb-2">
                                <strong>{{ $officer->officer_name }}</strong> 
                                ({{ $officer->designation ?? 'N/A' }})<br>
                                Unit: {{ $officer->unit ?? 'N/A' }}/{{ $officer->division ?? 'N/A' }}<br>
                                Email: {{ $officer->email ?? 'N/A' }}, Contact: {{ $officer->contact ?? 'N/A' }}<br>
                                Duration: {{ $officer->meeting_from }} to {{ $officer->meeting_to }}<br>
                                Country: {{ optional($officer->countryy)->name ?? 'N/A' }}, City: {{ $officer->city ?? 'N/A' }}
                            </div>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>Justification</th>
                    <td>{{ $form->justification ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Expected Outcome</th>
                    <td>{{ $form->expected_outcome ?? 'N/A' }}</td>
                </tr>
            </table>

            <a href="{{ route('qrp.download', $form->id) }}" class="btn btn-success mt-3">Download PDF</a>
        </div>
        @endroleCan
    </div>
</div>
@endsection
