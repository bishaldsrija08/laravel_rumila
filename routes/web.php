<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

// joining BlogController to the route
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');