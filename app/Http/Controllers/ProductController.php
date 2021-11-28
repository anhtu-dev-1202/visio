<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    const PRODUCT = 1;

    public function products(Request $request)
    {
        $data = Product::orderBy('created_at', 'desc');
        if (isset($request->keyword)) {
            $data->where('title', 'like', "%$request->keyword%");
        }
        $data = $data->get();
        return view('view.product', compact('data'));
    }

    public function product($slug)
    {
        $cat = Category::where('slug', $slug)->first();
        $data = Product::where('id_category', $cat->id)->get();
        return view('view.product', compact('data'));
    }

    public function detailProduct($slug)
    {
        $key = self::PRODUCT;
        $data = Product::where('slug', $slug)->first();
        $lq = Product::where('id_category', $data->id_category)->get();
        $new = News::orderBy('created_at', 'desc')->limit(5)->get();
        $view = News::orderBy('view', 'desc')->limit(5)->get();
        return view('view.detail', compact('data', 'new', 'view', 'key', 'lq'));
    }
}
