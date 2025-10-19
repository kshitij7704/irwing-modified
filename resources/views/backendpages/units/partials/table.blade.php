<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Code</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($countries as $country)
            <tr>
                <td>{{ $country->name }}</td>
                <td>{{ $country->code }}</td>
                <td>
                    <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No countries found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

{{ $countries->links() }}
