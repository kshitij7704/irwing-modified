<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Circular;

class CircularController extends Controller
{
    public function index()
    {
        $circulars = Circular::latest()->paginate(10);
        return view('admin.circulars.index', compact('circulars'));
    }

    public function create()
    {
        return view('admin.circulars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'nullable|url',
            'status' => 'required|in:Active,Inactive',
        ]);

        Circular::create($request->all());

        return redirect()->route('admin.circulars.index')->with('success', 'Circular added successfully.');
    }

    public function edit($id)
    {
        $circular = Circular::findOrFail($id);
        return view('admin.circulars.edit', compact('circular'));
    }

    public function update(Request $request, $id)
    {
        $circular = Circular::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'nullable|url',
            'status' => 'required|in:Active,Inactive',
        ]);

        $circular->update($request->all());

        return redirect()->route('admin.circulars.index')->with('success', 'Circular updated successfully.');
    }

    public function destroy($id)
    {
        Circular::findOrFail($id)->delete();
        return redirect()->route('admin.circulars.index')->with('success', 'Circular deleted successfully.');
    }
}
