@extends('layouts.vendor')
@section('title', 'Dashboard Overview')

@section('vendor_content')
<div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-xs flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
    <div>
        <h2 class="text-xl font-bold text-gray-900">Selamat Datang Kembali, Mitra Toyib!</h2>
        <p class="text-xs text-gray-500 mt-0.5">Berikut adalah ringkasan performa bisnis dan pesanan terbaru Anda hari ini.</p>
    </div>
    {{-- <a href="/vendor/products/create" class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow-xs transition flex items-center space-x-2">
        <i class="fa-solid fa-plus"></i> <span>Add New Product</span>
    </a> --}}
</div>

<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-6">
    <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-xs flex flex-col justify-between">
        <div class="text-gray-400 text-[10px] font-bold uppercase mb-2">Total Revenue (Selesai Acara)</div>
        <div class="text-2xl font-black text-gray-900">Rp 8.750.000</div>
        <div class="mt-2 text-[10px] font-semibold text-emerald-600 bg-emerald-50 self-start px-2 py-1 rounded">
            <i class="fa-solid fa-arrow-up mr-1"></i> +12% dari bulan lalu
        </div>
    </div>
    <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-xs flex flex-col justify-between">
        <div class="text-gray-400 text-[10px] font-bold uppercase mb-2">Pending Escrow (Dana Aman)</div>
        <div class="text-2xl font-black text-blue-600">Rp 3.200.000</div>
        <div class="mt-2 text-[10px] font-semibold text-gray-500">
            Dari 2 pesanan yang belum terlaksana
        </div>
    </div>
    <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-xs flex flex-col justify-between">
        <div class="text-gray-400 text-[10px] font-bold uppercase mb-2">Rating Kepuasan Pelanggan</div>
        <div class="text-2xl font-black text-amber-500 flex items-center">
            <i class="fa-solid fa-star mr-2"></i> 4.8
        </div>
        <div class="mt-2 text-[10px] font-semibold text-gray-500">
            Berdasarkan 124 Ulasan
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
    
    <div class="lg:col-span-1 bg-white p-6 rounded-2xl border border-gray-200 shadow-xs">
        <h3 class="font-bold text-gray-900 mb-4 text-sm uppercase tracking-wide border-b border-gray-100 pb-2">Tugas Perlu Tindakan</h3>
        <ul class="space-y-3">
            <li class="flex items-center justify-between p-3 bg-amber-50 rounded-xl border border-amber-100">
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-bell text-amber-500"></i>
                    <div>
                        <span class="text-xs font-bold text-amber-900 block">1 Pesanan Baru</span>
                        <span class="text-[10px] text-amber-700">Menunggu Konfirmasi</span>
                    </div>
                </div>
                <a href="/vendor/orders?role=vendor" class="text-[10px] bg-amber-500 hover:bg-amber-600 text-white px-3 py-1.5 rounded-lg font-bold transition">Proses</a>
            </li>
            <li class="flex items-center justify-between p-3 bg-blue-50 rounded-xl border border-blue-100">
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-message text-blue-500"></i>
                    <div>
                        <span class="text-xs font-bold text-blue-900 block">1 Pesan Masuk</span>
                        <span class="text-[10px] text-blue-700">Dari Budi Santoso</span>
                    </div>
                </div>
                <a href="/chat-center?role=vendor" class="text-[10px] bg-blue-600 hover:bg-blue-700 text-white px-3 py-1.5 rounded-lg font-bold transition">Balas</a>
            </li>
        </ul>
    </div>

    <div class="lg:col-span-2 bg-white p-6 rounded-2xl border border-gray-200 shadow-xs flex flex-col justify-between">
        <div class="flex justify-between items-center mb-4 border-b border-gray-100 pb-2">
            <h3 class="font-bold text-gray-900 text-sm uppercase tracking-wide">Tren Pendapatan Bulan Ini</h3>
            <span class="text-xs font-semibold text-gray-500 bg-gray-100 px-2 py-1 rounded">Mei 2026</span>
        </div>
        <div class="h-32 bg-gray-50 rounded-xl flex items-center justify-center border border-dashed border-gray-300">
            <div class="text-center text-gray-400">
                <i class="fa-solid fa-chart-simple text-3xl mb-2"></i>
                <p class="text-xs font-semibold">Area Visualisasi Grafik (Chart.js)</p>
            </div>
        </div>
    </div>

</div>

<div class="mt-6 bg-white rounded-2xl border border-gray-200 shadow-xs overflow-hidden">
    <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
        <h3 class="font-bold text-sm text-gray-900">Pesanan Masuk Terbaru</h3>
        <a href="/vendor/orders" class="text-[10px] font-bold text-blue-600 hover:underline bg-white border border-gray-200 px-3 py-1 rounded-full shadow-sm">Lihat Semua Data</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="bg-gray-50 text-gray-500 font-bold uppercase tracking-wider">
                <tr>
                    <th class="px-5 py-3">Nama Pelanggan</th>
                    <th class="px-5 py-3">Layanan / Produk</th>
                    <th class="px-5 py-3">Tanggal Acara</th>
                    <th class="px-5 py-3">Nilai Transaksi</th>
                    <th class="px-5 py-3">Status Pemesanan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 font-medium">
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="px-5 py-4 text-gray-900 font-bold">Budi Santoso</td>
                    <td class="px-5 py-4 text-gray-600">Paket Box Ayam Geprek (50 Box)</td>
                    <td class="px-5 py-4 text-gray-600">24 Mei 2026</td>
                    <td class="px-5 py-4 text-gray-900 font-bold">Rp 750.000</td>
                    <td class="px-5 py-4">
                        <span class="bg-amber-100 text-amber-700 text-[10px] font-bold px-2.5 py-1 rounded border border-amber-200">MENUNGGU KONFIRMASI</span>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="px-5 py-4 text-gray-900 font-bold">Siti Aminah</td>
                    <td class="px-5 py-4 text-gray-600">Paket Prasmanan Sederhana (100 Pax)</td>
                    <td class="px-5 py-4 text-gray-600">28 Mei 2026</td>
                    <td class="px-5 py-4 text-gray-900 font-bold">Rp 3.500.000</td>
                    <td class="px-5 py-4">
                        <span class="bg-blue-50 text-blue-700 text-[10px] font-bold px-2.5 py-1 rounded border border-blue-200">DANA DIAMANKAN (ESCROW)</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection