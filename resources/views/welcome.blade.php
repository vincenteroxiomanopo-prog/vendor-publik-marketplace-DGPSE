@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="bg-gradient-to-r from-blue-600 to-blue-500 text-white pt-16 pb-32 relative px-4">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight">Hey there, mau bikin event apa saja?</h1>
        <p class="mt-2 text-blue-100 text-sm md:text-base">Platform terpusat untuk kebutuhan logistik acara kampus Anda.</p>
    </div>

    <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-xl border border-gray-100 p-6 text-gray-800 absolute left-4 right-4 bottom-0 transform translate-y-1/2 grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
            <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Kategori Jasa</label>
            <select class="w-full px-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                <option>Catering & Snack</option>
                <option>Penyewaan Alat</option>
            </select>
        </div>
        <div>
            <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Tanggal Event</label>
            <input type="date" class="w-full px-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
        <div>
            <label class="block text-xs font-bold text-gray-400 uppercase mb-1">Budget Maksimal</label>
            <input type="number" placeholder="Rp 0" class="w-full px-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
        <div class="flex items-end">
            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-xl text-sm transition">Cari Vendor</button>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 mt-44 mb-20">
    <div class="flex justify-between items-end mb-6">
        <div>
            <h3 class="text-xl font-bold text-gray-900">Rekomendasi Catering Terpopuler</h3>
        </div>
        <a href="#" class="text-xs font-bold text-blue-600 hover:underline">Lihat Semua</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition cursor-pointer">
            <div class="h-44 bg-gray-200">
                <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=600&q=80" alt="Catering" class="w-full h-full object-cover">
            </div>
            <div class="p-4">
                <h4 class="font-bold text-sm text-gray-900">Toyib Catering & Geprek</h4>
                <p class="text-xs text-gray-500 mt-1">Gondokusuman, Yogyakarta</p>
                <div class="mt-4 pt-3 border-t border-gray-100 flex justify-between items-center">
                    <span class="text-[10px] text-gray-400 uppercase font-semibold">Mulai dari</span>
                    <span class="text-sm font-bold text-red-500">Rp 15.000</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition cursor-pointer">
            <div class="h-44 bg-gray-200">
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=600&q=80" alt="Catering" class="w-full h-full object-cover">
            </div>
            <div class="p-4">
                <h4 class="font-bold text-sm text-gray-900">Kranggan Noodle Box</h4>
                <p class="text-xs text-gray-500 mt-1">Jetis, Yogyakarta</p>
                <div class="mt-4 pt-3 border-t border-gray-100 flex justify-between items-center">
                    <span class="text-[10px] text-gray-400 uppercase font-semibold">Mulai dari</span>
                    <span class="text-sm font-bold text-red-500">Rp 22.000</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection