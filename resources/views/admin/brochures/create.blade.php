@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <h5 class="card-header">Create Brochure</h5>
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

                <form action="{{ route('brochures.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Published At</label>
            <input type="date" name="published_at" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">PDF File</label>
            <input type="file" name="file" class="form-control" accept="application/pdf" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>

            </div>
        </div>
    </div>
</div>
@endsection
