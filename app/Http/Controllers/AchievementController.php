<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::where('user_id', Auth::id())->latest()->get();
        return view('admin.achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('admin.achievements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'achievement' => 'required|string|max:255',
            'date' => 'required|date',
            'details' => 'nullable|string',
            'document' => 'nullable|file|mimes:pdf,doc,docx,png,jpg,jpeg|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('document')) {
            $filePath = $request->file('document')->store('achievements', 'public');
        }

        Achievement::create([
            'user_id' => Auth::id(),
            'achievement' => $request->achievement,
            'date' => $request->date,
            'details' => $request->details,
            'document' => $filePath,
        ]);

        return redirect()->route('achievements.index')->with('success', 'Achievement added successfully.');
    }

    public function edit(Achievement $achievement)
    {
        $achievement = $achievement;
        return view('admin.achievements.edit', compact('achievement'));
    }

    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([
            'achievement' => 'required|string|max:255',
            'date' => 'required|date',
            'details' => 'nullable|string',
            'document' => 'nullable|file|mimes:pdf,doc,docx,png,jpg,jpeg|max:2048',
        ]);

        $filePath = $achievement->document;
        if ($request->hasFile('document')) {
            $filePath = $request->file('document')->store('achievements', 'public');
        }

        $achievement->update([
            'achievement' => $request->achievement,
            'date' => $request->date,
            'details' => $request->details,
            'document' => $filePath,
        ]);

        return redirect()->route('achievements.index')->with('success', 'Achievement updated successfully.');
    }

    public function destroy(Achievement $achievement)
    {
        $this->authorize('delete', $achievement);
        $achievement->delete();
        return redirect()->route('achievements.index')->with('success', 'Achievement deleted successfully.');
    }
}
