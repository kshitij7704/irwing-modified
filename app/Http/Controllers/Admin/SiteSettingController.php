<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::first();
        return view('admin.site_settings.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.site_settings.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'site_name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'favicon' => 'nullable|image|mimes:png,jpg,ico|max:1024',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
        ]);

        // Handle logo
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time().'_'.$logo->getClientOriginalName();
            $logo->move(public_path('uploads/settings'), $logoName);
            $data['logo'] = 'uploads/settings/' . $logoName;
        }

        // Handle favicon
        if ($request->hasFile('favicon')) {
            $favicon = $request->file('favicon');
            $faviconName = time().'_'.$favicon->getClientOriginalName();
            $favicon->move(public_path('uploads/settings'), $faviconName);
            $data['favicon'] = 'uploads/settings/' . $faviconName;
        }

        SiteSetting::create($data);

        return redirect()->route('admin.site_settings.index')->with('success', 'Site settings created successfully.');
    }

    public function edit(SiteSetting $site_setting)
    {
        return view('admin.site_settings.edit', compact('site_setting'));
    }

    public function update(Request $request, SiteSetting $site_setting)
    {
        $data = $request->validate([
            'site_name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'favicon' => 'nullable|image|mimes:png,jpg,ico|max:1024',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
        ]);

        // Handle logo
        if ($request->hasFile('logo')) {
            if ($site_setting->logo && file_exists(public_path($site_setting->logo))) {
                unlink(public_path($site_setting->logo));
            }
            $logo = $request->file('logo');
            $logoName = time().'_'.$logo->getClientOriginalName();
            $logo->move(public_path('uploads/settings'), $logoName);
            $data['logo'] = 'uploads/settings/' . $logoName;
        }

        // Handle favicon
        if ($request->hasFile('favicon')) {
            if ($site_setting->favicon && file_exists(public_path($site_setting->favicon))) {
                unlink(public_path($site_setting->favicon));
            }
            $favicon = $request->file('favicon');
            $faviconName = time().'_'.$favicon->getClientOriginalName();
            $favicon->move(public_path('uploads/settings'), $faviconName);
            $data['favicon'] = 'uploads/settings/' . $faviconName;
        }

        $site_setting->update($data);

        return redirect()->route('admin.site_settings.index')->with('success', 'Site settings updated successfully.');
    }

    public function destroy(SiteSetting $site_setting)
    {
        if ($site_setting->logo && file_exists(public_path($site_setting->logo))) {
            unlink(public_path($site_setting->logo));
        }

        if ($site_setting->favicon && file_exists(public_path($site_setting->favicon))) {
            unlink(public_path($site_setting->favicon));
        }

        $site_setting->delete();

        return redirect()->route('admin.site_settings.index')->with('success', 'Site settings deleted successfully.');
    }
}
