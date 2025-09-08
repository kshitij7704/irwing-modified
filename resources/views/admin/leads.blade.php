<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI LifeBOT - Lead Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .status-badge {
            font-size: 0.8rem;
            padding: 0.25rem 0.5rem;
        }
        .lead-card {
            transition: all 0.3s ease;
        }
        .lead-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .stats-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" style="min-height: 100vh;">
                <div class="position-sticky pt-3">
                    <div class="text-center mb-4">
                        <h4 class="text-white">AI LifeBOT</h4>
                        <p class="text-muted">Lead Management</p>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#">
                                <i class="bi bi-people-fill me-2"></i>
                                Leads
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="{{ route('home') }}">
                                <i class="bi bi-house me-2"></i>
                                Back to Website
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Lead Management</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="exportLeads()">
                                <i class="bi bi-download me-1"></i>Export
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card stats-card">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $leads->where('status', 'new')->count() }}</h5>
                                <p class="card-text">New Leads</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-primary text-white">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $leads->where('status', 'contacted')->count() }}</h5>
                                <p class="card-text">Contacted</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-success text-white">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $leads->where('status', 'converted')->count() }}</h5>
                                <p class="card-text">Converted</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-info text-white">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $leads->total() }}</h5>
                                <p class="card-text">Total Leads</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Leads Table -->
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Company</th>
                                <th scope="col">Service</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($leads as $lead)
                            <tr>
                                <td>{{ $lead->id }}</td>
                                <td>{{ $lead->name }}</td>
                                <td>
                                    <a href="mailto:{{ $lead->email }}">{{ $lead->email }}</a>
                                </td>
                                <td>{{ $lead->company ?? 'N/A' }}</td>
                                <td>{{ $lead->service ?? 'N/A' }}</td>
                                <td>
                                    <select class="form-select form-select-sm status-select" 
                                            data-lead-id="{{ $lead->id }}" 
                                            style="width: auto;">
                                        <option value="new" {{ $lead->status == 'new' ? 'selected' : '' }}>New</option>
                                        <option value="contacted" {{ $lead->status == 'contacted' ? 'selected' : '' }}>Contacted</option>
                                        <option value="qualified" {{ $lead->status == 'qualified' ? 'selected' : '' }}>Qualified</option>
                                        <option value="converted" {{ $lead->status == 'converted' ? 'selected' : '' }}>Converted</option>
                                        <option value="lost" {{ $lead->status == 'lost' ? 'selected' : '' }}>Lost</option>
                                    </select>
                                </td>
                                <td>{{ $lead->created_at->format('M j, Y') }}</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary" 
                                            onclick="viewLead({{ $lead->id }})">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" 
                                            onclick="deleteLead({{ $lead->id }})">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center">
                    {{ $leads->links() }}
                </div>
            </main>
        </div>
    </div>

    <!-- Lead Details Modal -->
    <div class="modal fade" id="leadModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Lead Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="leadModalBody">
                    <!-- Content will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Status update
        document.querySelectorAll('.status-select').forEach(select => {
            select.addEventListener('change', function() {
                const leadId = this.dataset.leadId;
                const status = this.value;
                
                fetch(`/admin/leads/${leadId}/status`, {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ status: status })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Show success message
                        alert('Status updated successfully!');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error updating status');
                });
            });
        });

        // View lead details
        function viewLead(leadId) {
            // This would typically fetch lead details via AJAX
            // For now, we'll show a simple message
            document.getElementById('leadModalBody').innerHTML = `
                <p>Loading lead details for ID: ${leadId}</p>
                <p>This would show the full lead information including the message field.</p>
            `;
            new bootstrap.Modal(document.getElementById('leadModal')).show();
        }

        // Delete lead
        function deleteLead(leadId) {
            if (confirm('Are you sure you want to delete this lead?')) {
                fetch(`/admin/leads/${leadId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error deleting lead');
                });
            }
        }

        // Export leads
        function exportLeads() {
            window.location.href = '/admin/leads/export';
        }
    </script>
</body>
</html> 