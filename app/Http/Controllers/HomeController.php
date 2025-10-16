<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PressRelease;
use App\Models\MeetingCalendar;
use App\Models\MinisterMessage;
use App\Models\Orm;
use App\Models\Brochure;
use App\Models\InternationalForm;
use App\Models\PromotionalVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    public function index()
    {

        $events = MeetingCalendar::select('title', 'date', 'color')->get();
        $ministerMessages = MinisterMessage::all();
        $Orm = MinisterMessage::latest(3);

        return view('pages.main', compact('events','ministerMessages'));
    }

public function orms(Request $request)
{
    $orms = Orm::all(); // fetch all records
    return view('pages.orms', compact('orms'));
}
public function videos(Request $request)
{
    $PromotionalVideo = PromotionalVideo::all(); // fetch all records
    return view('pages.videos', compact('PromotionalVideo'));
}
public function achivements(Request $request)
{
    $orms = Orm::all(); // fetch all records
    return view('pages.achivements', compact('orms'));
}




public function brouches(Request $request)
{
        $brochures = Brochure::latest()->paginate(10);
    return view('pages.brouches', compact('brochures'));
}
public function pressrelease(Request $request)
{
    $pressReleases = PressRelease::latest()->get(); // your model
    $ministries = PressRelease::select('ministry')->distinct()->pluck('ministry');
    $orms = Orm::all(); // fetch all records
    return view('pages.pressrelease', compact('orms','pressReleases','ministries'));
}

public function tweets(Request $request)
{
    $orms = Orm::all(); // fetch all records
    return view('pages.tweets', compact('orms'));
}
public function message(Request $request)
{
    $orms = Orm::all(); // fetch all records
    return view('pages.message', compact('orms'));
}
public function structure(Request $request)
{
    $orms = Orm::all(); // fetch all records
    return view('pages.structure', compact('orms'));
}
public function contact(Request $request)
{
    $orms = Orm::all(); // fetch all records
    return view('pages.contact', compact('orms'));
}
public function roleir(Request $request)
{
    $orms = Orm::all(); // fetch all records
    return view('pages.roleir', compact('orms'));
}
public function internationForums(Request $request)
{
    $InternationalForm = InternationalForm::all(); // fetch all records
    return view('pages.internationForums', compact('InternationalForm'));
}

}
