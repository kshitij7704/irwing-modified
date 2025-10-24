<?php
namespace App\Http\Controllers;

use App\Models\Brochure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrochureController extends Controller
{
    public function index()
    {
        $brochures = Brochure::latest()->paginate(10);
        return view('admin.brochures.index', compact('brochures'));
    }

    public function create()
    {
        return view('admin.brochures.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'published_at' => 'required|date',
            'file' => 'required|mimes:pdf|max:5120', // 5MB max
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/brochures'), $fileName);

            $filePath = 'brochures/' . $fileName; // save relative path in DB
        }


        Brochure::create([
            'title' => $request->title,
            'published_at' => $request->published_at,
            'file_path' => $filePath,
        ]);

        return redirect()->route('brochures.index')->with('success', 'Brochure added successfully.');
    }

    public function edit(Brochure $brochure)
    {
        return view('admin.brochures.edit', compact('brochure'));
    }

    public function update(Request $request, Brochure $brochure)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'published_at' => 'required|date',
            'file' => 'nullable|mimes:pdf|max:5120',
        ]);

        $data = [
            'title' => $request->title,
            'published_at' => $request->published_at,
        ];
        if ($request->hasFile('file')) {
            // Delete old file if exists
            if (!empty($brochure->file_path) && file_exists(public_path('storage/'.$brochure->file_path))) {
                unlink(public_path('storage/'.$brochure->file_path));
            }

            // Upload new file directly to public/brochures
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/brochures'), $fileName);

            // Save relative path in database
            $data['file_path'] = 'brochures/' . $fileName;
        }


        $brochure->update($data);

        return redirect()->route('brochures.index')->with('success', 'Brochure updated successfully.');
    }

    public function destroy(Brochure $brochure)
    {
        if ($brochure->file_path && Storage::disk('public')->exists($brochure->file_path)) {
            Storage::disk('public')->delete($brochure->file_path);
        }

        $brochure->delete();

        return redirect()->route('brochures.index')->with('success', 'Brochure deleted successfully.');
    }
}
