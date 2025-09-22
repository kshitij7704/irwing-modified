@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Edit Personal Performa Details</h5>
            <div class="card-body">
               <form action="{{ route('qrp.update', $qrp->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
                    <!-- Meeting Organizing Agency -->
                    <label>Meeting Organizing Agency</label>
                    <select name="agency" id="agency" class="form-control" required>
                        <option value="ITU" {{ $qrp->agency == 'ITU' ? 'selected' : '' }}>ITU</option>
                        <option value="APT" {{ $qrp->agency == 'APT' ? 'selected' : '' }}>APT</option>
                        <option value="ISS" {{ $qrp->agency == 'ISS' ? 'selected' : '' }}>ISS</option>
                        <option value="IOSC" {{ $qrp->agency == 'IOSC' ? 'selected' : '' }}>IOSC</option>
                        <option value="BRICS" {{ $qrp->agency == 'BRICS' ? 'selected' : '' }}>BRICS</option>
                        <option value="ASEAN" {{ $qrp->agency == 'ASEAN' ? 'selected' : '' }}>ASEAN</option>
                        <option value="3GPP" {{ $qrp->agency == '3GPP' ? 'selected' : '' }}>3GPP</option>
                        <option value="other" {{ $qrp->agency == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    <input type="text" name="agency_other" class="form-control mt-2" 
                           placeholder="Specify if Other" 
                           value="{{ $qrp->agency_other }}">

                    <!-- Sub-agency if ITU -->
                    <div id="itu_sub" style="{{ $qrp->agency == 'ITU' ? 'block' : 'none' }}">
                        <label>ITU Division</label>
                        <select name="itu_type" class="form-control">
                            <option value="ITU-T" {{ $qrp->itu_type == 'ITU-T' ? 'selected' : '' }}>ITU-T</option>
                            <option value="ITU-D" {{ $qrp->itu_type == 'ITU-D' ? 'selected' : '' }}>ITU-D</option>
                            <option value="ITU-R" {{ $qrp->itu_type == 'ITU-R' ? 'selected' : '' }}>ITU-R</option>
                        </select>
                    </div>

                    <!-- Meeting Name -->
                    <label>Meeting Name</label>
                    <input type="text" name="meeting_name" class="form-control" value="{{ $qrp->meeting_name }}">

                    <!-- Duration -->
                    <label>Duration</label>
                    <div class="row">
                        <div class="col"><input type="date" name="meeting_from" class="form-control" value="{{ $qrp->meeting_from }}"></div>
                        <div class="col"><input type="date" name="meeting_to" class="form-control" value="{{ $qrp->meeting_to }}"></div>
                    </div>

                    <!-- Country -->
                    <label>Country</label>
                    <select name="country" class="form-control" required>
                        <option value="">-- Select Country --</option>
                        <option value="{{ $qrp->country }}" selected>{{ $qrp->country }}</option>
                        {{-- keep your full country list here --}}
                    </select>

                    <!-- City -->
                    <label>City</label>
                    <input type="text" name="city" class="form-control" value="{{ $qrp->city }}">

                    <!-- Invitation Letter -->
                    <label>Invitation Letter</label>
                    @if($qrp->invitation_letter)
                        <p><a href="{{ asset('storage/'.$qrp->invitation_letter) }}" target="_blank">View File</a></p>
                    @endif
                    <input type="file" name="invitation_letter" class="form-control">

                    <!-- Similar Meeting -->
                    <label>Similar Meeting Occurred Before?</label>
                    <select name="similar_meeting" id="similar_meeting" class="form-control">
                        <option value="No" {{ $qrp->similar_meeting == 'No' ? 'selected' : '' }}>No</option>
                        <option value="Yes" {{ $qrp->similar_meeting == 'Yes' ? 'selected' : '' }}>Yes</option>
                    </select>

                    <div id="prev_report" style="{{ $qrp->similar_meeting == 'Yes' ? 'block' : 'none' }}">
                        <label>Attach Previous Tour Report</label>
                        @if($qrp->previous_report)
                            <p><a href="{{ asset('storage/'.$qrp->previous_report) }}" target="_blank">View File</a></p>
                        @endif
                        <input type="file" name="previous_report" class="form-control">
                    </div>

                    <!-- Mode -->
                    <label>Mode of Meeting</label>
                    <select name="mode" class="form-control">
                        <option value="Online" {{ $qrp->mode == 'Online' ? 'selected' : '' }}>Online</option>
                        <option value="Offline" {{ $qrp->mode == 'Offline' ? 'selected' : '' }}>Offline</option>
                    </select>

                    <!-- Officer Details -->
                    <label>Staff No.</label>
                    <input type="text" name="staff_no" class="form-control" id="staffno" value="{{ $qrp->staff_no }}">

                    <label>Name of Officer</label>
                    <input type="text" name="officer_name" value="{{ $qrp->officer_name }}" class="form-control" id="officer_name">

                    <label>Unit</label>
                    <select name="unit" class="form-control">
                        <option value="DoT HQ" {{ $qrp->unit == 'DoT HQ' ? 'selected' : '' }}>DoT HQ</option>
                        <option value="TEC" {{ $qrp->unit == 'TEC' ? 'selected' : '' }}>TEC</option>
                        <option value="LSA" {{ $qrp->unit == 'LSA' ? 'selected' : '' }}>LSA</option>
                        <option value="NCCS" {{ $qrp->unit == 'NCCS' ? 'selected' : '' }}>NCCS</option>
                        <option value="NCA-T" {{ $qrp->unit == 'NCA-T' ? 'selected' : '' }}>NCA-T</option>
                        <option value="NCA-F" {{ $qrp->unit == 'NCA-F' ? 'selected' : '' }}>NCA-F</option>
                    </select>

                    <label>Wing/Division</label>
                    <select name="division" class="form-control">
                        <option value="">-- Select Division --</option>
                        <option value="HR" {{ $qrp->division == 'HR' ? 'selected' : '' }}>HR</option>
                        <option value="Finance" {{ $qrp->division == 'Finance' ? 'selected' : '' }}>Finance</option>
                        <option value="IT" {{ $qrp->division == 'IT' ? 'selected' : '' }}>IT</option>
                        <option value="Operations" {{ $qrp->division == 'Operations' ? 'selected' : '' }}>Operations</option>
                        <option value="Legal" {{ $qrp->division == 'Legal' ? 'selected' : '' }}>Legal</option>
                    </select>

                    <label>Designation</label>
                    <select name="designation" class="form-control">
                        <option value="Secretary" {{ $qrp->designation == 'Secretary' ? 'selected' : '' }}>Secretary</option>
                        <option value="Additional Secretary" {{ $qrp->designation == 'Additional Secretary' ? 'selected' : '' }}>Additional Secretary</option>
                        <option value="Member" {{ $qrp->designation == 'Member' ? 'selected' : '' }}>Member</option>
                        <option value="Advisor" {{ $qrp->designation == 'Advisor' ? 'selected' : '' }}>Advisor</option>
                        <option value="DDG" {{ $qrp->designation == 'DDG' ? 'selected' : '' }}>DDG</option>
                        <option value="Director" {{ $qrp->designation == 'Director' ? 'selected' : '' }}>Director</option>
                        <option value="ADG" {{ $qrp->designation == 'ADG' ? 'selected' : '' }}>ADG</option>
                        <option value="ADET" {{ $qrp->designation == 'ADET' ? 'selected' : '' }}>ADET</option>
                        <option value="AD" {{ $qrp->designation == 'AD' ? 'selected' : '' }}>AD</option>
                        <option value="other" {{ $qrp->designation == 'other' ? 'selected' : '' }}>Other</option>
                    </select>

                    <label>Email</label>
                    <input type="email" name="email" value="{{ $qrp->email }}" class="form-control">

                    <label>Contact No.</label>
                    <input type="text" name="contact" value="{{ $qrp->contact }}" class="form-control">

                    <!-- Justification -->
                    <label>Justification / Role / Contribution</label>
                    <textarea name="justification" class="form-control">{{ $qrp->justification }}</textarea>
                    @if($qrp->justification_file)
                        <p><a href="{{ asset('storage/'.$qrp->justification_file) }}" target="_blank">View File</a></p>
                    @endif
                    <input type="file" name="justification_file" class="form-control mt-2">

                    <!-- Expected Outcome -->
                    <label>Expected Outcome</label>
                    <textarea name="expected_outcome" class="form-control">{{ $qrp->expected_outcome }}</textarea>
                    @if($qrp->expected_file)
                        <p><a href="{{ asset('storage/'.$qrp->expected_file) }}" target="_blank">View File</a></p>
                    @endif
                    <input type="file" name="expected_file" class="form-control mt-2">


                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="Pending" {{ $qrp->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Approved" {{ $qrp->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                        <option value="Rejected" {{ $qrp->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>

                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary mt-3">Update QRP Entry</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('agency').addEventListener('change', function () {
        document.getElementById('itu_sub').style.display = this.value === 'ITU' ? 'block' : 'none';
    });
    document.getElementById('similar_meeting').addEventListener('change', function () {
        document.getElementById('prev_report').style.display = this.value === 'Yes' ? 'block' : 'none';
    });
</script>
@endsection
