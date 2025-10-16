<?php
namespace App\Http\Controllers;

use App\Models\InternationalForm;
use Illuminate\Http\Request;

class InternationalFormController extends Controller
{
    public function index()
    {
        $forms = InternationalForm::latest()->paginate(10);
        return view('admin.international_forms.index', compact('forms'));
    }

    public function create()
    {
        return view('admin.international_forms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'nullable|url',
        ]);

        InternationalForm::create($request->all());

        return redirect()->route('international_forms.index')->with('success', 'Form created successfully.');
    }

    public function show(InternationalForm $internationalForm)
    {
        return view('admin.international_forms.show', compact('internationalForm'));
    }

    public function edit(InternationalForm $internationalForm)
    {
        return view('admin.international_forms.edit', compact('internationalForm'));
    }

    public function update(Request $request, InternationalForm $internationalForm)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'nullable|url',
        ]);

        $internationalForm->update($request->all());

        return redirect()->route('international_forms.index')->with('success', 'Form updated successfully.');
    }

    public function destroy(InternationalForm $internationalForm)
    {
        $internationalForm->delete();

        return redirect()->route('international_forms.index')->with('success', 'Form deleted successfully.');
    }
}
