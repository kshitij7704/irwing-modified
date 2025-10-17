<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Personal Performa</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; line-height: 1.5; }
        h2 { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #333; padding: 6px; text-align: left; vertical-align: top; }
        th { background: #f2f2f2; width: 30%; }
    </style>
</head>
<body>
    <h2>Personal Performa Details</h2>

    <table>
        <tr><th>ID</th><td>{{ $performa->id }}</td></tr>
        <tr><th>Meeting ID</th><td>{{ $performa->meeting_id }}</td></tr>
        <tr><th>Title</th><td>{{ $performa->title }}</td></tr>
        <tr><th>Service</th><td>{{ $performa->service }}</td></tr>
                @if($performa->service_other)
        <tr><th>Other Service</th><td>{{ $performa->service_other }}</td></tr>
        @endif
        <tr><th>Staff No</th><td>{{ $performa->staff_no }}</td></tr>
        <tr><th>User ID</th><td>{{ $performa->user_id }}</td></tr>
        <tr><th>Designation</th><td>{{ $performa->designation }}</td></tr>
        <tr><th>Posting</th><td>{{ $performa->posting }}</td></tr>
        <tr><th>Date of Birth</th><td>{{ $performa->dob }}</td></tr>
        <tr><th>Property Return Date</th><td>{{ $performa->property_return_date }}</td></tr>
        <tr><th>Pay Level</th><td>{{ $performa->pay_level }}</td></tr>
        <tr><th>Mobile</th><td>{{ $performa->mobile }}</td></tr>
        <tr><th>Email</th><td>{{ $performa->email }}</td></tr>
        <tr><th>Aadhaar</th><td>{{ $performa->aadhaar }}</td></tr>
        <tr><th>PAN</th><td>{{ $performa->pan }}</td></tr>
        <tr><th>Event Name</th><td>{{ $performa->event_name }}</td></tr>
        <tr><th>Event Location</th><td>{{ $performa->event_location }}</td></tr>
        <tr><th>Event From</th><td>{{ $performa->event_date_from }}</td></tr>
        <tr><th>Event To</th><td>{{ $performa->event_date_to }}</td></tr>
        <tr><th>Event Brief</th><td>{{ $performa->event_brief }}</td></tr>
        <tr><th>Justification</th><td>{{ $performa->justification }}</td></tr>
        <tr><th>Expected Outcomes</th><td>{{ $performa->expected_outcomes }}</td></tr>
        
        <tr><th>Status</th><td>{{ $performa->status }}</td></tr>
    </table>
                @if($performa->is_itu == "Yes")
                <h5 class="mt-4">ITU Meeting Details</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Current ITU Roles</th>
                        <td>{{ $performa->itu_current_roles }}</td>
                    </tr>
                    <tr>
                        <th>Rapporteur Questions</th>
                        <td>{{ $performa->itu_questions_rapporteur }}</td>
                    </tr>
                    <tr>
                        <th>Associate Rapporteur Questions</th>
                        <td>{{ $performa->itu_questions_associate }}</td>
                    </tr>
                    <tr>
                        <th>Editor Items</th>
                        <td>{{ $performa->itu_editor_items }}</td>
                    </tr>
                    <tr>
                        <th>Previous ITU Roles</th>
                        <td>{{ $performa->itu_previous_roles }}</td>
                    </tr>
                    <tr>
                        <th>Work Items since 2022</th>
                        <td>{{ $performa->itu_work_items }}</td>
                    </tr>
                    <tr>
                        <th>Proposed</th>
                        <td>{{ $performa->itu_proposed }}</td>
                    </tr>
                    <tr>
                        <th>Consented</th>
                        <td>{{ $performa->itu_consented }}</td>
                    </tr>
                    <tr>
                        <th>In Progress</th>
                        <td>{{ $performa->itu_in_progress }}</td>
                    </tr>
                    <tr>
                        <th>Recommendations Published</th>
                        <td>{{ $performa->itu_recommendations }}</td>
                    </tr>
                    <tr>
                        <th>Reports Published</th>
                        <td>{{ $performa->itu_reports }}</td>
                    </tr>
                    <tr>
                        <th>Online Meetings</th>
                        <td>{{ $performa->itu_online_meetings }}</td>
                    </tr>
                    <tr>
                        <th>Physical Meetings</th>
                        <td>{{ $performa->itu_physical_meetings }}</td>
                    </tr>
                </table>
                @endif

                <h5 class="mt-4">Foreign Visits</h5>
                @php $visits = json_decode($performa->visits, true); @endphp
                @if(!empty($visits))
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Meeting</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Country</th>
                            <th>City</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($visits as $visit)
                        <tr>
                            <td>{{ $visit['meeting'] ?? '-' }}</td>
                            <td>{{ $visit['from'] ?? '-' }}</td>
                            <td>{{ $visit['to'] ?? '-' }}</td>
                            <td>{{ $visit['country'] ?? '-' }}</td>
                            <td>{{ $visit['city'] ?? '-' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <p>No foreign visits recorded.</p>
                @endif
</body>
</html>
