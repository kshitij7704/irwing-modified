@extends('layoutsBackend.app')
@section('content')

<link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/@form-validation/form-validation.css')}}" />

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Permission Table -->
    <div class="card">
        <div class="card-datatable table-responsive">
        <table class="datatables-permissions table border-top"
       data-url="{{ route('permissions.index') }}"
       data-store="{{ route('permissions.store') }}"
       data-token="{{ csrf_token() }}">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Name</th>
                        <th>Assigned To</th>
                        <th>Created Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!--/ Permission Table -->

    <!-- Modal -->
    <!-- Add Permission Modal -->
    <div class="modal fade" id="addPermissionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-simple">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h3>Add New Permission</h3>
                        <p class="text-body-secondary">Permissions you may use and assign to your users.</p>
                    </div>
                    <form id="addPermissionForm" class="row" onsubmit="return false">
                        <div class="col-12 form-control-validation mb-4">
                            <label class="form-label" for="modalPermissionName">Permission Name</label>
                            <input type="text" id="modalPermissionName" name="modalPermissionName" class="form-control"
                                placeholder="Permission Name" autofocus />
                        </div>
                        <div class="col-12 mb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="corePermission" />
                                <label class="form-check-label" for="corePermission"> Set as core permission </label>
                            </div>
                        </div>
                        <div class="col-12 text-center demo-vertical-spacing">
                            <button type="submit" class="btn btn-primary me-sm-4 me-1">Create Permission</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                aria-label="Close">
                                Discard
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Add Permission Modal -->

    <!-- Edit Permission Modal -->
    <div class="modal fade" id="editPermissionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-simple">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h3>Edit Permission</h3>
                        <p class="text-body-secondary">Edit permission as per your requirements.</p>
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <h6 class="alert-heading mb-2">Warning</h6>
                        <p class="mb-0">
                            By editing the permission name, you might break the system permissions functionality. Please
                            ensure you're absolutely certain before proceeding.
                        </p>
                    </div>
                    <form id="editPermissionForm" class="row" onsubmit="return false">
                        <div class="col-sm-9 form-control-validation">
                            <label class="form-label" for="editPermissionName">Permission Name</label>
                            <input type="text" id="editPermissionName" name="editPermissionName" class="form-control"
                                placeholder="Permission Name" tabindex="-1" />
                        </div>
                        <div class="col-sm-3 mb-4">
                            <label class="form-label invisible d-none d-sm-inline-block">Button</label>
                            <button type="submit" class="btn btn-primary mt-1 mt-sm-0">Update</button>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="editCorePermission" />
                                <label class="form-check-label" for="editCorePermission"> Set as core permission
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Edit Permission Modal -->

    <!-- /Modal -->
</div>

@endsection

<script src="{{asset('backend/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('backend/assets/js/app-access-permission.js')}}"></script>
<script src="{{asset('backend/assets/js/modal-add-permission.js')}}"></script>
<script src="{{asset('backend/assets/js/modal-edit-permission.js')}}"></script>
<script>
$(function () {
  const tableElement = document.querySelector('.datatables-permissions');
  if (!tableElement) return;

  const ajaxUrl = tableElement.dataset.url;
  const storeUrl = tableElement.dataset.store;
  const csrfToken = tableElement.dataset.token;

  const dt = new DataTable(tableElement, {
    processing: true,
    serverSide: true,
    ajax: ajaxUrl,
    columns: [
      { data: 'DT_RowIndex', orderable: false, searchable: false },
      { data: null, orderable: false, searchable: false },
      { data: 'name' },
      { data: 'assigned_to' },
      { data: 'created_at' },
      { data: 'actions', orderable: false, searchable: false }
    ],
    columnDefs: [
      {
        targets: 1,
        render: () => ''
      },
      {
        targets: 3,
        render: (data) => {
          if (!data || !Array.isArray(data)) return '';
          return data.map(role => `<span class="badge bg-label-primary me-1">${role}</span>`).join('');
        }
      },
      {
        targets: 5,
        render: (data, type, row) => {
          return `
            <button class="btn btn-sm btn-primary editPermission"
                    data-id="${row.id}" data-name="${row.name}"
                    data-bs-toggle="modal" data-bs-target="#editPermissionModal">
              Edit
            </button>`;
        }
      }
    ]
  });

  // Add Permission
  $('#addPermissionForm').on('submit', function (e) {
    e.preventDefault();
    const name = $('#modalPermissionName').val();

    fetch(storeUrl, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken
      },
      body: JSON.stringify({ name })
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        $('#addPermissionModal').modal('hide');
        $('#addPermissionForm')[0].reset();
        dt.ajax.reload();
        alert('Permission added successfully.');
      } else {
        alert('Failed to add permission.');
      }
    }).catch(err => {
      console.error(err);
      alert('Something went wrong.');
    });
  });

  // Open Edit Modal
  $(document).on('click', '.editPermission', function () {
    $('#editPermissionName').val($(this).data('name'));
    $('#editPermissionForm').attr('data-id', $(this).data('id'));
  });

  // Update Permission
  $('#editPermissionForm').on('submit', function (e) {
    e.preventDefault();
    const id = $(this).attr('data-id');
    const name = $('#editPermissionName').val();

    fetch(`/permissions/${id}`, {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken
      },
      body: JSON.stringify({ name })
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        $('#editPermissionModal').modal('hide');
        dt.ajax.reload();
        alert('Permission updated successfully.');
      } else {
        alert('Failed to update permission.');
      }
    }).catch(err => {
      console.error(err);
      alert('Something went wrong.');
    });
  });
});
</script>
