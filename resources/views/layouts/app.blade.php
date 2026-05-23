<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | NousTech Vendor Publik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen">

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            
            <a href="/" class="flex items-center space-x-3 hover:opacity-80 transition cursor-pointer">
                <div class="bg-blue-600 text-white p-2 rounded-lg font-bold tracking-wider text-sm shadow-sm">NT</div>
                <span class="text-xl font-bold text-gray-900 hidden sm:block">Vendor<span class="text-blue-600">KitaBersama</span></span>
            </a>

            @php
                $role = request()->query('role');
                if (!$role) {
                    if (request()->is('*dashboard-publik*')) $role = 'publik';
                    if (request()->is('*dashboard-vendor*')) $role = 'vendor';
                    if (request()->is('*chat-center*')) $role = request()->query('role') ?? 'publik'; 
                }
            @endphp

            <div class="flex items-center space-x-2 md:space-x-3">
                
                <nav class="hidden md:flex items-center space-x-1 border-r border-gray-200 pr-2 md:pr-3">
                    
                    <div class="relative inline-block text-left">
                        <button id="categories-menu-button" onclick="document.getElementById('categories-dropdown').classList.toggle('hidden'); event.stopPropagation();" type="button" class="flex items-center space-x-1 font-semibold text-sm text-gray-600 hover:text-blue-600 transition focus:outline-none py-2 px-3 rounded-xl hover:bg-gray-50">
                            <i class="fa-solid fa-boxes-stacked text-gray-400 mr-1.5"></i>
                            <span>Categories</span>
                            <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 ml-1"></i>
                        </button>

                        <div id="categories-dropdown" class="hidden absolute right-0 z-50 mt-2 w-64 rounded-xl bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none border border-gray-100 overflow-hidden">
                            <div class="py-1 text-sm text-gray-700">
                                <a href="#" class="block px-4 py-2.5 hover:bg-gray-50 font-medium flex items-center space-x-3 text-gray-700">
                                    <i class="fa-solid fa-utensils text-gray-400 text-xs w-4"></i>
                                    <span>Konsumsi</span>
                                </a>
                                <a href="#" class="block px-4 py-2.5 hover:bg-gray-50 font-medium flex items-center space-x-3 text-gray-700">
                                    <i class="fa-solid fa-volume-high text-gray-400 text-xs w-4"></i>
                                    <span>Audio Visual</span>
                                </a>
                                <a href="#" class="block px-4 py-2.5 hover:bg-gray-50 font-medium flex items-center space-x-3 text-gray-700">
                                    <i class="fa-solid fa-camera text-gray-400 text-xs w-4"></i>
                                    <span>Dokumentasi</span>
                                </a>
                                <a href="#" class="block px-4 py-2.5 hover:bg-gray-50 font-medium flex items-center space-x-3 text-gray-700">
                                    <i class="fa-solid fa-couch text-gray-400 text-xs w-4"></i>
                                    <span>Dekorasi & Properti Event</span>
                                </a>
                                <a href="#" class="block px-4 py-2.5 hover:bg-gray-50 font-medium flex items-center space-x-3 text-gray-700">
                                    <i class="fa-solid fa-print text-gray-400 text-xs w-4"></i>
                                    <span>Printing & Media</span>
                                </a>
                                <a href="#" class="block px-4 py-2.5 hover:bg-gray-50 font-medium flex items-center space-x-3 text-gray-700">
                                    <i class="fa-solid fa-gifts text-gray-400 text-xs w-4"></i>
                                    <span>Merchandise & Souvenir</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    @if($role)
                        <a href="/chat-center?role={{ $role }}" class="flex items-center space-x-1 font-semibold text-sm text-gray-600 hover:text-blue-600 transition py-2 px-3 rounded-xl hover:bg-gray-50">
                            <i class="fa-regular fa-comments text-gray-400 mr-1.5"></i>
                            <span>Chat</span>
                        </a>
                    @else
                        <a href="/login" onclick="alert('Silakan login terlebih dahulu untuk mengakses fitur Chat interaktif.');" class="flex items-center space-x-1 font-semibold text-sm text-gray-600 hover:text-red-500 transition py-2 px-3 rounded-xl hover:bg-gray-50">
                            <i class="fa-solid fa-lock text-gray-400 mr-1.5"></i>
                            <span>Chat</span>
                        </a>
                    @endif

                </nav>

                @if(!$role)
                    <div class="flex items-center space-x-1.5 sm:space-x-2 relative z-50">
                        <a href="/login" class="text-sm font-semibold text-gray-700 hover:text-blue-600 transition px-3 py-2 rounded-xl hover:bg-gray-50">Login</a>
                        <a href="#" class="text-sm font-semibold bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition shadow-sm">Register</a>
                    </div>
                @else
                    <div class="flex items-center relative z-50 pl-1.5">
                        <div class="relative inline-block text-left">
                            
                            <button id="profile-menu-button" onclick="document.getElementById('profile-dropdown').classList.toggle('hidden'); event.stopPropagation();" type="button" class="flex items-center space-x-2 text-sm font-semibold text-gray-700 hover:text-blue-600 transition px-3 py-1.5 rounded-full border border-gray-200 shadow-sm bg-white focus:outline-none">
                                <div class="w-7 h-7 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                                    <i class="fa-solid {{ $role == 'vendor' ? 'fa-store' : 'fa-user' }} text-xs"></i>
                                </div>
                                <span class="hidden sm:inline">Profile</span>
                                <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 ml-1 hidden sm:inline"></i>
                            </button>

                            <div id="profile-dropdown" class="hidden absolute right-0 z-50 mt-2 w-48 rounded-xl bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none border border-gray-100 overflow-hidden">
                                <div class="py-1 text-sm text-gray-700">
                                    <a href="{{ $role == 'vendor' ? '/dashboard-vendor?role=vendor' : '/dashboard-publik?role=publik' }}" class="block px-4 py-2.5 hover:bg-gray-50 font-medium flex items-center space-x-2 text-gray-700">
                                        <i class="fa-solid fa-chart-pie text-gray-400 text-xs"></i>
                                        <span>Cek Dashboard</span>
                                    </a>
                                    <hr class="border-gray-100">
                                    <a href="/" class="block px-4 py-2.5 text-red-600 hover:bg-red-50 font-medium flex items-center space-x-2">
                                        <i class="fa-solid fa-arrow-right-from-bracket text-xs"></i>
                                        <span>Log Out</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>

        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer id="contact-section" class="bg-white border-t border-gray-200 pt-12 pb-6 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <div class="bg-blue-600 text-white p-1.5 rounded font-bold text-xs">NT</div>
                    <span class="font-bold text-lg text-gray-900">NousTech Group</span>
                </div>
                <p class="text-xs text-gray-500 leading-relaxed mb-4">
                    Platform Marketplace Vendor Acara & Publik terpercaya untuk segala kebutuhan acara Anda.
                </p>
                <div class="flex space-x-4 text-gray-400">
                    <a href="#" class="hover:text-blue-600 transition"><i class="fa-brands fa-whatsapp text-lg"></i></a>
                    <a href="#" class="hover:text-blue-600 transition"><i class="fa-brands fa-instagram text-lg"></i></a>
                    <a href="#" class="hover:text-blue-600 transition"><i class="fa-regular fa-envelope text-lg"></i></a>
                </div>
            </div>
            <div>
                <h4 class="font-semibold text-sm text-gray-900 mb-4 tracking-wider uppercase">Contact Us</h4>
                <ul class="space-y-3 text-xs text-gray-600">
                    <li class="flex items-center"><i class="fa-solid fa-location-dot text-gray-400 w-5"></i> Yogyakarta, Indonesia</li>
                    <li class="flex items-center"><i class="fa-solid fa-phone text-gray-400 w-5"></i> +62 812-3456-7890</li>
                    <li class="flex items-center"><i class="fa-solid fa-envelope text-gray-400 w-5"></i> support@noustech.com</li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-sm text-gray-900 mb-4 tracking-wider uppercase">Keamanan Transaksi</h4>
                <div class="flex flex-wrap gap-2 text-gray-400 text-2xl mb-4">
                    <i class="fa-brands fa-cc-visa text-gray-500"></i>
                    <i class="fa-solid fa-shield-halved text-blue-600"></i>
                    <span class="text-xs font-semibold self-center text-gray-500 bg-gray-100 px-2 py-1 rounded">Secure Escrow</span>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-t border-gray-100 pt-6 text-center text-xs text-gray-400">
            &copy; 2026 NousTech Group. All rights reserved.
        </div>
    </footer>

    <script>
        document.addEventListener('click', function() {
            const catDropdown = document.getElementById('categories-dropdown');
            const profDropdown = document.getElementById('profile-dropdown');
            
            if (catDropdown) catDropdown.classList.add('hidden');
            if (profDropdown) profDropdown.classList.add('hidden');
        });
    </script>
</body>
</html>