@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <h5 class="card-header">Edit Minister Message</h5>
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
                <form action="{{ route('minister-messages.update', $ministerMessage->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Title Message</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                   id="name" name="title" value="{{ old('title', $ministerMessage->title) }}">
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Minister Position</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name" name="postion" value="{{ old('name', $ministerMessage->postion) }}">
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Minister Name</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                   id="title" name="minister_name" value="{{ old('title', $ministerMessage->minister_name) }}">
                            @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control @error('message') is-invalid @enderror"
                                      id="message" name="message" rows="4">{{ old('message', $ministerMessage->message) }}</textarea>
                            @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" class="form-control @error('photo') is-invalid @enderror"
                                   id="photo" name="photo" accept="image/*">
                            @error('photo')<div class="invalid-feedback">{{ $message }}</div>@enderror

                            @if($ministerMessage->photo)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $ministerMessage->photo) }}" 
                                         alt="Minister Photo" class="rounded" width="120">
                                </div>
                            @endif
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('minister-messages.index') }}" class="btn btn-secondary me-2">Cancel</a>
                            <button type="submit" class="btn btn-warning">Update Message</button>
                        </div>
                    </form>

            </div>
        </div>
    </div>
</div>
@endsection
