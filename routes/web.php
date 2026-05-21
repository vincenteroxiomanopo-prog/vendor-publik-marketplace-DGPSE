<?php

use Illuminate\Support\Facades\Route;

// Halaman Beranda Utama (Marketplace)
Route::get('/', function () {
    return view('index'); // Menggunakan index.blade.php sebagai beranda utama
});

// Halaman Login
Route::get('/login', function () {
    return view('login');
});

// Halaman Detail Vendor
Route::get('/detail', function () {
    return view('detail');
});