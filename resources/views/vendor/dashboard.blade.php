<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Bisnis Vendor | NousTech Vendor Publik</title>
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
                <span class="text-lg font-bold tracking-tight">Toyib Catering <span class="text-blue-400">Center</span></span>
            </div>
            <div class="flex items-center space-x-6">
                <a href="/" class="text-xs font-semibold text-gray-400 hover:text-white transition"><i class="fa-solid fa-globe mr-1"></i> Lihat Beranda Publik</a>
                <div class="flex items-center space-x-2 border-l border-gray-700 pl-4">
                    <div class="w-8 h-8 bg-emerald-600 rounded-full flex items-center justify-center font-bold text-xs shadow-sm text-white">TC</div>
                    <span class="text-xs font-semibold hidden md:inline">Mitra Vendor (Owner)</span>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 grid grid-cols-1 lg:grid-cols-4 gap-8 flex-grow">
        
        <div class="lg:col-span-1 space-y-4">
            <div class="bg-white p-4 rounded-2xl border border-gray-200 shadow-xs space-y-1">
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider px-3 mb-2">Menu Utama</p>
                
                <a href="/dashboard-vendor" class="flex items-center space-x-3 text-sm font-semibold bg-blue-50 text-blue-700 px-3 py-2.5 rounded-xl transition">
                    <i class="fa-solid fa-chart-line w-5 text-center"></i> 
                    <span>Dashboard</span>
                </a>
                
                <a href="#" class="flex items-center space-x-3 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600 px-3 py-2.5 rounded-xl transition">
                    <i class="fa-solid fa-boxes-stacked w-5 text-center"></i> 
                    <span>My Products</span>
                </a>
                
                <a href="#" class="flex items-center space-x-3 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600 px-3 py-2.5 rounded-xl transition">
                    <i class="fa-solid fa-receipt w-5 text-center"></i> 
                    <span>Orders</span>
                </a>
                
                <a href="#" class="flex items-center space-x-3 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600 px-3 py-2.5 rounded-xl transition">
                    <i class="fa-solid fa-calendar-check w-5 text-center"></i> 
                    <span>Schedule / Availability</span>
                </a>
                
                <a href="#" class="flex items-center space-x-3 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600 px-3 py-2.5 rounded-xl transition">
                    <i class="fa-solid fa-wallet w-5 text-center"></i> 
                    <span>Revenue</span>
                </a>

                <a href="#" class="flex items-center justify-between text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600 px-3 py-2.5 rounded-xl transition">
                    <div class="flex items-center space-x-3">
                        <i class="fa-solid fa-comments w-5 text-center"></i> 
                        <span>Chat</span>
                    </div>
                    <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow-sm">1</span>
                </a>
                
                <hr class="my-2 border-gray-100">
                
                <a href="/" class="flex items-center space-x-3 text-sm font-medium text-red-600 hover:bg-red-50 px-3 py-2.5 rounded-xl transition">
                    <i class="fa-solid fa-arrow-right-from-bracket w-5 text-center"></i> 
                    <span>Keluar Aplikasi</span>
                </a>
            </div>

            <div class="bg-gradient-to-br from-gray-900 to-gray-800 p-4 rounded-2xl text-white shadow-sm space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-xs text-gray-400 font-medium">Status Operasional</span>
                    <span class="bg-emerald-500/20 text-emerald-400 text-[9px] font-bold px-2 py-0.5 rounded-full border border-emerald-500/30">BUKA</span>
                </div>
                <p class="text-xs text-gray-300 leading-relaxed">Toko Anda terverifikasi publik dan siap menerima pesanan (Orders).</p>
            </div>
        </div>

        <div class="lg:col-span-3 space-y-6">
            
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-xs flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div>
                    <h2 class="text-xl font-bold text-gray-900">Selamat Datang Kembali, Mitra Toyib!</h2>
                    <p class="text-xs text-gray-500 mt-0.5">Berikut adalah performa data Revenue serta status layanan pesanan publik (Orders) Anda hari ini.</p>
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow-xs transition flex items-center space-x-2">
                    <i class="fa-solid fa-plus"></i> <span>Add New Product</span>
                </button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-xs">
                    <div class="text-gray-400 text-[10px] font-bold uppercase tracking-wider mb-1">Total Revenue (Selesai Acara)</div>
                    <div class="text-2xl font-black text-gray-900">Rp 8.750.000</div>
                    <span class="text-[10px] text-emerald-600 font-semibold mt-1 block"><i class="fa-solid fa-circle-check"></i> Siap Dicairkan ke Rekening</span>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-xs">
                    <div class="text-gray-400 text-[10px] font-bold uppercase tracking-wider mb-1">Pending Escrow Revenue</div>
                    <div class="text-2xl font-black text-blue-600">Rp 3.200.000</div>
                    <span class="text-[10px] text-gray-400 block mt-1">Dari 2 Orders Belum Terlaksana</span>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-xs">
                    <div class="text-gray-400 text-[10px] font-bold uppercase tracking-wider mb-1">Rating Kepuasan Publik</div>
                    <div class="text-2xl font-black text-amber-500 flex items-center"><i class="fa-solid fa-star text-sm mr-1.5"></i> 4.8 <span class="text-xs text-gray-400 font-normal ml-1">/ 5.0</span></div>
                    <span class="text-[10px] text-gray-400 block mt-1">Total Dari 124 Ulasan Valid</span>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-200 shadow-xs overflow-hidden">
                <div class="p-4 border-b border-gray-100 flex justify-between items-center">
                    <h3 class="font-bold text-sm text-gray-900">Recent Orders & Schedule</h3>
                    <span class="text-[11px] font-semibold text-blue-600 bg-blue-50 px-2 py-1 rounded-md">Update Realtime</span>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead class="bg-gray-50 text-gray-500 font-bold uppercase tracking-wider border-b border-gray-100">
                            <tr>
                                <th class="px-5 py-3.5">ID / Pelanggan</th>
                                <th class="px-5 py-3.5">Product Details</th>
                                <th class="px-5 py-3.5">Scheduled Date</th>
                                <th class="px-5 py-3.5">Total Revenue</th>
                                <th class="px-5 py-3.5">Escrow Status</th>
                                <th class="px-5 py-3.5 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 font-medium">
                            <tr class="hover:bg-gray-50/50">
                                <td class="px-5 py-4">
                                    <span class="text-gray-900 block font-semibold">Budi Santoso</span>
                                    <span class="text-[10px] text-gray-400">ID-99210</span>
                                </td>
                                <td class="px-5 py-4 text-gray-600">Paket Prasmanan Sederhana (100 Pax) <span class="block text-[10px] text-gray-400">Note: Acara Gathering Kantor</span></td>
                                <td class="px-5 py-4 text-gray-600">28 Mei 2026</td>
                                <td class="px-5 py-4 text-gray-900 font-bold">Rp 3.500.000</td>
                                <td class="px-5 py-4"><span class="bg-blue-50 text-blue-700 text-[10px] font-bold px-2.5 py-1 rounded-full border border-blue-100">DANA DIAMANKAN</span></td>
                                <td class="px-5 py-4 text-center"><button class="bg-blue-600 hover:bg-blue-700 text-white text-[10px] font-bold px-3 py-1.5 rounded-lg transition shadow-xs">Konfirmasi</button></td>
                            </tr>
                            <tr class="hover:bg-gray-50/50">
                                <td class="px-5 py-4">
                                    <span class="text-gray-900 block font-semibold">Siti Aminah</span>
                                    <span class="text-[10px] text-gray-400">ID-99184</span>
                                </td>
                                <td class="px-5 py-4 text-gray-600">Paket Box Ayam Geprek (50 Box) <span class="block text-[10px] text-gray-400">Note: Syukuran Arisan Keluarga</span></td>
                                <td class="px-5 py-4 text-gray-600">24 Mei 2026</td>
                                <td class="px-5 py-4 text-gray-900 font-bold">Rp 750.000</td>
                                <td class="px-5 py-4"><span class="bg-emerald-50 text-emerald-700 text-[10px] font-bold px-2.5 py-1 rounded-full border border-emerald-100">DANA DICAIRKAN</span></td>
                                <td class="px-5 py-4 text-center"><span class="text-gray-400 text-[11px] font-medium"><i class="fa-solid fa-circle-check text-emerald-500 mr-1"></i> Selesai</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>
</html>