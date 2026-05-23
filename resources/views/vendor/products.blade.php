@extends('layouts.vendor')
@section('title', 'My Products')

@section('vendor_content')
<div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-xs flex justify-between items-center mb-6">
    <h2 class="text-xl font-bold text-gray-900">Daftar Paket & Layanan Anda</h2>
    <a href="/vendor/products/create" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow-xs transition"><i class="fa-solid fa-plus"></i> Tambah</a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="border border-gray-200 rounded-xl p-4 flex gap-4 bg-white shadow-sm">
        <div class="w-24 h-24 bg-gray-200 rounded-lg overflow-hidden shrink-0">
            <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=200" alt="Food" class="w-full h-full object-cover">
        </div>
        <div class="flex-grow">
            <h3 class="font-bold text-sm text-gray-900">Paket Prasmanan Sederhana</h3>
            <p class="text-xs text-gray-500 mt-1">Catering / Konsumsi</p>
            <p class="font-bold text-red-500 text-sm mt-2">Rp 35.000 <span class="text-[10px] text-gray-400 font-normal">/ pax</span></p>
            <div class="mt-3 flex space-x-2">
                <button class="text-[10px] bg-blue-50 text-blue-600 px-3 py-1 rounded font-bold">Edit</button>
                <button class="text-[10px] bg-red-50 text-red-600 px-3 py-1 rounded font-bold">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endsection