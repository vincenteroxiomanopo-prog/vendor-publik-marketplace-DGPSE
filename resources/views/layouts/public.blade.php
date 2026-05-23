@extends('layouts.app')

@section('title', 'Dashboard Pelanggan')

@section('content')
<div class="bg-blue-600 pb-24 pt-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div>
            <h2 class="font-bold text-white text-2xl">Selamat Datang, Vincente Roxio Manopo!</h2>
            <p class="text-blue-100 text-sm mt-1">Kelola pesanan, pesan layanan, dan temukan vendor terbaik untuk acaramu.</p>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 pb-12 grid grid-cols-1 lg:grid-cols-4 gap-6">
    
    <div class="lg:col-span-1">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 space-y-1 sticky top-24">
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider px-3 mb-2">Menu Akun</p>
            
            <a href="/?role=publik" class="flex items-center space-x-3 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600 px-3 py-2.5 rounded-xl transition">
                <i class="fa-solid fa-compass w-5 text-center"></i> 
                <span>Explore Vendors</span>
            </a>
            
            <a href="/dashboard-publik" class="flex items-center space-x-3 text-sm px-3 py-2.5 rounded-xl transition {{ request()->is('dashboard-publik') ? 'bg-blue-50 text-blue-700 font-semibold' : 'font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}">
                <i class="fa-solid fa-receipt w-5 text-center"></i> 
                <span>Bookings / Orders</span>
            </a>
            
            <a href="/public/favorites" class="flex items-center space-x-3 text-sm px-3 py-2.5 rounded-xl transition {{ request()->is('public/favorite*') ? 'bg-blue-50 text-blue-700 font-semibold' : 'font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}">
                <i class="fa-solid fa-heart w-5 text-center"></i> 
                <span>Favorites</span>
            </a>
            
            <a href="/chat-center?role=publik" class="flex items-center justify-between text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600 px-3 py-2.5 rounded-xl transition">
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-comments w-5 text-center"></i> 
                    <span>Chat</span>
                </div>
                <span class="bg-red-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow-sm">2</span>
            </a>
            
            <a href="/public/profile" class="flex items-center space-x-3 text-sm px-3 py-2.5 rounded-xl transition {{ request()->is('public/profile*') ? 'bg-blue-50 text-blue-700 font-semibold' : 'font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}">
                <i class="fa-solid fa-user-gear w-5 text-center"></i> 
                <span>Profile</span>
            </a>
            
            <hr class="my-2 border-gray-100">
            
            <a href="/" class="flex items-center space-x-3 text-sm font-medium text-red-600 hover:bg-red-50 px-3 py-2.5 rounded-xl transition">
                <i class="fa-solid fa-arrow-right-from-bracket w-5 text-center"></i> 
                <span>Keluar</span>
            </a>
        </div>
    </div>

    <div class="lg:col-span-3 space-y-6">
        @yield('public_content')
    </div>

</div>
@endsection