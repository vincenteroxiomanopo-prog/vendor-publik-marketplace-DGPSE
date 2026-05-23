@extends('layouts.public')

@section('public_content')
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
    <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex items-center space-x-3">
        <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center"><i class="fa-solid fa-calendar-check"></i></div>
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase">Acara Mendatang</p>
            <p class="text-lg font-black text-gray-900">1</p>
        </div>
    </div>
    <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex items-center space-x-3">
        <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-full flex items-center justify-center"><i class="fa-solid fa-shield-halved"></i></div>
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase">Transaksi Aman</p>
            <p class="text-lg font-black text-gray-900">12</p>
        </div>
    </div>
    <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex items-center space-x-3">
        <div class="w-10 h-10 bg-amber-50 text-amber-500 rounded-full flex items-center justify-center"><i class="fa-solid fa-star"></i></div>
        <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase">Rating Diberikan</p>
            <p class="text-lg font-black text-gray-900">1</p>
        </div>
    </div>
</div>

{{-- Pesanan Aktif --}}
<div class="bg-white border border-gray-200 shadow-sm rounded-2xl overflow-hidden mb-6">
    <div class="bg-blue-50/50 p-4 border-b border-gray-100 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded uppercase">Pesanan Aktif</span>
            <span class="text-xs font-semibold text-gray-500">ID: #ORD-99210</span>
        </div>
        <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full border border-emerald-100">
            <i class="fa-solid fa-lock mr-1"></i> Dana Escrow Diamankan
        </span>
    </div>
    <div class="p-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
        <div class="flex items-start space-x-4">
            <div class="bg-blue-100 text-blue-600 p-3 rounded-xl shrink-0">
                <i class="fa-solid fa-truck-fast text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold text-gray-900 mb-1">Paket Box Ayam Geprek (50 Box)</h3>
                <p class="text-xs text-gray-500">Vendor: <a href="#" class="font-semibold text-blue-600 hover:underline">Toyib Catering</a></p>
                <p class="text-xs text-gray-500 mt-1"><i class="fa-regular fa-calendar text-gray-400 w-4"></i> Acara: 24 Mei 2026, 10:00 WIB</p>
            </div>
        </div>
        <div class="w-full md:w-1/3">
            <div class="flex justify-between text-[10px] font-bold mb-1">
                <span class="text-blue-600">Diproses</span>
                <span class="text-gray-400">Selesai</span>
            </div>
            <div class="w-full bg-gray-100 rounded-full h-2">
                <div class="bg-blue-600 h-2 rounded-full w-1/2"></div>
            </div>
            <p class="text-[10px] text-gray-400 mt-1 text-right">Menunggu pengiriman logistik</p>
        </div>
        <button class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-5 py-2.5 rounded-xl text-sm font-semibold shadow-xs w-full md:w-auto transition">
            Lacak Detail
        </button>
    </div>
</div>

{{-- Form Cari Vendor --}}
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6">
    <h3 class="text-lg font-bold text-gray-900 mb-1">Cari Tambahan Vendor Lain?</h3>
    <p class="text-xs text-gray-500 mb-5">Temukan kebutuhan logistik lainnya untuk melengkapi acara Anda.</p>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
            <select class="w-full px-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>Pilih Kategori...</option>
                <option>Konsumsi</option>
                <option>Audio Visual</option>
                <option>Dokumentasi</option>
                <option>Dekorasi & Properti</option>
            </select>
        </div>
        <div>
            <input type="date" class="w-full px-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <input type="number" placeholder="Budget Maksimal" class="w-full px-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <button class="w-full bg-gray-900 hover:bg-gray-800 transition text-white font-semibold py-2.5 px-4 rounded-xl text-sm shadow-sm">
                <i class="fa-solid fa-magnifying-glass mr-1.5"></i> Cari
            </button>
        </div>
    </div>
</div>

{{-- Tabel Riwayat Booking + Tombol Rating --}}
<div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
    <div class="p-4 border-b border-gray-100 flex justify-between items-center">
        <h3 class="font-bold text-sm text-gray-900">Riwayat Booking Terakhir</h3>
        <a href="#" class="text-[10px] font-bold text-blue-600 hover:underline">Lihat Semua</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="bg-gray-50 text-gray-500 font-bold uppercase tracking-wider">
                <tr>
                    <th class="px-5 py-3">Vendor / Layanan</th>
                    <th class="px-5 py-3">Tanggal Acara</th>
                    <th class="px-5 py-3">Total</th>
                    <th class="px-5 py-3">Status</th>
                    <th class="px-5 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 font-medium">

                {{-- Masih diproses: tidak ada tombol rating --}}
                <tr>
                    <td class="px-5 py-4">Toyib Catering</td>
                    <td class="px-5 py-4 text-gray-600">20 Mei 2026</td>
                    <td class="px-5 py-4 text-gray-900 font-bold">Rp 3.500.000</td>
                    <td class="px-5 py-4">
                        <span class="bg-blue-50 text-blue-700 text-[10px] font-bold px-2 py-1 rounded border border-blue-100">DIPROSES</span>
                    </td>
                    <td class="px-5 py-4 text-gray-400 text-[10px] italic">—</td>
                </tr>

                {{-- Selesai tapi belum dirating: tampilkan tombol --}}
                <tr>
                    <td class="px-5 py-4">ProSound Stage Jogja</td>
                    <td class="px-5 py-4 text-gray-600">12 Feb 2026</td>
                    <td class="px-5 py-4 text-gray-900 font-bold">Rp 1.500.000</td>
                    <td class="px-5 py-4">
                        <span class="bg-emerald-50 text-emerald-700 text-[10px] font-bold px-2 py-1 rounded border border-emerald-100">SELESAI</span>
                    </td>
                    <td class="px-5 py-4">
                        <a href="/public/rating?vendor=ProSound Stage Jogja&order=ORD-99100&total=1.500.000"
                           class="inline-flex items-center space-x-1 bg-amber-500 hover:bg-amber-600 text-white text-[10px] font-bold px-3 py-1.5 rounded-lg transition shadow-sm">
                            <i class="fa-solid fa-star text-[9px]"></i>
                            <span>Selesai & Rating</span>
                        </a>
                    </td>
                </tr>

                {{-- Selesai dan sudah dirating: tampilkan badge bintang --}}
                <tr>
                    <td class="px-5 py-4">Toyib Catering</td>
                    <td class="px-5 py-4 text-gray-600">05 Jan 2026</td>
                    <td class="px-5 py-4 text-gray-900 font-bold">Rp 750.000</td>
                    <td class="px-5 py-4">
                        <span class="bg-gray-100 text-gray-500 text-[10px] font-bold px-2 py-1 rounded border border-gray-200">SELESAI</span>
                    </td>
                    <td class="px-5 py-4">
                        <span class="inline-flex items-center space-x-0.5 text-amber-400 text-[10px]">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <span class="text-gray-400 font-normal ml-1.5">Sudah dirating</span>
                        </span>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection