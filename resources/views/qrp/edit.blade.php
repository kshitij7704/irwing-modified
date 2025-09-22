@extends('layoutsBackend.app')

@section('content')
<style>
    /* Fix missing search box in Vuexy + Select2 */
    .select2-container .select2-search--dropdown {
        display: block !important;
    }

    .select2-container .select2-search--dropdown .select2-search__field {
        display: block !important;
        width: 100% !important;
        padding: 0.375rem 0.75rem !important;
        font-size: 1rem !important;
        border: 1px solid #d8d6de !important;
        border-radius: 0.375rem !important;
    }
</style>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Edit QRP Details</h5>


        @roleCanAny(['submission.qrp.edit', 'generation.qrp.edit'])
            <div class="card-body">
                <form action="{{ route('qrp.update', $qrp->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Agency Select -->
                    <label>Meeting Organizing Agency</label>
                    <select name="agency" id="agency" class="form-control" required>
                        @foreach($agencies as $agency)
                        <option value="{{ $agency->id }}" {{ $qrp->agency == $agency->id ? 'selected' : '' }}>
                            {{ $agency->name }}
                        </option>
                        @endforeach
                        <option value="other" {{ $qrp->agency == 'other' ? 'selected' : '' }}>Other</option>
                    </select>

                    <!-- Other agency -->
                    <div id="agency-other-container" style="display: {{ $qrp->agency == 'other' ? 'block' : 'none' }};">
                        <input type="text" name="agency_other" class="form-control mt-2" placeholder="Specify if Other"
                               value="{{ $qrp->agency_other }}">
                    </div>

                    <!-- ITU Sector -->
                    <div id="itu-sector-container" style="display: {{ $qrp->itu_sector ? 'block' : 'none' }};">
                        <label>ITU Sector</label>
                        <select name="itu_sector" id="itu_sector" class="form-control">
                            <option value="">Select ITU Sector</option>
                            @foreach($sectors as $sector)
                            <option value="{{ $sector->id }}" data-agency="{{ $sector->agency_id }}"
                                {{ $qrp->itu_sector == $sector->id ? 'selected' : '' }}>
                                {{ $sector->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Sector Group -->
                    <div id="sector-group-container" style="display: {{ $qrp->sector_group ? 'block' : 'none' }};">
                        <label>Sector Group</label>
                        <select name="sector_group" id="sector_group" class="form-control">
                            <option value="">Select Sector Group</option>
                            @foreach($sectorGroups as $group)
                            <option value="{{ $group->id }}" data-sector="{{ $group->sector_id }}"
                                {{ $qrp->sector_group == $group->id ? 'selected' : '' }}>
                                {{ $group->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Meeting Name -->
                    <label>Meeting Name</label>
                    <input type="text" name="meeting_name" class="form-control"
                           value="{{ $qrp->meeting_name }}" placeholder="e.g. SG/WP/TSAG/TDAG/Council">

                    <!-- Duration -->
                    <label>Duration</label>
                    <div class="row">
                        <div class="col"><input type="date" name="meeting_from" class="form-control" value="{{ $qrp->meeting_from }}"></div>
                        <div class="col"><input type="date" name="meeting_to" class="form-control" value="{{ $qrp->meeting_to }}"></div>
                    </div>

                    <!-- Place -->
                    <label>Country</label>
                    <select name="country" class="form-control" required>
                        <option value="">-- Select Country --</option>
                        @foreach($country as $cont)
                        <option value="{{$cont->id}}" {{ $qrp->country == $cont->id ? 'selected' : '' }}>{{$cont->name}}</option>
                        @endforeach
                    </select>

                    <label>City</label>
                    <input type="text" name="city" class="form-control" value="{{ $qrp->city }}">

                    <!-- Invitation Letter -->
                    <label>Invitation Letter (PDF/JPG/Word)</label>
                    @if($qrp->invitation_letter)
                    <a href="{{ asset('storage/' . $qrp->invitation_letter) }}" target="_blank">View Current File</a>
                    @endif
                    <input type="file" name="invitation_letter" class="form-control">

                    <!-- Similar Meeting -->
                    <label>Similar Meeting Occurred Before?</label>
                    <select name="similar_meeting" id="similar_meeting" class="form-control">
                        <option value="No" {{ $qrp->similar_meeting == 'No' ? 'selected' : '' }}>No</option>
                        <option value="Yes" {{ $qrp->similar_meeting == 'Yes' ? 'selected' : '' }}>Yes</option>
                    </select>

                    <div id="prev_report" style="display: {{ $qrp->similar_meeting == 'Yes' ? 'block' : 'none' }};">
                        <label>Attach Previous Tour Report</label>
                        @if($qrp->previous_report)
                        <a href="{{ asset('storage/' . $qrp->previous_report) }}" target="_blank">View Current Report</a>
                        @endif
                        <input type="file" name="previous_report" class="form-control">
                    </div>

                    <br><hr><br>
                    <h6>Officers Tab</h6>
                    <div id="officers-container">
                        @foreach($qrp->officers as $i => $officer)
                        <div class="officer-block border p-3 mb-3 position-relative">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Search Profile by Staff No</label>
                                    <input type="text" class="form-control staff_no_search" placeholder="Type Staff No...">
                                    <div class="profile_list list-group mt-1"
                                         style="position: absolute; z-index: 9999; background: white;"></div>
                                    <input type="hidden" name="officers[{{ $i }}][profile_id]" class="profile_id" value="{{ $officer->profile_id }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Staff No.</label>
                                    <input type="text" name="officers[{{ $i }}][staff_no]" class="form-control staff_no" value="{{ $officer->staff_no }}">
                                </div>
                                <div class="col-md-4">
                                    <label>Officer Name</label>
                                    <input type="text" name="officers[{{ $i }}][officer_name]" class="form-control officer_name" value="{{ $officer->officer_name }}" readonly>
                                </div>

                                <div class="col-md-3">
                                    <label>Unit</label>
                                    <select name="officers[{{ $i }}][unit]" class="form-control unit-select">
                                        <option value="">-- Select Unit --</option>
                                        @foreach($units as $unit)
                                        <option value="{{ $unit->id }}" {{ $officer->unit == $unit->id ? 'selected' : '' }}>{{ $unit->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Unit Office</label>
                                    <select name="officers[{{ $i }}][unit_office]" class="form-control unit-office-select">
                                        <option value="">-- Select Unit Office --</option>
                                        @if($officer->unit_office)
                                        <option value="{{ $officer->unit_office }}" selected>{{ $officer->unitOffice->name ?? '' }}</option>
                                        @endif
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Division</label>
                                    <select name="officers[{{ $i }}][division]" class="form-control division-select">
                                        <option value="">-- Select Division --</option>
                                        @if($officer->division)
                                        <option value="{{ $officer->division }}" selected>{{ $officer->divisionObj->name ?? '' }}</option>
                                        @endif
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Designation</label>
                                    <select name="officers[{{ $i }}][designation]" class="form-control designation-select">
                                        <option value="">-- Select Designation --</option>
                                        @if($officer->designation)
                                        <option value="{{ $officer->designation }}" selected>{{ $officer->designationObj->name ?? '' }}</option>
                                        @endif
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Mode</label>
                                    <select name="officers[{{ $i }}][mode]" class="form-control">
                                        <option value="Online" {{ $officer->mode == 'Online' ? 'selected' : '' }}>Online</option>
                                        <option value="Offline" {{ $officer->mode == 'Offline' ? 'selected' : '' }}>Offline</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="officers[{{ $i }}][email]" class="form-control" value="{{ $officer->email }}">
                                </div>

                                <div class="col-md-3">
                                    <label>Contact No.</label>
                                    <input type="text" name="officers[{{ $i }}][contact]" class="form-control" value="{{ $officer->contact }}">
                                </div>

                                <div class="col-md-6">
                                    <label>Duration From</label>
                                    <input type="date" name="officers[{{ $i }}][meeting_from]" class="form-control" value="{{ $officer->meeting_from }}">
                                </div>

                                <div class="col-md-6">
                                    <label>Duration To</label>
                                    <input type="date" name="officers[{{ $i }}][meeting_to]" class="form-control" value="{{ $officer->meeting_to }}">
                                </div>

                                <div class="col-md-6">
                                    <label>Country</label>
                                    <select name="officers[{{ $i }}][country]" class="form-control">
                                        <option value="">-- Select Country --</option>
                                        @foreach($country as $cont)
                                        <option value="{{$cont->id}}" {{ $officer->country == $cont->id ? 'selected' : '' }}>{{$cont->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label>City</label>
                                    <input type="text" name="officers[{{ $i }}][city]" class="form-control" value="{{ $officer->city }}">
                                </div>
                            </div>

                            <button type="button" class="btn btn-danger btn-sm mt-3 remove-officer">Remove Officer</button>
                        </div>
                        @endforeach
                    </div>

                    <button type="button" id="add-officer" class="btn btn-primary mt-3">+ Add Officer</button>

                    <br><br>

                    <!-- Justification -->
                    <label>Justification / Role / Contribution</label>
                    <textarea name="justification" class="form-control">{{ $qrp->justification }}</textarea>
                    @if($qrp->justification_file)
                    <a href="{{ asset('storage/' . $qrp->justification_file) }}" target="_blank">View File</a>
                    @endif
                    <input type="file" name="justification_file" class="form-control mt-2">

                    <!-- Expected Outcome -->
                    <label>Expected Outcome</label>
                    <textarea name="expected_outcome" class="form-control">{{ $qrp->expected_outcome }}</textarea>
                    @if($qrp->expected_file)
                    <a href="{{ asset('storage/' . $qrp->expected_file) }}" target="_blank">View File</a>
                    @endif
                    <input type="file" name="expected_file" class="form-control mt-2">

                    <button type="submit" class="btn btn-primary mt-3">Update QRP Entry</button>
                </form>
            </div>
            @endroleCanAny
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Agency → Sector → Group
    const agencySelect = document.getElementById('agency');
    const sectorSelect = document.getElementById('itu_sector');
    const groupSelect = document.getElementById('sector_group');
    const sectorContainer = document.getElementById('itu-sector-container');
    const groupContainer = document.getElementById('sector-group-container');
    const otherInputContainer = document.getElementById('agency-other-container');

    const allSectors = [...sectorSelect.querySelectorAll('option[data-agency]')];
    const allGroups = [...groupSelect.querySelectorAll('option[data-sector]')];

    agencySelect.addEventListener('change', function () {
        const selectedAgency = this.value;
        sectorContainer.style.display = 'none';
        groupContainer.style.display = 'none';
        otherInputContainer.style.display = 'none';
        sectorSelect.innerHTML = '<option value="">Select ITU Sector</option>';
        groupSelect.innerHTML = '<option value="">Select Sector Group</option>';

        if (selectedAgency === 'other') {
            otherInputContainer.style.display = 'block';
            return;
        }

        const filteredSectors = allSectors.filter(opt => opt.dataset.agency === selectedAgency);
        if (filteredSectors.length > 0) {
            filteredSectors.forEach(opt => sectorSelect.appendChild(opt.cloneNode(true)));
            sectorContainer.style.display = 'block';
        }
    });

    sectorSelect.addEventListener('change', function () {
        const selectedSector = this.value;
        groupSelect.innerHTML = '<option value="">Select Sector Group</option>';
        groupContainer.style.display = 'none';
        if (!selectedSector) return;
        const filteredGroups = allGroups.filter(opt => opt.dataset.sector === selectedSector);
        if (filteredGroups.length > 0) {
            filteredGroups.forEach(opt => groupSelect.appendChild(opt.cloneNode(true)));
            groupContainer.style.display = 'block';
        }
    });

    // Officers dynamic
    let officerIndex = {{ $qrp->officers->count() }};

    function attachSearchHandler(block) {
        block.find('.staff_no_search').on('keyup', function () {
            const query = $(this).val();
            const profileList = $(this).siblings('.profile_list');
            if (query.length > 0) {
                $.ajax({
                    url: "{{ route('profiles.search') }}",
                    type: "GET",
                    data: { query },
                    success: function (data) {
                        let html = '';
                        data.forEach(profile => {
                            html += `<a href="#" class="list-group-item list-group-item-action profile-item"
                                data-id="${profile.id}"
                                data-name="${profile.officer_name}"
                                data-staff_no="${profile.staff_no}">
                                ${profile.staff_no} - ${profile.officer_name}
                            </a>`;
                        });
                        profileList.html(html).show();
                    }
                });
            } else {
                profileList.hide();
            }
        });

        block.on('click', '.profile-item', function (e) {
            e.preventDefault();
            const item = $(this);
            const container = item.closest('.officer-block');
            container.find('.profile_id').val(item.data('id'));
            container.find('.officer_name').val(item.data('name'));
            container.find('.staff_no').val(item.data('staff_no'));
            container.find('.staff_no_search').val('');
            container.find('.profile_list').hide();
        });
    }

    function attachDynamicHandlers(block) {
        block.find('.unit-select').on('change', function () {
            const unitId = $(this).val();
            const officeSelect = block.find('.unit-office-select');
            const divisionSelect = block.find('.division-select');
            const designationSelect = block.find('.designation-select');
            officeSelect.html('<option value="">Loading...</option>');
            divisionSelect.html('<option value="">-- Select Division --</option>');
            designationSelect.html('<option value="">-- Select Designation --</option>');
            if (unitId) {
                $.get("{{ route('api.unit.offices') }}", { unit_id: unitId }, function (data) {
                    officeSelect.html('<option value="">-- Select Unit Office --</option>');
                    data.forEach(item => officeSelect.append(`<option value="${item.id}">${item.name}</option>`));
                });
            }
        });

        block.find('.unit-office-select').on('change', function () {
            const officeId = $(this).val();
            const divisionSelect = block.find('.division-select');
            const designationSelect = block.find('.designation-select');
            divisionSelect.html('<option value="">Loading...</option>');
            designationSelect.html('<option value="">-- Select Designation --</option>');
            if (officeId) {
                $.get("{{ route('api.unitoffice.divisions') }}", { unit_office_id: officeId }, function (data) {
                    divisionSelect.html('<option value="">-- Select Division --</option>');
                    data.forEach(item => divisionSelect.append(`<option value="${item.id}">${item.name}</option>`));
                });
            }
        });

        block.find('.division-select').on('change', function () {
            const divisionId = $(this).val();
            const designationSelect = block.find('.designation-select');
            designationSelect.html('<option value="">Loading...</option>');
            if (divisionId) {
                $.get("{{ route('api.division.designations') }}", { division_id: divisionId }, function (data) {
                    designationSelect.html('<option value="">-- Select Designation --</option>');
                    data.forEach(item => designationSelect.append(`<option value="${item.id}">${item.name}</option>`));
                });
            }
        });
    }

    $('#add-officer').on('click', function () {
        officerIndex++;
        const block = $(`
        <div class="officer-block border p-3 mb-3 position-relative">
            <div class="row">
                <div class="col-md-4">
                    <label>Search Profile by Staff No</label>
                    <input type="text" class="form-control staff_no_search" placeholder="Type Staff No...">
                    <div class="profile_list list-group mt-1"
                         style="position: absolute; z-index: 9999; background: white;"></div>
                    <input type="hidden" name="officers[${officerIndex}][profile_id]" class="profile_id">
                </div>
                <div class="col-md-4">
                    <label>Staff No.</label>
                    <input type="text" name="officers[${officerIndex}][staff_no]" class="form-control staff_no">
                </div>
                <div class="col-md-4">
                    <label>Officer Name</label>
                    <input type="text" name="officers[${officerIndex}][officer_name]" class="form-control officer_name" readonly>
                </div>

                <div class="col-md-3">
                    <label>Unit</label>
                    <select name="officers[${officerIndex}][unit]" class="form-control unit-select">
                        <option value="">-- Select Unit --</option>
                        @foreach($units as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label>Unit Office</label>
                    <select name="officers[${officerIndex}][unit_office]" class="form-control unit-office-select">
                        <option value="">-- Select Unit Office --</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label>Division</label>
                    <select name="officers[${officerIndex}][division]" class="form-control division-select">
                        <option value="">-- Select Division --</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label>Designation</label>
                    <select name="officers[${officerIndex}][designation]" class="form-control designation-select">
                        <option value="">-- Select Designation --</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label>Mode</label>
                    <select name="officers[${officerIndex}][mode]" class="form-control">
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label>Email</label>
                    <input type="email" name="officers[${officerIndex}][email]" class="form-control">
                </div>

                <div class="col-md-3">
                    <label>Contact No.</label>
                    <input type="text" name="officers[${officerIndex}][contact]" class="form-control">
                </div>

                <div class="col-md-6">
                    <label>Duration From</label>
                    <input type="date" name="officers[${officerIndex}][meeting_from]" class="form-control">
                </div>

                <div class="col-md-6">
                    <label>Duration To</label>
                    <input type="date" name="officers[${officerIndex}][meeting_to]" class="form-control">
                </div>

                <div class="col-md-6">
                    <label>Country</label>
                    <select name="officers[${officerIndex}][country]" class="form-control">
                        <option value="">-- Select Country --</option>
                        @foreach($country as $cont)
                        <option value="{{$cont->id}}">{{$cont->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label>City</label>
                    <input type="text" name="officers[${officerIndex}][city]" class="form-control">
                </div>
            </div>

            <button type="button" class="btn btn-danger btn-sm mt-3 remove-officer">Remove Officer</button>
        </div>
        `);

        $('#officers-container').append(block);
        attachSearchHandler(block);
        attachDynamicHandlers(block);
    });

    $(document).on('click', '.remove-officer', function () {
        $(this).closest('.officer-block').remove();
    });

    // Attach existing officers
    $('.officer-block').each(function () {
        attachSearchHandler($(this));
        attachDynamicHandlers($(this));
    });

    // Trigger initial changes
    agencySelect.dispatchEvent(new Event('change'));
    sectorSelect.dispatchEvent(new Event('change'));

    // Show previous report if yes
    $('#similar_meeting').on('change', function () {
        if ($(this).val() === 'Yes') $('#prev_report').show();
        else $('#prev_report').hide();
    });
</script>
@endsection
