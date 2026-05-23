@extends('layouts.public')

@section('public_content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6">
    <h3 class="text-lg font-bold text-gray-900 mb-1">Vendor Favorit Saya</h3>
    <p class="text-xs text-gray-500">Daftar penyedia jasa yang Anda simpan untuk kemudahan pemesanan.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <a href="/detail?role=publik" class="block bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition group relative">
        <div class="h-32 bg-gray-200 relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=600&q=80" alt="Catering" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <button class="absolute top-2 right-2 w-8 h-8 bg-white/90 backdrop-blur-xs rounded-full flex items-center justify-center text-red-500 hover:bg-red-50 transition shadow-sm z-10">
                <i class="fa-solid fa-heart text-sm"></i>
            </button>
        </div>
        <div class="p-4">
            <h4 class="font-bold text-sm text-gray-900 truncate">Toyib Catering & Geprek</h4>
            <p class="text-[11px] text-gray-500 flex items-center mt-1"><i class="fa-solid fa-location-dot mr-1"></i> Gondokusuman, Yogyakarta</p>
        </div>
    </a>
</div>
@endsection