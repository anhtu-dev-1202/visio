<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    const NEWS = 2;

    public function news()
    {
        $first = News::orderBy('created_at', 'desc')->limit(4)->get();
        $data = News::skip(4)->inRandomOrder()->paginate(15);
        $new = News::orderBy('created_at', 'desc')->limit(5)->get();
        return view('view.news', compact('data', 'new', 'first'));
    }

    public function detailNews($slug)
    {
        $key = self::NEWS;
        $data = News::where('slug', $slug)->first();
        $lq = News::inRandomOrder()->limit(9)->get();
        $new = News::orderBy('created_at', 'desc')->limit(5)->get();
        $view = News::orderBy('view', 'desc')->limit(5)->get();
        News::where('slug', $slug)->increment('view', 1);
        return view('view.detail', compact('data', 'new', 'view', 'key', 'lq'));
    }
}
