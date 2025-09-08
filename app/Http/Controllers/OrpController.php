<?php

namespace App\Http\Controllers;

use App\Models\Orp;
use Illuminate\Http\Request;

class OrpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('qrp.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('qrp.create');
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
    public function show(Orp $orp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orp $orp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orp $orp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orp $orp)
    {
        //
    }
}
