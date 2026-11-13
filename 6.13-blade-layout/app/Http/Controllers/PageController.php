<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function admin(){
        $role= 'admin';
        $username= 'Ahmad';

        return view('admin.dashboard',compact('role','username'));

    }    

       public function user(){
        $role= 'user';
        $username= 'Ahmad';

        return view('admin.dashboard',compact('role','username'));

    }   
}
