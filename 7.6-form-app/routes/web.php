<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/form', [FormController::class,'showForm'])->name('form.show');
Route::post('/form', [FormController::class,'handleForm'])->name('form.handle');
Route::get('/result', [FormController::class,'showResult'])->name('form.result');
