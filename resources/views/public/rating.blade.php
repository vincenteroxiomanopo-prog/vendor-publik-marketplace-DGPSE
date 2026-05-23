@extends('layouts.public')

@section('public_content')
@php
    $vendorName = request()->query('vendor', 'Toyib Catering');
    $orderId    = request()->query('order', 'ORD-99100');
    $total      = request()->query('total', '1.500.000');
@endphp

<div class="mb-4">
    <button onclick="window.history.back()"
        class="inline-flex items-center text-sm font-semibold text-gray-500 hover:text-blue-600 transition bg-white px-4 py-2 rounded-xl shadow-sm border border-gray-200">
        <i class="fa-solid fa-arrow-left mr-2"></i> Kembali
    </button>
</div>

{{-- Info pesanan yang akan dirating --}}
<div class="bg-white border border-gray-100 shadow-sm rounded-2xl p-5 mb-6 flex items-center space-x-4">
    <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center shrink-0">
        <i class="fa-solid fa-circle-check text-xl"></i>
    </div>
    <div class="flex-grow">
        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Pesanan Selesai</p>
        <h3 class="font-bold text-gray-900 text-sm mt-0.5">{{ $vendorName }}</h3>
        <p class="text-xs text-gray-500">ID #{{ $orderId }} &nbsp;·&nbsp; Total Rp {{ $total }}</p>
    </div>
    <span class="bg-emerald-50 text-emerald-700 text-[10px] font-bold px-3 py-1 rounded-full border border-emerald-100">
        Dana Escrow Dicairkan ✓
    </span>
</div>

{{-- Form Rating --}}
<div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8">
    <div class="text-center mb-8">
        <h2 class="text-xl font-bold text-gray-900">Bagaimana pengalaman Anda?</h2>
        <p class="text-sm text-gray-500 mt-1">Rating Anda membantu vendor berkembang dan membantu pengguna lain dalam memilih.</p>
    </div>

    {{-- Bintang interaktif --}}
    <div class="flex justify-center mb-8">
        <div class="flex space-x-3" id="star-container">
            @for ($i = 1; $i <= 5; $i++)
                <button type="button"
                    onclick="setRating({{ $i }})"
                    onmouseover="hoverRating({{ $i }})"
                    onmouseout="resetHover()"
                    id="star-{{ $i }}"
                    class="star-btn text-5xl text-gray-200 hover:scale-110 transition-transform duration-100 focus:outline-none leading-none">
                    <i class="fa-solid fa-star"></i>
                </button>
            @endfor
        </div>
    </div>

    {{-- Label deskripsi rating --}}
    <div class="text-center mb-6">
        <span id="rating-label" class="text-sm font-semibold text-gray-400 italic">Pilih bintang di atas</span>
        <input type="hidden" id="rating-value" name="rating" value="0">
    </div>

    {{-- Komentar --}}
    <div class="mb-6">
        <label class="block text-sm font-bold text-gray-700 mb-2">
            <i class="fa-regular fa-comment-dots mr-1 text-gray-400"></i> Tulis Ulasan Anda
        </label>
        <textarea id="review-text" rows="4"
            placeholder="Ceritakan pengalaman Anda — kecepatan pelayanan, kualitas produk, ketepatan waktu, dan lain-lain..."
            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 resize-none text-gray-800"></textarea>
        <p class="text-[10px] text-gray-400 mt-1 text-right"><span id="char-count">0</span> / 500 karakter</p>
    </div>

    {{-- Tips --}}
    <div class="bg-amber-50 border border-amber-100 rounded-xl p-4 mb-6 flex items-start space-x-3">
        <i class="fa-solid fa-lightbulb text-amber-500 mt-0.5 shrink-0"></i>
        <p class="text-xs text-amber-800 leading-relaxed">
            Rating bersifat permanen dan akan ditampilkan di halaman vendor. Pastikan ulasan Anda jujur dan berdasarkan pengalaman nyata dari transaksi ini.
        </p>
    </div>

    {{-- Tombol --}}
    <div class="flex justify-end space-x-3">
        <button onclick="window.history.back()"
            class="px-6 py-2.5 text-sm font-semibold text-gray-600 bg-gray-100 rounded-xl hover:bg-gray-200 transition">
            Lewati
        </button>
        <button onclick="submitRating()"
            class="px-8 py-2.5 text-sm font-semibold text-white bg-amber-500 hover:bg-amber-600 rounded-xl transition shadow-sm flex items-center space-x-2">
            <i class="fa-solid fa-paper-plane"></i>
            <span>Kirim Rating & Selesai</span>
        </button>
    </div>
</div>

<script>
    let currentRating = 0;
    const labels = ['', 'Sangat Mengecewakan', 'Kurang Memuaskan', 'Cukup Baik', 'Memuaskan', 'Luar Biasa! ⭐'];
    const colors  = ['', 'text-red-400', 'text-orange-400', 'text-yellow-400', 'text-amber-400', 'text-amber-500'];

    function setRating(val) {
        currentRating = val;
        document.getElementById('rating-value').value = val;
        document.getElementById('rating-label').textContent = labels[val];
        document.getElementById('rating-label').className = 'text-sm font-semibold ' + colors[val];
        paintStars(val);
    }

    function hoverRating(val) { paintStars(val); }
    function resetHover() { paintStars(currentRating); }

    function paintStars(val) {
        for (let i = 1; i <= 5; i++) {
            const btn = document.getElementById('star-' + i);
            btn.className = 'star-btn text-5xl hover:scale-110 transition-transform duration-100 focus:outline-none leading-none '
                + (i <= val ? 'text-amber-400' : 'text-gray-200');
        }
    }

    document.getElementById('review-text').addEventListener('input', function () {
        const len = this.value.length;
        if (len > 500) { this.value = this.value.substring(0, 500); }
        document.getElementById('char-count').textContent = Math.min(len, 500);
    });

    function submitRating() {
        if (currentRating === 0) {
            alert('Mohon pilih bintang terlebih dahulu sebelum mengirim rating.');
            return;
        }
        const review = document.getElementById('review-text').value.trim();
        if (!review) {
            alert('Mohon tuliskan ulasan singkat Anda agar vendor dapat terus meningkatkan layanannya.');
            return;
        }
        alert('Terima kasih! Rating ' + currentRating + ' bintang Anda untuk {{ $vendorName }} berhasil dikirim.\n\nAnda akan kembali ke Dashboard.');
        window.location.href = '/dashboard-publik';
    }
</script>
@endsection