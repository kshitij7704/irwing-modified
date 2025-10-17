@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <h5 class="card-header">Edit Brochure</h5>
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

                <form action="{{ route('brochures.update',$brochure->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" value="{{ $brochure->title }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Published At</label>
                        <input type="date" name="published_at" value="{{ $brochure->published_at->format('Y-m-d') }}"
                            class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">PDF File (Upload new to replace)</label>
                        <input type="file" name="file" class="form-control" accept="application/pdf">
                        <small>Current file: <a href="{{ asset('storage/'.$brochure->file_path) }}" target="_blank">View
                                PDF</a></small>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
