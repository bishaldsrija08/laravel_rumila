<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about/{name}', function ($name) {
    $age = 25;
    return view('about', ['name' => $name, 'age' => $age]);
});


Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/services', function(){
    return view('services');
});

// Redirect route
Route::redirect('/services', '/contact-us');