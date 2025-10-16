<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PromotionalVideo;

class PromotionalVideoController extends Controller
{
    public function index()
    {
        $videos = PromotionalVideo::latest()->paginate(10);
        return view('admin.promotional_videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.promotional_videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'nullable|image',
            'path' => 'nullable|mimes:mp4,mov,avi|max:20480',
            'url' => 'nullable|url',
        ]);

        $data = $request->except(['thumbnail', 'path']);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        if ($request->hasFile('path')) {
            $data['path'] = $request->file('path')->store('videos', 'public');
        }

        PromotionalVideo::create($data);

        return redirect()->route('promotional_videos.index')->with('success', 'Video created successfully.');
    }

    public function show(PromotionalVideo $promotionalVideo)
    {
        return view('admin.promotional_videos.show', compact('promotionalVideo'));
    }

    public function edit(PromotionalVideo $promotionalVideo)
    {
        return view('admin.promotional_videos.edit', compact('promotionalVideo'));
    }

    public function update(Request $request, PromotionalVideo $promotionalVideo)
    {
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'nullable|image',
            'path' => 'nullable|mimes:mp4,mov,avi|max:20480',
            'url' => 'nullable|url',
        ]);

        $data = $request->except(['thumbnail', 'path']);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        if ($request->hasFile('path')) {
            $data['path'] = $request->file('path')->store('videos', 'public');
        }

        $promotionalVideo->update($data);

        return redirect()->route('promotional_videos.index')->with('success', 'Video updated successfully.');
    }

    public function destroy(PromotionalVideo $promotionalVideo)
    {
        $promotionalVideo->delete();
        return redirect()->route('promotional_videos.index')->with('success', 'Video deleted successfully.');
    }
}
