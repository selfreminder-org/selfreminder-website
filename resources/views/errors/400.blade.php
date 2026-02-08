<x-layouts::base :title="__('Permintaan Tidak Valid')">
    <!-- Error 400 Section -->
    <section class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-gray-100 flex items-center justify-center px-4 md:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <!-- Large Error Code -->
            <div class="mb-8">
                <div class="text-9xl md:text-[150px] font-bold text-red-500 opacity-30 leading-none">
                    400
                </div>
            </div>

            <!-- Icon -->
            <div class="mb-8">
                <svg class="w-24 h-24 mx-auto text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4v.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>

            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-800">
                Permintaan Tidak Valid
            </h1>

            <!-- Subtitle -->
            <p class="text-xl text-gray-600 mb-3">
                Ada yang tidak benar dengan permintaan kamu.
            </p>

            <!-- Description -->
            <p class="text-gray-600 mb-8 max-w-md mx-auto text-lg">
                Server tidak bisa memahami permintaan yang kamu kirimkan. Silakan periksa kembali URL atau data yang kamu masukkan.
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/') }}" class="inline-flex items-center justify-center bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg font-semibold transition">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2.146-2.854a6 6 0 0112.708 0l2.146 2.854M3 12l6-6m0 0l6 6m-6-6v12"/>
                    </svg>
                    Kembali ke Beranda
                </a>
                <a href="javascript:history.back()" class="inline-flex items-center justify-center border-2 border-gray-400 text-gray-700 hover:border-gray-600 hover:bg-gray-50 px-8 py-3 rounded-lg font-semibold transition">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali
                </a>
            </div>

            <!-- Islamic Quote -->
            <div class="mt-12 text-gray-500 text-sm">
                <p>"وَمَن يَتَّقِ اللَّهَ يَجْعَل لَّهُ مَخْرَجًا"</p>
                <p class="mt-2 text-xs italic">Barang siapa yang bertakwa kepada Allah, Dia akan memberikan jalan keluar</p>
            </div>
        </div>
    </section>
</x-layouts::base>
