@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl">
    <div class="card">
        <div class="card-header">
            <h4>Upload ITU Contributions CSV</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('itu.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="file" name="csv_file" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
</div>
@endsection
