@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <h5 class="card-header">Edit Press Release</h5>
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
                <form action="{{ route('press-releases.update', $pressRelease->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ $pressRelease->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>URL</label>
            <input type="text" name="url" value="{{ $pressRelease->url }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $pressRelease->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Ministry</label>
            <input type="text" name="ministry" value="{{ $pressRelease->ministry }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" value="{{ $pressRelease->date }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>PDF</label><br>
            @if($pressRelease->pdf)
                <a href="{{ asset('storage/'.$pressRelease->pdf) }}" target="_blank">View Current PDF</a><br>
            @endif
            <input type="file" name="pdf" class="form-control" accept="application/pdf">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>

            </div>
        </div>
    </div>
</div>
@endsection
