@extends('layoutsBackend.app')
@section('content')



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Meeting Calendar Events</span>
            <a href="{{ route('meeting-calendars.create') }}" class="add-new btn btn-primary">
                <i class="icon-base ti tabler-plus icon-xs me-0 me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add Data</span>
            </a>

        </h5>
        <div class="card-datatable table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Color</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->date }}</td>
                <td><span style="background:{{ $event->color ?? '#6366f1' }}; padding:5px 15px; color:#fff; border-radius:5px;">{{ $event->color ?? 'default' }}</span></td>
                <td>
                    <a href="{{ route('meeting-calendars.edit', $event->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('meeting-calendars.destroy', $event->id) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this event?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
        <!-- Offcanvas to add new user -->

    </div>
</div>
@endsection
