<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PressRelease;
use App\Models\MeetingCalendar;
use App\Models\MinisterMessage;
use App\Models\Orm;
use App\Models\Brochure;
use App\Models\Ambition;
use App\Models\InternationalForm;
use App\Models\SiteSetting;
use App\Models\SocialMedia;
use App\Models\PromotionalVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    public function index()
    {
        try {


            $instagram = SocialMedia::where('platform','instagram')->latest()->first();
            $facebook =  SocialMedia::where('platform','facebook')->latest()->first();
            $twitter =  SocialMedia::where('platform','twitter')->latest()->first();
            $youtube =  SocialMedia::where('platform','youtube')->latest()->first();
            $linkedin =  SocialMedia::where('platform','linkedin')->latest()->first();


            $events = MeetingCalendar::select('title', 'date', 'color')->get();
            $ministerMessages = MinisterMessage::all();
            
            $ministers = MinisterMessage::all();
            $sliders = \App\Models\Slider::where('status', true)->get();
            $engagements = \App\Models\Engagement::where('status', 1)->get();
            $ambition = Ambition::latest()->first();
        } catch (\Exception $e) {
            // Handle database connection issues
            $events = collect([]);
            $ministerMessages = collect([]);
            $ministers = collect([]);
            $sliders = collect([]);
        }

        return view('pages.main', compact('events','ministerMessages','sliders','ministers','ambition',
            'engagements','instagram','facebook','twitter','youtube','linkedin'));
    }

    public function orms(Request $request)
    {
        try {
            $orms = Orm::all(); // fetch all records
        } catch (\Exception $e) {
            $orms = collect([]);
        }
        return view('pages.orms', compact('orms'));
    }
    public function videos(Request $request)
    {
        try {
            $PromotionalVideo = PromotionalVideo::all(); // fetch all records
        } catch (\Exception $e) {
            $PromotionalVideo = collect([]);
        }
        return view('pages.videos', compact('PromotionalVideo'));
    }
    public function achivements(Request $request)
    {
        try {
            $achievements = \App\Models\Achievement::latest()->get();
        } catch (\Exception $e) {
            $achievements = collect([]);
        }
        return view('pages.achivements', compact('achievements'));
    }

    public function brouches(Request $request)
    {
        try {
            $brochures = Brochure::latest()->paginate(10);
        } catch (\Exception $e) {
            $brochures = collect([]);
        }
        return view('pages.brouches', compact('brochures'));
    }
    public function pressrelease(Request $request)
    {
        try {
            $pressReleases = PressRelease::latest()->get(); // your model
            $ministries = PressRelease::select('ministry')->distinct()->pluck('ministry');
            $orms = Orm::all(); // fetch all records
        } catch (\Exception $e) {
            $pressReleases = collect([]);
            $ministries = collect([]);
            $orms = collect([]);
        }
        return view('pages.pressrelease', compact('orms','pressReleases','ministries'));
    }

    public function tweets(Request $request)
    {
        try {


            $instagram = SocialMedia::where('platform','instagram')->latest()->get();
            $facebook =  SocialMedia::where('platform','facebook')->latest()->get();
            $twitter =  SocialMedia::where('platform','twitter')->latest()->get();
            $youtube =  SocialMedia::where('platform','youtube')->latest()->get();
            $linkedin =  SocialMedia::where('platform','linkedin')->latest()->get();
            $orms = Orm::all(); // fetch all records
        } catch (\Exception $e) {
            $orms = collect([]);
        }
        return view('pages.tweets', compact('orms','instagram','facebook','twitter','youtube','linkedin'));
    }
    public function message(Request $request, $id)
    {

        $minister = MinisterMessage::find($id);
        return view('pages.message', compact('minister'));
    }
    public function structure(Request $request)
    {
        try {
            $orms = Orm::all(); // fetch all records
        } catch (\Exception $e) {
            $orms = collect([]);
        }
        return view('pages.structure', compact('orms'));
    }
    public function contact(Request $request)
    {
        try {
            $orms = Orm::all(); // fetch all records

        $settings = SiteSetting::first();
        } catch (\Exception $e) {
            $orms = collect([]);
        }
        return view('pages.contact', compact('orms','settings'));
    }
    public function roleir(Request $request)
    {
        try {
            $orms = Orm::all(); // fetch all records
        } catch (\Exception $e) {
            $orms = collect([]);
        }
        return view('pages.roleir', compact('orms'));
    }
    public function internationForums(Request $request, $id)
    {
        try {
            $InternationalForm = InternationalForm::find($id); // fetch all records
        } catch (\Exception $e) {
            $InternationalForm = collect([]);
        }
        $section = $request->get('section');
        $sub = $request->get('sub');
        return view('pages.internationForums', compact('InternationalForm', 'section', 'sub'));
    }

}
