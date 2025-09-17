<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post:slug}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('categories', CategoryController::class)->name('categories.create');
});
