@extends('layouts.app')

@section('title', 'Cari Jasa Vendor Acara Terbaik')

@section('content')
<div class="bg-gradient-to-r from-blue-600 to-blue-500 text-white pt-16 pb-32 relative px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight">Hey there, mau bikin acara apa hari ini?</h1>
        <p class="mt-2 text-blue-100 text-sm md:text-base">Satu platform untuk segala kebutuhan pernikahan, ulang tahun, gathering, hingga pesta besar.</p>
    </div>

    <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-xl border border-gray-100 p-6 text-gray-800 absolute left-4 right-4 bottom-0 transform translate-y-1/2 grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wide mb-1">Kategori Jasa</label>
            <div class="relative">
                <i class="fa-solid fa-list-check absolute left-3 top-3.5 text-gray-400 text-sm"></i>
                <select class="w-full pl-9 pr-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option>Pilih Kategori...</option>
                    <option>Catering & Prasmanan</option>
                    <option>Penyewaan Alat & Sound System</option>
                    <option>Dokumentasi (Foto & Video)</option>
                    <option>Dekorasi & Venue Acara</option>
                </select>
            </div>
        </div>
        <div>
            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wide mb-1">Tanggal Acara</label>
            <div class="relative">
                <i class="fa-solid fa-calendar-days absolute left-3 top-3.5 text-gray-400 text-sm"></i>
                <input type="date" class="w-full pl-9 pr-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
        </div>
        <div>
            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wide mb-1">Estimasi Anggaran Maksimal</label>
            <div class="relative">
                <i class="fa-solid fa-money-bill-wave absolute left-3 top-3.5 text-gray-400 text-sm"></i>
                <input type="number" placeholder="Rp 0" class="w-full pl-9 pr-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
        </div>
        <div class="flex items-end">
            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-xl text-sm shadow-md transition flex items-center justify-center space-x-2">
                <i class="fa-solid fa-magnifying-glass"></i>
                <span>Cari Vendor</span>
            </button>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-44 mb-20">
    <div class="mb-12">
        <div class="flex justify-between items-end mb-6">
            <div>
                <h3 class="text-xl font-bold text-gray-900">Rekomendasi Catering & Prasmanan Terpopuler</h3>
                <p class="text-xs text-gray-500">Pilihan paket kuliner terbaik untuk pesta keluarga, gathering perusahaan, maupun syukuran.</p>
            </div>
            <a href="#" class="text-xs font-bold text-blue-600 hover:underline">Lihat Semua <i class="fa-solid fa-chevron-right text-[10px]"></i></a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <a href="/detail" class="block bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition group cursor-pointer">
                <div class="h-44 bg-gray-200 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=600&q=80" alt="Catering" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-2 right-2 bg-white/90 backdrop-blur-xs text-xs font-bold text-gray-800 px-2 py-0.5 rounded-full flex items-center space-x-1">
                        <i class="fa-solid fa-star text-amber-500 text-[10px]"></i> <span>4.8</span>
                    </span>
                </div>
                <div class="p-4">
                    <h4 class="font-bold text-sm text-gray-900 group-hover:text-blue-600 transition truncate">Toyib Catering & Prasmanan</h4>
                    <p class="text-xs text-gray-500 flex items-center mt-1"><i class="fa-solid fa-location-dot mr-1"></i> Gondokusuman, Yogyakarta</p>
                    <div class="mt-4 pt-3 border-t border-gray-100 flex justify-between items-center">
                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Mulai dari</span>
                        <span class="text-sm font-bold text-red-500">Rp 15.000 <span class="text-[10px] font-normal text-gray-500">/ porsi</span></span>
                    </div>
                </div>
            </a>

            <a href="/detail" class="block bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition group cursor-pointer">
                <div class="h-44 bg-gray-200 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=600&q=80" alt="Catering" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-2 right-2 bg-white/90 backdrop-blur-xs text-xs font-bold text-gray-800 px-2 py-0.5 rounded-full flex items-center space-x-1">
                        <i class="fa-solid fa-star text-amber-500 text-[10px]"></i> <span>4.6</span>
                    </span>
                </div>
                <div class="p-4">
                    <h4 class="font-bold text-sm text-gray-900 group-hover:text-blue-600 transition truncate">Kranggan Culinary Box</h4>
                    <p class="text-xs text-gray-500 flex items-center mt-1"><i class="fa-solid fa-location-dot mr-1"></i> Jetis, Yogyakarta</p>
                    <div class="mt-4 pt-3 border-t border-gray-100 flex justify-between items-center">
                        <span class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">Mulai dari</span>
                        <span class="text-sm font-bold text-red-500">Rp 22.000 <span class="text-[10px] font-normal text-gray-500">/ box</span></span>
                    </div>
                </div>
            </a>

        </div>
    </div>
</div>
@endsection