# Skenario Demo Aplikasi Perpustakaan Digital Kampus

Dokumen ini berisi urutan langkah-langkah pelaksanaan demo aplikasi untuk persiapan UAS.

## Daftar Skenario Demo:
1. **Autentikasi (Login)**
   - Akses `http://127.0.0.1:8000/login`
   - Masukkan email `admin@pens.ac.id` dan password `password`.
   - Pastikan berhasil masuk dan diarahkan ke halaman **Dashboard** dengan nama **Bambang Sutrisno** di navbar.
2. **Dashboard & Statistik**
   - Periksa ketiga kartu statistik (jumlah Buku, Anggota, dan Peminjaman Aktif terisi sesuai data seeding).
3. **Manajemen Kategori & Buku (`/books`)**
   - Tambah data kategori baru.
   - Tambah buku baru dengan data bernuansa Indonesia.
   - Tunjukkan fitur pagination custom bersih di bagian bawah tabel.
4. **Manajemen Anggota (`/members`)**
   - Tunjukkan daftar anggota perpustakaan beserta data email dan kontak yang valid.
5. **Transaksi Peminjaman & Pengembalian (`/loans`)**
   - Buat data peminjaman buku baru oleh anggota.
   - Lakukan proses pengembalian buku dan pastikan status badge berubah menjadi "Dikembalikan".
6. **Laporan Peminjaman (`/loans/report`)**
   - Buka halaman laporan untuk melihat 10 transaksi lengkap beserta nama petugas dan statusnya.
7. **Uji Coba Fault Tolerance (Dua Server)**
   - Jalankan server di port 8000 dan port 8011.
   - Matikan server port 8011, lalu *refresh* halaman Dashboard/Laporan untuk membuktikan penanganan try/catch `ConnectionException` bekerja dengan baik tanpa error 500.
8. **Demo API di Postman**
   - Uji endpoint API yang tersedia untuk memastikan integrasi data berjalan lancar.