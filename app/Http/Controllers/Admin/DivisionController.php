<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\UnitOffice;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::with('unitOffice')->latest()->paginate(10);
        return view('admin.divisions.index', compact('divisions'));
    }

    public function create()
    {
        $unitOffices = UnitOffice::pluck('name', 'id');
        return view('admin.divisions.create', compact('unitOffices'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'unit_office_id' => 'required|exists:unit_offices,id',
        ]);

        Division::create($validated);
        return redirect()->route('divisions.index')->with('success', 'Division created successfully!');
    }

    public function edit(Division $division)
    {
        $unitOffices = UnitOffice::pluck('name', 'id');
        return view('admin.divisions.edit', compact('division', 'unitOffices'));
    }

    public function update(Request $request, Division $division)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'unit_office_id' => 'required|exists:unit_offices,id',
        ]);

        $division->update($validated);
        return redirect()->route('divisions.index')->with('success', 'Division updated successfully!');
    }

    public function destroy(Division $division)
    {
        $division->delete();
        return redirect()->route('divisions.index')->with('success', 'Division deleted successfully!');
    }
}
