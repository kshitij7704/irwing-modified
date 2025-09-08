<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $news = News::with('category')->latest()->get();

        if ($request->ajax()) {
            return DataTables::of($news)
                ->addIndexColumn()
                ->addColumn('title', fn($row) => $row->title)
                ->addColumn('slug', fn($row) => $row->slug)
                ->addColumn('thumbnail_image', function ($row) {
                    if ($row->thumbnail_image) {
                        $imageUrl = asset('storage/' . $row->thumbnail_image);
                        return '<img src="' . $imageUrl . '" width="60" height="60" style="object-fit:cover">';
                    }
                    return '—';
                })
                ->addColumn('category', fn($row) => $row->category->name ?? '—')
                ->addColumn('publish_date', fn($row) => optional($row->publish_date)->format('d M Y'))
                ->addColumn('actions', function ($row) {
                    $editUrl = route('admin.news.edit', $row->id);
                    $deleteUrl = route('admin.news.destroy', $row->id);

                    return '
                        <div class="d-flex align-items-center">
                            <a class="btn btn-icon me-1" href="' . $editUrl . '">
                                <i class="icon-base ti tabler-edit icon-22px"></i>
                            </a>
                            <form action="' . $deleteUrl . '" method="POST" style="display:inline;" onsubmit="return confirm(\'Are you sure?\')">
                                ' . csrf_field() . method_field('DELETE') . '
                                <button type="submit" class="btn btn-icon btn-sm btn-danger">
                                    <i class="icon-base ti ti-trash icon-22px"></i>
                                </button>
                            </form>
                        </div>';
                })
                ->rawColumns(['thumbnail_image', 'actions'])
                ->make(true);
        }

        return view('admin.news.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = NewsCategory::latest()->get();
        return view('admin.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:500',
            'full_content' => 'required|string',
            'thumbnail_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'publish_date' => 'nullable|date',
            'tags' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'category_id' => 'required|exists:news_categories,id',
            'is_featured' => 'nullable|boolean',
        ]);

        if ($request->hasFile('thumbnail_image')) {
            $path = $request->file('thumbnail_image')->store('news', 'public');
            $validated['thumbnail_image'] = $path;
        }

        $validated['is_featured'] = $request->has('is_featured');

        News::create($validated);

        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $categories = NewsCategory::latest()->get();
        return view('admin.news.edit', compact('news','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:500',
            'full_content' => 'required|string',
            'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'publish_date' => 'nullable|date',
            'tags' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'category_id' => 'required|exists:news_categories,id',
            'is_featured' => 'nullable|boolean',
        ]);

        // Handle image upload if new file is provided
        if ($request->hasFile('thumbnail_image')) {
            // Delete old image if exists
            if ($news->thumbnail_image && Storage::exists('public/' . $news->thumbnail_image)) {
                Storage::delete('public/' . $news->thumbnail_image);
            }

            $path = $request->file('thumbnail_image')->store('news_images', 'public');
            $news->thumbnail_image = $path;
        }

        // Update fields
        $news->title = $request->title;
        $news->short_description = $request->short_description;
        $news->full_content = $request->full_content;
        $news->publish_date = $request->publish_date;
        $news->tags = $request->tags;
        $news->meta_title = $request->meta_title;
        $news->meta_description = $request->meta_description;
        $news->category_id = $request->category_id;
        $news->is_featured = $request->has('is_featured'); // checkbox returns null if unchecked

        $news->save();

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
