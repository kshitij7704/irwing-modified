<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use App\Models\UnitOffice;
use Illuminate\Http\Request;

class UnitOfficeController extends Controller
{
    public function index()
    {
        $unitOffices = UnitOffice::with('unit')->latest()->paginate(10);
        return view('backend.unit_offices.index', compact('unitOffices'));
    }

    public function create()
    {
        $units = Unit::all();
        return view('backend.unit_offices.create', compact('units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:unit_offices,name',
            'unit_id' => 'required|exists:units,id',
        ]);

        UnitOffice::create($request->only('name', 'unit_id'));

        return redirect()->route('admin.unit-offices.index')->with('success', 'Unit Office created successfully.');
    }

    public function edit(UnitOffice $unitOffice)
    {
        $units = Unit::all();
        return view('backend.unit_offices.edit', compact('unitOffice', 'units'));
    }

    public function update(Request $request, UnitOffice $unitOffice)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:unit_offices,name,' . $unitOffice->id,
            'unit_id' => 'required|exists:units,id',
        ]);

        $unitOffice->update($request->only('name', 'unit_id'));

        return redirect()->route('admin.unit-offices.index')->with('success', 'Unit Office updated successfully.');
    }

    public function destroy(UnitOffice $unitOffice)
    {
        $unitOffice->delete();
        return redirect()->route('admin.unit-offices.index')->with('success', 'Unit Office deleted successfully.');
    }
}
