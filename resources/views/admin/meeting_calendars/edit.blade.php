@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <h5 class="card-header">Edit Promotional Video</h5>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
<form action="{{ route('meeting-calendars.update', $meetingCalendar->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ $meetingCalendar->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" value="{{ $meetingCalendar->date }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Color</label>
            <input type="color" name="color" value="{{ $meetingCalendar->color ?? '#6366f1' }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>

            </div>
        </div>
    </div>
</div>
@endsection
