<?php

namespace App\Http\Controllers;

use App\Models\TourReport;
use Illuminate\Http\Request;
use App\Models\QrpForm;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Country; 

class TourReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = TourReport::with('user')->latest()->get();
        return view('tour_reports.index', compact('reports'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
$userId = Auth::id();
$profileId = \App\Models\Profile::where('user_id', $userId)->value('id');

$qrps = QrpForm::with(['agencyy', 'officers'])
    ->whereHas('officers', function ($query) use ($profileId) {
        $query->where('profile_id', $profileId);
    })
    ->whereNotExists(function ($query) use ($userId) {
        $query->select(DB::raw(1))
            ->from('tour_reports')
            ->whereRaw('tour_reports.tour_id = qrp_forms.id')
            ->whereRaw('tour_reports.user_id = ?', [$userId]);
    })
    ->orderByRaw("
        CASE 
            WHEN nodal_status = 'Saved' OR nodal_status IS NULL THEN 0 
            ELSE 1 
        END
    ")
    ->get();

        $user = Auth::user();
        $profile = \App\Models\Profile::where('user_id', $userId)->first();

        // Fetch additional data from other related tables if needed
        $autoData = [
            'staff_number' => $profile->staff_no ?? '',
            'meeting_name' => $user->meeting_name ?? '',
            'purpose' => $user->purpose ?? '',
            'service' => $user->service ?? '',
            'name_designation' => $profile->officer_name ?? '',
            'grade' => $profile->grade ?? '',
            'level' => $profile->level_in_pay_matrix ?? '',
            'mobile_no' => $profile->mobile_no ?? '',
            'email' => $profile->email_id ?? '',
            'equivalent_rank' => $profile->rank ?? '',
            'country' => $user->country ?? '',
            'city' => $user->city ?? '',
            'from_date' => $user->from_date ?? null,
            'to_date' => $user->to_date ?? null,
        ];

        return view('tour_reports.create', compact('autoData','qrps'));
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'tour_id' => 'required|unique:tour_reports,tour_id',
        'meeting_name' => 'required|string',
        'purpose' => 'required|string',
        'from_date' => 'required|date',
        'to_date' => 'required|date',
        'key_contributions' => 'required|string|max:1000',
        'follow_up_action_points' => 'required|string|max:1000',
        'tour_report_pdf' => 'nullable|mimes:pdf|max:2048',
    ]);

    $user = Auth::user();

    $data = [
        'tour_id' => $request->tour_id,
        'user_id' => $user->id,

        'staff_number' => $request->staff_number,
        'meeting_name' => $request->meeting_name,
        'purpose' => $request->purpose,
        'service' => $request->service,
        'name_designation' => $request->name_designation,
        'grade' => $request->grade,
        'level' => $request->level,
        'mobile_no' => $request->mobile_no,
        'email' => $request->email,
        'equivalent_rank' => $request->equivalent_rank,
        'country' => $request->country,
        'city' => $request->city,
        'from_date' => $request->from_date,
        'to_date' => $request->to_date,

        'key_contributions' => $request->key_contributions,
        'follow_up_action_points' => $request->follow_up_action_points,
        'presentation' => $request->presentation,
    ];

    if ($request->hasFile('tour_report_pdf')) {
        $data['tour_report_pdf'] = $request->file('tour_report_pdf')->store('tour_reports', 'public');
    }

    TourReport::create($data);

    return redirect()->route('tour-reports.index')->with('success', 'Tour Report submitted successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(TourReport $tourReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TourReport $tourReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TourReport $tourReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TourReport $tourReport)
    {
        //
    }public function getMeetingDates($id)
{
    $meeting = \App\Models\QrpForm::find($id);

    if (!$meeting) {
        return response()->json(['error' => 'Meeting not found'], 404);
    }

    $countryIds = [];
    $cities = [];

    if (!empty($meeting->country)) {
        $countryData = json_decode($meeting->country, true);

        if (is_array($countryData)) {
            foreach ($countryData as $entry) {
                if (!empty($entry['country'])) {
                    $countryIds[] = $entry['country'];
                }
                if (!empty($entry['city'])) {
                    $cities[] = $entry['city'];
                }
            }
        }
    }  

    $countryNames = Country::whereIn('id', $countryIds)->pluck('name')->toArray();
    return response()->json([
        'meeting_name' => $meeting->meeting_name,
        'from_date' => $meeting->meeting_from,
        'to_date' => $meeting->meeting_to,
        'country'      => implode(', ', $countryNames),
        'city'         => implode(', ', $cities),
        'purpose'      => $meeting->justification,
    ]);
}

}
