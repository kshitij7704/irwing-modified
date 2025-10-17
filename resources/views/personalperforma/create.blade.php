@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Create Personal Performa Details</h5>

            @can("submission.personal_performa.create")
            <div class="card-body">
                <form action="{{ route('personal-performa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Select Meeting -->
                    <div class="mb-3">
    <label for="meeting_id" class="form-label">Select Meeting</label>
    <select name="meeting_id" id="meeting_id" class="form-select" required>
        <option value="" disabled {{ request('meeting_id') ? '' : 'selected' }}>Select Meeting</option>
        
        @foreach($qrps as $qrp)
            <option value="{{ $qrp->id }}" {{ request('meeting_id') == $qrp->id ? 'selected' : '' }}>
                {{ $qrp->meeting_name }}
            </option>
        @endforeach
    </select>
</div>


                    <!-- Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <select name="title" id="title" class="form-select" required>
                            <option value="Mr.">Mr.</option>
                            <option value="Ms.">Ms.</option>
                        </select>
                    </div>

                    <!-- Name of Officer (Auto-filled) -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name of Officer</label>
                        <input type="text" name="name" id="name" value="{{ $checkprofile->officer_name }}" class="form-control"
                            readonly>
                    </div>

                    <!-- Service -->
                    <div class="mb-3">
                        <label for="service" class="form-label">Service</label>
                        <select name="service" id="service" class="form-select" required>
                            <option value="ITS">ITS</option>
                            <option value="IPTAF">IPTAF</option>
                            <option value="IRRS">IRRS</option>
                            <option value="other">Other</option>
                        </select>
                        <input type="text" name="service_other" class="form-control mt-2"
                            placeholder="Please specify if Other">
                    </div>

                    <!-- Staff No. -->
                    <div class="mb-3">
                        <label for="staff_no" class="form-label">Staff No.</label>
                        <input type="text" name="staff_no" id="staff_no" value="{{ $checkprofile->staff_no }}"
                            class="form-control" required>
                    </div>

                    <!-- Designation -->
                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation</label>
                        <select name="designation" id="designation" class="form-select" required>
                            <option value="SO">SO</option>
                            <option value="US">US</option>
                            <option value="DS">DS</option>
                            <option value="Director">Director</option>
                            <option value="JS">JS</option>
                            <option value="AS">AS</option>
                            <option value="Secretary">Secretary</option>
                        </select>
                    </div>

                    <!-- Place of Posting -->
                    <div class="mb-3">
                        <label for="posting" class="form-label">Place of Posting</label>
                        <select name="posting" id="posting" class="form-select">
                            <option value="HQ">HQ</option>
                            <option value="Field">Field</option>
                        </select>
                    </div>

                    <!-- Date of Birth -->
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" name="dob" id="dob" class="form-control"
                        value="{{ \Carbon\Carbon::parse($checkprofile->date_of_birth)->format('Y-m-d') }}">

                    </div>

                    <!-- Foreign Visits -->
                    <!-- Foreign Visits -->
                    <h5 class="mt-4 mb-3">Foreign Visits (Last 3 + Current Year)</h5>
                    @for ($i = 1; $i <= 4; $i++) <div class="border p-3 mb-3 rounded"
                        style="background-color: #f8f9fa;">
                        <label for="visits[{{ $i }}][meeting]" class="mt-2">Meeting Name</label>
                        <input type="text" name="visits[{{ $i }}][meeting]" id="visits[{{ $i }}][meeting]"
                            class="form-control">

                        <label for="visits[{{ $i }}][from]" class="mt-2">From</label>
                        <input type="date" name="visits[{{ $i }}][from]" id="visits[{{ $i }}][from]"
                            class="form-control">

                        <label for="visits[{{ $i }}][to]" class="mt-2">To</label>
                        <input type="date" name="visits[{{ $i }}][to]" id="visits[{{ $i }}][to]" class="form-control">

                        <label for="visits[{{ $i }}][country]" class="mt-2">Country</label>
                        <input type="text" name="visits[{{ $i }}][country]" id="visits[{{ $i }}][country]"
                            class="form-control">

                        <label for="visits[{{ $i }}][city]" class="mt-2">City</label>
                        <input type="text" name="visits[{{ $i }}][city]" id="visits[{{ $i }}][city]"
                            class="form-control">
            </div>
            @endfor


            <!-- Annual Property Return -->
            <div class="mb-3">
                <label for="property_return_date" class="form-label">Date of Submission of Annual Immovable Property
                    Return (31.12.2024)</label>
                <input type="date" name="property_return_date" id="property_return_date" class="form-control">
            </div>

            <!-- Pay Level -->
            <div class="mb-3">
                <label for="pay_level" class="form-label">Pay Level (7th CPC)</label>
                <select name="pay_level" id="pay_level" class="form-select">
                    @for ($i = 1; $i <= 18; $i++) <option value="Level {{ $i }}">Level {{ $i }}</option>
                        @endfor
                </select>
            </div>

            <!-- Contact Info -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="text" name="mobile" id="mobile" value="{{ Auth::user()->phone }}" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control">
                </div>
            </div>

            <!-- IDs -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="aadhaar" class="form-label">Aadhaar Card No.</label>
                    <input type="text" name="aadhaar" id="aadhaar" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="pan" class="form-label">PAN Card No.</label>
                    <input type="text" name="pan" id="pan" class="form-control">
                </div>
            </div>

            <!-- File Upload -->
            <div class="mb-3">
                <label for="tour_report" class="form-label">Attach Previous Tour Report</label>
                <input type="file" name="tour_report" id="tour_report" class="form-control">
            </div>

            <!-- Superannuation -->
            <div class="mb-3">
                <label for="retirement_date" class="form-label">Date of Superannuation</label>
                <input type="text" id="retirement_date" value="{{ Auth::user()->retirement_date ?? '' }}"
                    class="form-control" readonly>
            </div>

            <!-- Event Details -->
            <h5 class="mt-4 mb-3">Event Details</h5>

            <div class="mb-3">
                <label for="event_name" class="form-label">Name of the Event</label>
                <input type="text" name="event_name" id="event_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="event_location" class="form-label">Location</label>
                <input type="text" name="event_location" id="event_location" class="form-control" required>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="event_start_date" class="form-label">Date From</label>
                    <input type="date" name="event_start_date" id="event_start_date" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="event_end_date" class="form-label">Date To</label>
                    <input type="date" name="event_end_date" id="event_end_date" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="event_brief" class="form-label">Brief about the Event</label>
                <textarea name="event_brief" id="event_brief" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="justification" class="form-label">Justification</label>
                <textarea name="justification" id="justification" class="form-control"></textarea>
                <input type="file" name="justification_file" class="form-control mt-2">
            </div>

            <div class="mb-3">
                <label for="expected_outcomes" class="form-label">Expected Outcomes</label>
                <textarea name="expected_outcomes" id="expected_outcomes" class="form-control"></textarea>
            </div>

            <!-- ITU Meeting -->
            <div class="mb-3">
                <label for="is_itu" class="form-label">Is ITU Meeting?</label>
                <select name="is_itu" id="is_itu" class="form-select">
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select>
            </div>

            <!-- ITU Fields (show only if Yes) -->
            <div id="itu_fields" style="display:none;" class="mt-3 border rounded p-3 bg-light">
                <h5 class="mb-3">ITU Meeting Details</h5>

                <div class="mb-3">
                    <label for="itu_current_roles" class="form-label">Current ITU Roles</label>
                    <input type="text" name="itu_current_roles" id="itu_current_roles" class="form-control">
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="itu_questions_rapporteur" class="form-label">No. of Questions for Rapporteur</label>
                        <input type="number" name="itu_questions_rapporteur" id="itu_questions_rapporteur"
                            class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="itu_questions_associate" class="form-label">No. of Questions for Associate
                            Rapporteur</label>
                        <input type="number" name="itu_questions_associate" id="itu_questions_associate"
                            class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="itu_editor_items" class="form-label">No. of Working Items for which Editor</label>
                    <input type="number" name="itu_editor_items" id="itu_editor_items" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="itu_previous_roles" class="form-label">Previous ITU Roles</label>
                    <input type="text" name="itu_previous_roles" id="itu_previous_roles" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="itu_work_items" class="form-label">Work Items created (since 2022)</label>
                    <input type="number" name="itu_work_items" id="itu_work_items" class="form-control">
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="itu_proposed" class="form-label">Nos proposed by the Officer</label>
                        <input type="number" name="itu_proposed" id="itu_proposed" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="itu_consented" class="form-label">Nos consented & created by ITU</label>
                        <input type="number" name="itu_consented" id="itu_consented" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="itu_in_progress" class="form-label">Nos in Progress</label>
                        <input type="number" name="itu_in_progress" id="itu_in_progress" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="itu_recommendations" class="form-label">No. of Recommendations published</label>
                        <input type="number" name="itu_recommendations" id="itu_recommendations" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="itu_reports" class="form-label">No. of Technical Reports published</label>
                        <input type="number" name="itu_reports" id="itu_reports" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="itu_online_meetings" class="form-label">No. of ITU Meetings attended (since 2022) -
                            Online</label>
                        <input type="number" name="itu_online_meetings" id="itu_online_meetings" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="itu_physical_meetings" class="form-label">Physical</label>
                        <input type="number" name="itu_physical_meetings" id="itu_physical_meetings"
                            class="form-control">
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>

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
