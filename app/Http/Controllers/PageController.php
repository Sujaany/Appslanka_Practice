<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() 
    {
        return view('pages.home',['name'=>'Invicta Innovation Software Solutions',
        'tagline'=>'Let us Make some innovative applications'
        ]);
}

public function about()
{
    return view('pages.about');    
}

public function portfolio()
{
    return view('pages.portfolio');
}

public function career()
{
    return view('pages.career');
}
public function gallery()
{
    return view('pages.gallery');
}
public function contact()
{
    return view('pages.contact');
}
public function teams()
{
    return view('pages.teams');
}
public function blog()
{
    return view('pages.blog');
}

}