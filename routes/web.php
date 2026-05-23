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

// Dashboard Publik (Pelanggan)
Route::get('/dashboard-publik', function () {
    return view('public.dashboard');
});

// Dashboard Vendor
Route::get('/dashboard-vendor', function () {
    return view('vendor.dashboard');
});

// Halaman Booking / Checkout (MVP Escrow)
Route::get('/booking', function () {
    return view('booking');
});

// Halaman Chat
Route::get('/chat-center', function () {
    return view('chat');
});

// ─── Rute Publik / Pelanggan ──────────────────────────────

Route::get('/public/favorites', function () {
    return view('public.favorites');
});

Route::get('/public/profile', function () {
    return view('public.profile');
});

// Form rating (dipanggil dari tombol "Selesai & Rating")
Route::get('/public/rating', function () {
    return view('public.rating');
});

// Halaman daftar semua rating yang pernah diberikan pengguna
Route::get('/public/my-ratings', function () {
    return view('public.my-ratings');
});

// ─── Rute Vendor ──────────────────────────────────────────

Route::get('/vendor/products', function () {
    return view('vendor.products');
});

Route::get('/vendor/products/create', function () {
    return view('vendor.create-product');
});

Route::get('/vendor/orders', function () {
    return view('vendor.orders');
});

Route::get('/vendor/schedule', function () {
    return view('vendor.schedule');
});

Route::get('/vendor/revenue', function () {
    return view('vendor.revenue');
});

// Halaman history penjualan & rating yang masuk ke vendor
Route::get('/vendor/rating', function () {
    return view('vendor.rating');
});