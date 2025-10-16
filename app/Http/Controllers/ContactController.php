<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {
        // Fetch all contacts, newest first
        $contacts = Contact::latest()->paginate(10);

        return view('admin.contact.index', compact('contacts'));
    }
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save to DB
        Contact::create($request->all());

        // Redirect with success message
        return back()->with('success', 'Your message has been submitted successfully!');
    }
}
