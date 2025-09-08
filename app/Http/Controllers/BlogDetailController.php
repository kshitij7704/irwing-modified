<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    /**
     * Display the blog details page.
     *
     * @return \Illuminate\View\View
     */
    public function show($slug = null)
    {
        // You can add logic here to fetch blog data from database
        // For now, we'll just return the view
        return view('pages.blog-detail');
    }
}
