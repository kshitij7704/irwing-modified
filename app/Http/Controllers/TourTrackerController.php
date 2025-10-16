<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QrpForm;
use App\Models\Agency;
use App\Models\User;

class TourTrackerController extends Controller
{
   public function index()
    {
    $agencies = Agency::all(); // for dropdown

    $nodalUsers = User::role('nodal')->get(); 
        $qrps = QrpForm::with(['agencyy', 'officers'])
            ->where('status', 'Approved')
            ->latest()
            ->get();

        return view('tourtracker.index', compact('qrps','agencies','nodalUsers'));
    }
    public function updateField(Request $request)
{
    $request->validate([
        'id' => 'required|integer|exists:qrp_forms,id',
        'field' => 'required|string',
        'value' => 'nullable|string'
    ]);

    $qrp = QrpForm::find($request->id);

    // Prevent updating unwanted fields
    $allowed = [
        'adminidtrative_appr', 'financial_appr', 'poltical_clear',
        'scos_appr', 'vigl_clear', 'pmo_appr',
        'fcra_clear', 'sanction_vetting'
    ];

    if (!in_array($request->field, $allowed)) {
        return response()->json(['success' => false, 'message' => 'Invalid field']);
    }

    $qrp->{$request->field} = $request->value;
    $qrp->save();

    return response()->json(['success' => true]);
}

}
