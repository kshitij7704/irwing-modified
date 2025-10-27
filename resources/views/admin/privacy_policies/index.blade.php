@extends('layoutsBackend.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title mb-0">Privacy Policies</h5>
                    <a href="{{ route('admin.privacy_policies.create') }}" class="btn btn-primary btn-sm">
                        + Add New
                    </a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Title</th>
                                    <th width="50%">Content (Preview)</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th width="15%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($privacy_policies as $index => $policy)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $policy->title }}</td>
                                        <td>{!! Str::limit(strip_tags($policy->content), 120) !!}</td>
                                        <td>
                                            @if($policy->status)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{{ $policy->created_at->format('d M, Y') }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="{{ route('admin.privacy_policies.edit', $policy->id) }}" class="btn btn-warning btn-sm">
                                                    Edit
                                                </a>
                                                <form action="{{ route('admin.privacy_policies.destroy', $policy->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No privacy policies found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
