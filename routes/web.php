<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name= '<h1>ahmed</h1>';
    return view('index', compact('name'));
})->name('index');

Route::get('/admin/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



//middleware
//group
//prefix


//put
//patch/
//delete
//options

