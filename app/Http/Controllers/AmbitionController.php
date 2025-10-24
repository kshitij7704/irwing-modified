<?php

namespace App\Http\Controllers;

use App\Models\Ambition;
use Illuminate\Http\Request;

class AmbitionController extends Controller
{
    public function index()
    {
        $ambitions = Ambition::latest()->get();
        return view('admin.ambitions.index', compact('ambitions'));
    }

    public function create()
    {
        return view('admin.ambitions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('title', 'description', 'status');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/ambitions'), $imageName);
            $data['image'] = 'ambitions/' . $imageName; // store relative path
        }


        Ambition::create($data);

        return redirect()->route('ambitions.index')->with('success', 'Ambition created successfully!');
    }

    public function edit(Ambition $ambition)
    {
        return view('admin.ambitions.edit', compact('ambition'));
    }

    public function update(Request $request, Ambition $ambition)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('title', 'description', 'status');
        if ($request->hasFile('image')) {
            // delete old image if exists
            if (!empty($ambition->image) && file_exists(public_path('storage/'.$ambition->image))) {
                unlink(public_path('storage/'.$ambition->image));
            }

            // upload new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/ambitions'), $imageName);

            $data['image'] = 'ambitions/' . $imageName; // save relative path
        }

        $ambition->update($data);

        return redirect()->route('ambitions.index')->with('success', 'Ambition updated successfully!');
    }

    public function destroy(Ambition $ambition)
    {
        $ambition->delete();
        return redirect()->route('ambitions.index')->with('success', 'Ambition deleted successfully!');
    }
}
