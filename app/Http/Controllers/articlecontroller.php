<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articlecontroller extends Controller
{
    public function index() 
    {
        return view('article.index');
    }
    public function home() 
    {
        return view('home.userpage');
    }
    public function article() 
    {
        return view('home.article');
    }
}