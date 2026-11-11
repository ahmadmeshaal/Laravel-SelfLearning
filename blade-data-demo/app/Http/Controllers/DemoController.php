<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function showData(){
        $name='Ahmad';
        $fruits=['Apple','bannana','orange'];
        $user=[
            'name'=> 'ali',
            'email'=> 'ali@gmail.com',
            'isActive'=>true];

        $product=(object)   [
            'id'=>1,
            'name'=> 'laptop',
            'price'=>900
        ];

        return view('demo',compact('name','fruits','user','product'));
    }
}
