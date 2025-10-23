@extends('layoutsBackend.app')
@section('content')



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Promotional Videos</span>
            <a href="{{ route('promotional_videos.create') }}" class="add-new btn btn-primary">
                <i class="icon-base ti tabler-plus icon-xs me-0 me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add Video</span>
            </a>

        </h5>
        <div class="card-datatable table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($videos as $video)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if($video->thumbnail)
                        <img src="{{ asset('storage/'.$video->thumbnail) }}" width="80">
                    @endif
                </td>
                <td>{{ $video->title }}</td>
                <td>{{ $video->category }}</td>
                <td>
                    <a href="{{ route('promotional_videos.edit',$video->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('promotional_videos.destroy',$video->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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
