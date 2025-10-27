<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ITUContribution;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'excel_file' => 'required|mimes:xlsx,xls',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $file = $request->file('excel_file');
        $data = Excel::toArray([], $file);

        // Read first sheet only
        $rows = $data[0] ?? [];

        // Skip header (first row)
        foreach (array_slice($rows, 1) as $row) {
            ITUContribution::create([
                'study_group' => $row[1] ?? null,
                'question' => $row[2] ?? null,
                'work_item' => $row[3] ?? null,
                'contribution_type' => $row[4] ?? null,
                'contribution_brief' => $row[5] ?? null,
                'date_of_contribution' => isset($row[6]) ? date('Y-m-d', strtotime($row[6])) : null,
                'officers' => $row[7] ?? null,
                'status' => $row[8] ?? null,
            ]);
        }

        return redirect()->route('itu.index')->with('success', 'Excel uploaded successfully.');
    }
}
