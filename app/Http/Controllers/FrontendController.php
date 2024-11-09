<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
    public function elements()
    {
        return view('elements');
    }
    public function index()
    {
        return view('index');
    }
    public function practice()
    {
        return view('practice');
    }
    public function singleblog()
    {
        return view('single-blog');
    }

    
}
