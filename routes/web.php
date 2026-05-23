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

// Halaman Booking / Checkout (MVP Escrow)
Route::get('/booking', function () {
    return view('booking');
});
// Halaman Pusat Chat Interaktif (Publik <-> Vendor)
Route::get('/chat-center', function () {
    return view('chat');
});

// Rute Vendor Dashboard
Route::get('/dashboard-vendor', function () { return view('vendor.dashboard'); });
Route::get('/vendor/products', function () { return view('vendor.products'); });
Route::get('/vendor/products/create', function () { return view('vendor.create-product'); });
Route::get('/vendor/orders', function () { return view('vendor.orders'); });
Route::get('/vendor/schedule', function () { return view('vendor.schedule'); });
Route::get('/vendor/revenue', function () { return view('vendor.revenue'); });

Route::get('/public/favorites', function () {
    return view('public.favorites');
});

Route::get('/public/profile', function () {
    return view('public.profile');
});