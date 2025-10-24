@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h2>Social Media List</h2>
    <a href="{{ route('admin.social_media.create') }}" class="btn btn-primary mb-3">Add New</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Platform</th>
                <th>Title</th>
                <th>URL</th>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($socials as $social)
                <tr>
                    <td>{{ $social->platform }}</td>
                    <td>{{ $social->title }}</td>
                    <td><a href="{{ $social->url }}" target="_blank">{{ $social->url }}</a></td>
                    <td>
                        @if($social->image)
                            <img src="{{ asset('storage/' . $social->image) }}" width="60">
                        @endif
                    </td>
                    <td>
                        <span class="badge {{ $social->status ? 'bg-success' : 'bg-danger' }}">
                            {{ $social->status ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.social_media.edit', $social->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.social_media.destroy', $social->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
