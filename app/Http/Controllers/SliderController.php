<?php
namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->paginate(10);
        return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title' => 'nullable|string|max:255',
            'link'  => 'nullable|url'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('storage/sliders'), $imageName);
            $path = 'sliders/' . $imageName;
        }

        Slider::create([
            'title' => $request->title,
            'image' => $path,
            'link'  => $request->link,
            'status'=> true,
        ]);

        return redirect()->route('sliders.index')->with('success', 'Slider created successfully');
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title' => 'nullable|string|max:255',
            'link'  => 'nullable|url'
        ]);
        if ($request->hasFile('image')) {
            // Delete old file if exists
            if ($slider->image && file_exists(public_path($slider->image))) {
                unlink(public_path($slider->image));
            }

            // Move new file to public/sliders
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('sliders'), $imageName);

            $slider->image = 'sliders/' . $imageName;
        }


        $slider->title = $request->title;
        $slider->link = $request->link;
        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully');
    }

    public function destroy(Slider $slider)
    {
        Storage::disk('public')->delete($slider->image);
        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully');
    }
}
