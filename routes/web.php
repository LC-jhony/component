<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/', [ComponentController::class, 'index'])->name('dashboard.index');
Route::controller(PostController::class)
    ->prefix('posts')
    ->as('posts.')
    ->group(function () {
        Route::get('/post', 'index')->name('index');
        Route::get('/create/post', 'create')->name('create');
        Route::post('/post', 'store')->name('store');
    });
