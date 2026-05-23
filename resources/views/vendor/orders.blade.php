@extends('layouts.vendor')
@section('title', 'Daftar Pesanan Publik')

@section('vendor_content')
<div class="bg-white rounded-2xl border border-gray-200 shadow-xs overflow-hidden">
    <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50">
        <h3 class="font-bold text-sm text-gray-900">Semua Transaksi Masuk</h3>
        <input type="text" placeholder="Cari ID Pesanan..." class="px-3 py-1.5 border border-gray-300 rounded-lg text-xs">
    </div>
    <div class="p-6 text-center text-gray-500 text-sm">
        <i class="fa-solid fa-receipt text-3xl text-gray-300 mb-3 block"></i>
        Tabel daftar semua pesanan publik akan ditampilkan penuh di sini (Gunakan tabel dari Dashboard Utama).
    </div>
</div>
@endsection