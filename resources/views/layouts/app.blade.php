<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | NousTech Vendor Publik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen">

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="bg-blue-600 text-white p-2 rounded-lg font-bold tracking-wider text-sm shadow-sm">
                    NT
                </div>
                <span class="text-xl font-bold text-gray-900">Vendor<span class="text-blue-600">Publik</span></span>
            </div>

            <nav class="hidden md:flex space-x-8 font-medium text-sm text-gray-600">
                <a href="#" class="hover:text-blue-600 transition flex items-center space-x-1">
                    <i class="fa-solid fa-utensils text-gray-400"></i> <span>Catering</span>
                </a>
                <a href="#" class="hover:text-blue-600 transition flex items-center space-x-1">
                    <i class="fa-solid fa-bullhorn text-gray-400"></i> <span>Sound & Tenda</span>
                </a>
                <a href="#" class="hover:text-blue-600 transition flex items-center space-x-1">
                    <i class="fa-solid fa-camera text-gray-400"></i> <span>Dokumentasi</span>
                </a>
                <a href="#" class="hover:text-blue-600 transition flex items-center space-x-1">
                    <i class="fa-solid fa-building-user text-gray-400"></i> <span>Venue & Dekor</span>
                </a>
            </nav>

            <div class="flex items-center space-x-4">
                <a href="/login" class="text-sm font-semibold text-gray-700 hover:text-blue-600 transition px-3 py-2 rounded-md">Login</a>
                <a href="#" class="text-sm font-semibold bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition shadow-sm">Daftar</a>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-white border-t border-gray-200 pt-12 pb-6 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <div class="bg-blue-600 text-white p-1.5 rounded font-bold text-xs">NT</div>
                    <span class="font-bold text-lg text-gray-900">NousTech Group</span>
                </div>
                <p class="text-xs text-gray-500 leading-relaxed">
                    Solusi digital berbasis Sharing Economy untuk mempermudah pencarian vendor, transparansi harga, dan keamanan transaksi bagi segala jenis acara Anda.
                </p>
            </div>
            <div>
                <h4 class="font-semibold text-sm text-gray-900 mb-4 tracking-wider uppercase">Layanan</h4>
                <ul class="space-y-2 text-xs text-gray-600">
                    <li><a href="#" class="hover:text-blue-600">Cari Vendor</a></li>
                    <li><a href="#" class="hover:text-blue-600">Gabung Mitra Vendor</a></li>
                    <li><a href="#" class="hover:text-blue-600">Fitur Premium</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-sm text-gray-900 mb-4 tracking-wider uppercase">Bantuan</h4>
                <ul class="space-y-2 text-xs text-gray-600">
                    <li><a href="#" class="hover:text-blue-600">Pusat Bantuan</a></li>
                    <li><a href="#" class="hover:text-blue-600">Sistem Escrow Pihak Ketiga</a></li>
                    <li><a href="#" class="hover:text-blue-600">Kebijakan Privasi</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-sm text-gray-900 mb-4 tracking-wider uppercase">Keamanan Transaksi</h4>
                <div class="flex flex-wrap gap-2 text-gray-400 text-2xl mb-4">
                    <i class="fa-brands fa-cc-visa text-gray-500"></i>
                    <i class="fa-solid fa-shield-halved text-blue-600"></i>
                    <span class="text-xs font-semibold self-center text-gray-500 bg-gray-100 px-2 py-1 rounded">Secure Escrow</span>
                </div>
                <p class="text-xs text-gray-400">Dana Anda ditahan dengan aman oleh sistem pembayaran hingga jasa selesai diberikan oleh vendor.</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-t border-gray-100 mt-8 pt-6 text-center text-xs text-gray-400">
            &copy; 2026 NousTech Group. All rights reserved. Platform Marketplace Vendor Acara & Publik.
        </div>
    </footer>

</body>
</html>