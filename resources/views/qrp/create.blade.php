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
            <h5 class="card-header">Create Qrp Details</h5>



            @roleCan('submission.qrp.create')
            <div class="card-body">
                <form action="{{ route('qrp.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <!-- Agency Select -->
                    <label>Meeting Organizing Agency</label>
                    <select name="agency" id="agency" class="form-control" required>
                        @foreach($agencies as $agency)
                        <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                        @endforeach
                        <option value="other">Other</option>
                    </select>

                    <!-- ITU Sector (initially hidden) -->
                    <div id="itu-sector-container" style="display:none;">
                        <label>ITU Sector</label>
                        <select name="itu_sector" id="itu_sector" class="form-control">
                            <option value="">Select ITU Sector</option>
                            @foreach($sectors as $sector)
                            <option value="{{ $sector->id }}" data-agency="{{ $sector->agency_id }}">{{ $sector->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- ITU Sector Group (initially hidden) -->
                    <div id="sector-group-container" style="display:none;">
                        <label>Sector Group</label>
                        <select name="sector_group" id="sector_group" class="form-control">
                            <option value="">Select Sector Group</option>
                            @foreach($sectorGroups as $group)
                            <option value="{{ $group->id }}" data-sector="{{ $group->sector_id }}">{{ $group->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Other input (initially hidden) -->
                    <div id="agency-other-container" style="display:none;">
                        <input type="text" name="agency_other" class="form-control mt-2" placeholder="Specify if Other">
                    </div>

                    <!-- Sub-agency if ITU -->
                    <!-- <div id="itu_sub" style="display:none;">
                        <label>ITU Division</label>
                        <select name="itu_type" class="form-control">
                            <option value="ITU-T">ITU-T</option>
                            <option value="ITU-D">ITU-D</option>
                            <option value="ITU-R">ITU-R</option>
                        </select>
                    </div> -->

                    <!-- Meeting Name -->
                    <label>Meeting Name</label>
                    <input type="text" name="meeting_name" class="form-control"
                        placeholder="e.g. SG/WP/TSAG/TDAG/Council">

                    <!-- Duration -->
                    <label>Duration</label>
                    <div class="row">
                        <div class="col"><input type="date" name="meeting_from" class="form-control"></div>
                        <div class="col"><input type="date" name="meeting_to" class="form-control"></div>
                    </div>


                    <!-- Place -->
                    <label>Country</label>
                    <select name="country" class="form-control" required>
                        <option value="">-- Select Country --</option>
                        @foreach($country as $cont)
                        <option value="{{$cont->id}}">{{$cont->name}}</option>
                        @endforeach
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
<br><hr><br>
                    <h6>Officers Tab</h6>
                    <div id="officers-container">

                        <!-- Template row for cloning -->
                        <div class="officer-block border p-3 mb-3 position-relative">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Search Profile by Staff No</label>
                                    <input type="text" class="form-control staff_no_search"
                                        placeholder="Type Staff No...">
                                    <div class="profile_list list-group mt-1"
                                        style="position: absolute; z-index: 9999; background: white;"></div>

                                    <input type="hidden" name="officers[0][profile_id]" class="profile_id">
                                </div>

                                <div class="col-md-4">
                                    <label>Staff No.</label>
                                    <input type="text" name="officers[0][staff_no]" class="form-control staff_no">
                                </div>

                                <div class="col-md-4">
                                    <label>Officer Name</label>
                                    <input type="text" name="officers[0][officer_name]"
                                        class="form-control officer_name" readonly>
                                </div>
<div class="col-md-3">
    <label>Unit</label>
    <select name="officers[0][unit]" class="form-control unit-select">
        <option value="">-- Select Unit --</option>
        @foreach($units as $unit)
        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
        @endforeach
    </select>
</div>

<div class="col-md-3">
    <label>Unit Office</label>
    <select name="officers[0][unit_office]" class="form-control unit-office-select">
        <option value="">-- Select Unit Office --</option>
    </select>
</div>

<div class="col-md-3">
    <label>Division</label>
    <select name="officers[0][division]" class="form-control division-select">
        <option value="">-- Select Division --</option>
    </select>
</div>

<div class="col-md-3">
    <label>Designation</label>
    <select name="officers[0][designation]" class="form-control designation-select">
        <option value="">-- Select Designation --</option>
    </select>
</div>
                                <div class="col-md-3">
                                    <label>Mode</label>
                                    <select name="officers[0][mode]" class="form-control">
                                        <option value="Online">Online</option>
                                        <option value="Offline">Offline</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="officers[0][email]" class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label>Contact No.</label>
                                    <input type="text" name="officers[0][contact]" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label>Duration From</label>
                                    <input type="date" name="officers[0][meeting_from]" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label>Duration To</label>
                                    <input type="date" name="officers[0][meeting_to]" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label>Country</label>
                                    <select name="officers[0][country]" class="form-control">
                                        <option value="">-- Select Country --</option>
                                        @foreach($country as $cont)
                                        <option value="{{$cont->id}}">{{$cont->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label>City</label>
                                    <input type="text" name="officers[0][city]" class="form-control">
                                </div>

                            </div>

                            <button type="button" class="btn btn-danger btn-sm mt-3 remove-officer">Remove
                                Officer</button>
                        </div>

                    </div>

                    <button type="button" id="add-officer" class="btn btn-primary mt-3">+ Add Officer</button>
                    <br>
                    <br>



                    <!-- Justification -->
                    <label>Justification / Role / Contribution</label>
                    <textarea name="justification" class="form-control"></textarea>
                    <input type="file" name="justification_file" class="form-control mt-2">

                    <!-- Expected Outcome -->
                    <label>Expected Outcome</label>
                    <textarea name="expected_outcome" class="form-control"></textarea>
                    <input type="file" name="expected_file" class="form-control mt-2">

                    <!-- Add Another Officer -->
                    <button type="button" class="btn btn-secondary mt-2">Cancel</button>

                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary mt-3">Save QRP Entry</button>
                </form>

                <script>
                    document.getElementById('agency').addEventListener('change', function () {
                        document.getElementById('itu_sub').style.display = this.value === 'ITU' ? 'block' :
                            'none';
                    });
                    document.getElementById('similar_meeting').addEventListener('change', function () {
                        document.getElementById('prev_report').style.display = this.value === 'Yes' ? 'block' :
                            'none';
                    });

                </script>


                <script>
                    document.getElementById('is_itu').addEventListener('change', function () {
                        document.getElementById('itu_fields').style.display = this.value === 'Yes' ? 'block' :
                            'none';
                    });

                </script>
            </div>
            @endroleCan
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
    let officerIndex = 1;

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
                $.get("{{ route('api.unit.offices') }}", { unit_id: unitId }, function (data) {
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
                $.get("{{ route('api.unitoffice.divisions') }}", { unit_office_id: officeId }, function (data) {
                    divisionSelect.html('<option value="">-- Select Division --</option>');
                    data.forEach(item => {
                        divisionSelect.append(`<option value="${item.id}">${item.name}</option>`);
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
                $.get("{{ route('api.division.designations') }}", { division_id: divisionId }, function (data) {
                    designationSelect.html('<option value="">-- Select Designation --</option>');
                    data.forEach(item => {
                        designationSelect.append(`<option value="${item.id}">${item.name}</option>`);
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
            const lastBlock = container.find('.officer-block').last();
            const newBlock = lastBlock.clone();

            // Clear input values
            newBlock.find('input, select').each(function () {
                const type = $(this).attr('type');
                if (type !== 'hidden') $(this).val('');
            });

            // Update name attributes with new index
            newBlock.find('[name]').each(function () {
                const name = $(this).attr('name');
                if (name) {
                    const updated = name.replace(/\[\d+\]/, `[${officerIndex}]`);
                    $(this).attr('name', updated);
                }
            });

            // Clear profile list
            newBlock.find('.profile_list').html('').hide();

            container.append(newBlock);
            attachSearchHandler(newBlock);
            attachDynamicHandlers(newBlock); // ✅ Attach dynamic handler for new block

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
