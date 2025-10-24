@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h1>Site Settings</h1>
    <!-- <a href="{{ route('admin.site_settings.create') }}" class="btn btn-primary mb-3">Add Site Settings</a> -->

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($settings)
    <table class="table table-bordered">
        <tr>
            <th>Site Name</th>
            <th>Contact</th>
            <th>email</th>
            <th>Meta Title</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>{{ $settings->site_name }}</td>
            <td>{{ $settings->contact_phone }}
            </td>
            <td>{{ $settings->contact_email }}
            </td>
            <td>{{ $settings->meta_title }}</td>
            <td>
                <a href="{{ route('admin.site_settings.edit', $settings->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <!-- <form action="{{ route('admin.site_settings.destroy', $settings->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form> -->
            </td>
        </tr>
    </table>
    @else
        <p>No settings found.</p>
    @endif
</div>
@endsection
