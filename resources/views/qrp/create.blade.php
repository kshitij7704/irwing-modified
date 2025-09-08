@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Create personal Performa Details</h5>

            @can("blog create")
            <div class="card-body">
                <form action="{{ route('qrp.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Meeting Organizing Agency -->
    <label>Meeting Organizing Agency</label>
    <select name="agency" id="agency" class="form-control" required>
        <option value="ITU">ITU</option>
        <option value="APT">APT</option>
        <option value="ISS">ISS</option>
        <option value="IOSC">IOSC</option>
        <option value="BRICS">BRICS</option>
        <option value="ASEAN">ASEAN</option>
        <option value="3GPP">3GPP</option>
        <option value="other">Other</option>
    </select>
    <input type="text" name="agency_other" class="form-control mt-2" placeholder="Specify if Other">

    <!-- Sub-agency if ITU -->
    <div id="itu_sub" style="display:none;">
        <label>ITU Division</label>
        <select name="itu_type" class="form-control">
            <option value="ITU-T">ITU-T</option>
            <option value="ITU-D">ITU-D</option>
            <option value="ITU-R">ITU-R</option>
        </select>
    </div>

    <!-- Meeting Name -->
    <label>Meeting Name</label>
    <input type="text" name="meeting_name" class="form-control" placeholder="e.g. SG/WP/TSAG/TDAG/Council">

    <!-- Duration -->
    <label>Duration</label>
    <div class="row">
        <div class="col"><input type="date" name="meeting_from" class="form-control"></div>
        <div class="col"><input type="date" name="meeting_to" class="form-control"></div>
    </div>

    <!-- Place -->
    <label>Country</label>
        <select name="country" class="form-control">
    <option value="">-- Select Country --</option>
    <option value="India">India</option>
    <option value="USA">USA</option>
    <option value="UK">UK</option>
    <option value="Germany">Germany</option>
    <option value="Japan">Japan</option>
</select>
    <label>City</label>
    <input type="text" name="city" class="form-control">

    <!-- Invitation Letter -->
    <label>Invitation Letter (PDF/JPG/Word)</label>
    <input type="file" name="invitation_letter" class="form-control">

    <!-- Similar Meeting -->
    <label>Similar Meeting Occurred Before?</label>
    <select name="similar_meeting" id="similar_meeting" class="form-control">
        <option value="No">No</option>
        <option value="Yes">Yes</option>
    </select>

    <div id="prev_report" style="display:none;">
        <label>Attach Previous Tour Report</label>
        <input type="file" name="previous_report" class="form-control">
    </div>

    <!-- Mode -->
    <label>Mode of Meeting</label>
    <select name="mode" class="form-control">
        <option value="Online">Online</option>
        <option value="Offline">Offline</option>
    </select>

    <!-- Officer Details -->
    <label>Staff No.</label>
    <input type="text" name="staff_no" class="form-control">

    <label>Name of Officer</label>
    <input type="text" value="{{ $officer->name ?? '' }}" class="form-control" readonly>

    <label>Unit</label>
    <select name="unit" class="form-control">
        <option value="DoT HQ">DoT HQ</option>
        <option value="TEC">TEC</option>
        <option value="LSA">LSA</option>
        <option value="NCCS">NCCS</option>
        <option value="NCA-T">NCA-T</option>
        <option value="NCA-F">NCA-F</option>
    </select>

    <label>Wing/Division</label>
<select name="division" class="form-control">
    <option value="">-- Select Division --</option>
    <option value="HR">HR</option>
    <option value="Finance">Finance</option>
    <option value="IT">IT</option>
    <option value="Operations">Operations</option>
    <option value="Legal">Legal</option>
</select>

    <label>Designation</label>
    <select name="designation" class="form-control">
        <option value="Secretary">Secretary</option>
        <option value="Additional Secretary">Additional Secretary</option>
        <option value="Member">Member</option>
        <option value="Advisor">Advisor</option>
        <option value="DDG">DDG</option>
        <option value="Director">Director</option>
        <option value="ADG">ADG</option>
        <option value="ADET">ADET</option>
        <option value="AD">AD</option>
        <option value="other">Other</option>
    </select>

    <label>Email</label>
    <input type="email" name="email" class="form-control">

    <label>Contact No.</label>
    <input type="text" name="contact" class="form-control">

    <!-- Justification -->
    <label>Justification / Role / Contribution</label>
    <textarea name="justification" class="form-control"></textarea>
    <input type="file" name="justification_file" class="form-control mt-2">

    <!-- Expected Outcome -->
    <label>Expected Outcome</label>
    <textarea name="expected_outcome" class="form-control"></textarea>
    <input type="file" name="expected_file" class="form-control mt-2">

    <!-- Add Another Officer -->
    <button type="button" class="btn btn-secondary mt-2">+ Add Another Officer</button>

    <!-- Submit -->
    <button type="submit" class="btn btn-primary mt-3">Submit QRP Entry</button>
</form>

<script>
document.getElementById('agency').addEventListener('change', function () {
    document.getElementById('itu_sub').style.display = this.value === 'ITU' ? 'block' : 'none';
});
document.getElementById('similar_meeting').addEventListener('change', function () {
    document.getElementById('prev_report').style.display = this.value === 'Yes' ? 'block' : 'none';
});
</script>


            <script>
                document.getElementById('is_itu').addEventListener('change', function () {
                    document.getElementById('itu_fields').style.display = this.value === 'Yes' ? 'block' :
                        'none';
                });

            </script>
        </div>
        @endcan
    </div>
</div>
</div>

{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');

</script>
@endsection
