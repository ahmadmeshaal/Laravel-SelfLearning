<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function home()
    {
        $alertMessage = "Welcome to the homepage!";
        return view("home", compact("alertMessage"));
    }
    public function about()
    {
        $alertMessage = "This is the about page!";
        return view("about", compact("alertMessage"));
    }
}
