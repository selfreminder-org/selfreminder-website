<x-layouts::base :title="__('Akses Ditolak')">
    <!-- Error 403 Section -->
    <section class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-gray-100 flex items-center justify-center px-4 md:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <!-- Large Error Code -->
            <div class="mb-8">
                <div class="text-9xl md:text-[150px] font-bold text-red-500 opacity-30 leading-none">
                    403
                </div>
            </div>

            <!-- Icon -->
            <div class="mb-8">
                <svg class="w-24 h-24 mx-auto text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
            </div>

            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-800">
                Akses Ditolak
            </h1>

            <!-- Subtitle -->
            <p class="text-xl text-gray-600 mb-3">
                Maaf, kamu tidak memiliki izin untuk mengakses halaman ini.
            </p>

            <!-- Description -->
            <p class="text-gray-600 mb-8 max-w-md mx-auto text-lg">
                Halaman ini mungkin memerlukan izin khusus atau kamu perlu login untuk mengaksesnya. Jika kamu merasa ini adalah kesalahan, hubungi administrator kami.
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/') }}" class="inline-flex items-center justify-center bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg font-semibold transition">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2.146-2.854a6 6 0 0112.708 0l2.146 2.854M3 12l6-6m0 0l6 6m-6-6v12"/>
                    </svg>
                    Kembali ke Beranda
                </a>
                @auth
                    <a href="{{ url('/dashboard') }}" class="inline-flex items-center justify-center border-2 border-gray-400 text-gray-700 hover:border-gray-600 hover:bg-gray-50 px-8 py-3 rounded-lg font-semibold transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h8m-8-8v8m0-12h-8v8H5V2zm0 0L5 2"/>
                        </svg>
                        Dashboard
                    </a>
                @else
                    <a href="{{ url('/login') }}" class="inline-flex items-center justify-center border-2 border-gray-400 text-gray-700 hover:border-gray-600 hover:bg-gray-50 px-8 py-3 rounded-lg font-semibold transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v2a2 2 0 01-2 2H7a2 2 0 01-2-2v-2m7-4V7a2 2 0 00-2-2H7a2 2 0 00-2 2v4m7 0v2"/>
                        </svg>
                        Login
                    </a>
                @endauth
            </div>

            <!-- Islamic Quote -->
            <div class="mt-12 text-gray-500 text-sm">
                <p>"وَقَالَ رَبُّكُمْ ادْعُونِي أَسْتَجِبْ لَكُمْ"</p>
                <p class="mt-2 text-xs italic">Berdoalah kepada-Ku dan Aku akan mengabulkan doa-doamu</p>
            </div>
        </div>
    </section>
</x-layouts::base>
