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

    .card-header {
        font-weight: bold;
        font-size: 1.2rem;
    }

    .officer-block {
        border: 1px solid #ced4da;
        border-radius: 0.5rem;
        padding: 1rem;
        margin-bottom: 1rem;
        background-color: #f9f9f9;
    }

    .remove-officer {
        position: absolute;
        top: 1rem;
        right: 1rem;
    }

    .form-label {
        font-weight: 500;
    }

    hr {
        margin: 2rem 0;
    }

    .officer-block .row>div {
        margin-bottom: 1rem;
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

                    <!-- Agency -->
                    <label>Meeting Organizing Agency</label>
                    <select name="agency" id="agency" class="form-control" required>
                        @foreach($agencies as $agency)
                        <option value="{{ $agency->id }}" {{ $qrp->agency == $agency->id ? 'selected' : '' }}>
                            {{ $agency->name }}
                        </option>
                        @endforeach
                        <option value="other" {{ $qrp->agency == 'other' ? 'selected' : '' }}>Other</option>
                    </select>

                    <!-- Other agency input -->
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
                    <input type="text" name="meeting_name" class="form-control" value="{{ $qrp->meeting_name }}"
                        placeholder="e.g. SG/WP/TSAG/TDAG/Council">

                    <!-- Duration -->
                    <label>Duration</label>
                    <div class="row">
                        <div class="col">
                            <input type="date" name="meeting_from" class="form-control"
                                value="{{ $qrp->meeting_from }}">
                        </div>
                        <div class="col">
                            <input type="date" name="meeting_to" class="form-control" value="{{ $qrp->meeting_to }}">
                        </div>
                    </div>

                    <!-- Country -->
                    <label>Country</label>
                    <select name="country" class="form-control" required>
                        <option value="">-- Select Country --</option>
                        @foreach($country as $cont)
                        <option value="{{ $cont->id }}" {{ $qrp->country == $cont->id ? 'selected' : '' }}>
                            {{ $cont->name }}
                        </option>
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
                        <a href="{{ asset('storage/' . $qrp->previous_report) }}" target="_blank">View Current
                            Report</a>
                        @endif
                        <input type="file" name="previous_report" class="form-control">
                    </div>

                    <br>
                    <hr><br>
                    <h6>Officers Tab</h6>
                    <div id="officers-container">
                        @foreach($qrp->officers as $i => $officer)
                        <div class="officer-block border p-3 mb-3">
                            <button type="button" class="btn btn-danger btn-sm float-end remove-officer">Remove</button>

                            <input type="hidden" name="officers[{{ $i }}][profile_id]" class="profile_id"
                                value="{{ $officer->profile_id ?? '' }}">

                            <label>Staff No / Search</label>
                            <input type="text" class="form-control staff_no_search" placeholder="Search by staff no">
                            <div class="list-group profile_list"></div>

                            <label>Staff No</label>
                            <input type="text" name="officers[{{ $i }}][staff_no]" class="form-control staff_no"
                                value="{{ $officer->staff_no ?? '' }}">

                            <label>Officer Name</label>
                            <input type="text" name="officers[{{ $i }}][officer_name]" class="form-control officer_name"
                                value="{{ $officer->officer_name ?? '' }}">

                            <label>Unit</label>
                            <select name="officers[{{ $i }}][unit]" class="form-control unit-select">
                                <option value="">-- Select Unit --</option>
                                @foreach($units as $unit)
                                <option value="{{ $unit->id }}" {{ $officer->unit == $unit->id ? 'selected' : '' }}>
                                    {{ $unit->name }}</option>
                                @endforeach
                            </select>

                            <label>Unit Office</label>
                            <select name="officers[{{ $i }}][unit_office]" class="form-control unit-office-select">
                                @if($officer->unit_office)
                                <option value="{{ $officer->unit_office }}" selected>
                                    {{ $officer->unitOffice->name ?? '' }}</option>
                                @else
                                <option value="">-- Select Unit Office --</option>
                                @endif
                            </select>

                            <label>Division</label>
                            <select name="officers[{{ $i }}][division]" class="form-control division-select">
                                @if($officer->division)
                                <option value="{{ $officer->division }}" selected>
                                    {{ $officer->divisionObj->name ?? '' }}</option>
                                @else
                                <option value="">-- Select Division --</option>
                                @endif
                            </select>

                            <label>Designation</label>
                            <select name="officers[{{ $i }}][designation]" class="form-control designation-select">
                                @if($officer->designation)
                                <option value="{{ $officer->designation }}" selected>
                                    {{ $officer->designationObj->name ?? '' }}</option>
                                @else
                                <option value="">-- Select Designation --</option>
                                @endif
                            </select>

                            <div class="officer-countries-container">
                                @php
                                $officerCountries = is_array($officer->country) ? $officer->country :
                                json_decode($officer->country, true);
                                @endphp

                                @foreach($officerCountries as $j => $officerCountry)
                                <div class="officer-country-block">
                                    <select name="officers[{{ $i }}][countries][{{ $j }}][country]"
                                        class="form-control">
                                        @foreach($country as $cont)
                                        <option value="{{ $cont->id }}"
                                            {{ ($officerCountry['country'] ?? '') == $cont->id ? 'selected' : '' }}>
                                            {{ $cont->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <input type="text" name="officers[{{ $i }}][countries][{{ $j }}][city]"
                                        class="form-control" value="{{ $officerCountry['city'] ?? '' }}">
                                </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-primary btn-sm add-officer-country mt-2">+ Add
                                Country</button>
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
    const agencySelect = document.getElementById('agency');
    const sectorSelect = document.getElementById('itu_sector');
    const groupSelect = document.getElementById('sector_group');

    const sectorContainer = document.getElementById('itu-sector-container');
    const groupContainer = document.getElementById('sector-group-container');
    const otherInputContainer = document.getElementById('agency-other-container');

    const allSectors = [...sectorSelect.querySelectorAll('option[data-agency]')];
    const allGroups = [...groupSelect.querySelectorAll('option[data-sector]')];

    // Agency change
    agencySelect.addEventListener('change', function () {
        const selectedAgency = this.value;

        // Hide everything
        sectorContainer.style.display = 'none';
        groupContainer.style.display = 'none';
        otherInputContainer.style.display = 'none';
        sectorSelect.innerHTML = '<option value="">Select ITU Sector</option>';
        groupSelect.innerHTML = '<option value="">Select Sector Group</option>';

        // If 'other', show input
        if (selectedAgency === 'other') {
            otherInputContainer.style.display = 'block';
            return;
        }

        // Filter sectors for this agency
        const filteredSectors = allSectors.filter(opt => opt.dataset.agency === selectedAgency);

        if (filteredSectors.length > 0) {
            filteredSectors.forEach(opt => {
                sectorSelect.appendChild(opt.cloneNode(true));
            });
            sectorContainer.style.display = 'block';
        }
    });

    // Sector change
    sectorSelect.addEventListener('change', function () {
        const selectedSector = this.value;

        groupSelect.innerHTML = '<option value="">Select Sector Group</option>';
        groupContainer.style.display = 'none';

        if (!selectedSector) return;

        // Filter groups for this sector
        const filteredGroups = allGroups.filter(opt => opt.dataset.sector === selectedSector);

        if (filteredGroups.length > 0) {
            filteredGroups.forEach(opt => {
                groupSelect.appendChild(opt.cloneNode(true));
            });
            groupContainer.style.display = 'block';
        }
    });

</script>


<script>
    let countryIndex = 1;

    $('#add-country').on('click', function () {
        const lastBlock = $('#countries-container .country-block').last();
        const newBlock = lastBlock.clone();

        // Clear values
        newBlock.find('select, input').val('');

        // Update name attributes with new index
        newBlock.find('[name]').each(function () {
            const name = $(this).attr('name');
            if (name) {
                const updated = name.replace(/\[\d+\]/, `[${countryIndex}]`);
                $(this).attr('name', updated);
            }
        });

        $('#countries-container').append(newBlock);
        countryIndex++;
    });

    // Remove country block
    $(document).on('click', '.remove-country', function () {
        if ($('#countries-container .country-block').length > 1) {
            $(this).closest('.country-block').remove();
        } else {
            alert('At least one country is required.');
        }
    });

</script>
<script>
    $(document).ready(function () {
        // Officer location index tracking
        function getNextCountryIndex(officerBlock) {
            return officerBlock.find('.officer-country-block').length;
        }

        // Add new country for officer
        $(document).on('click', '.add-officer-country', function () {
            const officerBlock = $(this).closest('.officer-block');
            const container = officerBlock.find('.officer-countries-container');
            const lastBlock = container.find('.officer-country-block').last();
            const newBlock = lastBlock.clone();

            // Get current officer index from the first input name
            const firstName = lastBlock.find('[name]').first().attr('name');
            const officerMatch = firstName.match(/officers\[(\d+)\]/);
            const officerIndex = officerMatch ? officerMatch[1] : 0;

            // Get next country index
            const newCountryIndex = container.find('.officer-country-block').length;

            // Clear values
            newBlock.find('select, input').val('');

            // Update name attributes correctly
            newBlock.find('[name]').each(function () {
                const name = $(this).attr('name');
                if (name) {
                    // Replace the full pattern for countries
                    const updated = name.replace(/officers\[\d+\]\[countries\]\[\d+\]/,
                        `officers[${officerIndex}][countries][${newCountryIndex}]`);
                    $(this).attr('name', updated);
                }
            });

            container.append(newBlock);
        });

        // Remove officer country
        $(document).on('click', '.remove-officer-country', function () {
            const container = $(this).closest('.officer-countries-container');
            if (container.find('.officer-country-block').length > 1) {
                $(this).closest('.officer-country-block').remove();
            } else {
                alert('At least one country is required for this officer.');
            }
        });
    });

</script>
<script>
    let officerIndex = 1;

    function attachSearchHandler(block) {
        block.find('.staff_no_search').on('keyup', function () {
            const query = $(this).val();
            const profileList = $(this).siblings('.profile_list');

            if (query.length > 0) {
                $.ajax({
                    url: "{{ route('profiles.search') }}",
                    type: "GET",
                    data: {
                        query
                    },
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

        // Click profile
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
        // Unit → Unit Offices
        block.find('.unit-select').on('change', function () {
            const unitId = $(this).val();
            const officeSelect = block.find('.unit-office-select');
            const divisionSelect = block.find('.division-select');
            const designationSelect = block.find('.designation-select');

            officeSelect.html('<option value="">Loading...</option>');
            divisionSelect.html('<option value="">-- Select Division --</option>');
            designationSelect.html('<option value="">-- Select Designation --</option>');

            if (unitId) {
                $.get("{{ route('api.unit.offices') }}", {
                    unit_id: unitId
                }, function (data) {
                    officeSelect.html('<option value="">-- Select Unit Office --</option>');
                    data.forEach(item => {
                        officeSelect.append(`<option value="${item.id}">${item.name}</option>`);
                    });
                });
            } else {
                officeSelect.html('<option value="">-- Select Unit Office --</option>');
            }
        });

        // Unit Office → Divisions
        block.find('.unit-office-select').on('change', function () {
            const officeId = $(this).val();
            const divisionSelect = block.find('.division-select');
            const designationSelect = block.find('.designation-select');

            divisionSelect.html('<option value="">Loading...</option>');
            designationSelect.html('<option value="">-- Select Designation --</option>');

            if (officeId) {
                $.get("{{ route('api.unitoffice.divisions') }}", {
                    unit_office_id: officeId
                }, function (data) {
                    divisionSelect.html('<option value="">-- Select Division --</option>');
                    data.forEach(item => {
                        divisionSelect.append(
                            `<option value="${item.id}">${item.name}</option>`);
                    });
                });
            } else {
                divisionSelect.html('<option value="">-- Select Division --</option>');
            }
        });

        // Division → Designations
        block.find('.division-select').on('change', function () {
            const divisionId = $(this).val();
            const designationSelect = block.find('.designation-select');

            designationSelect.html('<option value="">Loading...</option>');

            if (divisionId) {
                $.get("{{ route('api.division.designations') }}", {
                    division_id: divisionId
                }, function (data) {
                    designationSelect.html('<option value="">-- Select Designation --</option>');
                    data.forEach(item => {
                        designationSelect.append(
                            `<option value="${item.id}">${item.name}</option>`);
                    });
                });
            } else {
                designationSelect.html('<option value="">-- Select Designation --</option>');
            }
        });
    }

    $(document).ready(function () {
        const container = $('#officers-container');

        // Attach handlers to first block
        const firstBlock = container.find('.officer-block');
        attachSearchHandler(firstBlock);
        attachDynamicHandlers(firstBlock); // ✅ Attach dynamic dropdown handler

        // Add new officer block
        $('#add-officer').on('click', function () {
            const container = $('#officers-container');
            const lastBlock = container.find('.officer-block').last();
            const newBlock = lastBlock.clone();

            // Get new officer index
            const newOfficerIndex = officerIndex;

            // --- 1. Reset all input/select/textarea values ---
            newBlock.find('input, select, textarea').each(function () {
                const type = $(this).attr('type');
                if (type !== 'hidden') $(this).val('');
            });

            // --- 2. Reset officer-countries-container to just one empty block ---
            const countriesContainer = newBlock.find('.officer-countries-container');
            const firstCountryBlock = countriesContainer.find('.officer-country-block').first().clone();
            // Clear values in first block
            firstCountryBlock.find('select, input').val('');
            // Reset its name to index 0 for countries
            firstCountryBlock.find('[name]').each(function () {
                const name = $(this).attr('name');
                if (name) {
                    const updated = name.replace(/officers\[\d+\]\[countries\]\[\d+\]/,
                        `officers[${newOfficerIndex}][countries][0]`);
                    $(this).attr('name', updated);
                }
            });
            countriesContainer.html(firstCountryBlock);

            // --- 3. Update ALL name attributes for officer-level fields ---
            newBlock.find('[name]').each(function () {
                const name = $(this).attr('name');
                if (name) {
                    // Replace first index [x] after officers
                    const updated = name.replace(/officers\[\d+\]/,
                        `officers[${newOfficerIndex}]`);
                    $(this).attr('name', updated);
                }
            });

            // Clear profile list
            newBlock.find('.profile_list').html('').hide();

            container.append(newBlock);

            // Attach handlers to new block
            attachSearchHandler(newBlock);
            attachDynamicHandlers(newBlock);

            officerIndex++;
        });

        // Remove officer block
        $(document).on('click', '.remove-officer', function () {
            if ($('.officer-block').length > 1) {
                $(this).closest('.officer-block').remove();
            } else {
                alert('At least one officer is required.');
            }
        });
    });

</script>


{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');

</script>
@endsection
