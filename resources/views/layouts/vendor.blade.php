<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Vendor') | NousTech Vendor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen">

    <header class="bg-gray-900 text-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="bg-blue-500 text-white p-1.5 rounded-lg font-bold text-xs">PRO</div>
                <span class="text-lg font-bold tracking-tight">Vendor <span class="text-blue-400">KitaBersama</span></span>
            </div>
            <div class="flex items-center space-x-6">
                <a href="/?role=vendor" class="text-xs font-semibold text-gray-400 hover:text-white transition"><i class="fa-solid fa-globe mr-1"></i> Lihat Beranda Publik</a>
                <div class="flex items-center space-x-2 border-l border-gray-700 pl-4">
                    <div class="w-8 h-8 bg-emerald-600 rounded-full flex items-center justify-center font-bold text-xs shadow-sm text-white">TC</div>
                    <span class="text-xs font-semibold hidden md:inline">Toyib Catering</span>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 grid grid-cols-1 lg:grid-cols-4 gap-8 flex-grow">
        
        <div class="lg:col-span-1 space-y-4">
            <div class="bg-white p-4 rounded-2xl border border-gray-200 shadow-xs space-y-1">
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider px-3 mb-2">Menu Utama</p>
                
                <a href="/dashboard-vendor" class="flex items-center space-x-3 text-sm px-3 py-2.5 rounded-xl transition {{ request()->is('dashboard-vendor') ? 'bg-blue-50 text-blue-700 font-semibold' : 'font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}">
                    <i class="fa-solid fa-chart-line w-5 text-center"></i> <span>Dashboard</span>
                </a>
                
                <a href="/vendor/products" class="flex items-center space-x-3 text-sm px-3 py-2.5 rounded-xl transition {{ request()->is('vendor/product*') ? 'bg-blue-50 text-blue-700 font-semibold' : 'font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}">
                    <i class="fa-solid fa-boxes-stacked w-5 text-center"></i> <span>My Products</span>
                </a>
                
                <a href="/vendor/orders" class="flex items-center space-x-3 text-sm px-3 py-2.5 rounded-xl transition {{ request()->is('vendor/order*') ? 'bg-blue-50 text-blue-700 font-semibold' : 'font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}">
                    <i class="fa-solid fa-receipt w-5 text-center"></i> <span>Orders</span>
                </a>
                
                <a href="/vendor/schedule" class="flex items-center space-x-3 text-sm px-3 py-2.5 rounded-xl transition {{ request()->is('vendor/schedule*') ? 'bg-blue-50 text-blue-700 font-semibold' : 'font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}">
                    <i class="fa-solid fa-calendar-check w-5 text-center"></i> <span>Schedule / Availability</span>
                </a>
                
                <a href="/vendor/revenue" class="flex items-center space-x-3 text-sm px-3 py-2.5 rounded-xl transition {{ request()->is('vendor/revenue*') ? 'bg-blue-50 text-blue-700 font-semibold' : 'font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}">
                    <i class="fa-solid fa-wallet w-5 text-center"></i> <span>Revenue</span>
                </a>

                <a href="/chat-center?role=vendor" class="flex items-center justify-between text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600 px-3 py-2.5 rounded-xl transition">
                    <div class="flex items-center space-x-3">
                        <i class="fa-solid fa-comments w-5 text-center"></i> <span>Chat</span>
                    </div>
                    <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow-sm">1</span>
                </a>
                
                <hr class="my-2 border-gray-100">
                
                <a href="/" class="flex items-center space-x-3 text-sm font-medium text-red-600 hover:bg-red-50 px-3 py-2.5 rounded-xl transition">
                    <i class="fa-solid fa-arrow-right-from-bracket w-5 text-center"></i> <span>Keluar Aplikasi</span>
                </a>
            </div>

            <div class="bg-gradient-to-br from-gray-900 to-gray-800 p-4 rounded-2xl text-white shadow-sm space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-xs text-gray-400 font-medium">Status Operasional</span>
                    <span class="bg-emerald-500/20 text-emerald-400 text-[9px] font-bold px-2 py-0.5 rounded-full border border-emerald-500/30">BUKA</span>
                </div>
                <p class="text-xs text-gray-300 leading-relaxed">Toko Anda terverifikasi publik dan siap menerima pesanan.</p>
            </div>
        </div>

        <div class="lg:col-span-3 space-y-6">
            @yield('vendor_content')
        </div>
        
    </div>
</body>
</html>