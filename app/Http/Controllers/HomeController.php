<?php

namespace App\Http\Controllers;

use App\Http\Excel\CategoryImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class HomeController extends Controller
{

    public function home()
    {
        return view('view.home');
    }

    public function addData(Request $request)
    {
        Excel::import(new CategoryImport(), $request->file('files'));
        return back();
    }
}
