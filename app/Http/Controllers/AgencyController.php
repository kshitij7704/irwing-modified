<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        $agencies = Agency::latest()->paginate(10);
        return view('backendpages.agencies.index', compact('agencies'));
    }

    public function create()
    {
        return view('backendpages.agencies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:agencies,name',
            'description' => 'nullable|string',
        ]);

        Agency::create($request->only(['name', 'description']));

        return redirect()->route('agencies.index')->with('success', 'Agency created successfully.');
    }

    public function edit(Agency $agency)
    {
        return view('backendpages.agencies.edit', compact('agency'));
    }

    public function update(Request $request, Agency $agency)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:agencies,name,' . $agency->id,
            'description' => 'nullable|string',
        ]);

        $agency->update($request->only(['name', 'description']));

        return redirect()->route('agencies.index')->with('success', 'Agency updated successfully.');
    }

    public function destroy(Agency $agency)
    {
        $agency->delete();

        return redirect()->route('agencies.index')->with('success', 'Agency deleted successfully.');
    }
}
