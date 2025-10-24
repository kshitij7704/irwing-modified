@extends('layoutsBackend.app')

@section('content')
<div class="container">
    <h1>Edit Site Settings</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
        </div>
    @endif

    <form action="{{ route('admin.site_settings.update', $site_setting->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Site Name</label>
            <input type="text" name="site_name" class="form-control" value="{{ old('site_name', $site_setting->site_name) }}" required>
        </div>

        <div class="mb-3">
            <label>Logo</label>
            <input type="file" name="logo" class="form-control">
            @if($site_setting->logo)
                <img src="{{ asset($site_setting->logo) }}" width="80" class="mt-2">
            @endif
        </div>

        <div class="mb-3">
            <label>Favicon</label>
            <input type="file" name="favicon" class="form-control">
            @if($site_setting->favicon)
                <img src="{{ asset($site_setting->favicon) }}" width="32" class="mt-2">
            @endif
        </div>

        <div class="mb-3">
            <label>Meta Title</label>
            <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $site_setting->meta_title) }}">
        </div>

        <div class="mb-3">
            <label>Meta Description</label>
            <textarea name="meta_description" class="form-control">{{ old('meta_description', $site_setting->meta_description) }}</textarea>
        </div>

        <div class="mb-3">
            <label>Contact Email</label>
            <input type="email" name="contact_email" class="form-control" value="{{ old('contact_email', $site_setting->contact_email) }}">
        </div>

        <div class="mb-3">
            <label>Contact Phone</label>
            <input type="text" name="contact_phone" class="form-control" value="{{ old('contact_phone', $site_setting->contact_phone) }}">
        </div>

        <div class="mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control">{{ old('address', $site_setting->address) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
