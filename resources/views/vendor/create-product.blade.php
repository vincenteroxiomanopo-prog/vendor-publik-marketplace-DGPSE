@extends('layouts.vendor')
@section('title', 'Add New Product')

@section('vendor_content')
<div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-xs">
    <div class="flex items-center space-x-3 border-b border-gray-100 pb-4 mb-6">
        <a href="/vendor/products" class="text-gray-400 hover:text-blue-600"><i class="fa-solid fa-arrow-left"></i></a>
        <h2 class="text-lg font-bold text-gray-900">Tambah Produk / Layanan Baru</h2>
    </div>

    <form class="space-y-5">
        <div>
            <label class="block text-xs font-bold text-gray-600 mb-1">Nama Paket Layanan</label>
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-xl text-sm" placeholder="Contoh: Paket Prasmanan Mewah 100 Pax">
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-bold text-gray-600 mb-1">Kategori</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-xl text-sm">
                    <option>Konsumsi & Catering</option>
                    <option>Audio Visual</option>
                </select>
            </div>
            <div>
                <label class="block text-xs font-bold text-gray-600 mb-1">Harga (Rp)</label>
                <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-xl text-sm" placeholder="Contoh: 3500000">
            </div>
        </div>
        <div>
            <label class="block text-xs font-bold text-gray-600 mb-1">Deskripsi Lengkap</label>
            <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-xl text-sm" placeholder="Jelaskan fasilitas dan rincian paket..."></textarea>
        </div>
        <div class="pt-4 flex justify-end space-x-3">
            <button type="button" class="px-5 py-2 text-sm font-semibold text-gray-600 bg-gray-100 rounded-xl hover:bg-gray-200">Batal</button>
            <button type="button" onclick="alert('Produk berhasil ditambahkan!'); window.location.href='/vendor/products'" class="px-5 py-2 text-sm font-semibold text-white bg-blue-600 rounded-xl hover:bg-blue-700">Simpan Produk</button>
        </div>
    </form>
</div>
@endsection