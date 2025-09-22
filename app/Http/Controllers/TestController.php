<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Carbon\Carbon;

class TestController extends Controller
{
    //

    public function uploadcsv(Request $request)
    {
       return view('test.uploadcsv') ;
    }

public function importCsv(Request $request)
{
    $request->validate([
        'csv_file' => 'required|mimes:csv,txt'
    ]);

    $file = $request->file('csv_file');
    $handle = fopen($file, 'r');

    $header = true;
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) { // <-- comma separated
        if ($header) {
            $header = false; // skip first row (column names)
            continue;
        }

        // Map CSV columns to DB fields
        $staffNo = $row[1] ?? null;
        $name = $row[2] ?? null;
        $dob = $row[3] ?? null;
        $cadre = $row[4] ?? null;

        // Convert date to Y-m-d
        $dateOfBirth = null;
        if (!empty($dob)) {
            try {
                $dateOfBirth = \Carbon\Carbon::parse($dob)->format('Y-m-d');
            } catch (\Exception $e) {
                $dateOfBirth = null; // skip invalid dates
            }
        }

        // Debug check
        // dd($row); // uncomment to see full row structure

        Profile::create([
            'staff_no'      => $staffNo,
            'officer_name'  => $name,
            'date_of_birth' => $dateOfBirth,
            'grade'         => $cadre,
        ]);
    }

    fclose($handle);

    return back()->with('success', 'CSV Imported Successfully');
}
}
