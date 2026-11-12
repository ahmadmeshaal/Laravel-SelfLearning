<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Metadata\Group;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/todos');

Route::controller(TodoController::class)->group(function () {
    Route::get('/todos', 'index')->name('todos.index');

    Route::get('/todos/create', 'create')->name('todos.create');

    Route::post('/todos', 'store')->name('todos.store');

    Route::get('/todos/{todo}', 'show')->name('todos.show');

    Route::get('/todos/{todo}/edit', 'edit')->name('todos.edit');

    Route::put('/todos/{todo}', 'update')->name('todos.update');

    Route::delete('/todos/{todo}', 'destroy')->name('todos.destroy');
});
