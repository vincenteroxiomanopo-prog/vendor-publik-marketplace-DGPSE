<?php

use Illuminate\Support\Facades\Route;

// Halaman Beranda Utama
Route::get('/', function () {
    return view('index');
});

// Halaman Login
Route::get('/login', function () {
    return view('login');
});

// Halaman Detail Vendor
Route::get('/detail', function () {
    return view('detail');
});

// ----------------------------------------------------
// ROUTES UNTUK DASHBOARD YANG BARU
// ----------------------------------------------------

// Mengarah ke folder: resources/views/public/dashboard.blade.php
Route::get('/dashboard-publik', function () {
    return view('public.dashboard');
});

// Mengarah ke folder: resources/views/vendor/dashboard.blade.php
Route::get('/dashboard-vendor', function () {
    return view('vendor.dashboard');
});