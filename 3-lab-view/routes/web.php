<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoCotroller;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(DemoCotroller::class)->group(function () {
    Route::get('/hello', 'hello');
    Route::get('/greet/{name}', 'greet');
    Route::get('/search', 'search');
});
