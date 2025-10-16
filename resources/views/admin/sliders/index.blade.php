@extends('layoutsBackend.app')
@section('content')



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Sliders</span>
            <a href="{{ route('sliders.create') }}" class="add-new btn btn-primary">
                <i class="icon-base ti tabler-plus icon-xs me-0 me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add Data</span>
            </a>

        </h5>
        <div class="card-datatable table-responsive">
            <div class="table-responsive">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $slider)
                        <tr>
                            <td><img src="{{ asset('storage/' . $slider->image) }}" width="100"></td>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->link }}</td>
                            <td>{{ $slider->status ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <a href="{{ route('sliders.edit', $slider->id) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST"
                                    style="display:inline-block">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $sliders->links() }}
            </div>
        </div>
        <!-- Offcanvas to add new user -->

    </div>
</div>
@endsection
