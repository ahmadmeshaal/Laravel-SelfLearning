<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show()
    {
        $name= "Ahmad";
        return view('mywelcome',['name'=>$name]);
    }
}
