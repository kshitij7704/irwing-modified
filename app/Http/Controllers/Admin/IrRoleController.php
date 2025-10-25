<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IrRole;
use Illuminate\Http\Request;

class IrRoleController extends Controller
{
    public function index()
    {
        $roles = IrRole::latest()->get();
        return view('admin.ir_roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.ir_roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        IrRole::create($request->all());
        return redirect()->route('admin.ir_roles.index')->with('success', 'Role created successfully.');
    }

    public function edit(IrRole $ir_role)
    {
        return view('admin.ir_roles.edit', compact('ir_role'));
    }

    public function update(Request $request, IrRole $ir_role)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        $ir_role->update($request->all());
        return redirect()->route('admin.ir_roles.index')->with('success', 'Role updated successfully.');
    }

    public function destroy(IrRole $ir_role)
    {
        $ir_role->delete();
        return redirect()->route('admin.ir_roles.index')->with('success', 'Role deleted successfully.');
    }
}
