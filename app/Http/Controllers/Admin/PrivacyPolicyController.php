<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index()
    {

        $privacy_policies = PrivacyPolicy::latest()->get();
        return view('admin.privacy_policies.index', compact('privacy_policies'));
    }

    public function create()
    {
        return view('admin.privacy_policies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        PrivacyPolicy::create($request->all());
        return redirect()->route('admin.privacy_policies.index')->with('success', 'Privacy Policy created successfully.');
    }

    public function edit(PrivacyPolicy $privacy_policy)
    {
        return view('admin.privacy_policies.edit', compact('privacy_policy'));
    }

    public function update(Request $request, PrivacyPolicy $privacy_policy)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $privacy_policy->update($request->all());
        return redirect()->route('admin.privacy_policies.index')->with('success', 'Privacy Policy updated successfully.');
    }

    public function destroy(PrivacyPolicy $privacy_policy)
    {
        $privacy_policy->delete();
        return back()->with('success', 'Privacy Policy deleted successfully.');
    }
}
