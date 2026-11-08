<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoCotroller extends Controller
{
    //
    public function hello()
    {
        $name = "John Doe";
        return view('hello', compact('name'));
    }

    public function greet($name)
    {
        return view('greet', compact('name'));
    }

    public function search(Request $request)
    {
        $keyword = $request->query('q', 'none');
        return view('search', compact('keyword'));
    }
}
