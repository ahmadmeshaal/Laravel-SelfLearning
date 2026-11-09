<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $message = "Welcome to my website";
        return view('pages.home', compact('message'));
    }

    public function about(){
        $message = 'This is the about page';
        return view('pages.about', compact('message'));
    }

    public function contact(){
        $message = 'This is the contact page';
        return view('pages.contact', compact('message'));
    }
}
