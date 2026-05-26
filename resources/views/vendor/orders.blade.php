@extends('layouts.vendor')
@section('title', 'Daftar Pesanan Publik')

@section('vendor_content')
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <h2 class="text-xl font-bold text-gray-900">Kelola Pesanan Masuk</h2>
        <p class="text-xs text-gray-500 mt-0.5">Pantau dan perbarui status pengerjaan pesanan pelanggan Anda di sini.</p>
    </div>
    
    <div class="flex space-x-2 bg-white border border-gray-200 p-1 rounded-xl shadow-xs">
        <button class="px-4 py-1.5 text-xs font-bold bg-blue-50 text-blue-600 rounded-lg">Semua</button>
        <button class="px-4 py-1.5 text-xs font-semibold text-gray-500 hover:text-gray-900">Aktif</button>
        <button class="px-4 py-1.5 text-xs font-semibold text-gray-500 hover:text-gray-900">Selesai</button>
    </div>
</div>

<div class="bg-white rounded-2xl border border-gray-200 shadow-xs overflow-hidden">
    <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
        <h3 class="font-bold text-sm text-gray-900">Semua Transaksi</h3>
        <div class="relative">
            <i class="fa-solid fa-magnifying-glass absolute left-3 top-2.5 text-gray-400 text-xs"></i>
            <input type="text" placeholder="Cari ID atau Nama..." class="pl-8 pr-3 py-1.5 border border-gray-300 rounded-lg text-xs w-48 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
            <thead class="bg-gray-50 text-gray-500 font-bold uppercase tracking-wider">
                <tr>
                    <th class="px-5 py-3 border-b border-gray-100">Order ID / Pelanggan</th>
                    <th class="px-5 py-3 border-b border-gray-100">Detail Layanan</th>
                    <th class="px-5 py-3 border-b border-gray-100">Jadwal Acara</th>
                    <th class="px-5 py-3 border-b border-gray-100">Total Tagihan</th>
                    <th class="px-5 py-3 border-b border-gray-100">Status / Escrow</th>
                    <th class="px-5 py-3 border-b border-gray-100 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 font-medium">
                
                <tr class="hover:bg-gray-50/50 transition">
                    <td class="px-5 py-4">
                        <span class="text-blue-600 font-bold block mb-0.5">#ORD-99215</span>
                        <span class="text-gray-900 font-semibold">Agus Setiawan</span>
                    </td>
                    <td class="px-5 py-4">
                        <span class="text-gray-800 font-semibold block">Paket Box Nasi Goreng Spesial</span>
                        <span class="text-[10px] text-gray-500">Qty: 30 Box | Catatan: Sambal pisah</span>
                    </td>
                    <td class="px-5 py-4 text-gray-600">
                        <div class="flex items-center"><i class="fa-regular fa-calendar mr-1.5 text-gray-400"></i> 26 Mei 2026</div>
                        <div class="text-[10px] mt-0.5 text-gray-400">Jam: 08:00 WIB</div>
                    </td>
                    <td class="px-5 py-4 text-gray-900 font-bold">Rp 540.000</td>
                    <td class="px-5 py-4">
                        <span class="bg-amber-50 text-amber-700 text-[10px] font-bold px-2.5 py-1 rounded border border-amber-200 flex items-center w-max">
                            <i class="fa-solid fa-clock mr-1"></i> MENUNGGU KONFIRMASI
                        </span>
                    </td>
                    <td class="px-5 py-4 text-center">
                        <div class="flex justify-center space-x-2">
                            <button class="bg-emerald-600 hover:bg-emerald-700 text-white text-[10px] font-bold px-3 py-1.5 rounded-lg transition shadow-xs" onclick="alert('Pesanan Diterima!')">Terima</button>
                            <button class="bg-red-50 hover:bg-red-100 text-red-600 text-[10px] font-bold px-3 py-1.5 rounded-lg border border-red-200 transition">Tolak</button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50/50 transition bg-blue-50/20">
                    <td class="px-5 py-4">
                        <span class="text-blue-600 font-bold block mb-0.5">#ORD-99210</span>
                        <span class="text-gray-900 font-semibold">Budi Santoso</span>
                    </td>
                    <td class="px-5 py-4">
                        <span class="text-gray-800 font-semibold block">Paket Box Ayam Geprek</span>
                        <span class="text-[10px] text-gray-500">Qty: 50 Box | Catatan: Acara Arisan</span>
                    </td>
                    <td class="px-5 py-4 text-gray-600">
                        <div class="flex items-center"><i class="fa-regular fa-calendar mr-1.5 text-gray-400"></i> 24 Mei 2026</div>
                        <div class="text-[10px] mt-0.5 text-gray-400">Jam: 10:00 WIB</div>
                    </td>
                    <td class="px-5 py-4 text-gray-900 font-bold">Rp 750.000</td>
                    <td class="px-5 py-4">
                        <span class="bg-blue-50 text-blue-700 text-[10px] font-bold px-2.5 py-1 rounded border border-blue-200 flex items-center w-max">
                            <i class="fa-solid fa-shield-halved mr-1"></i> DIPROSES (ESCROW AMAN)
                        </span>
                    </td>
                    <td class="px-5 py-4 text-center">
                        <div class="flex flex-col items-center space-y-2">
                            <button class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 text-[10px] font-bold px-3 py-1.5 rounded-lg transition w-full" onclick="alert('Status diubah menjadi: Sedang Dikirim')">Update Resi / Kirim</button>
                            <a href="/chat-center?role=vendor" class="text-blue-600 hover:text-blue-800 text-[10px] font-bold flex items-center"><i class="fa-solid fa-comment mr-1"></i> Chat Pelanggan</a>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50/50 transition opacity-75">
                    <td class="px-5 py-4">
                        <span class="text-gray-500 font-bold block mb-0.5">#ORD-99184</span>
                        <span class="text-gray-700 font-semibold">Siti Aminah</span>
                    </td>
                    <td class="px-5 py-4">
                        <span class="text-gray-700 font-semibold block">Paket Prasmanan Sederhana</span>
                        <span class="text-[10px] text-gray-500">Qty: 100 Pax | Syukuran Rumah</span>
                    </td>
                    <td class="px-5 py-4 text-gray-500">
                        <div class="flex items-center"><i class="fa-solid fa-check text-emerald-500 mr-1.5"></i> 18 Mei 2026</div>
                        <div class="text-[10px] mt-0.5">Selesai</div>
                    </td>
                    <td class="px-5 py-4 text-gray-900 font-bold line-through decoration-gray-300 text-gray-500">Rp 3.500.000</td>
                    <td class="px-5 py-4">
                        <span class="bg-emerald-50 text-emerald-700 text-[10px] font-bold px-2.5 py-1 rounded border border-emerald-200 flex items-center w-max">
                            <i class="fa-solid fa-check-double mr-1"></i> SELESAI (DANA DICAIRKAN)
                        </span>
                    </td>
                    <td class="px-5 py-4 text-center">
                        <button onclick="openReviewModal('#ORD-99184', 'Siti Aminah')" class="bg-blue-600 hover:bg-blue-700 text-white text-[10px] font-bold px-3 py-1.5 rounded-lg transition shadow-sm w-full">
                            Berikan Ulasan Balik
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    
    <div class="p-4 border-t border-gray-100 flex justify-between items-center bg-gray-50/50 text-xs">
        <span class="text-gray-500">Menampilkan 1 hingga 3 dari 24 pesanan</span>
        <div class="flex space-x-1">
            <button class="px-3 py-1 border border-gray-300 rounded text-gray-400 bg-white cursor-not-allowed">Mundur</button>
            <button class="px-3 py-1 border border-blue-600 rounded text-white bg-blue-600 font-bold">1</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-gray-600 bg-white hover:bg-gray-50">2</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-gray-600 bg-white hover:bg-gray-50">3</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-gray-600 bg-white hover:bg-gray-50">Maju</button>
        </div>
    </div>
</div>

<div id="reviewModal" class="fixed inset-0 z-50 hidden bg-gray-900/60 backdrop-blur-sm flex justify-center items-center opacity-0 transition-opacity duration-300">
    <div class="bg-white w-full max-w-md rounded-3xl shadow-xl overflow-hidden p-6 relative transform scale-95 transition-transform duration-300" id="reviewModalContent">
        
        <button onclick="closeReviewModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>

        <h3 class="font-bold text-gray-900 text-lg mb-1 mt-2">Nilai Pengalaman Anda</h3>
        <p class="text-xs text-gray-500 mb-6">Pesanan: <span id="modal-order-id" class="font-bold text-blue-600"></span> (<span id="modal-customer-name"></span>)</p>
        
        <form action="#" onsubmit="event.preventDefault(); submitReviewMockup();">
            {{-- ratiN bitan --}}
            <div class="mb-5 text-center bg-gray-50 p-4 rounded-2xl border border-gray-100">
                <label class="block text-xs font-bold text-gray-600 mb-2">Beri Bintang untuk Pembeli Ini</label>
                <div class="flex justify-center space-x-3 text-3xl text-gray-300" id="starContainer">
                    <i class="fa-solid fa-star text-amber-400 cursor-pointer hover:scale-110 transition"></i>
                    <i class="fa-solid fa-star text-amber-400 cursor-pointer hover:scale-110 transition"></i>
                    <i class="fa-solid fa-star text-amber-400 cursor-   pointer hover:scale-110 transition"></i>
                    <i class="fa-solid fa-star text-amber-400 cursor-pointer hover:scale-110 transition"></i>
                    <i class="fa-solid fa-star text-amber-400 cursor-pointer hover:scale-110 transition"></i>
                </div>
            </div>

            <div class="mb-5">
                <label class="block text-xs font-bold text-gray-600 mb-2">Penilaian Cepat (Bisa pilih lebih dari satu)</label>
                <div class="flex flex-wrap gap-2">
                    <button type="button" onclick="this.classList.toggle('bg-blue-600'); this.classList.toggle('text-white'); this.classList.toggle('border-blue-600');" class="px-3 py-1.5 rounded-xl bg-white text-gray-600 text-xs font-semibold hover:bg-gray-50 transition border border-gray-200">Pembeli Ramah</button>
                    <button type="button" onclick="this.classList.toggle('bg-blue-600'); this.classList.toggle('text-white'); this.classList.toggle('border-blue-600');" class="px-3 py-1.5 rounded-xl bg-white text-gray-600 text-xs font-semibold hover:bg-gray-50 transition border border-gray-200">Sangat Komunikatif</button>
                    <button type="button" onclick="this.classList.toggle('bg-blue-600'); this.classList.toggle('text-white'); this.classList.toggle('border-blue-600');" class="px-3 py-1.5 rounded-xl bg-white text-gray-600 text-xs font-semibold hover:bg-gray-50 transition border border-gray-200">Titik Lokasi Akurat</button>
                    <button type="button" onclick="this.classList.toggle('bg-red-500'); this.classList.toggle('text-white'); this.classList.toggle('border-red-500');" class="px-3 py-1.5 rounded-xl bg-white text-gray-600 text-xs font-semibold hover:bg-gray-50 transition border border-gray-200">Sulit Dihubungi</button>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-xs font-bold text-gray-600 mb-2">Ulasan Tertulis (Opsional)</label>
                <textarea rows="3" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-xs focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 hover:bg-white transition" placeholder="Tuliskan pengalaman Anda melayani pembeli ini..."></textarea>
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t border-gray-100">
                <button type="button" onclick="closeReviewModal()" class="px-5 py-2.5 text-xs font-semibold text-gray-600 bg-gray-100 rounded-xl hover:bg-gray-200 transition">Batal</button>
                <button type="submit" class="px-5 py-2.5 text-xs font-bold text-white bg-blue-600 rounded-xl hover:bg-blue-700 shadow-sm transition flex items-center">
                    <i class="fa-solid fa-paper-plane mr-2"></i> Kirim Ulasan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const reviewModal = document.getElementById('reviewModal');
    const reviewModalContent = document.getElementById('reviewModalContent');

    function openReviewModal(orderId, customerName) {
        // Set teks ID dan Nama di dalam modal
        document.getElementById('modal-order-id').innerText = orderId;
        document.getElementById('modal-customer-name').innerText = customerName;
        
        // Tampilkan modal dengan animasi
        reviewModal.classList.remove('hidden');
        setTimeout(() => {
            reviewModal.classList.remove('opacity-0');
            reviewModalContent.classList.remove('scale-95');
        }, 10);
    }

    function closeReviewModal() {
        // Tutup modal dengan animasi
        reviewModal.classList.add('opacity-0');
        reviewModalContent.classList.add('scale-95');
        setTimeout(() => {
            reviewModal.classList.add('hidden');
        }, 300);
    }

    function submitReviewMockup() {
        alert('Terima kasih! Ulasan Anda untuk pembeli ini telah berhasil disimpan.');
        closeReviewModal();
        
        // Opsional: Ubah tombol menjadi "Ulasan Terkirim" setelah disubmit
        const btn = document.querySelector(`button[onclick*="openReviewModal"]`);
        if(btn) {
            btn.innerHTML = '<i class="fa-solid fa-check mr-1"></i> Ulasan Terkirim';
            btn.classList.remove('bg-blue-600', 'hover:bg-blue-700');
            btn.classList.add('bg-emerald-500', 'hover:bg-emerald-600', 'cursor-default');
            btn.removeAttribute('onclick'); // Nonaktifkan klik setelah diulas
        }
    }
</script>
@endsection