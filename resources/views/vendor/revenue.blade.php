@extends('layouts.vendor')
@section('title', 'Laporan Pendapatan')

@section('vendor_content')
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
    <div class="bg-emerald-600 text-white p-5 sm:p-6 rounded-2xl shadow-sm flex flex-col justify-between relative overflow-hidden">
        <i class="fa-solid fa-wallet text-7xl absolute -right-4 -bottom-4 opacity-10 transform -rotate-12"></i>
        
        <div class="relative z-10">
            <div class="text-emerald-200 text-xs font-bold uppercase mb-1">Saldo Tersedia (Bisa Ditarik)</div>
            <div class="text-3xl font-black mb-1">Rp 8.750.000</div>
            <p class="text-[10px] text-emerald-100">Update terakhir: Hari ini, 10:05 WIB</p>
        </div>
        <button class="mt-5 bg-white hover:bg-gray-50 transition text-emerald-700 text-xs font-bold px-5 py-2.5 rounded-xl w-max shadow-sm flex items-center space-x-2 relative z-10" onclick="alert('Membuka modal penarikan dana ke rekening bank terdaftar...')">
            <i class="fa-solid fa-money-bill-transfer"></i> <span>Tarik Dana ke Bank</span>
        </button>
    </div>
    
    <div class="bg-white p-5 sm:p-6 rounded-2xl border border-gray-200 shadow-sm flex flex-col justify-between">
        <div>
            <div class="flex items-center space-x-2 text-gray-400 text-xs font-bold uppercase mb-1">
                <i class="fa-solid fa-shield-halved"></i> <span>Tertahan di Escrow</span>
            </div>
            <div class="text-3xl font-black text-gray-900 mb-1">Rp 3.200.000</div>
            <p class="text-[10px] text-gray-400">Dari 2 pesanan yang belum selesai.</p>
        </div>
        <p class="text-[10px] font-semibold text-blue-600 bg-blue-50 px-3 py-2 rounded-lg mt-4 border border-blue-100 inline-block">
            <i class="fa-solid fa-circle-info mr-1"></i> Dana otomatis cair ke Saldo Tersedia maksimal 1x24 jam setelah acara pelanggan selesai.
        </p>
    </div>
</div>

<div class="bg-white rounded-2xl border border-gray-200 shadow-xs overflow-hidden">
    <div class="p-4 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3 bg-gray-50/50">
        <div>
            <h3 class="font-bold text-sm text-gray-900">Riwayat Mutasi Saldo</h3>
            <p class="text-[10px] text-gray-500">Histori dana masuk dari Escrow dan penarikan ke rekening.</p>
        </div>
        <button class="text-xs font-bold text-gray-600 bg-white border border-gray-300 hover:bg-gray-100 px-4 py-2 rounded-xl transition shadow-xs flex items-center">
            <i class="fa-solid fa-download mr-1.5"></i> Unduh Laporan PDF
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="bg-gray-50 text-gray-500 font-bold uppercase tracking-wider">
                <tr>
                    <th class="px-5 py-3 border-b border-gray-100">Tanggal</th>
                    <th class="px-5 py-3 border-b border-gray-100">Deskripsi Transaksi</th>
                    <th class="px-5 py-3 border-b border-gray-100 text-right">Nominal</th>
                    <th class="px-5 py-3 border-b border-gray-100">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 font-medium">
                
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="px-5 py-4 text-gray-500 w-32">20 Mei 2026<br><span class="text-[10px]">14:30 WIB</span></td>
                    <td class="px-5 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-full bg-red-50 text-red-500 flex items-center justify-center shrink-0 border border-red-100">
                                <i class="fa-solid fa-arrow-up-from-bracket"></i>
                            </div>
                            <div>
                                <span class="text-gray-900 font-bold block text-sm">Penarikan Dana (Withdrawal)</span>
                                <span class="text-[10px] text-gray-500">Ke: BCA a.n Toyib Catering (****8812) | Ref: WD-882910</span>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-4 text-right text-gray-900 font-black text-sm">- Rp 5.000.000</td>
                    <td class="px-5 py-4">
                        <span class="bg-emerald-50 text-emerald-700 text-[10px] font-bold px-2.5 py-1 rounded border border-emerald-200">BERHASIL</span>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50/50 transition bg-emerald-50/10">
                    <td class="px-5 py-4 text-gray-500 w-32">18 Mei 2026<br><span class="text-[10px]">09:15 WIB</span></td>
                    <td class="px-5 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 border border-emerald-200">
                                <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            </div>
                            <div>
                                <span class="text-gray-900 font-bold block text-sm">Pencairan Escrow: Pesanan #ORD-99184</span>
                                <span class="text-[10px] text-gray-500">Pembeli: Siti Aminah (Paket Prasmanan Sederhana)</span>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-4 text-right text-emerald-600 font-black text-sm">+ Rp 3.500.000</td>
                    <td class="px-5 py-4">
                        <span class="bg-emerald-50 text-emerald-700 text-[10px] font-bold px-2.5 py-1 rounded border border-emerald-200">MASUK</span>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50/50 transition bg-emerald-50/10">
                    <td class="px-5 py-4 text-gray-500 w-32">15 Mei 2026<br><span class="text-[10px]">11:00 WIB</span></td>
                    <td class="px-5 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 border border-emerald-200">
                                <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            </div>
                            <div>
                                <span class="text-gray-900 font-bold block text-sm">Pencairan Escrow: Pesanan #ORD-99110</span>
                                <span class="text-[10px] text-gray-500">Pembeli: Rina Dwi (Paket Nasi Kotak Spesial)</span>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-4 text-right text-emerald-600 font-black text-sm">+ Rp 1.250.000</td>
                    <td class="px-5 py-4">
                        <span class="bg-emerald-50 text-emerald-700 text-[10px] font-bold px-2.5 py-1 rounded border border-emerald-200">MASUK</span>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50/50 transition">
                    <td class="px-5 py-4 text-gray-500 w-32">10 Mei 2026<br><span class="text-[10px]">10:00 WIB</span></td>
                    <td class="px-5 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-full bg-red-50 text-red-500 flex items-center justify-center shrink-0 border border-red-100">
                                <i class="fa-solid fa-arrow-up-from-bracket"></i>
                            </div>
                            <div>
                                <span class="text-gray-900 font-bold block text-sm">Penarikan Dana (Withdrawal)</span>
                                <span class="text-[10px] text-gray-500">Ke: BCA a.n Toyib Catering (****8812) | Ref: WD-882890</span>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-4 text-right text-gray-900 font-black text-sm">- Rp 2.000.000</td>
                    <td class="px-5 py-4">
                        <span class="bg-emerald-50 text-emerald-700 text-[10px] font-bold px-2.5 py-1 rounded border border-emerald-200">BERHASIL</span>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="p-4 border-t border-gray-100 flex justify-center items-center bg-gray-50/50">
        <button class="text-xs font-bold text-blue-600 hover:text-blue-800 transition py-1">Tampilkan Lebih Banyak Laporan <i class="fa-solid fa-chevron-down ml-1 text-[10px]"></i></button>
    </div>
</div>
@endsection