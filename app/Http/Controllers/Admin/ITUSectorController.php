<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ITUSector;
use App\Models\Agency;
use Illuminate\Http\Request;

class ITUSectorController extends Controller
{
    public function index()
    {
        $sectors = ITUSector::with('agency')->latest()->get();
        return view('admin.itu_sectors.index', compact('sectors'));
    }

    public function create()
    {
        $agencies = Agency::all();
        return view('admin.itu_sectors.create', compact('agencies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'agency_id' => 'required|exists:agencies,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        ITUSector::create($request->all());
        return redirect()->route('admin.itu-sectors.index')->with('success', 'ITU Sector created successfully.');
    }

    public function edit($id)
    {
        $sector = ITUSector::findOrFail($id);
        $agencies = Agency::all();
        return view('admin.itu_sectors.edit', compact('sector', 'agencies'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'agency_id' => 'required|exists:agencies,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $sector = ITUSector::findOrFail($id);
        $sector->update($request->all());

        return redirect()->route('admin.itu-sectors.index')->with('success', 'ITU Sector updated successfully.');
    }

    public function destroy($id)
    {
        $sector = ITUSector::findOrFail($id);
        $sector->delete();

        return redirect()->route('admin.itu-sectors.index')->with('success', 'ITU Sector deleted successfully.');
    }
}
