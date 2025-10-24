<?php

namespace App\Http\Controllers;

use App\Models\Engagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EngagementController extends Controller
{
    public function index()
    {
        $engagements = Engagement::latest()->paginate(10);
        return view('admin.engagements.index', compact('engagements'));
    }

    public function create()
    {
        return view('admin.engagements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'status' => 'required|boolean',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/engagements'), $imageName);
            $data['image'] = 'engagements/' . $imageName; // Save path in DB
        }

        Engagement::create($data);

        return redirect()->route('engagements.index')->with('success', 'Engagement created successfully.');
    }

    public function edit(Engagement $engagement)
    {
        return view('admin.engagements.edit', compact('engagement'));
    }

    public function update(Request $request, Engagement $engagement)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'status' => 'required|boolean',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($engagement->image && file_exists(public_path('storage/'.$engagement->image))) {
                unlink(public_path('storage/'.$engagement->image));
            }

            // Upload new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/engagements'), $imageName);

            // Save relative path in DB
            $data['image'] = 'engagements/' . $imageName;
        }


        $engagement->update($data);

        return redirect()->route('engagements.index')->with('success', 'Engagement updated successfully.');
    }

    public function destroy(Engagement $engagement)
    {
        if ($engagement->image) {
            Storage::disk('public')->delete($engagement->image);
        }

        $engagement->delete();
        return redirect()->route('engagements.index')->with('success', 'Engagement deleted successfully.');
    }
}
