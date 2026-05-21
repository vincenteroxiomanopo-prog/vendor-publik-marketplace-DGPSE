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
            <div class="mx-auto h-12 w-12 rounded-xl bg-blue-600 flex items-center justify-center text-white font-bold text-xl shadow-md">NT</div>
            <h2 id="login-title" class="mt-4 text-center text-2xl font-bold tracking-tight text-gray-900">Masuk ke Aplikasi</h2>
        </div>

        <div class="bg-gray-100 p-1 rounded-xl grid grid-cols-2 text-center text-sm font-semibold">
            <button id="tab-publik" type="button" class="bg-white text-blue-600 shadow-xs py-2.5 rounded-lg transition flex items-center justify-center space-x-2">
                <i class="fa-solid fa-user text-xs"></i><span>Login Publik</span>
            </button>
            <button id="tab-vendor" type="button" class="text-gray-500 hover:text-gray-900 py-2.5 rounded-lg transition flex items-center justify-center space-x-2">
                <i class="fa-solid fa-briefcase text-xs"></i><span>Login Vendor</span>
            </button>
        </div>
        
        <form class="space-y-4" action="#" method="GET">
            <div>
                <label id="label-identity" class="block text-xs font-semibold uppercase tracking-wide text-gray-600 mb-1">Email Publik</label>
                <input id="identity" type="text" class="appearance-none rounded-xl block w-full px-3 py-3 border border-gray-300 placeholder-gray-400 text-gray-900 focus:ring-2 focus:ring-blue-500 sm:text-sm" placeholder="contoh: nama@email.com">
            </div>
            <div>
                <div class="flex justify-between items-center mb-1">
                    <label class="block text-xs font-semibold uppercase tracking-wide text-gray-600">Password</label>
                </div>
                <input type="password" class="appearance-none rounded-xl block w-full px-3 py-3 border border-gray-300 placeholder-gray-400 text-gray-900 focus:ring-2 focus:ring-blue-500 sm:text-sm" placeholder="••••••••">
            </div>

            <div>
                <a id="btn-login-action" href="/?role=publik" class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-semibold rounded-xl text-white bg-blue-600 hover:bg-blue-700 transition shadow-sm">
                    Masuk Sekarang
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabPublik = document.getElementById('tab-publik');
        const tabVendor = document.getElementById('tab-vendor');
        const inputIdentity = document.getElementById('identity');
        const labelIdentity = document.getElementById('label-identity');
        const loginTitle = document.getElementById('login-title');
        const btnLoginAction = document.getElementById('btn-login-action');

        const activeClasses = ['bg-white', 'text-blue-600', 'shadow-xs'];
        const inactiveClasses = ['text-gray-500', 'hover:text-gray-900'];

        tabVendor.addEventListener('click', function() {
            tabVendor.classList.add(...activeClasses);
            tabVendor.classList.remove(...inactiveClasses);
            tabPublik.classList.remove(...activeClasses);
            tabPublik.classList.add(...inactiveClasses);

            loginTitle.innerText = "Masuk sebagai Vendor";
            labelIdentity.innerText = "Email Vendor / Nama Toko";
            inputIdentity.placeholder = "contoh: vendor@bisnis.com";
            
            // Arahkan ke beranda dengan role vendor
            btnLoginAction.href = "/?role=vendor";
        });

        tabPublik.addEventListener('click', function() {
            tabPublik.classList.add(...activeClasses);
            tabPublik.classList.remove(...inactiveClasses);
            tabVendor.classList.remove(...activeClasses);
            tabVendor.classList.add(...inactiveClasses);

            loginTitle.innerText = "Masuk ke Aplikasi";
            labelIdentity.innerText = "Email Publik";
            inputIdentity.placeholder = "contoh: nama@email.com";
            
            // Arahkan ke beranda dengan role publik
            btnLoginAction.href = "/?role=publik";
        });
    });
</script>
@endsection