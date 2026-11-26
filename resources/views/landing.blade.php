
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SATRIA - Sistem Informasi Aset dan Persediaan Pertanian</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-white text-gray-800 font-sans m-0 p-0">

    <!-- Navbar -->
    <nav class="bg-white shadow-sm border-b border-gray-100 w-full h-16 relative z-20">
        <div class="w-full px-4 sm:px-6 lg:px-8 h-full">
            <div class="flex justify-between h-full items-center">

                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-md">
                        S
                    </div>
                    <div>
                        <span class="text-xl font-bold tracking-wider text-slate-800">SATRIA</span>
                        <p class="text-xs text-gray-500 -mt-1">Aset & Persediaan Pertanian</p>
                    </div>
                </div>

                <div>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                               class="text-sm font-semibold text-blue-600 hover:text-blue-800 transition">
                                Masuk Dashboard &rarr;
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                               class="text-sm font-semibold text-blue-600 hover:text-blue-800 px-5 py-2.5 border border-blue-600 rounded-lg hover:bg-blue-50 transition">
                                Login
                            </a>
                        @endauth
                    @endif
                </div>

            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main class="relative flex w-full min-h-[calc(100dvh-4rem)]">

        <!-- Background Kanan -->
        <div class="absolute inset-y-0 right-0 w-1/2 bg-blue-50 hidden lg:block"></div>

        <div class="relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 min-h-full">

                <!-- Sisi Kiri -->
                <div class="flex flex-col justify-center text-center lg:text-left px-8 py-16 sm:px-16 lg:px-20 xl:px-28">

                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 text-blue-700 rounded-full text-sm font-semibold mb-6 mx-auto lg:mx-0 w-fit">
                        <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                        Sistem Informasi Terintegrasi
                    </div>

                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-7xl">
                        <span class="block text-blue-600">SATRIA</span>
                        <span class="block mt-3 text-2xl sm:text-3xl md:text-4xl font-bold">
                            Sistem Informasi Aset
                        </span>
                        <span class="block text-2xl sm:text-3xl md:text-4xl font-bold">
                            dan Persediaan Pertanian
                        </span>
                    </h1>

                    <p class="mt-6 text-base text-gray-500 sm:text-lg md:text-xl max-w-xl mx-auto lg:mx-0 leading-relaxed">
                        Platform pengelolaan aset dan inventaris, pencatatan barang masuk dan keluar,
                        pemantauan persediaan, serta monitoring dokumen SPK dan SPJ kegiatan
                        secara terintegrasi, tertib, dan transparan.
                    </p>

                    <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('login') }}"
                           class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition shadow-lg shadow-blue-500/30">
                            Masuk ke Sistem
                            <span class="ml-2">&rarr;</span>
                        </a>

                        <a href="#fitur"
                           class="inline-flex items-center justify-center px-8 py-4 border border-gray-300 text-base font-semibold rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition shadow-sm">
                            Pelajari Fitur
                        </a>
                    </div>

                    <div class="mt-12 flex items-center justify-center lg:justify-start gap-3 text-sm text-gray-400">
                        <span>Terintegrasi</span>
                        <span class="w-1 h-1 bg-blue-400 rounded-full"></span>
                        <span>Tertib</span>
                        <span class="w-1 h-1 bg-blue-400 rounded-full"></span>
                        <span>Transparan</span>
                    </div>

                </div>

                <!-- Sisi Kanan: Fitur -->
                <div id="fitur" class="hidden lg:flex items-center justify-center px-8 lg:px-16 xl:px-24 relative py-16">

                    <div class="absolute inset-10 bg-gradient-to-br from-blue-200 to-blue-100 rounded-3xl rotate-3 opacity-50"></div>

                    <div class="relative w-full max-w-xl bg-white p-8 sm:p-10 rounded-2xl shadow-2xl border border-gray-100">

                        <div class="mb-8">
                            <h2 class="text-2xl font-bold text-gray-900">Fitur Utama SATRIA</h2>
                            <p class="text-sm text-gray-500 mt-2">Satu sistem untuk pengelolaan administrasi yang lebih baik.</p>
                        </div>

                        <!-- Fitur 1 -->
                        <div class="flex items-start gap-5 mb-7">
                            <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 flex-shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18M5 21V7l8-4 8 4v14M9 21v-6h6v6M9 9h.01M15 9h.01"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900">Aset dan Inventaris</h3>
                                <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                                    Pendataan dan pemantauan aset serta inventaris pada BPP, RSH, Puskeswan, dan unit kerja lainnya.
                                </p>
                            </div>
                        </div>

                        <!-- Fitur 2 -->
                        <div class="flex items-start gap-5 mb-7">
                            <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center text-green-600 flex-shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900">Persediaan Barang</h3>
                                <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                                    Pengelolaan nota barang masuk dan keluar serta pemantauan stok persediaan secara akurat.
                                </p>
                            </div>
                        </div>

                        <!-- Fitur 3 -->
                        <div class="flex items-start gap-5 mb-7">
                            <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center text-purple-600 flex-shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900">Monitoring SPK / SPJ</h3>
                                <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                                    Pemantauan progres dokumen pekerjaan dan pertanggungjawaban kegiatan secara tertib dan transparan.
                                </p>
                            </div>
                        </div>

                        <!-- Fitur 4 -->
                        <div class="flex items-start gap-5">
                            <div class="w-14 h-14 bg-orange-100 rounded-xl flex items-center justify-center text-orange-600 flex-shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v12a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900">Laporan Terintegrasi</h3>
                                <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                                    Penyajian informasi aset, persediaan, dan administrasi kegiatan untuk mendukung pengawasan dan pengambilan keputusan.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main>

</body>
</html>
