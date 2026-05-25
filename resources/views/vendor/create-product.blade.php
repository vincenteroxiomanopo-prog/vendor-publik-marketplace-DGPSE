@extends('layouts.vendor')
@section('title', 'Add New Product')

@section('vendor_content')
<div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-xs">
    <div class="flex items-center space-x-3 border-b border-gray-100 pb-4 mb-6">
        <a href="/vendor/products?role=vendor" class="text-gray-400 hover:text-blue-600 transition"><i class="fa-solid fa-arrow-left"></i></a>
        <h2 class="text-lg font-bold text-gray-900">Tambah Produk / Layanan Baru</h2>
    </div>

    <form class="space-y-5">
        <div>
            <label class="block text-xs font-bold text-gray-600 mb-2">Foto Produk / Layanan *</label>
            <div class="mt-1 flex justify-center px-6 pt-6 pb-6 border-2 border-gray-300 border-dashed rounded-xl hover:bg-gray-50 transition cursor-pointer" onclick="document.getElementById('file-upload').click()">
                <div class="space-y-2 text-center">
                    <i class="fa-regular fa-image text-3xl text-gray-400"></i>
                    <div class="flex text-sm text-gray-600 justify-center">
                        <label for="file-upload" class="relative cursor-pointer rounded-md font-bold text-blue-600 hover:text-blue-700 focus-within:outline-none">
                            <span>Pilih gambar</span>
                            <input id="file-upload" name="file-upload" type="file" class="sr-only" accept="image/*">
                        </label>
                        <p class="pl-1">atau tarik dan lepas ke sini</p>
                    </div>
                    <p class="text-[10px] text-gray-500 font-medium">PNG, JPG, JPEG (Maks. 5MB)</p>
                </div>
            </div>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-600 mb-1">Nama Paket Layanan *</label>
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-xl text-sm focus:ring-blue-500 focus:outline-none" placeholder="Contoh: Paket Prasmanan Mewah 100 Pax">
        </div>
        
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-bold text-gray-600 mb-1">Kategori *</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-xl text-sm focus:ring-blue-500 focus:outline-none">
                    <option>Konsumsi & Catering</option>
                    <option>Audio Visual</option>
                    <option>Dokumentasi</option>
                    <option>Dekorasi & Properti</option>
                </select>
            </div>
            <div>
                <label class="block text-xs font-bold text-gray-600 mb-1">Harga (Rp) *</label>
                <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-xl text-sm focus:ring-blue-500 focus:outline-none" placeholder="Contoh: 3500000">
            </div>
        </div>
        
        <div>
            <label class="block text-xs font-bold text-gray-600 mb-1">Deskripsi Lengkap *</label>
            <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-xl text-sm focus:ring-blue-500 focus:outline-none" placeholder="Jelaskan fasilitas, rincian paket, dan ketentuan khusus..."></textarea>
        </div>
        
        <div class="pt-4 flex justify-end space-x-3 border-t border-gray-100">
            <a href="/vendor/products?role=vendor" class="px-5 py-2.5 text-sm font-semibold text-gray-600 bg-gray-100 rounded-xl hover:bg-gray-200 transition">Batal</a>
            <button type="button" onclick="alert('Produk berhasil ditambahkan!'); window.location.href='/vendor/products?role=vendor'" class="px-5 py-2.5 text-sm font-bold text-white bg-blue-600 rounded-xl hover:bg-blue-700 shadow-sm transition">Simpan Produk</button>
        </div>
    </form>
</div>
@endsection