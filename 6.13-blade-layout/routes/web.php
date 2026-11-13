<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin',[PageController::class,'admin']);
Route::get ('/user',[PageController::class,'user']);

