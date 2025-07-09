<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Menu;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [
            url('/'),
            route('menu.index'),
            route('blog.index'),
        ];
        foreach (Blog::all() as $blog) {
            $urls[] = route('blog.show', $blog->slug);
        }
        foreach (Menu::where('is_active', true)->get() as $menu) {
            $urls[] = route('menu.index') . '#menu-' . $menu->id;
        }
        $xml = view('sitemap.xml', compact('urls'))->render();
        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
