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
        <div class="card shadow-sm">
            <h5 class="card-header">Create QRP Details</h5>

            @roleCan('submission.qrp.create')
            <div class="card-body">
                <form action="{{ route('qrp.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- ================== Meeting Details ================== --}}
                    <h6 class="fw-bold mb-3">Meeting Details</h6>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Meeting Organizing Agency</label>
                            <select name="agency" id="agency" class="form-control" required>
                                <option value="">Select Agency</option>
                                @foreach($agencies as $agency)
                                    <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                                @endforeach
                                <option value="other">Other</option>
                            </select>
                            <div id="agency-other-container" class="mt-2" style="display:none;">
                                <input type="text" name="agency_other" class="form-control" placeholder="Specify if Other">
                            </div>
                        </div>
                        <div class="col-md-6" id="itu-sector-container" style="display:none;">
                            <label class="form-label">ITU Sector</label>
                            <select name="itu_sector" id="itu_sector" class="form-control">
                                <option value="">Select ITU Sector</option>
                                @foreach($sectors as $sector)
                                    <option value="{{ $sector->id }}" data-agency="{{ $sector->agency_id }}">
                                        {{ $sector->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div id="sector-group-container" class="mb-3" style="display:none;">
                        <label class="form-label">Sector Group</label>
                        <select name="sector_group" id="sector_group" class="form-control">
                            <option value="">Select Sector Group</option>
                            @foreach($sectorGroups as $group)
                                <option value="{{ $group->id }}" data-sector="{{ $group->sector_id }}">{{ $group->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-8">
                            <label class="form-label">Meeting Name</label>
                            <input type="text" name="meeting_name" class="form-control" placeholder="e.g. SG/WP/TSAG/TDAG/Council">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Country</label>
                            <select name="country" class="form-control" required>
                                <option value="">-- Select Country --</option>
                                @foreach($country as $cont)
                                    <option value="{{$cont->id}}">{{$cont->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">City</label>
                            <input type="text" name="city" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Duration</label>
                            <div class="d-flex gap-2">
                                <input type="date" name="meeting_from" class="form-control">
                                <input type="date" name="meeting_to" class="form-control">
                            </div>
                        </div>
                    </div>

                    {{-- ================== Attachments ================== --}}
                    <h6 class="fw-bold mt-4 mb-3">Attachments</h6>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Invitation Letter (PDF/JPG/Word)</label>
                            <input type="file" name="invitation_letter" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Similar Meeting Occurred Before?</label>
                            <select name="similar_meeting" id="similar_meeting" class="form-control">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                            <div id="prev_report" class="mt-2" style="display:none;">
                                <label class="form-label">Attach Previous Tour Report</label>
                                <input type="file" name="previous_report" class="form-control">
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    {{-- ================== Officers ================== --}}
                    <h6 class="fw-bold mb-3">Officers</h6>
                    <div id="officers-container"></div>

                    <button type="button" id="add-officer" class="btn btn-sm btn-outline-primary mt-2">+ Add Officer</button>

                    <div class="mt-4 d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save QRP Entry</button>
                    </div>
                </form>
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
