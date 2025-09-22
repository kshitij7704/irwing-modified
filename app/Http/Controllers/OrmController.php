<?php

namespace App\Http\Controllers;

use App\Models\Orm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orm = Orm::get();
        return view('orm.index', compact('orm'));
    }


    public function create()
    {
        return view('orm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date'  => 'required|date',
            'file'  => 'required|mimes:pdf|max:10240', // max 5MB
        ]);

        $filePath = $request->file('file')->store('orm_files', 'public');

        Orm::create([
            'title' => $request->title,
            'date'  => $request->date,
            'file'  => $filePath,
        ]);

        return redirect()->route('orm-data.index')
                         ->with('success', 'ORM created successfully.');
    }

    public function show(Orm $orm)
    {
        return view('orm.show', compact('orm'));
    }

    public function edit(Orm $orm)
    {
        return view('orm.edit', compact('orm'));
    }

    public function update(Request $request, Orm $orm)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date'  => 'required|date',
            'file'  => 'nullable|mimes:pdf|max:5120', // optional
        ]);

        $data = [
            'title' => $request->title,
            'date'  => $request->date,
        ];

        if ($request->hasFile('file')) {
            // Delete old file if exists
            if ($orm->file && Storage::disk('public')->exists($orm->file)) {
                Storage::disk('public')->delete($orm->file);
            }

            $data['file'] = $request->file('file')->store('orm_files', 'public');
        }

        $orm->update($data);

        return redirect()->route('orm.index')
                         ->with('success', 'ORM updated successfully.');
    }

    public function destroy(Orm $orm)
    {
        // Delete the uploaded file if exists
        if ($orm->file && Storage::disk('public')->exists($orm->file)) {
            Storage::disk('public')->delete($orm->file);
        }

        $orm->delete();

        return redirect()->route('orm.index')
                         ->with('success', 'ORM deleted successfully.');
    }
}
