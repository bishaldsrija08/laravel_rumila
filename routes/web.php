<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

// joining BlogController to the route
Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');
Route::get('/blog/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/{blog}', [BlogController::class, 'update'])->name('blog.update');
Route::get('/blog/single/{blog}', [BlogController::class, 'show'])->name('blog.show');