@extends('layouts.app')

@section('title', 'Login Pengguna')

@section('content')
<div class="min-h-[75vh] flex flex-col items-center justify-center px-4 py-12 sm:px-6 lg:px-8 bg-gradient-to-b from-blue-50 to-white">
    
    <div class="max-w-md w-full mb-4">
        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-blue-600 transition">
            <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Beranda
        </a>
    </div>

    <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-md border border-gray-100 space-y-6">
        <div>
            <div class="mx-auto h-12 w-12 rounded-xl bg-blue-600 flex items-center justify-center text-white font-bold text-xl shadow-md">
                NT
            </div>
            <h2 id="login-title" class="mt-4 text-center text-2xl font-bold tracking-tight text-gray-900">
                Masuk ke Aplikasi
            </h2>
        </div>

        <div class="bg-gray-100 p-1 rounded-xl grid grid-cols-2 text-center text-sm font-semibold">
            <button id="tab-publik" type="button" class="bg-white text-blue-600 shadow-xs py-2.5 rounded-lg transition flex items-center justify-center space-x-2">
                <i class="fa-solid fa-user text-xs"></i>
                <span>Login Publik</span>
            </button>
            <button id="tab-vendor" type="button" class="text-gray-500 hover:text-gray-900 py-2.5 rounded-lg transition flex items-center justify-center space-x-2">
                <i class="fa-solid fa-briefcase text-xs"></i>
                <span>Login Vendor</span>
            </button>
        </div>
        
        <form class="space-y-4" action="#" method="POST">
            <div>
                <label id="label-identity" for="identity" class="block text-xs font-semibold uppercase tracking-wide text-gray-600 mb-1">Email Publik</label>
                <input id="identity" name="identity" type="text" required class="appearance-none rounded-xl relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="contoh: nama@email.com">
            </div>
            <div>
                <div class="flex justify-between items-center mb-1">
                    <label for="password" class="block text-xs font-semibold uppercase tracking-wide text-gray-600">Password</label>
                    <a href="#" class="text-xs font-medium text-blue-600 hover:underline">Lupa password?</a>
                </div>
                <input id="password" name="password" type="password" required class="appearance-none rounded-xl relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-400 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="••••••••">
            </div>

            <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded-md">
                <label for="remember-me" class="ml-2 block text-sm text-gray-600">
                    Ingat perangkat saya
                </label>
            </div>

            <div>
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-semibold rounded-xl text-white bg-blue-600 hover:bg-blue-700 transition shadow-sm">
                    Masuk Sekarang
                </button>
            </div>
        </form>

        <div class="relative my-4">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-200"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-400 uppercase text-xs tracking-wider">Atau masuk via</span>
            </div>
        </div>

        <div>
            <a href="#" class="w-full inline-flex justify-center py-2.5 px-4 border border-gray-300 rounded-xl bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 shadow-sm transition items-center space-x-2">
                <i class="fa-brands fa-google text-red-500 text-base"></i>
                <span>Masuk dengan Google</span>
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabPublik = document.getElementById('tab-publik');
        const tabVendor = document.getElementById('tab-vendor');
        const inputIdentity = document.getElementById('identity');
        const labelIdentity = document.getElementById('label-identity');
        const loginTitle = document.getElementById('login-title');

        // Class Tailwind untuk state aktif (warna biru, background putih)
        const activeClasses = ['bg-white', 'text-blue-600', 'shadow-xs'];
        // Class Tailwind untuk state tidak aktif (abu-abu, hover gelap)
        const inactiveClasses = ['text-gray-500', 'hover:text-gray-900'];

        tabVendor.addEventListener('click', function() {
            // Ubah tombol Vendor jadi aktif
            tabVendor.classList.add(...activeClasses);
            tabVendor.classList.remove(...inactiveClasses);
            
            // Ubah tombol Publik jadi tidak aktif
            tabPublik.classList.remove(...activeClasses);
            tabPublik.classList.add(...inactiveClasses);

            // Ubah teks form menyesuaikan Vendor
            loginTitle.innerText = "Masuk sebagai Vendor";
            labelIdentity.innerText = "Email Vendor / Nama Toko";
            inputIdentity.placeholder = "contoh: vendor@bisnis.com";
        });

        tabPublik.addEventListener('click', function() {
            // Ubah tombol Publik jadi aktif
            tabPublik.classList.add(...activeClasses);
            tabPublik.classList.remove(...inactiveClasses);
            
            // Ubah tombol Vendor jadi tidak aktif
            tabVendor.classList.remove(...activeClasses);
            tabVendor.classList.add(...inactiveClasses);

            // Ubah teks form menyesuaikan Publik
            loginTitle.innerText = "Masuk ke Aplikasi";
            labelIdentity.innerText = "Email Publik";
            inputIdentity.placeholder = "contoh: nama@email.com";
        });
    });
</script>
@endsection