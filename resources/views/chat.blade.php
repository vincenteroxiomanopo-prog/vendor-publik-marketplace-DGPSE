@extends('layouts.app')

@section('title', 'Pusat Chat & Kontak Interaktif')

@section('content')
@php
    $role = request()->query('role') ?? 'publik';
@endphp

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <div class="mb-4">
        <button onclick="window.history.back()" class="inline-flex items-center text-sm font-semibold text-gray-500 hover:text-blue-600 transition bg-white px-4 py-2 rounded-xl shadow-sm border border-gray-200">
            <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Halaman Sebelumnya
        </button>
    </div>

    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden flex flex-col md:flex-row h-[75vh]">

        {{-- ===== SIDEBAR DAFTAR CHAT ===== --}}
        <div class="w-full md:w-80 border-r border-gray-200 flex flex-col bg-gray-50/50">
            <div class="p-4 border-b border-gray-200 bg-white">
                @if($role == 'vendor')
                    <h2 class="font-bold text-gray-900 text-base">Pesan dari Pelanggan</h2>
                    <p class="text-[11px] text-gray-500 mt-0.5">Balas & konfirmasi pesanan pelanggan Anda.</p>
                @else
                    <h2 class="font-bold text-gray-900 text-base">Chat dengan Vendor</h2>
                    <p class="text-[11px] text-gray-500 mt-0.5">Tanya & pastikan detail pesanan sebelum acara.</p>
                @endif
            </div>

            <div class="flex-grow overflow-y-auto p-2 space-y-1">
                @if($role == 'vendor')
                    {{-- Daftar kontak dari sisi VENDOR: tampilkan pelanggan --}}
                    <button class="w-full flex items-center space-x-3 p-3 bg-emerald-50/70 border border-emerald-100 rounded-xl text-left focus:outline-none">
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center font-bold text-white text-sm shrink-0">BS</div>
                        <div class="flex-grow min-w-0">
                            <div class="flex justify-between items-baseline">
                                <span class="font-bold text-xs text-gray-900 truncate">Budi Santoso</span>
                                <span class="text-[9px] text-emerald-600 font-semibold">09.11</span>
                            </div>
                            <p class="text-xs text-emerald-700 font-medium truncate mt-0.5">Dana saya sudah aman di escrow kan?</p>
                        </div>
                    </button>
                    <button class="w-full flex items-center space-x-3 p-3 hover:bg-gray-100 rounded-xl text-left opacity-55 focus:outline-none transition">
                        <div class="w-10 h-10 bg-gray-400 rounded-full flex items-center justify-center font-bold text-white text-sm shrink-0">SA</div>
                        <div class="flex-grow min-w-0">
                            <div class="flex justify-between items-baseline">
                                <span class="font-bold text-xs text-gray-800 truncate">Siti Aminah</span>
                                <span class="text-[9px] text-gray-400">Kemarin</span>
                            </div>
                            <p class="text-xs text-gray-500 truncate mt-0.5">Pak, menu nasinya ada pilihan lauk lain?</p>
                        </div>
                    </button>
                @else
                    {{-- Daftar kontak dari sisi PUBLIK: tampilkan toko vendor --}}
                    <button class="w-full flex items-center space-x-3 p-3 bg-blue-50/70 border border-blue-100 rounded-xl text-left focus:outline-none">
                        <div class="w-10 h-10 bg-emerald-600 rounded-full flex items-center justify-center font-bold text-white text-sm shrink-0">TC</div>
                        <div class="flex-grow min-w-0">
                            <div class="flex justify-between items-baseline">
                                <span class="font-bold text-xs text-gray-900 truncate">Toyib Catering</span>
                                <span class="text-[9px] text-blue-600 font-semibold">09.11</span>
                            </div>
                            <p class="text-xs text-blue-600 font-medium truncate mt-0.5">Dana terlindungi Escrow kami. Tenang kak!</p>
                        </div>
                    </button>
                    <button class="w-full flex items-center space-x-3 p-3 hover:bg-gray-100 rounded-xl text-left opacity-55 focus:outline-none transition">
                        <div class="w-10 h-10 bg-gray-400 rounded-full flex items-center justify-center font-bold text-white text-sm shrink-0">PS</div>
                        <div class="flex-grow min-w-0">
                            <div class="flex justify-between items-baseline">
                                <span class="font-bold text-xs text-gray-800 truncate">ProSound Stage Jogja</span>
                                <span class="text-[9px] text-gray-400">Kemarin</span>
                            </div>
                            <p class="text-xs text-gray-500 truncate mt-0.5">Sewa alat sound berdurasi 12 jam bisa...</p>
                        </div>
                    </button>
                @endif
            </div>
        </div>

        {{-- ===== AREA CHAT UTAMA ===== --}}
        <div class="flex-grow flex flex-col bg-white">

            {{-- Header chat --}}
            <div class="p-4 border-b border-gray-200 flex justify-between items-center bg-gray-50/30">
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-full flex items-center justify-center font-bold text-white text-xs
                        {{ $role == 'vendor' ? 'bg-blue-600' : 'bg-emerald-600' }}">
                        {{ $role == 'vendor' ? 'BS' : 'TC' }}
                    </div>
                    <div>
                        <h3 class="font-bold text-xs text-gray-900">
                            {{ $role == 'vendor' ? 'Budi Santoso (Pelanggan)' : 'Toyib Catering & Prasmanan' }}
                        </h3>
                        <span class="text-[10px] text-emerald-600 font-semibold flex items-center">
                            <i class="fa-solid fa-circle text-[5px] mr-1 animate-pulse"></i> Online
                        </span>
                    </div>
                </div>
                <span class="bg-gray-100 text-gray-600 border border-gray-200 text-[10px] font-bold px-2.5 py-1 rounded-lg">
                    <i class="fa-solid fa-shield-halved text-emerald-500 mr-1"></i> Jalur Transaksi Aman
                </span>
            </div>

            {{-- Gelembung pesan --}}
            <div class="flex-grow overflow-y-auto p-5 space-y-4 text-xs">

                @if($role == 'vendor')
                    {{-- ===== ISI CHAT: SISI VENDOR (bubble kanan = hijau, kiri = gray) ===== --}}

                    {{-- Pesan vendor (kanan, hijau) --}}
                    <div class="flex justify-end">
                        <div class="max-w-[72%]">
                            <div class="bg-emerald-600 text-white p-3 rounded-2xl rounded-br-none leading-relaxed">
                                Halo kak, ada yang bisa kami bantu? 😊
                            </div>
                            <p class="text-[9px] text-gray-400 text-right mt-1">Anda · 09.00</p>
                        </div>
                    </div>

                    {{-- Pesan pelanggan (kiri, abu) --}}
                    <div class="flex justify-start">
                        <div class="max-w-[72%]">
                            <p class="text-[10px] text-gray-500 font-semibold mb-1">Budi Santoso</p>
                            <div class="bg-gray-100 text-gray-800 p-3 rounded-2xl rounded-bl-none leading-relaxed">
                                Halo, saya mau tanya — apakah slot tanggal 24 Mei masih tersedia untuk 50 box ayam geprek?
                            </div>
                            <p class="text-[9px] text-gray-400 mt-1">09.02</p>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <div class="max-w-[72%]">
                            <div class="bg-emerald-600 text-white p-3 rounded-2xl rounded-br-none leading-relaxed">
                                Masih tersedia pak! Dapur kami sudah kami blok khusus. Pengiriman bisa jam berapa? ✅
                            </div>
                            <p class="text-[9px] text-gray-400 text-right mt-1">Anda · 09.04</p>
                        </div>
                    </div>

                    <div class="flex justify-start">
                        <div class="max-w-[72%]">
                            <p class="text-[10px] text-gray-500 font-semibold mb-1">Budi Santoso</p>
                            <div class="bg-gray-100 text-gray-800 p-3 rounded-2xl rounded-bl-none leading-relaxed">
                                Jam 10 pagi ya. Oh iya, sambalnya bisa dipisah? Ada anak kecil di acara.
                            </div>
                            <p class="text-[9px] text-gray-400 mt-1">09.06</p>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <div class="max-w-[72%]">
                            <div class="bg-emerald-600 text-white p-3 rounded-2xl rounded-br-none leading-relaxed">
                                Siap pak, kami siapkan sambal di wadah terpisah. Tim lapangan sudah kami instruksikan. Pengiriman jam 10 tepat kami jamin.
                            </div>
                            <p class="text-[9px] text-gray-400 text-right mt-1">Anda · 09.08</p>
                        </div>
                    </div>

                    <div class="flex justify-start">
                        <div class="max-w-[72%]">
                            <p class="text-[10px] text-gray-500 font-semibold mb-1">Budi Santoso</p>
                            <div class="bg-gray-100 text-gray-800 p-3 rounded-2xl rounded-bl-none leading-relaxed">
                                Oke siap! Dana saya sudah aman di sistem escrow kan?
                            </div>
                            <p class="text-[9px] text-gray-400 mt-1">09.10</p>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <div class="max-w-[72%]">
                            <div class="bg-emerald-600 text-white p-3 rounded-2xl rounded-br-none leading-relaxed">
                                Betul pak, notifikasi dana masuk dari sistem Escrow pihak ketiga sudah kami terima. Pesanan ini resmi kami konfirmasi ✅. Sampai jumpa tanggal 24!
                            </div>
                            <p class="text-[9px] text-gray-400 text-right mt-1">Anda · 09.11</p>
                        </div>
                    </div>

                @else
                    {{-- ===== ISI CHAT: SISI PUBLIK (bubble kanan = biru, kiri = gray) ===== --}}

                    <div class="flex justify-start">
                        <div class="max-w-[72%]">
                            <p class="text-[10px] text-gray-500 font-semibold mb-1">Toyib Catering</p>
                            <div class="bg-gray-100 text-gray-800 p-3 rounded-2xl rounded-bl-none leading-relaxed">
                                Halo kak, ada yang bisa kami bantu? 😊
                            </div>
                            <p class="text-[9px] text-gray-400 mt-1">09.00</p>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <div class="max-w-[72%]">
                            <div class="bg-blue-600 text-white p-3 rounded-2xl rounded-br-none leading-relaxed">
                                Halo, saya mau tanya — apakah slot tanggal 24 Mei masih tersedia untuk 50 box ayam geprek?
                            </div>
                            <p class="text-[9px] text-gray-400 text-right mt-1">Anda · 09.02</p>
                        </div>
                    </div>

                    <div class="flex justify-start">
                        <div class="max-w-[72%]">
                            <p class="text-[10px] text-gray-500 font-semibold mb-1">Toyib Catering</p>
                            <div class="bg-gray-100 text-gray-800 p-3 rounded-2xl rounded-bl-none leading-relaxed">
                                Masih tersedia kak! Pengiriman bisa jam berapa?
                            </div>
                            <p class="text-[9px] text-gray-400 mt-1">09.04</p>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <div class="max-w-[72%]">
                            <div class="bg-blue-600 text-white p-3 rounded-2xl rounded-br-none leading-relaxed">
                                Jam 10 pagi ya. Oh iya, sambalnya bisa dipisah? Ada anak kecil di acara.
                            </div>
                            <p class="text-[9px] text-gray-400 text-right mt-1">Anda · 09.06</p>
                        </div>
                    </div>

                    <div class="flex justify-start">
                        <div class="max-w-[72%]">
                            <p class="text-[10px] text-gray-500 font-semibold mb-1">Toyib Catering</p>
                            <div class="bg-gray-100 text-gray-800 p-3 rounded-2xl rounded-bl-none leading-relaxed">
                                Bisa kak, kami buatkan sambal terpisah di wadah khusus. Pengiriman jam 10 kami pastikan tepat waktu.
                            </div>
                            <p class="text-[9px] text-gray-400 mt-1">09.08</p>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <div class="max-w-[72%]">
                            <div class="bg-blue-600 text-white p-3 rounded-2xl rounded-br-none leading-relaxed">
                                Oke siap! Dana saya sudah aman di sistem escrow kan?
                            </div>
                            <p class="text-[9px] text-gray-400 text-right mt-1">Anda · 09.10</p>
                        </div>
                    </div>

                    <div class="flex justify-start">
                        <div class="max-w-[72%]">
                            <p class="text-[10px] text-gray-500 font-semibold mb-1">Toyib Catering</p>
                            <div class="bg-gray-100 text-gray-800 p-3 rounded-2xl rounded-bl-none leading-relaxed">
                                Betul kak, dana terlindungi oleh sistem Escrow pihak ketiga kami. Baru kami terima setelah acara selesai dan kaka konfirmasi. Tenang saja ya! 🔒
                            </div>
                            <p class="text-[9px] text-gray-400 mt-1">09.11</p>
                        </div>
                    </div>

                @endif
            </div>

            {{-- Input pesan --}}
            <div class="p-3 border-t border-gray-200 bg-white">
                <form class="flex items-center space-x-2"
                      onsubmit="event.preventDefault(); alert('Pesan terkirim!');">
                    <input type="text"
                           placeholder="{{ $role == 'vendor' ? 'Balas pesan pelanggan...' : 'Tanyakan detail pesanan ke vendor...' }}"
                           class="flex-grow px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-xs focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800">
                    <button type="submit"
                            class="bg-{{ $role == 'vendor' ? 'emerald' : 'blue' }}-600 hover:bg-{{ $role == 'vendor' ? 'emerald' : 'blue' }}-700 text-white p-2.5 rounded-xl transition focus:outline-none">
                        <i class="fa-solid fa-paper-plane px-1 text-xs"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection