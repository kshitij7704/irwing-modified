<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\News;
use App\Models\User;
use App\Models\Blog;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // $pages = Page::count(); 
        // $news = News::count();
        // $users = User::count(); 
        // $blogs = Blog::count();
        return view('dashboard');
    }
}
