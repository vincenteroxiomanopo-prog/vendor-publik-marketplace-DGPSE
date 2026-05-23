@extends('layouts.app')

@section('title', 'Checkout & Booking Vendor')

@section('content')
<div class="bg-gray-50 py-8 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900">Formulir Pemesanan & Checkout</h1>
            <p class="text-sm text-gray-500 mt-1">Selesaikan detail pesanan Anda. Dana Anda akan diamankan oleh sistem Escrow.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="md:col-span-2 space-y-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200">
                    <h2 class="font-bold text-gray-800 border-b border-gray-100 pb-3 mb-4"><i class="fa-solid fa-calendar-check text-blue-600 mr-2"></i> Detail Acara</h2>
                    
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-gray-600 mb-1">Tanggal Acara *</label>
                                <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-xl text-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-600 mb-1">Waktu Mulai *</label>
                                <input type="time" class="w-full px-3 py-2 border border-gray-300 rounded-xl text-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-600 mb-1">Alamat Lengkap Pengiriman/Acara *</label>
                            <textarea rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-xl text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Tuliskan alamat lengkap beserta patokan jalan..."></textarea>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-600 mb-1">Catatan Tambahan untuk Vendor</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-xl text-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Misal: Sambal dipisah, loading barang jam 8 pagi, dll.">
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200">
                    <h2 class="font-bold text-gray-800 border-b border-gray-100 pb-3 mb-4"><i class="fa-solid fa-user text-blue-600 mr-2"></i> Data Pemesan</h2>
                    <div class="bg-gray-50 p-4 rounded-xl border border-gray-100 text-sm">
                        <p class="font-semibold text-gray-900">Budi Santoso</p>
                        <p class="text-gray-600 mt-1"><i class="fa-solid fa-phone text-xs mr-1 text-gray-400"></i> +62 812-3456-7890</p>
                        <p class="text-gray-600 mt-1"><i class="fa-solid fa-envelope text-xs mr-1 text-gray-400"></i> budi.santoso@email.com</p>
                    </div>
                </div>
            </div>

            <div class="md:col-span-1 space-y-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 sticky top-24">
                    <h2 class="font-bold text-gray-800 border-b border-gray-100 pb-3 mb-4">Ringkasan Pesanan</h2>
                    
                    <div class="flex items-start space-x-3 mb-4">
                        <div class="w-12 h-12 bg-gray-200 rounded-lg overflow-hidden shrink-0">
                            <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=150&q=80" alt="Vendor" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-900">Toyib Catering & Prasmanan</h3>
                            <p class="text-[10px] text-gray-500">Paket Box Ayam Geprek + Es Teh</p>
                        </div>
                    </div>

                    <div class="flex justify-between items-center bg-gray-50 p-3 rounded-xl mb-4 border border-gray-100">
                        <span class="text-xs font-semibold text-gray-600">Jumlah Pesanan</span>
                        <div class="flex items-center space-x-3">
                            <button id="btn-minus" type="button" class="w-6 h-6 rounded bg-white border border-gray-300 text-gray-600 flex items-center justify-center hover:bg-gray-100 font-bold focus:outline-none">-</button>
                            <span id="qty-display" class="text-sm font-bold text-gray-900">50</span>
                            <button id="btn-plus" type="button" class="w-6 h-6 rounded bg-white border border-gray-300 text-gray-600 flex items-center justify-center hover:bg-gray-100 font-bold focus:outline-none">+</button>
                        </div>
                    </div>

                    <div class="space-y-2 text-sm text-gray-600 border-b border-gray-100 pb-4 mb-4">
                        <div class="flex justify-between">
                            <span>Harga Satuan</span>
                            <span>Rp 15.000</span>
                        </div>
                        <div class="flex justify-between font-medium">
                            <span>Subtotal</span>
                            <span id="subtotal-display">Rp 750.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Biaya Platform (1%)</span>
                            <span id="fee-display">Rp 7.500</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-4">
                        <span class="font-bold text-gray-900">Total Tagihan</span>
                        <span id="total-display" class="text-xl font-black text-red-500">Rp 757.500</span>
                    </div>

                    <div class="bg-emerald-50 border border-emerald-100 p-3 rounded-xl mb-4 flex items-start space-x-3">
                        <i class="fa-solid fa-shield-halved text-emerald-600 mt-0.5"></i>
                        <div>
                            <p class="text-xs font-bold text-emerald-800">Pembayaran Aman (Escrow)</p>
                            <p class="text-[10px] text-emerald-600 mt-0.5 leading-relaxed">Dana Anda ditahan oleh sistem kami dan baru diteruskan ke vendor setelah acara selesai.</p>
                        </div>
                    </div>

                    @php
                        $role = request()->query('role');
                    @endphp

                    <div class="space-y-2">
                        <a href="#" onclick="alert('Membuka chat interaktif dengan Toyib Catering...');" class="w-full border border-gray-300 hover:border-gray-400 bg-white text-gray-700 font-bold py-2.5 px-4 rounded-xl text-xs transition flex items-center justify-center space-x-2 text-center shadow-xs">
                            <i class="fa-solid fa-comments text-gray-400"></i>
                            <span>Hubungi Vendor (Tanya Jadwal)</span>
                        </a>

                        <a href="/dashboard-publik?role={{ $role }}" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-xl text-sm shadow-md transition flex items-center justify-center space-x-2 text-center">
                            <i class="fa-solid fa-lock"></i>
                            <span>Bayar Sekarang</span>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnMinus = document.getElementById('btn-minus');
        const btnPlus = document.getElementById('btn-plus');
        const qtyDisplay = document.getElementById('qty-display');
        const subtotalDisplay = document.getElementById('subtotal-display');
        const feeDisplay = document.getElementById('fee-display');
        const totalDisplay = document.getElementById('total-display');

        const pricePerItem = 15000; // Harga paket porsi

        function calculatePrices() {
            let qty = parseInt(qtyDisplay.innerText);
            let subtotal = qty * pricePerItem;
            let fee = Math.round(subtotal * 0.01); // Hitung biaya platform 1%
            let total = subtotal + fee;

            // Update teks ke format rupiah Indonesia
            subtotalDisplay.innerText = 'Rp ' + subtotal.toLocaleString('id-ID');
            feeDisplay.innerText = 'Rp ' + fee.toLocaleString('id-ID');
            totalDisplay.innerText = 'Rp ' + total.toLocaleString('id-ID');
        }

        btnMinus.addEventListener('click', function(e) {
            e.stopPropagation();
            let qty = parseInt(qtyDisplay.innerText);
            if (qty > 20) { // Batasan minimal order 20 paket sesuai widget detail
                qtyDisplay.innerText = qty - 1;
                calculatePrices();
            } else {
                alert('Batas Minimal Order vendor ini adalah 20 Pax / Box');
            }
        });

        btnPlus.addEventListener('click', function(e) {
            e.stopPropagation();
            let qty = parseInt(qtyDisplay.innerText);
            qtyDisplay.innerText = qty + 1;
            calculatePrices();
        });
    });
</script>
@endsection