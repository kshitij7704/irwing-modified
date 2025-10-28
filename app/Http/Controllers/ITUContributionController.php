<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ITUContribution;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use League\Csv\Reader;use Carbon\Carbon;
use League\Csv\Statement;

class ITUContributionController extends Controller
{
    public function index()
    {
        $contributions = ITUContribution::all();
        return view('itu.index', compact('contributions'));
    }

    public function uploadForm()
    {
        return view('itu.upload');
    }
public function upload(Request $request)
{
    // Validate uploaded CSV
    $request->validate([
        'csv_file' => 'required|mimes:csv,txt|max:2048',
    ]);

    // Read CSV file
    $csv = Reader::createFromPath($request->file('csv_file')->getRealPath(), 'r');
    $csv->setHeaderOffset(0); // First row as header

    foreach ($csv as $record) {
        // Parse date like '31.05.2024' or 'Apr-22'
        $rawDate = trim($record['Date of contribution'] ?? '');
        $formattedDate = null;

        if ($rawDate) {
            try {
                // Try various date formats
                $formattedDate = Carbon::parse(str_replace('.', '-', $rawDate))->format('Y-m-d');
            } catch (\Exception $e) {
                $formattedDate = null;
            }
        }

        ITUContribution::create([
            'study_group'          => $record['Study Group'] ?? null,
            'question'             => $record['Question'] ?? null,
            'work_item'            => $record['Work item'] ?? null,
            'contribution_type'    => $record['Contribution Type'] ?? null,
            'contribution_brief'   => $record['Contribution in brief'] ?? null,
            'date_of_contribution' => $formattedDate,
            'officers'             => $record['Officer concerned/National Study Group'] ?? null,
            'status'               => $record['Status of the work item'] ?? null,
            'type'                 => $record['Type'] ?? 'ITU-R', // Add default ITU-R
        ]);
    }

    return redirect()->route('itu_contributions.index')
                     ->with('success', 'CSV imported successfully!');
}

}
