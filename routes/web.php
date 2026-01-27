<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Default welcome page
Route::get('/', function () {
    return view('welcome');
});

// Blog post routes
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
