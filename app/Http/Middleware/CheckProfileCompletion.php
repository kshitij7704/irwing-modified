<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class CheckProfileCompletion
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $profile = \App\Models\Profile::where('user_id', Auth::id())->first();

            if (!$profile || $profile->profile_completed == null) {
                return redirect()
                    ->route('profile.complete')
                    ->with('success', 'Please complete your profile.');
            }
        }

        return $next($request);
    }
}
