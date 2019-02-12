<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'title' => 'Welcome yo!'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Contact'
        ]);
    }
}
