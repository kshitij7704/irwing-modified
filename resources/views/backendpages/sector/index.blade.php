@extends('layoutsBackend.app')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Countries</span>

            <div class="d-flex align-items-center">
                <form method="GET" action="{{ route('countries.index') }}" class="d-flex me-2">
                    <input type="text" name="search" class="form-control form-control-sm me-2"
                           placeholder="Search country..." value="{{ request('search') }}">
                    <button type="submit" class="btn btn-sm btn-secondary">Search</button>
                </form>

                <a href="{{ route('countries.create') }}" class="add-new btn btn-primary">
                    <i class="icon-base ti tabler-plus icon-xs me-0 me-sm-2"></i>
                    <span class="d-none d-sm-inline-block">+ Add Country</span>
                </a>
            </div>
        </h5>

        <div class="card-datatable table-responsive">
            <div class="table-responsive">
                <table id="countriesTable" class="table table-bordered align-middle">

                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>Name</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($countries as $country)
                            <tr>
                                <td>{{ $loop->iteration + ($countries->currentPage() - 1) * $countries->perPage() }}</td>
                                <td>{{ $country->name }}</td>
                                <td>
                                    <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('countries.destroy', $country->id) }}" method="POST" class="d-inline-block">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this country?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="3" class="text-center">No countries found.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer">
            <div class="d-flex justify-content-center">
                {{ $countries->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

@endsection
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.querySelector('input[name="search"]');
    const table = document.getElementById('countriesTable');
    const rows = table.querySelectorAll('tbody tr');

    searchInput.addEventListener('input', function () {
        const query = this.value.toLowerCase();

        rows.forEach(row => {
            const countryName = row.cells[1].textContent.toLowerCase();
            row.style.display = countryName.includes(query) ? '' : 'none';
        });
    });
});
</script>
