<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Profile;
use App\Models\News;
use App\Models\User;
use App\Models\Blog;
use App\Models\TourReport;
use Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        $checkprofile = Profile::where('user_id', Auth::user()->id)->first();
        // if($checkprofile->profile_completed == null){

        // return redirect()->route('profile.complete')->with('success', 'Please Complete profile.');

        // }

        // $pages = Page::count();
        // $news = News::count();
        // $users = User::count();
        // $blogs = Blog::count();

        $tourReport = TourReport::with('user')->latest()->get();

        // Distinct list of officer names for the filter dropdown
        $officers = TourReport::select('name')
            ->whereNotNull('name')
            ->distinct()
            ->orderBy('name')
            ->pluck('name');

        return view('dashboard', compact('tourReport', 'officers'));
    }
}
