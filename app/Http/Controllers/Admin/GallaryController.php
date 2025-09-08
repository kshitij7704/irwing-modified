<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Yajra\DataTables\Facades\DataTables;

class GallaryController extends Controller
{
  
    public function index(Request $request)
    {
        $items = Gallery::latest()->get();

        if ($request->ajax()) {
            return DataTables::of($items)
                ->addIndexColumn()

                ->addColumn('type', fn($row) => ucfirst($row->type))
                ->addColumn('heading', fn($row) => $row->heading)
                ->addColumn('desc', fn($row) => $row->desc)

                ->addColumn('actions', function ($row) {
                    $buttons = '<div class="d-flex align-items-center">';

                    if (auth()->user()->can('pages edit')) {
                        $editUrl = route('admin.gallaries.edit', $row->id);
                        $buttons .= '<a class="btn btn-icon me-1" href="' . $editUrl . '">
                                        <i class="icon-base ti tabler-edit icon-22px"></i>
                                     </a>';
                    }

                    if (auth()->user()->can('pages delete')) {
                        $deleteUrl = route('admin.gallaries.destroy', $row->id);
                        $buttons .= '
                            <form action="' . $deleteUrl . '" method="POST" style="display:inline-block;" onsubmit="return confirm(\'Are you sure you want to delete this item?\')">
                                ' . csrf_field() . method_field('DELETE') . '
                                <button type="submit" class="btn btn-icon btn-sm btn-danger">
                                    <i class="icon-base ti ti-trash icon-22px"></i>
                                </button>
                            </form>';
                    }

                    $buttons .= '</div>';
                    return $buttons;
                })

                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('admin.gallery.index', compact('items'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'heading' => 'required',
            'desc' => 'nullable|string',
            'src' => 'required|file|mimes:jpg,jpeg,png,mp4', // validate file type
            'poster' => 'nullable|file|mimes:jpg,jpeg,png',
        ]);
    
        // Create a new instance
        $gallery = new Gallery();
        $gallery->type = $request->type;
        $gallery->heading = $request->heading;
        $gallery->desc = $request->desc;
    
        // Handle source upload
        if ($request->hasFile('src')) {
            $fileName = time() . '_src.' . $request->file('src')->getClientOriginalExtension();
            $request->file('src')->move(public_path('assets/img/gallery'), $fileName);
            $gallery->src = 'assets/img/gallery/' . $fileName;
        }
    
        // Handle poster upload (only for video)
        if ($request->hasFile('poster')) {
            $posterName = time() . '_poster.' . $request->file('poster')->getClientOriginalExtension();
            $request->file('poster')->move(public_path('assets/img/gallery'), $posterName);
            $gallery->poster = 'assets/img/gallery/' . $posterName;
        }
    
        $gallery->save();
    
        return redirect()->route('admin.gallaries.index')->with('success', 'Gallery item created successfully.');
    }
    

    public function show(Gallery $gallery)
    {
        return view('admin.gallery.show', compact('gallery'));
    }
    
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'type' => 'required',
            'src' => 'required',
            'heading' => 'required',
        ]);

        $gallery->update($request->all());

        return redirect()->route('admin.gallaries.index')->with('success', 'Gallery item updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('admin.gallaries.index')->with('success', 'Gallery item deleted successfully.');
    }
} 