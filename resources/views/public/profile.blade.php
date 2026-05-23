@extends('layouts.public')

@section('public_content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6">
    <div class="flex flex-col md:flex-row gap-8 items-start">
        
        <div class="w-full md:w-1/3 flex flex-col items-center">
            <div class="w-24 h-24 bg-blue-600 rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-md mb-4 relative">
                VM
                <div class="absolute bottom-0 right-0 w-6 h-6 bg-emerald-500 border-2 border-white rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-check text-white text-[10px]"></i>
                </div>
            </div>
            <h3 class="font-bold text-gray-900 text-lg">Vincente Roxio Manopo</h3>
            <p class="text-xs text-gray-500 mb-4">Member sejak 2024</p>
            
            <div class="w-full bg-blue-50 border border-blue-100 p-4 rounded-xl text-center mb-4">
                <p class="text-[10px] font-bold text-blue-800 uppercase mb-1">Total Poin Reputasi</p>
                <p class="text-2xl font-black text-blue-600">7.224</p>
            </div>
        </div>

        <div class="w-full md:w-2/3 space-y-6">
            
            <div class="space-y-4 border-b border-gray-100 pb-6">
                <h4 class="text-sm font-bold text-gray-900 flex items-center"><i class="fa-solid fa-user-pen mr-2 text-blue-600"></i> Informasi Pribadi</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-wide mb-1">ID Pengguna</label>
                        <input type="text" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm text-gray-600 font-medium" value="72240690" readonly>
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-wide mb-1">Email Utama</label>
                        <input type="email" class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm text-gray-600 font-medium" value="vincente.manopo@ukdw.ac.id" readonly>
                    </div>
                </div>
            </div>

            <div class="space-y-4 border-b border-gray-100 pb-6">
                <h4 class="text-sm font-bold text-gray-900 flex items-center"><i class="fa-solid fa-shield-check mr-2 text-emerald-600"></i> Verifikasi & Keamanan Akun</h4>
                
                <div class="flex items-center justify-between p-4 border border-gray-200 rounded-xl">
                    <div class="flex items-center space-x-3">
                        <i class="fa-brands fa-google text-xl text-red-500"></i>
                        <div>
                            <p class="text-sm font-bold text-gray-900">Akun Google</p>
                            <p class="text-[10px] text-gray-500">Terhubung: vincente.manopo@gmail.com</p>
                        </div>
                    </div>
                    <span class="bg-emerald-50 text-emerald-600 text-[10px] font-bold px-3 py-1 rounded-lg border border-emerald-100">TERVERIFIKASI</span>
                </div>

                <div class="flex items-center justify-between p-4 border border-gray-200 rounded-xl">
                    <div class="flex items-center space-x-3">
                        <i class="fa-solid fa-phone text-xl text-gray-400"></i>
                        <div>
                            <p class="text-sm font-bold text-gray-900">Nomor Telepon (WhatsApp)</p>
                            <p class="text-[10px] text-gray-500">+62 812-3456-7890</p>
                        </div>
                    </div>
                    <button class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-600 text-[10px] font-bold px-3 py-1.5 rounded-lg transition">Ubah Nomor</button>
                </div>
            </div>

            <div class="space-y-4">
                <h4 class="text-sm font-bold text-gray-900 flex items-center"><i class="fa-solid fa-wallet mr-2 text-purple-600"></i> Koneksi e-Wallet (Pembayaran)</h4>
                
                <div class="flex items-center justify-between p-4 border border-purple-200 bg-purple-50/30 rounded-xl relative overflow-hidden">
                    <div class="flex items-center space-x-3 relative z-10">
                        <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center text-white font-black italic text-xs shadow-sm">OVO</div>
                        <div>
                            <p class="text-sm font-bold text-gray-900">OVO Cash</p>
                            <p class="text-[10px] text-gray-500">Saldo: <span class="font-bold text-purple-600">Rp 1.250.000</span></p>
                        </div>
                    </div>
                    <button class="bg-white border border-purple-200 text-purple-600 text-[10px] font-bold px-3 py-1.5 rounded-lg transition relative z-10">Putuskan</button>
                </div>

                <div class="flex items-center justify-between p-4 border border-gray-200 rounded-xl hover:border-blue-300 transition cursor-pointer" onclick="alert('Mengalihkan ke API GoJek untuk otorisasi tautan akun...');">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-blue-500 font-bold text-xs shadow-inner"><i class="fa-solid fa-wallet"></i></div>
                        <div>
                            <p class="text-sm font-bold text-gray-900">GoPay</p>
                            <p class="text-[10px] text-gray-500">Belum terhubung</p>
                        </div>
                    </div>
                    <span class="text-blue-600 text-[10px] font-bold"><i class="fa-solid fa-link mr-1"></i> Hubungkan</span>
                </div>
            </div>

            <div class="pt-6 flex justify-end">
                <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-6 py-3 rounded-xl transition shadow-sm">
                    Simpan Perubahan
                </button>
            </div>
        </div>

    </div>
</div>
@endsection