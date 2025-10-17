@extends('layoutsBackend.app')
@section('content')



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Sliders</span>
            <a href="{{ route('minister-messages.create') }}" class="add-new btn btn-primary">
                <i class="icon-base ti tabler-plus icon-xs me-0 me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add New Message</span>
            </a>

        </h5>
        <div class="card-datatable table-responsive">
            <div class="table-responsive">
<table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($messages as $index => $msg)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                @if($msg->photo)
                                    <img src="{{ asset('storage/' . $msg->photo) }}" alt="Minister Photo" width="60" class="rounded">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $msg->name }}</td>
                            <td>{{ $msg->title }}</td>
                            <td>{{ Str::limit($msg->message, 60) }}</td>
                            <td>
                                <a href="{{ route('minister-messages.edit', $msg->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form action="{{ route('minister-messages.destroy', $msg->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this message?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">No messages found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            </div>
        </div>
        <!-- Offcanvas to add new user -->

    </div>
</div>
@endsection
