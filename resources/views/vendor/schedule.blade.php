@extends('layouts.vendor')
@section('title', 'Jadwal & Ketersediaan')

@section('vendor_content')
<div class="space-y-6 w-full">
    
    <div class="bg-white p-4 sm:p-6 rounded-2xl border border-gray-200 shadow-xs">
        <div class="flex justify-between items-center mb-6 border-b border-gray-100 pb-4">
            <div>
                <h2 class="text-base sm:text-lg font-bold text-gray-900">Jadwal Kalender Pemesanan</h2>
                <p class="text-[11px] text-gray-500 mt-0.5">Status keterisian slot acara publik periode berjalan.</p>
            </div>
            <div class="flex items-center space-x-2 bg-gray-50 p-1 rounded-xl border border-gray-200">
                <button class="w-8 h-8 rounded-lg hover:bg-white hover:shadow-xs flex items-center justify-center text-gray-600 transition"><i class="fa-solid fa-chevron-left text-xs"></i></button>
                <span class="text-xs font-bold text-gray-800 px-2">Mei 2026</span>
                <button class="w-8 h-8 rounded-lg hover:bg-white hover:shadow-xs flex items-center justify-center text-gray-600 transition"><i class="fa-solid fa-chevron-right text-xs"></i></button>
            </div>
        </div>

        <div class="grid grid-cols-7 gap-1 text-center mb-3">
            <div class="text-[10px] font-bold text-gray-400 uppercase py-1">Sen</div>
            <div class="text-[10px] font-bold text-gray-400 uppercase py-1">Sel</div>
            <div class="text-[10px] font-bold text-gray-400 uppercase py-1">Rab</div>
            <div class="text-[10px] font-bold text-gray-400 uppercase py-1">Kam</div>
            <div class="text-[10px] font-bold text-gray-400 uppercase py-1">Jum</div>
            <div class="text-[10px] font-bold text-gray-400 uppercase text-red-500 py-1">Sab</div>
            <div class="text-[10px] font-bold text-gray-400 uppercase text-red-500 py-1">Min</div>
        </div>

        <div class="grid grid-cols-7 gap-1 sm:gap-2 text-center text-xs sm:text-sm">
            <div class="p-2 text-gray-300 bg-gray-50/30 rounded-lg select-none">27</div>
            <div class="p-2 text-gray-300 bg-gray-50/30 rounded-lg select-none">28</div>
            <div class="p-2 text-gray-300 bg-gray-50/30 rounded-lg select-none">29</div>
            <div class="p-2 text-gray-300 bg-gray-50/30 rounded-lg select-none">30</div>
            
            @for ($i = 1; $i <= 17; $i++)
                <div class="p-2 sm:p-3 text-gray-700 hover:bg-gray-100 rounded-xl cursor-pointer transition flex items-center justify-center font-medium">
                    {{ $i }}
                </div>
            @endfor

            <div class="p-2 sm:p-3 bg-emerald-50 text-emerald-700 font-bold rounded-xl border border-emerald-200 flex items-center justify-center cursor-pointer hover:bg-emerald-100 transition relative group">
                18
                <span class="absolute bottom-1 w-1 h-1 bg-emerald-500 rounded-full"></span>
            </div>

            @for ($i = 19; $i <= 23; $i++)
                <div class="p-2 sm:p-3 text-gray-700 hover:bg-gray-100 rounded-xl cursor-pointer transition flex items-center justify-center font-medium">
                    {{ $i }}
                </div>
            @endfor

            <div class="p-2 sm:p-3 bg-blue-600 text-white font-black rounded-xl cursor-pointer shadow-sm flex items-center justify-center relative group">
                24
                <span class="absolute bottom-1 w-1 h-1 bg-white rounded-full"></span>
            </div>

            <div class="p-2 sm:p-3 text-gray-700 hover:bg-gray-100 rounded-xl cursor-pointer transition flex items-center justify-center font-medium">
                25
            </div>

            <div class="p-2 sm:p-3 bg-blue-50 text-blue-700 font-bold rounded-xl border border-blue-200 flex items-center justify-center cursor-pointer hover:bg-blue-100 transition relative">
                26
                <span class="absolute bottom-1 w-1.5 h-1.5 bg-amber-500 rounded-full"></span>
            </div>

            <div class="p-2 sm:p-3 text-gray-700 hover:bg-gray-100 rounded-xl cursor-pointer transition flex items-center justify-center font-medium">
                27
            </div>

            <div class="p-2 sm:p-3 bg-blue-50 text-blue-700 font-bold rounded-xl border border-blue-200 flex items-center justify-center cursor-pointer hover:bg-blue-100 transition relative">
                28
                <span class="absolute bottom-1 w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
            </div>

            @for ($i = 29; $i <= 31; $i++)
                <div class="p-2 sm:p-3 text-gray-700 hover:bg-gray-100 rounded-xl cursor-pointer transition flex items-center justify-center font-medium">
                    {{ $i }}
                </div>
            @endfor
        </div>
        
        <div class="mt-5 pt-4 border-t border-gray-100 flex flex-wrap gap-4 text-[10px] text-gray-500 font-medium">
            <div class="flex items-center"><span class="w-2.5 h-2.5 rounded bg-blue-600 mr-1.5 block"></span> Hari Ini (On-going)</div>
            <div class="flex items-center"><span class="w-2.5 h-2.5 rounded bg-blue-50 border border-blue-200 mr-1.5 block"></span> Terjadwal (Line-up)</div>
            <div class="flex items-center"><span class="w-2.5 h-2.5 rounded bg-emerald-50 border border-emerald-200 mr-1.5 block"></span> Selesai</div>
        </div>
    </div>

    <div class="space-y-4 w-full">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 px-1">
            <div>
                <h3 class="text-base font-bold text-gray-900">Line-up & Detail Penjelasan Agenda</h3>
                <p class="text-xs text-gray-500">Rincian instruksi kerja pengerjaan logistik per tanggal event.</p>
            </div>
            <button class="text-xs font-bold text-blue-600 hover:text-blue-800 bg-blue-50 px-3 py-2 rounded-xl transition shadow-2xs self-stretch sm:self-auto text-center">
                <i class="fa-solid fa-print mr-1"></i> Cetak Jadwal Kerja
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            
            <div class="bg-white p-5 rounded-2xl border border-blue-200 shadow-xs relative flex flex-col justify-between">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-blue-600"></div>
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-[10px] font-extrabold text-blue-600 bg-blue-50 px-2 py-0.5 rounded border border-blue-100 uppercase tracking-wide">Hari Ini - 24 Mei</span>
                        <span class="bg-blue-600 text-white text-[9px] font-bold px-2 py-0.5 rounded-full">ON-GOING</span>
                    </div>
                    <h4 class="font-bold text-sm text-gray-900 truncate">Syukuran Arisan Keluarga</h4>
                    <p class="text-[11px] text-gray-500 mt-0.5"><i class="fa-regular fa-user mr-1"></i> Bpk. Budi Santoso (#ORD-99210)</p>
                    
                    <div class="mt-4 bg-gray-50 p-3 rounded-xl border border-gray-100 space-y-2 text-[11px]">
                        <div>
                            <span class="text-gray-400 block text-[10px] uppercase font-bold">Produk</span>
                            <span class="font-bold text-gray-800">50 Box Ayam Geprek + Es Teh</span>
                        </div>
                        <div>
                            <span class="text-gray-400 block text-[10px] uppercase font-bold">Jam & Lokasi</span>
                            <span class="font-bold text-gray-800"><i class="fa-regular fa-clock text-red-500 mr-1"></i> 10:00 WIB</span>
                            <span class="text-gray-500 block text-[10px] truncate">Jl. Gejayan No 12, Yogyakarta</span>
                        </div>
                    </div>
                </div>
                <div class="mt-5 pt-3 border-t border-gray-100 flex items-center justify-between">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white text-[11px] font-bold px-3 py-2 rounded-lg transition" onclick="alert('Status diubah menjadi: Sedang Dikirim')">Kirim Logistik</button>
                    <a href="/chat-center?role=vendor" class="text-blue-600 text-[11px] font-bold hover:underline"><i class="fa-solid fa-comment mr-1"></i> Chat</a>
                </div>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-xs flex flex-col justify-between hover:border-blue-200 transition">
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-[10px] font-extrabold text-gray-500 bg-gray-100 px-2 py-0.5 rounded uppercase tracking-wide">Lusa - 26 Mei</span>
                        <span class="bg-amber-50 text-amber-700 text-[9px] font-bold px-2 py-0.5 rounded border border-amber-200">BUTUH KONFIRMASI</span>
                    </div>
                    <h4 class="font-bold text-sm text-gray-900 truncate">Rapat & Konsumsi Kantor</h4>
                    <p class="text-[11px] text-gray-500 mt-0.5"><i class="fa-regular fa-user mr-1"></i> Agus Setiawan (#ORD-99215)</p>
                    
                    <div class="mt-4 bg-gray-50 p-3 rounded-xl border border-gray-100 space-y-2 text-[11px]">
                        <div>
                            <span class="text-gray-400 block text-[10px] uppercase font-bold">Produk</span>
                            <span class="font-bold text-gray-800">30 Box Nasi Goreng Spesial</span>
                        </div>
                        <div>
                            <span class="text-gray-400 block text-[10px] uppercase font-bold">Jam & Lokasi</span>
                            <span class="font-bold text-gray-800"><i class="fa-regular fa-clock text-gray-400 mr-1"></i> 08:00 WIB</span>
                            <span class="text-gray-500 block text-[10px] truncate">Gedung Keuangan, Kotabaru</span>
                        </div>
                    </div>
                </div>
                <div class="mt-5 pt-3 border-t border-gray-100 text-right">
                    <a href="/vendor/orders?role=vendor" class="text-blue-600 text-[11px] font-bold hover:underline">Kelola Pesanan <i class="fa-solid fa-chevron-right text-[9px] ml-0.5"></i></a>
                </div>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-xs flex flex-col justify-between hover:border-blue-200 transition">
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-[10px] font-extrabold text-gray-500 bg-gray-100 px-2 py-0.5 rounded uppercase tracking-wide">Mendatang - 28 Mei</span>
                        <span class="bg-gray-100 text-gray-600 text-[9px] font-bold px-2 py-0.5 rounded border border-gray-200">TERJADWAL</span>
                    </div>
                    <h4 class="font-bold text-sm text-gray-900 truncate">Acara Pernikahan (Prasmanan)</h4>
                    <p class="text-[11px] text-gray-500 mt-0.5"><i class="fa-regular fa-user mr-1"></i> Siti Aminah (#ORD-99190)</p>
                    
                    <div class="mt-4 bg-gray-50 p-3 rounded-xl border border-gray-100 space-y-2 text-[11px]">
                        <div>
                            <span class="text-gray-400 block text-[10px] uppercase font-bold">Produk</span>
                            <span class="font-bold text-gray-800">100 Pax Menu Prasmanan Utama</span>
                        </div>
                        <div>
                            <span class="text-gray-400 block text-[10px] uppercase font-bold">Jam & Lokasi</span>
                            <span class="font-bold text-gray-800"><i class="fa-regular fa-clock text-gray-400 mr-1"></i> 09:00 WIB</span>
                            <span class="text-gray-500 block text-[10px] truncate">Auditorium Kampus, Yogyakarta</span>
                        </div>
                    </div>
                </div>
                <div class="mt-5 pt-3 border-t border-gray-100 text-right">
                    <a href="/vendor/orders?role=vendor" class="text-blue-600 text-[11px] font-bold hover:underline">Kelola Pesanan <i class="fa-solid fa-chevron-right text-[9px] ml-0.5"></i></a>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection