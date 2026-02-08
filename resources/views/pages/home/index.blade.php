<x-layouts::base :title="__('Self Reminder')">
    <!-- Hero Section -->
    <section class="min-h-screen bg-gradient-to-br from-green-50 via-yellow-50 to-gray-100 flex items-center justify-center px-4 md:px-8">
        <div class="max-w-5xl mx-auto text-center">
            <div class="mb-5 animate-fade-in">
                <img src="{{ asset('images/logo.png') }}" alt="Self Reminder Logo" class="w-32 h-32 mx-auto mb-6">
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-gray-800">
                Self<span class="text-green-500">Reminder</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-gray-600 mb-4 font-semibold">
                Komunitas Remaja Islam
            </p>
            
            <p class="text-lg text-gray-600 mb-12 max-w-2xl mx-auto">
                Tempat bagi remaja muslim untuk berkumpul, berbagi ilmu, dan saling mengingatkan dalam menjalankan ajaran Islam dengan penuh semangat dan kebersamaan.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <flux:button href="#kegiatan" class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 text-lg font-semibold">
                    Pelajari Kegiatan Kami
                </flux:button>
                <flux:button href="#join" variant="outline" class="border-2 border-green-500 text-green-600 hover:bg-green-50 px-8 py-3 text-lg font-semibold">
                    Bergabunglah
                </flux:button>
            </div>
            
            <div class="text-yellow-600 text-2xl">
                ✨ وَاصْبِرْ عَلَىٰ مَا يَقُولُونَ ✨
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 md:py-24 bg-white px-4 md:px-8">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-12 text-gray-800">
                Tentang <span class="text-green-500">Self Reminder</span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-lg p-8 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v2h8v-2zM2 8a2 2 0 11-4 0 2 2 0 014 0zM6 15a4 4 0 00-8 0v2h8v-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Kebersamaan</h3>
                    <p class="text-gray-600">Membangun komunitas yang solid dan saling mendukung satu sama lain</p>
                </div>
                
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-lg p-8 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.5 1.5H3.75A2.25 2.25 0 001.5 3.75v12.5A2.25 2.25 0 003.75 18.5h12.5a2.25 2.25 0 002.25-2.25V9.5m-15-4h12m-12 4v8m12-8v8M5 5.5a1 1 0 11-2 0 1 1 0 012 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Berbagi Ilmu</h3>
                    <p class="text-gray-600">Saling belajar dan berbagi pengetahuan tentang Islam dan kehidupan</p>
                </div>
                
                <div class="bg-gradient-to-br from-gray-50 to-gray-200 rounded-lg p-8 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-gray-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Pertumbuhan</h3>
                    <p class="text-gray-600">Mengembangkan diri menjadi muslim yang lebih baik setiap harinya</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Rules Section -->
    <section class="py-16 md:py-24 bg-gradient-to-r from-green-50 to-yellow-50 px-4 md:px-8">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-4 text-gray-800">
                Peraturan Komunitas
            </h2>
            
            <p class="text-center text-gray-600 mb-12 text-lg">
                Assalamu'alaikum Warahmatullahi Wabarakatuh 🌙
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex gap-4 bg-white rounded-lg p-6 hover:shadow-md transition">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-8 w-8 rounded-md bg-green-500 text-white font-bold">1</div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Perkenalkan Diri</h3>
                        <p class="text-gray-600">Anggota baru diharapkan untuk memperkenalkan diri mereka sendiri</p>
                    </div>
                </div>
                
                <div class="flex gap-4 bg-white rounded-lg p-6 hover:shadow-md transition">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-8 w-8 rounded-md bg-green-500 text-white font-bold">2</div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Berbicara Dengan Baik</h3>
                        <p class="text-gray-600">Tidak boleh menggunakan kata-kata kasar atau tidak sopan</p>
                    </div>
                </div>
                
                <div class="flex gap-4 bg-white rounded-lg p-6 hover:shadow-md transition">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-8 w-8 rounded-md bg-yellow-500 text-white font-bold">3</div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Hindari Pertengkaran</h3>
                        <p class="text-gray-600">Dilarang bertengkar dengan sesama anggota komunitas</p>
                    </div>
                </div>
                
                <div class="flex gap-4 bg-white rounded-lg p-6 hover:shadow-md transition">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-8 w-8 rounded-md bg-yellow-500 text-white font-bold">4</div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Saling Menghormati</h3>
                        <p class="text-gray-600">Hormati setiap anggota dengan tulus dan penuh kesadaran</p>
                    </div>
                </div>
                
                <div class="flex gap-4 bg-white rounded-lg p-6 hover:shadow-md transition">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-8 w-8 rounded-md bg-gray-500 text-white font-bold">5</div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Keamanan</h3>
                        <p class="text-gray-600">Tidak boleh membawa benda tajam (kecuali admin)</p>
                    </div>
                </div>
                
                <div class="flex gap-4 bg-white rounded-lg p-6 hover:shadow-md transition">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-8 w-8 rounded-md bg-gray-500 text-white font-bold">6</div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Bercanda Wajar</h3>
                        <p class="text-gray-600">Jangan bercanda secara berlebihan atau menyinggung</p>
                    </div>
                </div>
                
                <div class="flex gap-4 bg-white rounded-lg p-6 hover:shadow-md transition md:col-span-2">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-8 w-8 rounded-md bg-green-500 text-white font-bold">7</div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">Aktif Berpartisipasi</h3>
                        <p class="text-gray-600">Usahakan untuk mengikuti kegiatan-kegiatan yang ada dalam komunitas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section id="kegiatan" class="py-16 md:py-24 bg-white px-4 md:px-8">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-4 text-gray-800">
                Kegiatan Kami
            </h2>
            
            <p class="text-center text-gray-600 mb-12 text-lg">
                Berbagai kegiatan menarik dan bermanfaat untuk pengembangan diri
            </p>
            
            <div class="space-y-6">
                <div class="bg-gradient-to-r from-green-50 to-white rounded-lg border-2 border-green-200 p-8 hover:shadow-lg transition">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-green-500 text-white rounded-lg flex items-center justify-center text-xl">📓</div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Berbagi Quotes</h3>
                            <p class="text-gray-600">Saling berbagi quotes bermakna yang bermanfaat. Quotes bisa tentang apa saja yang penting membawa manfaat dan hikmah bagi semua anggota.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-yellow-50 to-white rounded-lg border-2 border-yellow-200 p-8 hover:shadow-lg transition">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-yellow-500 text-white rounded-lg flex items-center justify-center text-xl">🎞️</div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Berbagi Video Islami</h3>
                            <p class="text-gray-600">Membagikan video mengenai Islamic content, motivasi, dan nasehat yang dapat menginspirasi dan mendekatkan kita kepada Allah SWT.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-green-50 to-white rounded-lg border-2 border-green-200 p-8 hover:shadow-lg transition">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-green-500 text-white rounded-lg flex items-center justify-center text-xl">🌚</div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Tebak-Tebakkan</h3>
                            <p class="text-gray-600">Kegiatan fun yang terbuka untuk semua orang. Siapa saja boleh memberikan tebakan kepada anggota komunitas lainnya. Hiburan yang menyenangkan dan mengedukasi!</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-yellow-50 to-white rounded-lg border-2 border-yellow-200 p-8 hover:shadow-lg transition">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-yellow-500 text-white rounded-lg flex items-center justify-center text-xl">🎙️</div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Voice Arabic Song</h3>
                            <p class="text-gray-600">Bersama-sama menyanyikan lagu arab yang indah dan dijadikan dokumentasi untuk menarik anggota baru. Bagi yang mau ikutan, silakan bergabung!</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-green-50 to-white rounded-lg border-2 border-green-200 p-8 hover:shadow-lg transition">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-green-500 text-white rounded-lg flex items-center justify-center text-xl">📚</div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Berbagi Ilmu</h3>
                            <p class="text-gray-600">Kegiatan yang paling penting adalah saling berbagi ilmu agama dan pengetahuan bermanfaat untuk pengembangan spiritual dan intelektual bersama.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-yellow-50 to-white rounded-lg border-2 border-yellow-200 p-8 hover:shadow-lg transition">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-yellow-500 text-white rounded-lg flex items-center justify-center text-xl">📖</div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Ngaji Bersama</h3>
                            <p class="text-gray-600">Mengaji dan belajar Al-Qur'an secara bersama-sama untuk memperdalam pemahaman kita tentang ajaran Islam yang mulia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="join" class="py-16 md:py-24 bg-gradient-to-r from-green-500 to-yellow-400 px-4 md:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Bergabunglah dengan Kami
            </h2>
            
            <p class="text-xl text-white mb-8 opacity-95">
                Jadilah bagian dari komunitas yang peduli, saling mendukung, dan terus berkembang. Mari bersama-sama menjadi muslim yang lebih baik! 🌻
            </p>
            
            <div class="bg-white rounded-lg p-8 mb-8">
                <p class="text-gray-700 mb-6 text-lg">
                    <strong>Hubungi kami melalui:</strong>
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <flux:button href="https://chat.whatsapp.com/CJPx10QoYD6HqJnB3AIkAL?mode=gi_t" variant="outline" class="border-2 border-green-500 text-green-600 hover:bg-green-50">
                        WhatsApp
                    </flux:button>
                </div>
            </div>
            
            <p class="text-white text-lg font-semibold italic">
                "Udah itu aja semoga betah yah! 🫂"
            </p>
        </div>
    </section>

    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fade-in 0.6s ease-out;
        }
    </style>
</x-layouts::base>
