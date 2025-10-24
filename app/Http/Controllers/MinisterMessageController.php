<?php
namespace App\Http\Controllers;

use App\Models\MinisterMessage;
use Illuminate\Http\Request;

class MinisterMessageController extends Controller
{
    public function index()
    {
        $messages = MinisterMessage::all();
        return view('admin.ministers.index', compact('messages'));
    }

    public function create()
    {
        return view('admin.ministers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'postion' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'minister_name' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $path = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/minister_photos'), $photoName);
            $path = 'minister_photos/' . $photoName;
        }

        MinisterMessage::create([
            'postion' => $request->postion,
            'title' => $request->title,
            'message' => $request->message,
            'minister_name' => $request->minister_name,
            'photo' => $path,
        ]);

        return redirect()->route('minister-messages.index')->with('success', 'Message created successfully.');
    }

    public function edit(MinisterMessage $ministerMessage)
    {
        return view('admin.ministers.edit', compact('ministerMessage'));
    }

    public function update(Request $request, MinisterMessage $ministerMessage)
    {
        $request->validate([
            'postion' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'minister_name' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $ministerMessage->photo;

        if ($request->hasFile('photo')) {
            // Delete old file if it exists
            if ($path && file_exists(public_path('storage/'.$path))) {
                unlink(public_path('storage/'.$path));
            }

            // Store new file in public/minister_photos
            $photo = $request->file('photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/minister_photos'), $photoName);
            $path = 'minister_photos/' . $photoName;
        }

        $ministerMessage->update([
            'postion' => $request->postion,
            'title' => $request->title,
            'message' => $request->message,
            'minister_name' => $request->minister_name,
            'photo' => $path,
        ]);

        return redirect()->route('minister-messages.index')->with('success', 'Message updated successfully.');
    }

    public function destroy(MinisterMessage $ministerMessage)
    {
        $ministerMessage->delete();
        return redirect()->route('minister-messages.index')->with('success', 'Message deleted.');
    }
}