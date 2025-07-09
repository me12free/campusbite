<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderByDesc('created_at')->paginate(10);
        $meta_title = 'CampusBite Blog';
        $meta_description = 'Read the latest food news, tips, and offers for  University students.';
        return view('blog.index', compact('blogs', 'meta_title', 'meta_description'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $meta_title = $blog->meta_title ?: $blog->title;
        $meta_description = $blog->meta_description ?: str()->limit(strip_tags($blog->content), 150);
        $meta_og_image = $blog->cover_image_url;
        return view('blog.show', compact('blog', 'meta_title', 'meta_description', 'meta_og_image'));
    }
}
