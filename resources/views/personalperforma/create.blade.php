@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Create personal Performa Details</h5>

            @can("submission.personal_performa.create")
            <div class="card-body">
                <form action="{{ route('personal-performa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

    <!-- Title -->
    <label for="title">Title</label>
    <select name="title" id="title" class="form-control" required>
        <option value="Mr.">Mr.</option>
        <option value="Ms.">Ms.</option>
    </select>
    <!-- Name of the officer (Auto) -->
    <label>Name of Officer</label>
    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" readonly>


    <!-- Service -->
    <label for="service">Service</label>
    <select name="service" id="service" class="form-control" required>
        <option value="ITS">ITS</option>
        <option value="IPTAF">IPTAF</option>
        <option value="IRRS">IRRS</option>
        <option value="other">Other</option>
    </select>
    <input type="text" name="service_other" class="form-control mt-2" placeholder="Please specify if Other">

    <!-- Staff no. -->
    <label for="staff_no">Staff No.</label>
    <input type="text" name="staff_no" id="staff_no" value="{{Auth::user()->staff_no}}" class="form-control" required>

    <!-- Designation -->
    <label for="designation">Designation</label>
    <select name="designation" class="form-control" required>
        <option value="SO">SO</option>
        <option value="US">US</option>
        <option value="DS">DS</option>
        <option value="Director">Director</option>
        <option value="JS">JS</option>
        <option value="AS">AS</option>
        <option value="Secretary">Secretary</option>
    </select>

    <!-- Place of Posting -->
    <label for="posting">Place of Posting</label>
    <select name="posting" class="form-control">
        <option value="HQ">HQ</option>
        <option value="Field">Field</option>
    </select>

    <!-- Date of Birth -->
    <label for="dob">Date of Birth</label>
    <input type="date" name="dob" class="form-control">

    <!-- Foreign Visits -->
    <h5>Foreign Visits (Last 3 + Current Year)</h5>
    @for($i=1;$i<=4;$i++)
        <div class="border p-3 mb-2">
            <label>Meeting Name</label>
            <input type="text" name="visits[{{ $i }}][meeting]" class="form-control">
            <label>From</label>
            <input type="date" name="visits[{{ $i }}][from]" class="form-control">
            <label>To</label>
            <input type="date" name="visits[{{ $i }}][to]" class="form-control">
            <label>Country</label>
            <input type="text" name="visits[{{ $i }}][country]" class="form-control">
            <label>City</label>
            <input type="text" name="visits[{{ $i }}][city]" class="form-control">
        </div>
    @endfor

    <!-- Annual Property Return -->
    <label>Date of Submission of Annual Immovable Property Return (31.12.2024)</label>
    <input type="date" name="property_return_date" class="form-control">

    <!-- Pay Level -->
    <label for="pay_level">Pay Level (7th CPC)</label>
    <select name="pay_level" class="form-control">
        @for($i=1;$i<=18;$i++)
            <option value="Level {{ $i }}">Level {{ $i }}</option>
        @endfor
    </select>

    <!-- Contact Info -->
    <label>Mobile</label>
    <input type="text" name="mobile" value="{{Auth::user()->phone}}" class="form-control">
    <label>Email</label>
    <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control">

    <!-- IDs -->
    <label>Aadhaar Card No.</label>
    <input type="text" name="aadhaar" class="form-control">
    <label>PAN Card No.</label>
    <input type="text" name="pan" class="form-control">

    <!-- File Upload -->
    <label>Attach Previous Tour Report</label>
    <input type="file" name="tour_report" class="form-control">

    <!-- Superannuation -->
    <label>Date of Superannuation</label>
    <input type="text" value="{{ Auth::user()->retirement_date ?? '' }}" class="form-control" readonly>
<!-- Event Details -->
    <h5 class="mt-3">Event Details</h5>

    <!-- Name of the Event -->
    <label for="event_name">Name of the Event</label>
    <input type="text" name="event_name" id="event_name" class="form-control" required>

    <!-- Location -->
    <label for="event_location">Location</label>
    <input type="text" name="event_location" id="event_location" class="form-control" required>

    <!-- Date From / To -->
    <div class="row">
        <div class="col-md-6">
            <label for="event_start_date">Date From</label>
            <input type="date" name="event_start_date" id="event_start_date" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="event_end_date">Date To</label>
            <input type="date" name="event_end_date" id="event_end_date" class="form-control" required>
        </div>
    </div>

    <!-- Event Details -->
    <label>Brief about the Event</label>
    <textarea name="event_brief" class="form-control"></textarea>

    <label>Justification</label>
    <textarea name="justification" class="form-control"></textarea>
    <input type="file" name="justification_file" class="form-control mt-2">

    <label>Expected Outcomes</label>
    <textarea name="expected_outcomes" class="form-control"></textarea>

    <!-- ITU Meeting -->
    <label>Is ITU Meeting?</label>
    <select name="is_itu" id="is_itu" class="form-control">
        <option value="No">No</option>
        <option value="Yes">Yes</option>
    </select>

    <!-- ITU Fields (show only if Yes) -->
    <div id="itu_fields" style="display:none;">
        <h5>ITU Meeting Details</h5>
        <label>Current ITU Roles</label>
        <input type="text" name="itu_current_roles" class="form-control">

        <label>No. of Questions for Rapporteur</label>
        <input type="number" name="itu_questions_rapporteur" class="form-control">

        <label>No. of Questions for Associate Rapporteur</label>
        <input type="number" name="itu_questions_associate" class="form-control">

        <label>No. of Working Items for which Editor</label>
        <input type="number" name="itu_editor_items" class="form-control">

        <label>Previous ITU Roles</label>
        <input type="text" name="itu_previous_roles" class="form-control">

        <label>Work Items created (since 2022)</label>
        <input type="number" name="itu_work_items" class="form-control">

        <label>Nos proposed by the Officer</label>
        <input type="number" name="itu_proposed" class="form-control">

        <label>Nos consented & created by ITU</label>
        <input type="number" name="itu_consented" class="form-control">

        <label>Nos in Progress</label>
        <input type="number" name="itu_in_progress" class="form-control">

        <label>No. of Recommendations published</label>
        <input type="number" name="itu_recommendations" class="form-control">

        <label>No. of Technical Reports published</label>
        <input type="number" name="itu_reports" class="form-control">

        <label>No. of ITU Meetings attended (since 2022) - Online</label>
        <input type="number" name="itu_online_meetings" class="form-control">

        <label>Physical</label>
        <input type="number" name="itu_physical_meetings" class="form-control">
    </div>

    <!-- Submit -->
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

<script>
document.getElementById('is_itu').addEventListener('change', function () {
    document.getElementById('itu_fields').style.display = this.value === 'Yes' ? 'block' : 'none';
});
</script>
            </div>
            @endcan
        </div>
    </div>
</div>

{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>CKEDITOR.replace('editor');</script>
@endsection
