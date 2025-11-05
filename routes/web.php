<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/wisata', function () {
    return view('wisata');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/paket', function () {
    return view('paket');
});

Route::get('/login', function () {
    return view('login');
});