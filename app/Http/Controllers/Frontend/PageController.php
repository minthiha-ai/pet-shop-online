<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function shop()
    {
        return view('pages.shop');
    }

    public function blog()
    {
        return view('pages.blogs');
    }

    public function about()
    {
        return view('pages.about-us');
    }
}
