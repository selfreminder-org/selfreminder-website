<x-layouts::base :title="__('Layanan Tidak Tersedia')">
    <!-- Error 503 Section -->
    <section class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-gray-100 flex items-center justify-center px-4 md:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <!-- Large Error Code -->
            <div class="mb-8">
                <div class="text-9xl md:text-[150px] font-bold text-red-500 opacity-30 leading-none">
                    503
                </div>
            </div>

            <!-- Icon -->
            <div class="mb-8">
                <svg class="w-24 h-24 mx-auto text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>

            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-800">
                Layanan Sedang Dirawat
            </h1>

            <!-- Subtitle -->
            <p class="text-xl text-gray-600 mb-3">
                Kami sedang melakukan pembaruan untuk memberikan layanan yang lebih baik.
            </p>

            <!-- Description -->
            <p class="text-gray-600 mb-8 max-w-md mx-auto text-lg">
                Website kami sedang dalam proses pemeliharaan. Kami akan kembali dalam waktu singkat. Terima kasih atas kesabaranmu!
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/') }}" class="inline-flex items-center justify-center bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg font-semibold transition">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                    Coba Lagi
                </a>
            </div>

            <!-- Islamic Quote -->
            <div class="mt-12 text-gray-500 text-sm">
                <p>"كُلُّ شَيْءٍ هَالِكٌ إِلَّا وَجْهَهُ"</p>
                <p class="mt-2 text-xs italic">Segala sesuatu akan berakhir kecuali Wajah Allah (keabadiannya)</p>
            </div>
        </div>
    </section>
</x-layouts::base>
