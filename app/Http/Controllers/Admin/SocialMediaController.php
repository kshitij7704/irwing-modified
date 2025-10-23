<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index()
    {
        $socials = SocialMedia::orderBy('id', 'desc')->get();
        return view('admin.social_media.index', compact('socials'));
    }

    public function create()
    {
        return view('admin.social_media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'platform' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('social_media', 'public');
        }

        $data['status'] = $request->has('status') ? 1 : 0;

        SocialMedia::create($data);

        return redirect()->route('admin.social_media.index')->with('success', 'Social media entry created successfully.');
    }

    public function edit(SocialMedia $social_media)
    {
        return view('admin.social_media.edit', compact('social_media'));
    }

    public function update(Request $request, SocialMedia $social_media)
    {
        $request->validate([
            'platform' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('social_media', 'public');
        }

        $data['status'] = $request->has('status') ? 1 : 0;

        $social_media->update($data);

        return redirect()->route('admin.social_media.index')->with('success', 'Social media entry updated successfully.');
    }

    public function destroy(SocialMedia $social_media)
    {
        $social_media->delete();
        return redirect()->route('admin.social_media.index')->with('success', 'Social media entry deleted successfully.');
    }
}
