<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TermsOfUse;
use Illuminate\Http\Request;

class TermsOfUseController extends Controller
{
    public function index()
    {
        $terms = TermsOfUse::latest()->paginate(10);
        return view('admin.terms_of_use.index', compact('terms'));
    }

    public function create()
    {
        return view('admin.terms_of_use.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required|boolean',
        ]);

        TermsOfUse::create($request->all());
        return redirect()->route('admin.terms_of_use.index')->with('success', 'Terms of Use added successfully.');
    }

    public function show($id)
    {
        $term = TermsOfUse::findOrFail($id);
        return view('admin.terms_of_use.show', compact('term'));
    }

    public function edit($id)
    {
        $term = TermsOfUse::findOrFail($id);
        return view('admin.terms_of_use.edit', compact('term'));
    }

    public function update(Request $request, $id)
    {
        $term = TermsOfUse::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required|boolean',
        ]);

        $term->update($request->all());
        return redirect()->route('admin.terms_of_use.index')->with('success', 'Terms of Use updated successfully.');
    }

    public function destroy($id)
    {
        TermsOfUse::findOrFail($id)->delete();
        return redirect()->route('admin.terms_of_use.index')->with('success', 'Terms of Use deleted successfully.');
    }
}
