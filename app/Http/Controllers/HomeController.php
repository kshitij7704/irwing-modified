<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Orm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    public function index()
    {

        return view('pages.main');
    }

public function orms(Request $request)
{
    $orms = Orm::all(); // fetch all records
    return view('pages.orms', compact('orms'));
}
public function videos(Request $request)
{
    $orms = Orm::all(); // fetch all records
    return view('pages.videos', compact('orms'));
}
public function achivements(Request $request)
{
    $orms = Orm::all(); // fetch all records
    return view('pages.achivements', compact('orms'));
}




public function brouches(Request $request)
{
    $orms = Orm::all(); // fetch all records
    return view('pages.brouches', compact('orms'));
}
public function pressrelease(Request $request)
{
    $orms = Orm::all(); // fetch all records
    return view('pages.pressrelease', compact('orms'));
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

}
