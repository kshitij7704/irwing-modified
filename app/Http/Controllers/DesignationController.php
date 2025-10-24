<?php
// app/Http/Controllers/DesignationController.php
namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index() {
        $designations = Designation::latest()->get();
        return view('admin.designations.index', compact('designations'));
    }

    public function create() {
        return view('admin.designations.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive'
        ]);

        Designation::create($request->all());
        return redirect()->route('designations.index')->with('success', 'Designation created successfully.');
    }

    public function edit(Designation $designation) {
        return view('admin.designations.edit', compact('designation'));
    }

    public function update(Request $request, Designation $designation) {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive'
        ]);

        $designation->update($request->all());
        return redirect()->route('designations.index')->with('success', 'Designation updated successfully.');
    }

    public function destroy(Designation $designation) {
        $designation->delete();
        return redirect()->route('designations.index')->with('success', 'Designation deleted successfully.');
    }
}
