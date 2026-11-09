<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
Route::get('/', function () {
    return view('welcome');
});

Route::controller(PageController::class)->group(function () {
    Route::get('/home', 'home');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
});
