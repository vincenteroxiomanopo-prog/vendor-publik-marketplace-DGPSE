@extends('layouts.vendor')

@section('title', 'Cek History Penjualan & Rating')

@section('vendor_content')

{{-- Header + Ringkasan Rating --}}
<div class="bg-white rounded-2xl border border-gray-200 shadow-xs p-6 mb-6">
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 mb-6">
        <div>
            <h2 class="text-xl font-bold text-gray-900">History Penjualan & Rating Pelanggan</h2>
            <p class="text-xs text-gray-500 mt-0.5">Rekap seluruh transaksi yang pernah diselesaikan beserta ulasan dari pembeli.</p>
        </div>
        <div class="flex items-center space-x-2 bg-amber-50 border border-amber-100 px-4 py-2 rounded-xl">
            <div class="flex text-amber-400 text-base space-x-0.5">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <span class="text-xl font-black text-amber-500">4.8</span>
            <span class="text-xs text-amber-700 font-semibold">/ 5.0</span>
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-gray-50 rounded-xl p-4 text-center border border-gray-100">
            <p class="text-2xl font-black text-gray-900">24</p>
            <p class="text-[10px] font-bold text-gray-400 uppercase mt-1">Total Transaksi</p>
        </div>
        <div class="bg-emerald-50 rounded-xl p-4 text-center border border-emerald-100">
            <p class="text-2xl font-black text-emerald-600">Rp 11,95M</p>
            <p class="text-[10px] font-bold text-emerald-500 uppercase mt-1">Total Pendapatan</p>
        </div>
        <div class="bg-amber-50 rounded-xl p-4 text-center border border-amber-100">
            <p class="text-2xl font-black text-amber-500">12</p>
            <p class="text-[10px] font-bold text-amber-500 uppercase mt-1">Ulasan Masuk</p>
        </div>
        <div class="bg-blue-50 rounded-xl p-4 text-center border border-blue-100">
            <p class="text-2xl font-black text-blue-600">96%</p>
            <p class="text-[10px] font-bold text-blue-500 uppercase mt-1">Tingkat Kepuasan</p>
        </div>
    </div>
</div>

{{-- Distribusi Bintang --}}
<div class="bg-white rounded-2xl border border-gray-200 shadow-xs p-6 mb-6">
    <h3 class="font-bold text-sm text-gray-900 mb-4">Distribusi Penilaian</h3>
    <div class="space-y-2">
        @php
            $dist = [5 => 8, 4 => 3, 3 => 1, 2 => 0, 1 => 0];
            $total = array_sum($dist);
        @endphp
        @foreach ($dist as $star => $count)
        <div class="flex items-center space-x-3">
            <span class="text-xs font-bold text-gray-600 w-4 text-right">{{ $star }}</span>
            <i class="fa-solid fa-star text-amber-400 text-xs"></i>
            <div class="flex-grow bg-gray-100 rounded-full h-2">
                <div class="bg-amber-400 h-2 rounded-full"
                     style="width: {{ $total > 0 ? round($count / $total * 100) : 0 }}%"></div>
            </div>
            <span class="text-xs text-gray-500 w-6 text-right">{{ $count }}</span>
        </div>
        @endforeach
    </div>
</div>

{{-- Kartu Ulasan Pelanggan --}}
<div class="bg-white rounded-2xl border border-gray-200 shadow-xs overflow-hidden mb-6">
    <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
        <h3 class="font-bold text-sm text-gray-900">Ulasan dari Pelanggan</h3>
        <select class="text-xs border border-gray-200 rounded-lg px-2 py-1.5 bg-white focus:outline-none focus:ring-1 focus:ring-blue-400">
            <option>Semua Bintang</option>
            <option>5 Bintang</option>
            <option>4 Bintang</option>
            <option>3 Bintang ke bawah</option>
        </select>
    </div>
    <div class="divide-y divide-gray-50">

        <div class="p-5 flex items-start space-x-4">
            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center font-bold text-white text-sm shrink-0">BS</div>
            <div class="flex-grow">
                <div class="flex justify-between items-start flex-wrap gap-2">
                    <div>
                        <h4 class="font-bold text-sm text-gray-900">Budi Santoso</h4>
                        <p class="text-[10px] text-gray-400">ID #ORD-99210 &nbsp;·&nbsp; Paket Box Ayam Geprek (50 Box) &nbsp;·&nbsp; 24 Mei 2026</p>
                    </div>
                    <div class="flex text-amber-400 text-sm space-x-0.5">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="text-xs font-bold text-gray-700 ml-1">5.0</span>
                    </div>
                </div>
                <p class="text-xs text-gray-600 mt-2 bg-gray-50 p-3 rounded-xl border border-gray-100 leading-relaxed">
                    "Pelayanan sangat memuaskan! Makanan datang tepat waktu dan porsinya sesuai. Sambal yang dipisah juga sangat membantu. Highly recommended!"
                </p>
                <div class="mt-2 flex items-center space-x-2">
                    <span class="bg-emerald-50 text-emerald-700 text-[10px] font-bold px-2 py-0.5 rounded border border-emerald-100">Rp 750.000</span>
                    <span class="bg-gray-100 text-gray-500 text-[10px] px-2 py-0.5 rounded">Escrow Dicairkan ✓</span>
                </div>
            </div>
        </div>

        <div class="p-5 flex items-start space-x-4">
            <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center font-bold text-white text-sm shrink-0">SA</div>
            <div class="flex-grow">
                <div class="flex justify-between items-start flex-wrap gap-2">
                    <div>
                        <h4 class="font-bold text-sm text-gray-900">Siti Aminah</h4>
                        <p class="text-[10px] text-gray-400">ID #ORD-99184 &nbsp;·&nbsp; Paket Prasmanan Sederhana (100 Pax) &nbsp;·&nbsp; 28 Mar 2026</p>
                    </div>
                    <div class="flex text-amber-400 text-sm space-x-0.5">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                        <span class="text-xs font-bold text-gray-700 ml-1">4.0</span>
                    </div>
                </div>
                <p class="text-xs text-gray-600 mt-2 bg-gray-50 p-3 rounded-xl border border-gray-100 leading-relaxed">
                    "Overall bagus, makanan enak dan variatif. Hanya saja pengiriman terlambat sekitar 15 menit dari waktu yang disepakati. Semoga ke depannya lebih tepat waktu."
                </p>
                <div class="mt-2 flex items-center space-x-2">
                    <span class="bg-emerald-50 text-emerald-700 text-[10px] font-bold px-2 py-0.5 rounded border border-emerald-100">Rp 3.500.000</span>
                    <span class="bg-gray-100 text-gray-500 text-[10px] px-2 py-0.5 rounded">Escrow Dicairkan ✓</span>
                </div>
            </div>
        </div>

        <div class="p-5 flex items-start space-x-4">
            <div class="w-10 h-10 bg-rose-600 rounded-full flex items-center justify-center font-bold text-white text-sm shrink-0">RM</div>
            <div class="flex-grow">
                <div class="flex justify-between items-start flex-wrap gap-2">
                    <div>
                        <h4 class="font-bold text-sm text-gray-900">Rizky Mahendra</h4>
                        <p class="text-[10px] text-gray-400">ID #ORD-99050 &nbsp;·&nbsp; Paket Box Nasi Gudeg (30 Box) &nbsp;·&nbsp; 10 Jan 2026</p>
                    </div>
                    <div class="flex text-amber-400 text-sm space-x-0.5">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <span class="text-xs font-bold text-gray-700 ml-1">5.0</span>
                    </div>
                </div>
                <p class="text-xs text-gray-600 mt-2 bg-gray-50 p-3 rounded-xl border border-gray-100 leading-relaxed">
                    "Mantap sekali! Ini ketiga kalinya saya pesan di sini dan tidak pernah kecewa. Tim Toyib Catering sangat profesional dan komunikatif. Pasti repeat order!"
                </p>
                <div class="mt-2 flex items-center space-x-2">
                    <span class="bg-emerald-50 text-emerald-700 text-[10px] font-bold px-2 py-0.5 rounded border border-emerald-100">Rp 450.000</span>
                    <span class="bg-gray-100 text-gray-500 text-[10px] px-2 py-0.5 rounded">Escrow Dicairkan ✓</span>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- Tabel Ringkasan Semua Penjualan --}}
<div class="bg-white rounded-2xl border border-gray-200 shadow-xs overflow-hidden">
    <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
        <h3 class="font-bold text-sm text-gray-900">Ringkasan Semua Penjualan</h3>
        <input type="text" placeholder="Cari nama pelanggan..."
               class="text-xs border border-gray-200 rounded-lg px-3 py-1.5 bg-white focus:outline-none focus:ring-1 focus:ring-blue-400">
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="bg-gray-50 text-gray-500 font-bold uppercase tracking-wider">
                <tr>
                    <th class="px-5 py-3">Pelanggan</th>
                    <th class="px-5 py-3">Produk</th>
                    <th class="px-5 py-3">Tanggal</th>
                    <th class="px-5 py-3">Total</th>
                    <th class="px-5 py-3">Rating</th>
                    <th class="px-5 py-3">Ulasan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 font-medium">
                <tr class="hover:bg-gray-50/50">
                    <td class="px-5 py-4 font-bold text-gray-900">Budi Santoso</td>
                    <td class="px-5 py-4 text-gray-600">Box Ayam Geprek (50)</td>
                    <td class="px-5 py-4 text-gray-600">24 Mei 2026</td>
                    <td class="px-5 py-4 font-bold">Rp 750.000</td>
                    <td class="px-5 py-4">
                        <span class="flex items-center text-amber-400 space-x-0.5">
                            <i class="fa-solid fa-star text-[10px]"></i><i class="fa-solid fa-star text-[10px]"></i><i class="fa-solid fa-star text-[10px]"></i><i class="fa-solid fa-star text-[10px]"></i><i class="fa-solid fa-star text-[10px]"></i>
                            <span class="font-bold text-gray-700 ml-1">5</span>
                        </span>
                    </td>
                    <td class="px-5 py-4 text-gray-500 max-w-[180px] truncate">"Pelayanan sangat memuaskan!..."</td>
                </tr>
                <tr class="hover:bg-gray-50/50">
                    <td class="px-5 py-4 font-bold text-gray-900">Siti Aminah</td>
                    <td class="px-5 py-4 text-gray-600">Prasmanan (100 Pax)</td>
                    <td class="px-5 py-4 text-gray-600">28 Mar 2026</td>
                    <td class="px-5 py-4 font-bold">Rp 3.500.000</td>
                    <td class="px-5 py-4">
                        <span class="flex items-center text-amber-400 space-x-0.5">
                            <i class="fa-solid fa-star text-[10px]"></i><i class="fa-solid fa-star text-[10px]"></i><i class="fa-solid fa-star text-[10px]"></i><i class="fa-solid fa-star text-[10px]"></i><i class="fa-regular fa-star text-[10px]"></i>
                            <span class="font-bold text-gray-700 ml-1">4</span>
                        </span>
                    </td>
                    <td class="px-5 py-4 text-gray-500 max-w-[180px] truncate">"Overall bagus, terlambat 15 menit..."</td>
                </tr>
                <tr class="hover:bg-gray-50/50">
                    <td class="px-5 py-4 font-bold text-gray-900">Rizky Mahendra</td>
                    <td class="px-5 py-4 text-gray-600">Box Nasi Gudeg (30)</td>
                    <td class="px-5 py-4 text-gray-600">10 Jan 2026</td>
                    <td class="px-5 py-4 font-bold">Rp 450.000</td>
                    <td class="px-5 py-4">
                        <span class="flex items-center text-amber-400 space-x-0.5">
                            <i class="fa-solid fa-star text-[10px]"></i><i class="fa-solid fa-star text-[10px]"></i><i class="fa-solid fa-star text-[10px]"></i><i class="fa-solid fa-star text-[10px]"></i><i class="fa-solid fa-star text-[10px]"></i>
                            <span class="font-bold text-gray-700 ml-1">5</span>
                        </span>
                    </td>
                    <td class="px-5 py-4 text-gray-500 max-w-[180px] truncate">"Mantap sekali! Pasti repeat order!"</td>
                </tr>
                <tr class="hover:bg-gray-50/50">
                    <td class="px-5 py-4 font-bold text-gray-900">Dewi Rahayu</td>
                    <td class="px-5 py-4 text-gray-600">Box Nasi Campur (20)</td>
                    <td class="px-5 py-4 text-gray-600">3 Des 2025</td>
                    <td class="px-5 py-4 font-bold">Rp 280.000</td>
                    <td class="px-5 py-4 text-gray-400 text-[10px] italic">Belum dirating</td>
                    <td class="px-5 py-4 text-gray-400 text-[10px] italic">—</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection