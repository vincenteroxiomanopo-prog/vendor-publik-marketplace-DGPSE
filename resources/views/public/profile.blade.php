@extends('layouts.public')

@section('public_content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6">
    <div class="flex flex-col md:flex-row gap-6 items-start">
        
        <div class="w-full md:w-1/3 flex flex-col items-center">
            <div class="w-24 h-24 bg-blue-600 rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-md mb-4">
                VM
            </div>
            <h3 class="font-bold text-gray-900 text-lg">Vincente Roxio Manopo</h3>
            <p class="text-xs text-gray-500 mb-4">18 Tahun</p>
            
            <div class="w-full bg-blue-50 border border-blue-100 p-4 rounded-xl text-center">
                <p class="text-[10px] font-bold text-blue-800 uppercase mb-1">Total Poin Reputasi</p>
                <p class="text-2xl font-black text-blue-600">7.224</p>
            </div>
        </div>

        <div class="w-full md:w-2/3 space-y-4">
            <div>
                <label class="block text-xs font-bold text-gray-600 mb-1">Nomor Induk / ID Pengguna</label>
                <input type="text" class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-xl text-sm" value="72240690" readonly>
            </div>
            <div>
                <label class="block text-xs font-bold text-gray-600 mb-1">Email</label>
                <input type="email" class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-xl text-sm" value="vincente.manopo@ukdw.ac.id" readonly>
            </div>
            
            <div class="pt-4 border-t border-gray-100">
                <h4 class="text-sm font-bold text-gray-900 mb-3">Preferensi Makanan (Panduan Vendor)</h4>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-red-50 text-red-700 px-3 py-1 rounded-full text-xs font-semibold border border-red-100">Ayam Geprek</span>
                    <span class="bg-amber-50 text-amber-700 px-3 py-1 rounded-full text-xs font-semibold border border-amber-100">Nasi Goreng Spesial</span>
                    <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-xs font-semibold border border-red-200">Sambal Bawang Lv 5</span>
                </div>
            </div>

            <div class="pt-4 flex justify-end">
                <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-5 py-2.5 rounded-xl transition shadow-sm">
                    Simpan Perubahan
                </button>
            </div>
        </div>

    </div>
</div>
@endsection