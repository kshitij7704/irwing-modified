<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnitOffice;
use App\Models\Division;
use App\Models\Designation;

class UnitController extends Controller
{
    //
    public function getOffices(Request $request)
{
    $unitId = $request->input('unit_id');
    $offices = UnitOffice::where('unit_id', $unitId)->get();
    return response()->json($offices);
}

public function getDivisions(Request $request)
{
    $officeId = $request->input('unit_office_id');
    $divisions = Division::where('unit_office_id', $officeId)->get();
    return response()->json($divisions);
}

public function getDesignations(Request $request)
{
    $divisionId = $request->input('division_id');
    $designations = Designation::where('division_id', $divisionId)->get();
    return response()->json($designations);
}
}
