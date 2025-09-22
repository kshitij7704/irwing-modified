<?php

namespace App\Http\Controllers;

use App\Models\PersonalPerforma;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PersonalPerformaExport;

class PersonalPerformaGenerationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = PersonalPerforma::query();

    if ($request->filled('event_location')) {
        $query->where('event_location', 'like', '%' . $request->event_location . '%');
    }

    $performas = $query->get();

    return view('personalperformagen.index', compact('performas'))
           ->with('event_location', $request->event_location);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personalperforma.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required',
        'service' => 'required',
        'staff_no' => 'required',
        'designation' => 'required',
        'posting' => 'required',
        'dob' => 'nullable|date',
        'mobile' => 'nullable|string',
        'email' => 'nullable|email',
    ]);

    // File uploads
    $tourReportPath = $request->file('tour_report') 
        ? $request->file('tour_report')->store('tour_reports', 'public') 
        : null;

    $justificationFilePath = $request->file('justification_file') 
        ? $request->file('justification_file')->store('justifications', 'public') 
        : null;

    $performa = PersonalPerforma::create([
        'title' => $request->title,
        'service' => $request->service,
        'service_other' => $request->service_other,
        'staff_no' => $request->staff_no,
        'user_id' => auth()->id(),
        'designation' => $request->designation,
        'posting' => $request->posting,
        'dob' => $request->dob,
        'visits' => $request->visits ? json_encode($request->visits) : null,
        'property_return_date' => $request->property_return_date,
        'pay_level' => $request->pay_level,
        'mobile' => $request->mobile,
        'email' => $request->email,
        'aadhaar' => $request->aadhaar,
        'pan' => $request->pan,
        'tour_report' => $tourReportPath,
        'justification_file' => $justificationFilePath,
        'event_brief' => $request->event_brief,
        'justification' => $request->justification,
        'expected_outcomes' => $request->expected_outcomes,
        'is_itu' => $request->is_itu,
        'itu_current_roles' => $request->itu_current_roles,
        'itu_questions_rapporteur' => $request->itu_questions_rapporteur,
        'itu_questions_associate' => $request->itu_questions_associate,
        'itu_editor_items' => $request->itu_editor_items,
        'itu_previous_roles' => $request->itu_previous_roles,
        'itu_work_items' => $request->itu_work_items,
        'itu_proposed' => $request->itu_proposed,
        'itu_consented' => $request->itu_consented,
        'itu_in_progress' => $request->itu_in_progress,
        'itu_recommendations' => $request->itu_recommendations,
        'itu_reports' => $request->itu_reports,
        'itu_online_meetings' => $request->itu_online_meetings,
        'itu_physical_meetings' => $request->itu_physical_meetings,
    ]);

    return redirect()->route('personal-performa.index')->with('success', 'Personal Performa created successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(PersonalPerforma $personalPerforma, $id)
    {
        $personalPerforma = PersonalPerforma::find($id);
        return view('personalperformagen.show', compact('personalPerforma'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalPerforma $personalPerforma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalPerforma $personalPerforma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalPerforma $personalPerforma)
    {
        //
    }
public function exportExcel()
{
    return Excel::download(new PersonalPerformaExport, 'personal_performas.xlsx');
}
    public function updateStatus(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:Pending,Approved,Rejected',
    ]);

    $form = PersonalPerforma::findOrFail($id);
    $form->status = $request->status;
    $form->save();

    return redirect()->back()->with('success', 'Status updated successfully!');
}
}
