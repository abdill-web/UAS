<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HubungiKamiController;

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

Route::get('/hubungi-kami', function () {
    return view('hubungi-kami');
})->name('hubungi-kami.form');

Route::post('/hubungi-kami', [HubungiKamiController::class, 'store'])->name('hubungi-kami.store');
