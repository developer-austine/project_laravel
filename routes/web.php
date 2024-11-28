<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

//assignment one of loading the contact page
Route::get('/contact', function() {
    return view('contact');
});

