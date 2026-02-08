## Error Pages - Self Reminder

Halaman error yang telah dibuat untuk menampilkan pesan yang user-friendly kepada pengunjung website.

### Halaman Error yang Tersedia

✅ **404.blade.php** - Halaman Tidak Ditemukan
- Ditampilkan ketika user mencoba mengakses URL yang tidak ada
- Pesan: "Halaman tidak ditemukan" dengan pilihan kembali ke beranda atau kembali ke halaman sebelumnya

✅ **400.blade.php** - Permintaan Tidak Valid  
- Ditampilkan ketika ada kesalahan dalam permintaan (bad request)
- Pesan: "Ada yang tidak benar dengan permintaan kamu"

✅ **403.blade.php** - Akses Ditolak
- Ditampilkan ketika user tidak memiliki izin mengakses halaman
- Untuk user yang sudah login: menampilkan tombol Dashboard
- Untuk user belum login: menampilkan tombol Login

✅ **429.blade.php** - Terlalu Banyak Permintaan
- Ditampilkan ketika user mengirim terlalu banyak request dalam waktu singkat (rate limiting)
- Pesan: "Pelan-pelan, sabar... 😊"

✅ **500.blade.php** - Kesalahan Server
- Ditampilkan ketika terjadi error di sisi server
- Pesan: "Server kami sedang mengalami gangguan"

✅ **503.blade.php** - Layanan Tidak Tersedia
- Ditampilkan ketika server dalam mode maintenance
- Pesan: "Kami sedang melakukan pembaruan untuk memberikan layanan yang lebih baik"

### Karakteristik Desain

✨ **User-Friendly Design**
- Bahasa Indonesia yang mudah dipahami
- Pesan yang jelas dan tidak teknis
- Ikon yang menarik untuk setiap error

🎨 **Konsisten dengan Landing Page**
- Menggunakan base layout yang sama
- Gradient background yang menarik (red, orange, yellow)
- Tombol dengan warna yang konsisten (green untuk primary action)
- Typography dan spacing yang sama dengan landing page

📱 **Responsive Design**
- Bekerja sempurna di mobile, tablet, dan desktop
- Flexbox layout untuk adaptasi berbagai ukuran layar

🕌 **Islamic Quotes**
- Setiap halaman error memiliki ayat Al-Quran yang relevan
- Memberikan nilai spiritual kepada pengguna

### Tombol Aksi

Setiap halaman error menyediakan tombol untuk memudahkan user:

- **Kembali ke Beranda** - Membawa user ke home page
- **Kembali** - Membawa user ke halaman sebelumnya (menggunakan browser back)
- **Muat Ulang** - Refresh halaman saat ini
- **Coba Lagi** - Mencoba kembali request yang gagal
- **Login** - Untuk user yang belum login (halaman 403)
- **Dashboard** - Untuk user yang sudah login (halaman 403)

### Integrasi dengan Laravel

File error pages ini akan secara otomatis ditampilkan oleh Laravel ketika terjadi HTTP exception. Tidak perlu konfigurasi tambahan karena Laravel sudah mendeteksi file di folder `resources/views/errors/`.

### Contoh Penggunaan

```php
// Laravel akan otomatis menampilkan error page yang sesuai
abort(404);  // Tampilkan 404.blade.php
abort(500);  // Tampilkan 500.blade.php
abort(403);  // Tampilkan 403.blade.php
```

### Notes

- Semua error page menggunakan layout base: `<x-layouts::base>`
- Menggunakan Tailwind CSS untuk styling
- Responsive dan mobile-friendly
- Tidak ada hardcoded teknis info untuk security
