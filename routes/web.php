<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentangkami', function () {
    return view('tentang');
});

Route::get('/layanankami', function () {
    return view('layanan');
});

Route::get('/artikel', function () {
    return view('artikel');
});