@extends('layouts.public')

@section('public_content')
<div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 mb-6">
    <h3 class="text-lg font-bold text-gray-900 mb-0.5">Rating yang Pernah Saya Berikan</h3>
    <p class="text-xs text-gray-500">Riwayat seluruh ulasan yang telah Anda kirimkan untuk vendor.</p>
</div>

{{-- Ringkasan 3 kartu --}}
<div class="grid grid-cols-3 gap-4 mb-6">
    <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm text-center">
        <p class="text-2xl font-black text-gray-900">1</p>
        <p class="text-[10px] font-bold text-gray-400 uppercase mt-1">Total Rating</p>
    </div>
    <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm text-center">
        <p class="text-2xl font-black text-amber-500">5.0</p>
        <p class="text-[10px] font-bold text-gray-400 uppercase mt-1">Rata-rata Bintang</p>
    </div>
    <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm text-center">
        <p class="text-2xl font-black text-blue-600">1</p>
        <p class="text-[10px] font-bold text-gray-400 uppercase mt-1">Menunggu Rating</p>
    </div>
</div>

{{-- Daftar ulasan yang sudah diberikan --}}
<div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden mb-6">
    <div class="p-4 border-b border-gray-100">
        <h3 class="font-bold text-sm text-gray-900">Ulasan Saya</h3>
    </div>
    <div class="divide-y divide-gray-50">
        <div class="p-5 flex items-start space-x-4">
            <div class="w-10 h-10 bg-emerald-600 rounded-full flex items-center justify-center font-bold text-white text-sm shrink-0">TC</div>
            <div class="flex-grow">
                <div class="flex justify-between items-start">
                    <div>
                        <h4 class="font-bold text-sm text-gray-900">Toyib Catering & Prasmanan</h4>
                        <p class="text-[10px] text-gray-400 mt-0.5">ID #ORD-99000 &nbsp;·&nbsp; 05 Januari 2026</p>
                    </div>
                    <div class="flex text-amber-400 text-sm space-x-0.5">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="text-xs font-bold text-gray-700 ml-1">5.0</span>
                    </div>
                </div>
                <p class="text-xs text-gray-600 mt-2 bg-gray-50 p-3 rounded-xl border border-gray-100 leading-relaxed">
                    "Pelayanan sangat memuaskan! Makanan datang tepat waktu dan porsinya sesuai. Sambal yang dipisah juga sangat membantu karena ada anak kecil di acara kami. Highly recommended!"
                </p>
            </div>
        </div>
    </div>
</div>

{{-- Pesanan yang belum dirating --}}
<div class="bg-white rounded-2xl border border-amber-100 shadow-sm overflow-hidden">
    <div class="p-4 border-b border-amber-50 bg-amber-50/50 flex justify-between items-center">
        <h3 class="font-bold text-sm text-gray-900">
            <i class="fa-solid fa-clock text-amber-500 mr-1.5"></i> Menunggu Rating Anda
        </h3>
        <span class="bg-amber-100 text-amber-700 text-[10px] font-bold px-2 py-0.5 rounded-full">1 pesanan</span>
    </div>
    <div class="p-5 flex items-center justify-between space-x-4">
        <div class="flex items-center space-x-4">
            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center font-bold text-white text-sm shrink-0">PS</div>
            <div>
                <h4 class="font-bold text-sm text-gray-900">ProSound Stage Jogja</h4>
                <p class="text-[10px] text-gray-400 mt-0.5">ID #ORD-99100 &nbsp;·&nbsp; 12 Februari 2026 &nbsp;·&nbsp; Rp 1.500.000</p>
            </div>
        </div>
        <a href="/public/rating?vendor=ProSound Stage Jogja&order=ORD-99100&total=1.500.000"
           class="inline-flex items-center space-x-1.5 bg-amber-500 hover:bg-amber-600 text-white text-xs font-bold px-4 py-2 rounded-xl transition shadow-sm shrink-0">
            <i class="fa-solid fa-star"></i>
            <span>Selesai & Rating</span>
        </a>
    </div>
</div>
@endsection