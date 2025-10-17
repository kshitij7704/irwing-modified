<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Master Sheet PDF</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h3>Master Sheet for Officer: {{ $officer->officer_name ?? '' }}</h3>

    <table>
        <tr><th>Staff No.</th><td>{{ $officer->staff_no }}</td></tr>
        <tr><th>Designation</th><td>{{ $officer->designation }}</td></tr>
        <tr><th>Calendar Year</th><td>{{ $officer->qrpForm->calendar_year ?? '' }}</td></tr>
        <tr><th>Meeting</th><td>{{ $officer->qrpForm->meeting_name ?? '' }}</td></tr>
        <tr><th>Period</th><td>{{ $officer->qrpForm->meeting_from }} - {{ $officer->qrpForm->meeting_to }}</td></tr>
        <tr><th>Country</th>
            <td>
                @php
                    $countries = App\Models\Country::pluck('name','id');
                    $countriii = json_decode($officer->qrpForm->country, true) ?? [];
                    $countryIds = collect($countriii)->pluck('country')->filter()->toArray();
                    $CountryNames = [];
                    foreach ($countryIds as $cid) {
                        if (isset($countries[$cid])) {
                            $CountryNames[] = $countries[$cid];
                        }
                    }
                    echo implode(', ', $CountryNames);
                @endphp
            </td>
        </tr>
        <tr><th>Title</th><td>{{ optional($officer->profile)->title }}</td></tr>
        <tr><th>Date of Birth</th><td>{{ optional($officer->profile)->date_of_birth }}</td></tr>
        <tr><th>Gender</th><td>{{ optional($officer->profile)->gender }}</td></tr>
        <tr><th>Cadre Clearance</th><td>{{ $officer->cadre_clearance }}</td></tr>
        <tr><th>Expenditure (Directorate)</th><td>{{ $officer->expenditure_directorate }}</td></tr>
        <tr><th>Expenditure (WPC)</th><td>{{ $officer->expenditure_wpc }}</td></tr>
        <tr><th>Expenditure (Secretariat)</th><td>{{ $officer->expenditure_secretariat }}</td></tr>
        <tr><th>Expenditure (TEC)</th><td>{{ $officer->expenditure_tec }}</td></tr>
        <tr><th>Expenditure (NCA-T)</th><td>{{ $officer->expenditure_ncat }}</td></tr>
    </table>
</body>
</html>
