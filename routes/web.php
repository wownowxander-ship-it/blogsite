<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Public homepage
Route::get('/', [HomeController::class, 'homepage'])->name('homepage');

// After login redirect logic
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Optional: direct admin route
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin.dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/post_page', [AdminController::class, 'post_page'])->name('post_page');

    Route::post('/add_post',[AdminController::class, 'add_post']);

    Route::get('/show_post', [AdminController::class, 'show_post']);

    Route::get('/delete_post/{id}', [AdminController::class, 'delete_post']);

    Route::get('/edit_post/{id}', [AdminController::class, 'edit_post']);  
    
    Route::post('/update_post/{id}', [AdminController::class, 'update_post']);


});
