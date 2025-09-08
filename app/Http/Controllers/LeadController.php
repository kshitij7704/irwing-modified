<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use App\Models\Newsletter;
use Illuminate\Validation\Rule;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        // Remove reCAPTCHA validation
        // Validate math captcha
        if ((int)$request->input('captcha') !== (int)$request->totalnumber) {
            return response()->json([
                'success' => false,
                'message' => 'Incorrect answer to the math question. Please try again.'
            ], 422);
        }

        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country_code' => 'required|string',
            'phone' => [
                'required',
                'string',
                function ($attribute, $value, $fail) use ($request) {
                    $countryCode = $request->input('country_code'); // ✅ use $request

                    if ($countryCode === '+91') {
                        if (!preg_match('/^[0-9]{10}$/', $value)) {
                            $fail($attribute.' must be exactly 10 digits for India (+91).');
                        }
                    } else {
                        if (!preg_match('/^[0-9]{6,15}$/', $value)) {
                            $fail($attribute.' must be between 6 and 15 digits.');
                        }
                    }
                },
            ],
            'company' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        // Check for duplicate submission (same email and name within last 5 minutes)
        $recentLead = Lead::where('email', $request->email)
                         ->where('name', $request->name)
                         ->where('created_at', '>=', now()->subMinutes(5))
                         ->first();

        if ($recentLead) {
            return response()->json([
                'success' => false,
                'message' => 'This lead has already been submitted recently. Please wait a few minutes before submitting again.',
            ], 429);
        }

        try {
            // Save lead to database
            $lead = Lead::create([
                'name' => $request->name,
                'email' => $request->email,
                'country_code' => $request->country_code,
                'phone' => $request->phone,
                'company' => $request->company,
                'service' => $request->service,
                'message' => $request->message,
                'status' => 'new'
            ]);

            // Send email notification
            $this->sendLeadNotification($lead);

            return response()->json([
                'success' => true,
                'message' => 'Lead submitted successfully! We will contact you soon.',
                'lead_id' => $lead->id
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while submitting your request. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    private function sendLeadNotification($lead)
    {
        $data = [
            'lead' => $lead,
            'subject' => 'New Lead Submission - AI LifeBOT',
        ];

        Mail::send('emails.new-lead', $data, function ($message) use ($lead) {
            $message->to('puneet@ailifebot.com')
                    ->subject('New Lead Submission - AI LifeBOT');
        });
    }
    public function storeNewsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:news_letters,email',
        ]);
    
        NewsLetter::create([
            'email' => $request->email,
        ]);
    
        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }


} 