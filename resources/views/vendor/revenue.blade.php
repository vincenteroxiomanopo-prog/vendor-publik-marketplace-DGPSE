@extends('layouts.vendor')
@section('title', 'Laporan Pendapatan')

@section('vendor_content')
<div class="grid grid-cols-2 gap-4 mb-6">
    <div class="bg-emerald-600 text-white p-5 rounded-2xl shadow-sm">
        <div class="text-emerald-200 text-xs font-bold uppercase mb-1">Saldo Tersedia (Bisa Ditarik)</div>
        <div class="text-3xl font-black">Rp 8.750.000</div>
        <button class="mt-4 bg-white text-emerald-700 text-xs font-bold px-4 py-2 rounded-lg">Tarik Dana</button>
    </div>
    <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm">
        <div class="text-gray-400 text-xs font-bold uppercase mb-1">Tertahan di Escrow Pihak ke-3</div>
        <div class="text-3xl font-black text-gray-900">Rp 3.200.000</div>
        <p class="text-[10px] text-gray-400 mt-2">Dana cair otomatis setelah acara pelanggan selesai.</p>
    </div>
</div>
@endsection