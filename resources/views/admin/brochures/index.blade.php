@extends('layoutsBackend.app')
@section('content')



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Brochuress</span>
            <a href="{{ route('brochures.create') }}" class="add-new btn btn-primary">
                <i class="icon-base ti tabler-plus icon-xs me-0 me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Add New Details</span>
            </a>

        </h5>
        <div class="card-datatable table-responsive">
             <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($brochures as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->published_at->format('F Y') }}</td>
                            
           <td class="">
                        <a href="{{ asset('storage/'.$data->file_path) }}" target="_blank" class="btn btn-primary btn-download">Download PDF</a>
                        <a href="{{ route('brochures.edit',$data->id) }}" class="btn btn-warning btn-sm">Edit</a>

         <form action="{{ route('brochures.destroy',$data->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this brochure?')">Delete</button>
                        </form>
    </div>
</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center">No records found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Offcanvas to add new user -->

    </div>
</div>
@endsection
