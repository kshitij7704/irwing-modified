<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        return view('pages.main');
    }

    public function migrateOldBlogs()
    {
        // Fetch data from the old 'blog' table
        $oldBlogs = DB::table('blog')->get();

        foreach ($oldBlogs as $oldBlog) {
            DB::table('blogs')->insert([
                'title'             => $oldBlog->title,
                'meta_title'        => $oldBlog->meta_title,
                'tags'              => $oldBlog->keyword, // Mapping keyword → tags
                'short_description' => $oldBlog->short_description,
                'featured_image'    => $oldBlog->image,   // Mapping image → featured_image
                'content'           => $oldBlog->descriptions, // Mapping descriptions → content
                'slug'              => $oldBlog->slug,
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }

        return "Migration completed!";
    }
}
