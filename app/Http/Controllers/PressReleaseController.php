<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PressRelease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PressReleaseController extends Controller
{
    public function index()
    {
        $pressReleases = PressRelease::latest()->paginate(10);
        return view('admin.press_releases.index', compact('pressReleases'));
    }

    public function create()
    {
        return view('admin.press_releases.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'date' => 'required|date',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('pdf')) {
            $data['pdf'] = $request->file('pdf')->store('press_releases', 'public');
        }

        PressRelease::create($data);

        return redirect()->route('press-releases.index')
            ->with('success', 'Press Release created successfully.');
    }

    public function edit(PressRelease $pressRelease)
    {
        return view('admin.press_releases.edit', compact('pressRelease'));
    }

    public function update(Request $request, PressRelease $pressRelease)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'date' => 'required|date',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('pdf')) {
            if ($pressRelease->pdf) {
                Storage::disk('public')->delete($pressRelease->pdf);
            }
            $data['pdf'] = $request->file('pdf')->store('press_releases', 'public');
        }

        $pressRelease->update($data);

        return redirect()->route('press-releases.index')
            ->with('success', 'Press Release updated successfully.');
    }

    public function destroy(PressRelease $pressRelease)
    {
        if ($pressRelease->pdf) {
            Storage::disk('public')->delete($pressRelease->pdf);
        }

        $pressRelease->delete();

        return redirect()->route('press-releases.index')
            ->with('success', 'Press Release deleted successfully.');
    }
}
