@extends('layouts.app')

@section('title', 'Checkout & Booking Vendor')

@section('content')
<div class="bg-gray-50 py-8 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-8">
            <button onclick="window.history.back()" class="text-xs font-bold text-gray-500 hover:text-blue-600 mb-4 inline-block"><i class="fa-solid fa-arrow-left mr-1"></i> Kembali</button>
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
                        <p class="font-semibold text-gray-900">Vincente Roxio Manopo</p>
                        <p class="text-gray-600 mt-1"><i class="fa-solid fa-phone text-xs mr-1 text-gray-400"></i> +62 812-3456-7890</p>
                        <p class="text-gray-600 mt-1"><i class="fa-solid fa-envelope text-xs mr-1 text-gray-400"></i> vincente.manopo@ukdw.ac.id</p>
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

                        <button type="button" onclick="openPaymentModal()" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-xl text-sm shadow-md transition flex items-center justify-center space-x-2 text-center">
                            <i class="fa-solid fa-lock"></i>
                            <span>Bayar via OVO</span>
                        </button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div id="paymentModal" class="fixed inset-0 z-[100] hidden bg-gray-900/70 backdrop-blur-sm flex justify-center items-center opacity-0 transition-opacity duration-300">
    <div class="bg-white w-full max-w-sm rounded-3xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300 relative" id="modalContent">
        
        <div class="bg-purple-600 p-6 text-center text-white relative">
            <button onclick="closePaymentModal()" class="absolute top-4 right-4 text-white/70 hover:text-white"><i class="fa-solid fa-xmark text-xl"></i></button>
            <div class="w-12 h-12 bg-white rounded-full mx-auto flex items-center justify-center text-purple-600 font-black italic text-lg shadow-md mb-2">OVO</div>
            <h3 class="font-bold">Konfirmasi Pembayaran</h3>
            <p class="text-xs text-purple-200 mt-1">Merchant: NousTech Escrow</p>
        </div>

        <div class="p-6 text-center" id="pinSection">
            <p class="text-gray-500 text-xs font-bold uppercase tracking-wider mb-2">Total Pembayaran</p>
            <p class="text-3xl font-black text-gray-900 mb-6" id="modal-total-display">Rp 757.500</p>
            
            <p class="text-sm text-gray-600 mb-4 font-medium">Masukkan Security Code (PIN) OVO Anda</p>
            
            <div class="flex justify-center mb-6">
                <input type="password" id="ovoPin" maxlength="6" class="w-48 text-center text-3xl tracking-[1em] font-black text-gray-800 border-b-2 border-purple-600 focus:outline-none focus:border-purple-800 bg-transparent py-2" autocomplete="off" placeholder="••••••">
            </div>

            <button onclick="processPayment()" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-4 rounded-xl text-sm shadow-md transition">
                Konfirmasi & Bayar
            </button>
        </div>

        <div class="p-10 text-center hidden" id="loadingSection">
            <i class="fa-solid fa-circle-notch fa-spin text-4xl text-purple-600 mb-4"></i>
            <h3 class="font-bold text-gray-900 text-lg">Memproses Pembayaran...</h3>
            <p class="text-xs text-gray-500 mt-2">Menghubungi API OVO Secure</p>
        </div>

        <div class="p-10 text-center hidden" id="successSection">
            <div class="w-16 h-16 bg-emerald-100 rounded-full mx-auto flex items-center justify-center text-emerald-500 text-3xl mb-4">
                <i class="fa-solid fa-check"></i>
            </div>
            <h3 class="font-bold text-gray-900 text-xl">Pembayaran Berhasil!</h3>
            <p class="text-xs text-gray-500 mt-2 mb-6">Dana Anda telah masuk ke sistem Escrow.</p>
            <a href="/dashboard-publik?role={{ $role ?? 'publik' }}" class="w-full inline-block bg-gray-900 hover:bg-black text-white font-bold py-3 px-4 rounded-xl text-sm shadow-md transition">
                Kembali ke Dashboard
            </a>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // --- LOGIKA PERHITUNGAN HARGA (EKSISTING) ---
        const btnMinus = document.getElementById('btn-minus');
        const btnPlus = document.getElementById('btn-plus');
        const qtyDisplay = document.getElementById('qty-display');
        const subtotalDisplay = document.getElementById('subtotal-display');
        const feeDisplay = document.getElementById('fee-display');
        const totalDisplay = document.getElementById('total-display');
        const modalTotalDisplay = document.getElementById('modal-total-display');

        const pricePerItem = 15000; // Harga paket porsi

        function calculatePrices() {
            let qty = parseInt(qtyDisplay.innerText);
            let subtotal = qty * pricePerItem;
            let fee = Math.round(subtotal * 0.01); // Hitung biaya platform 1%
            let total = subtotal + fee;

            // Update teks ke format rupiah Indonesia
            let formattedTotal = 'Rp ' + total.toLocaleString('id-ID');
            subtotalDisplay.innerText = 'Rp ' + subtotal.toLocaleString('id-ID');
            feeDisplay.innerText = 'Rp ' + fee.toLocaleString('id-ID');
            totalDisplay.innerText = formattedTotal;
            modalTotalDisplay.innerText = formattedTotal; // Update juga harga di dalam Pop-Up Modal
        }

        btnMinus.addEventListener('click', function(e) {
            e.stopPropagation();
            let qty = parseInt(qtyDisplay.innerText);
            if (qty > 20) { 
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

    // --- LOGIKA MODAL API MOCKUP OVO ---
    const modal = document.getElementById('paymentModal');
    const modalContent = document.getElementById('modalContent');
    const pinSection = document.getElementById('pinSection');
    const loadingSection = document.getElementById('loadingSection');
    const successSection = document.getElementById('successSection');
    const ovoPin = document.getElementById('ovoPin');

    function openPaymentModal() {
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modalContent.classList.remove('scale-95');
        }, 10);
        ovoPin.value = ''; 
        
        // Reset section status if reopened
        pinSection.classList.remove('hidden');
        loadingSection.classList.add('hidden');
        successSection.classList.add('hidden');

        setTimeout(() => ovoPin.focus(), 200); 
    }

    function closePaymentModal() {
        modal.classList.add('opacity-0');
        modalContent.classList.add('scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }

    function processPayment() {
        if(ovoPin.value.length < 6) {
            alert('Silakan masukkan 6 digit PIN OVO Anda.');
            return;
        }

        pinSection.classList.add('hidden');
        loadingSection.classList.remove('hidden');

        setTimeout(() => {
            loadingSection.classList.add('hidden');
            successSection.classList.remove('hidden');
        }, 2500);
    }
</script>
@endsection