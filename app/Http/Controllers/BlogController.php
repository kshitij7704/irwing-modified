<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function show($slug)
    {
        // Blog data map by slug
        $blog = Blog::where('slug', $slug)->first();
        return view('pages.blog-detail', compact('blog'));
    }
} 