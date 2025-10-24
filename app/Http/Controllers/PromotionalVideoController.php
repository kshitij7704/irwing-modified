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
    // upload thumbnail to public/thumbnails
    $thumbnail = $request->file('thumbnail');
    $thumbnailName = time() . '_' . $thumbnail->getClientOriginalName();
    $thumbnail->move(public_path('storage/thumbnails'), $thumbnailName);
    $data['thumbnail'] = 'thumbnails/' . $thumbnailName;
}

if ($request->hasFile('path')) {
    // upload video to public/videos
    $video = $request->file('path');
    $videoName = time() . '_' . $video->getClientOriginalName();
    $video->move(public_path('storage/videos'), $videoName);
    $data['path'] = 'videos/' . $videoName;
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
        // delete old thumbnail if exists
        if ($model->thumbnail && file_exists(public_path('storage/'.$model->thumbnail))) {
            unlink(public_path('storage/'.$model->thumbnail));
        }

        $thumbnail = $request->file('thumbnail');
        $thumbnailName = time() . '_' . $thumbnail->getClientOriginalName();
        $thumbnail->move(public_path('storage/thumbnails'), $thumbnailName);
        $data['thumbnail'] = 'thumbnails/' . $thumbnailName;
    }

    if ($request->hasFile('path')) {
        // delete old video if exists
        if ($model->path && file_exists(public_path('storage/'.$model->path))) {
            unlink(public_path('storage/'.$model->path));
        }

        $video = $request->file('path');
        $videoName = time() . '_' . $video->getClientOriginalName();
        $video->move(public_path('storage/videos'), $videoName);
        $data['path'] = 'videos/' . $videoName;
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
