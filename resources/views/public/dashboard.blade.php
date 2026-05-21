    @extends('layouts.app')

    @section('title', 'Dashboard Pelanggan')

    @section('content')
    <div class="bg-blue-600 pb-24 pt-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div>
                <h2 class="font-bold text-white text-2xl">Selamat Datang, Pengguna!</h2>
                <p class="text-blue-100 text-sm mt-1">Kelola pesanan, pesan layanan, dan temukan vendor terbaik untuk acaramu.</p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 pb-12 grid grid-cols-1 lg:grid-cols-4 gap-6">
        
        <div class="lg:col-span-1">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 space-y-1 sticky top-24">
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider px-3 mb-2">Menu Akun</p>
                
                <a href="/?role=publik" class="flex items-center space-x-3 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600 px-3 py-2.5 rounded-xl transition">
                    <i class="fa-solid fa-compass w-5 text-center"></i> 
                    <span>Explore Vendors</span>
                </a>
                
                <a href="#" class="flex items-center space-x-3 text-sm font-semibold bg-blue-50 text-blue-700 px-3 py-2.5 rounded-xl transition">
                    <i class="fa-solid fa-receipt w-5 text-center"></i> 
                    <span>Bookings / Orders</span>
                </a>
                
                <a href="#" class="flex items-center space-x-3 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600 px-3 py-2.5 rounded-xl transition">
                    <i class="fa-solid fa-heart w-5 text-center"></i> 
                    <span>Favorites</span>
                </a>
                
                <a href="#" class="flex items-center justify-between text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600 px-3 py-2.5 rounded-xl transition">
                    <div class="flex items-center space-x-3">
                        <i class="fa-solid fa-comments w-5 text-center"></i> 
                        <span>Chat</span>
                    </div>
                    <span class="bg-red-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow-sm">2</span>
                </a>
                
                <a href="#" class="flex items-center space-x-3 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600 px-3 py-2.5 rounded-xl transition">
                    <i class="fa-solid fa-user-gear w-5 text-center"></i> 
                    <span>Profile</span>
                </a>
                
                <hr class="my-2 border-gray-100">
                
                <a href="/" class="flex items-center space-x-3 text-sm font-medium text-red-600 hover:bg-red-50 px-3 py-2.5 rounded-xl transition">
                    <i class="fa-solid fa-arrow-right-from-bracket w-5 text-center"></i> 
                    <span>Keluar</span>
                </a>
            </div>
        </div>

        <div class="lg:col-span-3 space-y-6">
            
            <div class="bg-white border border-gray-100 shadow-sm p-6 rounded-2xl flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div class="flex items-start space-x-4">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-xl">
                        <i class="fa-solid fa-truck-fast text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1">Pesanan Anda Sedang Diproses</h3>
                        <p class="text-xs text-gray-500">Vendor <span class="font-semibold text-gray-700">"Toyib Catering"</span> telah menyetujui pesanan Anda untuk tanggal 20 Mei 2026.</p>
                    </div>
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 transition text-white px-5 py-2.5 rounded-xl text-sm font-semibold shadow-sm w-full md:w-auto">
                    Lacak Pesanan
                </button>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-1">Cari Tambahan Vendor Lain?</h3>
                <p class="text-xs text-gray-500 mb-5">Temukan kebutuhan logistik lainnya untuk melengkapi acara Anda.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <select class="w-full px-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>Pilih Kategori...</option>
                            <option>Konsumsi</option>
                            <option>Audio Visual</option>
                            <option>Dokumentasi</option>
                            <option>Dekorasi & Properti</option>
                        </select>
                    </div>
                    <div>
                        <input type="date" class="w-full px-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <input type="number" placeholder="Budget Maksimal" class="w-full px-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <button class="w-full bg-gray-900 hover:bg-gray-800 transition text-white font-semibold py-2.5 px-4 rounded-xl text-sm">
                            <i class="fa-solid fa-magnifying-glass mr-1.5"></i> Cari
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                <div class="p-4 border-b border-gray-100">
                    <h3 class="font-bold text-sm text-gray-900">Riwayat Booking Terakhir</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead class="bg-gray-50 text-gray-500 font-bold uppercase tracking-wider">
                            <tr>
                                <th class="px-5 py-3">Vendor</th>
                                <th class="px-5 py-3">Tanggal Acara</th>
                                <th class="px-5 py-3">Total</th>
                                <th class="px-5 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 font-medium">
                            <tr>
                                <td class="px-5 py-4">Toyib Catering</td>
                                <td class="px-5 py-4 text-gray-600">20 Mei 2026</td>
                                <td class="px-5 py-4 text-gray-900 font-bold">Rp 3.500.000</td>
                                <td class="px-5 py-4"><span class="bg-blue-50 text-blue-700 text-[10px] font-bold px-2 py-1 rounded border border-blue-100">DIPROSES</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    @endsection 