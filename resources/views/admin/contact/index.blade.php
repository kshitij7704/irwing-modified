@extends('layoutsBackend.app')
@section('content')



<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header d-flex justify-content-between align-items-center">
            <span>Contacts</span>

        </h5>
        <div class="card-datatable table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $key => $contact)
                    <tr>
                        <td>{{ $contacts->firstItem() + $key }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ Str::limit($contact->message, 50) }}</td>
                        <td>{{ $contact->created_at->format('d M Y h:i A') }}</td>
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
