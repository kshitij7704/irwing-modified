<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ITUSectorGroup;
use App\Models\ITUSector;
use Illuminate\Http\Request;

class ITUSectorGroupController extends Controller
{
    public function index()
    {
        $groups = ITUSectorGroup::with('sector')->latest()->get();
        return view('admin.itu_sector_groups.index', compact('groups'));
    }

    public function create()
    {
        $sectors = ITUSector::all();
        return view('admin.itu_sector_groups.create', compact('sectors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sector_id' => 'required|exists:itu_sectors,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        ITUSectorGroup::create($request->all());
        return redirect()->route('admin.itu-sector-groups.index')->with('success', 'ITU Sector Group created successfully.');
    }

    public function edit($id)
    {
        $group = ITUSectorGroup::findOrFail($id);
        $sectors = ITUSector::all();
        return view('admin.itu_sector_groups.edit', compact('group', 'sectors'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sector_id' => 'required|exists:itu_sectors,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $group = ITUSectorGroup::findOrFail($id);
        $group->update($request->all());

        return redirect()->route('admin.itu-sector-groups.index')->with('success', 'ITU Sector Group updated successfully.');
    }

    public function destroy($id)
    {
        $group = ITUSectorGroup::findOrFail($id);
        $group->delete();

        return redirect()->route('admin.itu-sector-groups.index')->with('success', 'ITU Sector Group deleted successfully.');
    }
}
