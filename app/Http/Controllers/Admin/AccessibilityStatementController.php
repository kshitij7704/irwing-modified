<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccessibilityStatement;
use Illuminate\Http\Request;

class AccessibilityStatementController extends Controller
{
    public function index()
    {
        $statements = AccessibilityStatement::latest()->get();
        return view('admin.accessibility_statements.index', compact('statements'));
    }

    public function create()
    {
        return view('admin.accessibility_statements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:Active,Inactive',
        ]);

        AccessibilityStatement::create($request->all());

        return redirect()->route('admin.accessibility_statements.index')->with('success', 'Accessibility Statement created successfully.');
    }

    public function edit($id)
    {
        $statement = AccessibilityStatement::findOrFail($id);
        return view('admin.accessibility_statements.edit', compact('statement'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:Active,Inactive',
        ]);

        $statement = AccessibilityStatement::findOrFail($id);
        $statement->update($request->all());

        return redirect()->route('admin.accessibility_statements.index')->with('success', 'Accessibility Statement updated successfully.');
    }

    public function destroy($id)
    {
        AccessibilityStatement::findOrFail($id)->delete();
        return redirect()->route('admin.accessibility_statements.index')->with('success', 'Accessibility Statement deleted successfully.');
    }
}
