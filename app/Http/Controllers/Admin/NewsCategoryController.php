<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = NewsCategory::latest()->get();

        if ($request->ajax()) {
            $users = $categories; // eager load roles

            return DataTables::of($users)
                ->addIndexColumn()
                ->addColumn('name', function ($user) {
                    return $user->name;
                })
                ->addColumn('slug', function ($user) {
                    return $user->slug;
                })
                ->addColumn('actions', function ($user) {
                    $editUrl = route('admin.news-categories.edit', $user->id);
                    $deleteUrl = route('admin.news-categories.destroy', $user->id);
                
                    return '
                    <div class="d-flex align-items-center">
                        <span class="text-nowrap">
                            <a class="btn btn-icon me-1 edit-user" href="' . $editUrl . '">
                                <i class="icon-base ti tabler-edit icon-22px"></i>
                            </a>
                
                            <form action="' . $deleteUrl . '" method="POST" style="display:inline;" onsubmit="return confirm(\'Are you sure you want to delete this category?\')">
                                ' . csrf_field() . method_field('DELETE') . '
                                <button type="submit" class="btn btn-icon btn-sm btn-danger">
                                    <i class="icon-base ti ti-trash icon-22px"></i>
                                </button>
                            </form>
                        </span>
                    </div>';
                })
                
                ->rawColumns(['roles', 'actions'])
                ->make(true);
        }
        return view('admin.News_categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        NewsCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('admin.news-categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsCategory $newsCategory)
    {
        return view('admin.news_categories.edit', compact('newsCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsCategory $newsCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $newsCategory->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('admin.news-categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsCategory $newsCategory)
    {
        $newsCategory->delete();
        return redirect()->route('admin.news-categories.index')->with('success', 'Category deleted successfully.');
    }
}
