@extends('layouts.app')

@section('title', 'Toyib Catering & Geprek - Detail Vendor')

@section('content')
@php
    $isLoggedIn = request()->query('role');
@endphp

<div class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 text-xs text-gray-500 flex items-center space-x-2">
        <a href="/" class="hover:text-blue-600 transition">Beranda</a>
        <i class="fa-solid fa-chevron-right text-[8px]"></i>
        <a href="#" class="hover:text-blue-600 transition">Yogyakarta</a>
        <i class="fa-solid fa-chevron-right text-[8px]"></i>
        <span class="text-gray-800 font-medium">Toyib Catering & Geprek</span>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-6 grid grid-cols-1 md:grid-cols-3 gap-6 items-start">
        <div class="md:col-span-2">
            <h1 class="text-2xl md:text-3xl font-extrabold text-gray-900">Toyib Catering & Geprek - Spesialis Event & Acara Publik</h1>
            <div class="mt-2 flex flex-wrap items-center gap-4 text-xs text-gray-600">
                <span class="flex items-center text-amber-600 font-semibold">
                    <i class="fa-solid fa-star mr-1"></i> 4.8 (124 Ulasan Pelanggan)
                </span>
                <span class="flex items-center">
                    <i class="fa-solid fa-location-dot mr-1 text-gray-400"></i> Gondokusuman, Kota Yogyakarta
                </span>
                <span class="bg-emerald-50 text-emerald-700 font-semibold px-2 py-0.5 rounded-md flex items-center">
                    <i class="fa-solid fa-user-check text-[10px] mr-1"></i> Terverifikasi e-KYC
                </span>
            </div>
        </div>
        <div class="text-left md:text-right flex flex-col justify-end h-full">
            <span class="text-xs text-gray-400 uppercase tracking-wider block">Harga Paket Mulai</span>
            <span class="text-2xl font-black text-blue-600">Rp 15.000 <span class="text-xs font-normal text-gray-500">/ porsi</span></span>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
    
    <div class="lg:col-span-2 space-y-8">
        
        <section id="overview" class="bg-white p-6 rounded-2xl border border-gray-200 shadow-xs pt-20 -mt-20">
            <h3 class="text-lg font-bold text-gray-900 mb-3">Deskripsi Vendor</h3>
            <p class="text-sm text-gray-600 leading-relaxed">
                Toyib Catering merupakan UMKM lokal kuliner yang berfokus melayani kebutuhan konsumsi skala besar maupun kecil untuk berbagai kegiatan publik, seperti acara keluarga, gathering perusahaan, pesta ulang tahun, pernikahan, hingga seminar umum.
            </p>
        </section>

        <section id="paket" class="space-y-4 pt-20 -mt-20">
            <h3 class="text-lg font-bold text-gray-900">Pilihan Paket Tersedia</h3>
            
            <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-xs flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <span class="bg-blue-50 text-blue-700 text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded">Best Seller</span>
                    <h4 class="font-bold text-sm text-gray-900 mt-1">Paket Box Ayam Geprek + Es Teh</h4>
                    <p class="text-xs text-gray-500 mt-1">Nasi putih, Ayam geprek krispi, Es teh manis, kerupuk. Cocok untuk konsumsi panitia atau acara santai.</p>
                </div>
                <div class="flex flex-col items-start sm:items-end w-full sm:w-auto border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                    <span class="text-base font-extrabold text-red-500">Rp 15.000 <span class="text-[10px] text-gray-400 font-normal">/ box</span></span>
                    
                    @if($isLoggedIn)
                        <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-4 py-2 rounded-xl mt-2 transition shadow-xs w-full sm:w-auto">Pilih Paket</button>
                    @else
                        <a href="/login" class="bg-gray-100 hover:bg-gray-200 text-gray-600 border border-gray-200 text-xs font-bold px-4 py-2 rounded-xl mt-2 transition text-center w-full sm:w-auto"><i class="fa-solid fa-lock mr-1"></i> Login</a>
                    @endif

                </div>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-xs flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <span class="bg-purple-50 text-purple-700 text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded">Acara Formal & Gathering</span>
                    <h4 class="font-bold text-sm text-gray-900 mt-1">Paket Prasmanan Sederhana (Buffet)</h4>
                    <p class="text-xs text-gray-500 mt-1">Nasi, pilihan lauk utama, sayur sup, buah potong, air mineral, teh hangat. Termasuk pramusaji di lokasi.</p>
                </div>
                <div class="flex flex-col items-start sm:items-end w-full sm:w-auto border-t sm:border-t-0 pt-3 sm:pt-0 border-gray-100">
                    <span class="text-base font-extrabold text-red-500">Rp 35.000 <span class="text-[10px] text-gray-400 font-normal">/ pax</span></span>
                    
                    @if($isLoggedIn)
                        <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-4 py-2 rounded-xl mt-2 transition shadow-xs w-full sm:w-auto">Pilih Paket</button>
                    @else
                        <a href="/login" class="bg-gray-100 hover:bg-gray-200 text-gray-600 border border-gray-200 text-xs font-bold px-4 py-2 rounded-xl mt-2 transition text-center w-full sm:w-auto"><i class="fa-solid fa-lock mr-1"></i> Login</a>
                    @endif

                </div>
            </div>
        </section>

        <section id="lokasi" class="bg-white p-6 rounded-2xl border border-gray-200 shadow-xs pt-20 -mt-20">
            <h3 class="text-lg font-bold text-gray-900 mb-3">Jangkauan Pengiriman Alat & Logistik</h3>
            <div class="bg-gray-100 h-48 rounded-xl flex items-center justify-center text-gray-400 text-sm border border-gray-200 mb-4">
                <span class="flex items-center space-x-2">
                    <i class="fa-solid fa-map-location-dot text-xl"></i> 
                    <span>Google Maps API Placeholder (Radius Bebas Ongkir 5 Km)</span>
                </span>
            </div>
        </section>

    </div>

    <div class="lg:col-span-1">
        <div class="sticky top-24 space-y-6">
            
            <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm">
                <h4 class="font-bold text-sm text-gray-900 uppercase tracking-wide border-b border-gray-100 pb-3 mb-3">Navigasi Halaman</h4>
                <nav class="flex flex-col space-y-1 text-sm font-semibold">
                    <a href="#overview" class="py-2.5 px-4 text-blue-700 bg-blue-50 rounded-xl">Overview</a>
                    <a href="#paket" class="py-2.5 px-4 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-xl transition">Kategori & Paket Jasa</a>
                    <a href="#lokasi" class="py-2.5 px-4 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-xl transition">Jangkauan Logistik</a>
                </nav>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-md space-y-4">
                <h4 class="font-bold text-sm text-gray-900 uppercase tracking-wide border-b border-gray-100 pb-2">Informasi Pemesanan</h4>
                <div class="text-xs text-gray-600 space-y-2">
                    <div class="flex justify-between">
                        <span>Status Ketersediaan</span>
                        <span class="text-emerald-600 font-bold flex items-center">
                            <i class="fa-solid fa-circle text-[6px] mr-1.5 animate-pulse"></i> Tersedia Hari Ini
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <span>Minimal Order</span>
                        <span class="font-semibold text-gray-900">20 Pax / Box</span>
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-100">
                    
                    @if($isLoggedIn)
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-xl text-sm shadow-md transition flex items-center justify-center space-x-2">
                            <i class="fa-solid fa-wallet"></i>
                            <span>Pesan Vendor (Mulai Transaksi)</span>
                        </button>
                        <p class="text-[10px] text-gray-400 text-center mt-2">Dengan mengklik tombol, dana Anda aman dilindungi sistem penjaminan escrow pihak ketiga.</p>
                    @else
                        <a href="/login" class="w-full bg-gray-100 hover:bg-gray-200 text-gray-600 border border-gray-200 font-bold py-3 px-4 rounded-xl text-sm transition flex items-center justify-center space-x-2 text-center">
                            <i class="fa-solid fa-lock"></i>
                            <span>Login untuk Memesan</span>
                        </a>
                        <p class="text-[10px] text-red-500 font-medium text-center mt-2">Anda harus masuk ke akun untuk dapat melakukan pemesanan.</p>
                    @endif

                </div>
            </div>

        </div>
    </div>

</div>
@endsection