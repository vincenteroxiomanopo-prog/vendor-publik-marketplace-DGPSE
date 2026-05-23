@extends('layouts.vendor')
@section('title', 'Jadwal & Ketersediaan')

@section('vendor_content')
<div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-xs">
    <h2 class="text-lg font-bold text-gray-900 mb-4">Kalender Acara Publik (Booked)</h2>
    <div class="border border-blue-100 bg-blue-50/50 p-4 rounded-xl flex items-center space-x-4 mb-4">
        <div class="bg-blue-600 text-white w-12 h-12 rounded-lg flex flex-col items-center justify-center">
            <span class="text-[10px] font-bold uppercase">Mei</span>
            <span class="text-lg font-black leading-none">24</span>
        </div>
        <div>
            <h4 class="font-bold text-sm text-gray-900">Syukuran Arisan Keluarga (Siti Aminah)</h4>
            <p class="text-xs text-gray-500 mt-0.5">Pengiriman: 10:00 WIB | 50 Box Ayam Geprek</p>
        </div>
    </div>
</div>
@endsection