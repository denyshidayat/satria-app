<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Satria') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-100" x-data="{ sidebarOpen: true }">
        <div class="min-h-screen flex">
            
            <!-- SIDEBAR KIRI -->
            <!-- Class w-64 diganti dinamis pakai :class -->
            <aside :class="sidebarOpen ? 'w-64' : 'w-20'" class="bg-slate-800 text-white flex flex-col transition-all duration-300 ease-in-out hidden md:flex">
                
                <!-- Logo / Judul Aplikasi -->
                <div class="h-16 flex items-center justify-center border-b border-slate-700 overflow-hidden">
                    <!-- Teks muncul saat terbuka, Ikon S saja saat tertutup -->
                    <h1 x-show="sidebarOpen" class="text-xl font-bold tracking-wider text-blue-400 whitespace-nowrap">SATRIA APP</h1>
                    <h1 x-show="!sidebarOpen" class="text-xl font-bold text-blue-400">S</h1>
                </div>

                <!-- Menu Navigasi -->
                <nav class="flex-1 px-3 py-6 space-y-2 overflow-y-auto overflow-x-hidden">
                    
                    <!-- Menu Dashboard -->
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3 py-3 {{ request()->routeIs('dashboard') ? 'bg-slate-700 text-white' : 'text-slate-300 hover:bg-slate-700 hover:text-white' }} rounded-lg transition whitespace-nowrap" :title="sidebarOpen ? '' : 'Dashboard'">
                        <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        <span x-show="sidebarOpen" class="transition-opacity duration-200">Dashboard</span>
                    </a>

                    <!-- MENU PENATAUSAHAAN (Dropdown) -->
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="w-full flex items-center justify-between px-3 py-3 text-slate-300 hover:bg-slate-700 hover:text-white rounded-lg transition whitespace-nowrap" :title="sidebarOpen ? '' : 'Penatausahaan'">
                            <div class="flex items-center gap-3">
                                <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                <span x-show="sidebarOpen" class="transition-opacity duration-200">Penatausahaan</span>
                            </div>
                            <!-- Icon Panah (Hanya muncul saat sidebar terbuka) -->
                            <svg x-show="sidebarOpen" :class="{'rotate-180': open, 'rotate-0': !open}" class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        
                        <!-- Sub-menu (Hanya berfungsi normal jika sidebar terbuka) -->
                        <div x-show="open && sidebarOpen" x-transition class="mt-1 ml-4 space-y-1 pl-4 border-l border-slate-600">
                            <a href="#" class="block px-4 py-2 text-sm text-slate-400 hover:text-white hover:bg-slate-700 rounded transition">Nota Masuk</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-400 hover:text-white hover:bg-slate-700 rounded transition">Nota Keluar</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-400 hover:text-white hover:bg-slate-700 rounded transition">Laporan</a>
                        </div>
                    </div>

                    <!-- Menu Pengguna (Hanya Muncul untuk Admin) -->
                    @if(auth()->user()->role === 'administrator')
                    <a href="{{ route('users.index') }}" class="flex items-center gap-3 px-3 py-3 {{ request()->routeIs('users.*') ? 'bg-slate-700 text-white' : 'text-slate-300 hover:bg-slate-700 hover:text-white' }} rounded-lg transition whitespace-nowrap" :title="sidebarOpen ? '' : 'Manajemen User'">
                        <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <span x-show="sidebarOpen" class="transition-opacity duration-200">Manajemen User</span>
                    </a>
                    @endif

                </nav>

                <!-- Profile & Logout di bawah -->
                <div class="p-4 border-t border-slate-700 flex-shrink-0">
                    <div class="flex items-center gap-3 mb-4 overflow-hidden">
                        <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center font-bold flex-shrink-0" :title="sidebarOpen ? '' : '{{ Auth::user()->name }}'">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div x-show="sidebarOpen" class="whitespace-nowrap transition-opacity duration-200">
                            <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-slate-400">{{ ucfirst(Auth::user()->role) }}</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center justify-start gap-3 px-3 py-2 text-sm text-red-400 hover:bg-slate-700 rounded transition whitespace-nowrap" :title="sidebarOpen ? '' : 'Log Out'">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            <span x-show="sidebarOpen">Log Out</span>
                        </button>
                    </form>
                </div>
            </aside>

            <!-- KONTEN UTAMA KANAN -->
            <div class="flex-1 flex flex-col min-w-0">
                
                <!-- Header Atas -->
                <header class="h-16 bg-white shadow-sm flex items-center px-4 md:px-8 border-b gap-4">
                    
                    <!-- TOMBOL HAMBURGER UNTUK TOGGLE SIDEBAR -->
                    <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 hover:text-gray-700 focus:outline-none focus:bg-gray-100 p-2 rounded-lg transition">
                        <!-- Ikon Buka (Garis tiga) -->
                        <svg x-show="!sidebarOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        <!-- Ikon Tutup (Panah kiri) -->
                        <svg x-show="sidebarOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>

                    <h2 class="font-semibold text-xl text-gray-800 leading-tight truncate">
                        {{ $header ?? 'Dashboard' }}
                    </h2>
                </header>

                <!-- Isi Halaman -->
                <main class="p-6 overflow-y-auto">
                    {{ $slot }}
                </main>
            </div>
        </div>
        </div> <!-- Penutup div min-h-screen -->
@livewireScripts
</body>
    </body>
</html>