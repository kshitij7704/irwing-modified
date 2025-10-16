<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QrpForm;
use App\Models\QrpOfficer;
use App\Models\Agency;
use App\Models\User;
use App\Models\Officer;
use App\Models\Country;
use App\Models\Profile;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MasterSheetExport;
use PDF;

class MasterSheetController extends Controller
{
   public function index()
    {
    $agencies = Agency::all(); // for dropdown

    $nodalUsers = User::role('nodal')->get(); 
        $qrps = QrpOfficer::whereHas('qrpForm', function ($query) {
        $query->where('status', 'Approved');
    })
    ->latest()
    ->get();

        return view('mastersheet.index', compact('qrps','agencies','nodalUsers'));
    }
    public function updateExpenditure(Request $request)
{
    $request->validate([
        'id' => 'required|integer|exists:qrp_officers,id',
        'field' => 'required|string',
        'value' => 'nullable|string|max:500',
    ]);

    $officer = QrpOfficer::find($request->id);

    $allowedFields = [
        'expenditure_directorate',
        'expenditure_wpc',
        'expenditure_secretariat',
        'expenditure_tec',
        'expenditure_ncat',
    ];

    if (!in_array($request->field, $allowedFields)) {
        return response()->json(['success' => false, 'message' => 'Invalid field']);
    }

    $officer->{$request->field} = $request->value;
    $officer->save();

    return response()->json(['success' => true]);
}
    public function export($id, $format)
    {
        // Load officer with related QRP form and profile
        $officer = QrpOfficer::with(['qrpForm', 'profile'])->findOrFail($id);

        if ($format === 'excel') {
            // Export to Excel
            return Excel::download(new MasterSheetExport($officer), 'MasterSheet_'.$officer->id.'.xlsx');
        }

        if ($format === 'pdf') {
            // Export to PDF using a Blade view
            $pdf = PDF::loadView('exports.master_sheet_pdf', compact('officer'));
            return $pdf->download('MasterSheet_'.$officer->id.'.pdf');
        }

        abort(404, 'Invalid format requested.');
    }

}
