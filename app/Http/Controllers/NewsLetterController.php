<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $leads = NewsLetter::orderBy('created_at', 'desc')->get();

        if ($request->ajax()) {
            return DataTables::of($leads)
                ->addIndexColumn()
                ->addColumn('email', fn($row) => $row->email)
                ->addColumn('created_at', function ($row) {
                    return \Carbon\Carbon::parse($row->created_at)
                        ->timezone('Asia/Kolkata')
                        ->format('d F Y \a\t h:i A (T)');
                })
                ->make(true);
        }
        return view('admin.newsletters.index', compact('leads'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsLetter $newsLetter)
    {
        //
    }
}
