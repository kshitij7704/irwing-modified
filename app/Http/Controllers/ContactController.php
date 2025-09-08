<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email',
            'phone'      => 'required',
            'company'    => 'required|string|max:255',
            'num_employees' => 'required',
            'role'       => 'required',
            'industry'   => 'required',
            'country'    => 'required',
            'message'    => 'required',
            'consent'    => 'accepted',
        ]);

        // Send email
        Mail::send('emails.contact', $validated, function($message) use ($validated) {
            $message->to('puneet@ailifebot.com')
                    ->subject('New Contact Form Submission');
        });

        return back()->with('success', 'Thank you! Your request has been submitted successfully.');
    }
} 