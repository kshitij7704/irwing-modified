<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UnitOffice;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitOfficeController extends Controller
{
    public function index()
    {
        $unitOffices = UnitOffice::with('unit')->latest()->paginate(10);
        return view('admin.unit_offices.index', compact('unitOffices'));
    }

    public function create()
    {
        $units = Unit::pluck('name', 'id');
        return view('admin.unit_offices.create', compact('units'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'unit_id' => 'required|exists:units,id',
        ]);

        UnitOffice::create($validated);
        return redirect()->route('unit-offices.index')->with('success', 'Unit Office created successfully!');
    }

    public function edit(UnitOffice $unitOffice)
    {
        $units = Unit::pluck('name', 'id');
        return view('admin.unit_offices.edit', compact('unitOffice', 'units'));
    }

    public function update(Request $request, UnitOffice $unitOffice)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'unit_id' => 'required|exists:units,id',
        ]);

        $unitOffice->update($validated);
        return redirect()->route('unit-offices.index')->with('success', 'Unit Office updated successfully!');
    }

    public function destroy(UnitOffice $unitOffice)
    {
        $unitOffice->delete();
        return redirect()->route('unit-offices.index')->with('success', 'Unit Office deleted successfully!');
    }
}
