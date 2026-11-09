# Sistem Informasi Perpustakaan Digital Kampus

Aplikasi manajemen perpustakaan berbasis Laravel 12 yang dirancang untuk mengelola inventaris buku, kategori, data anggota, hingga sirkulasi transaksi peminjaman. Proyek ini dikembangkan secara bertahap selama satu semester guna memenuhi tugas akhir mata kuliah Pemrograman Framework.

---

## Fitur Utama

* **Manajemen Data:** Operasi CRUD penuh untuk Kategori Buku, Data Buku, dan Anggota Perpustakaan.
* **Sirkulasi Transaksi:** Pencatatan peminjaman dan proses pengembalian buku secara terstruktur.
* **Sistem Otentikasi & Hak Akses:** Proteksi rute menggunakan middleware `auth` serta pembatasan menu spesifik (modul Kategori eksklusif untuk level Admin).
* **Layanan REST API:** Menyediakan titik akses (endpoint) API untuk modul buku, anggota, peminjaman, serta statistik.
* **Dashboard & Laporan Dinamis:** Tampilan antarmuka yang mengonsumsi data melalui komunikasi API internal aplikasi.

---

## Kebutuhan Sistem

Sebelum menjalankan proyek di komputer lokal, pastikan perangkatmu telah terpasang:
* PHP versi 8.2 atau yang lebih baru
* Composer (Pengelola dependensi PHP)
* MySQL (Server basis data)
* Git (Pengontrol versi)

---

## Panduan Instalasi & Menjalankan Proyek

Ikuti langkah-langkah di bawah ini secara berurutan untuk menyiapkan aplikasi:

### 1. Kloning Repositori
Jalankan perintah berikut di terminal:
```bash
git clone https://github.com/azizmboll/app-perpustakaan.git
cd app-perpustakaan
```

### 2. Pasang Dependensi
```bash
composer install
```

### 3. Konfigurasi Lingkungan (`.env`)
Salin templat konfigurasi bawaan dan buat kunci aplikasi:
```bash
copy .env.example .env
php artisan key:generate
```
*(Catatan: Jika menggunakan sistem operasi Linux atau macOS, ganti perintah `copy` dengan `cp`).*

Buka file `.env` yang baru dibuat, lalu sesuaikan konfigurasi basis data dan parameter pendukung berikut:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_perpustakaan
DB_USERNAME=root
DB_PASSWORD=

APP_FAKER_LOCALE=id_ID
INTERNAL_API_URL=http://127.0.0.1:8011
```

### 4. Buat Basis Data
Buat database kosong dengan nama `db_perpustakaan` melalui perangkat manajemen MySQL (seperti phpMyAdmin atau klien SQL lainnya).

### 5. Migrasi & Pengisian Data Dummy
Jalankan perintah berikut untuk membangun skema tabel sekaligus mengisi data awal secara otomatis:
```bash
php artisan migrate:fresh --seed
```
*Perintah ini akan membuat seluruh tabel dan memasukkan data tiruan (5 kategori, 20 buku, 15 anggota, 10 riwayat peminjaman, serta 3 akun pengguna).*

### 6. Menjalankan Dua Server (Wajib)
Proyek ini mengimplementasikan komunikasi API internal sehingga memerlukan dua instans server yang berjalan secara bersamaan guna menghindari kebuntuan (`deadlock`) pada `artisan serve` yang hanya memproses satu permintaan tunggal dalam satu waktu.

Buka dua jendela terminal terpisah di dalam direktori proyek:

* **Terminal Pertama (Layanan Utama / Akses Browser):**
  ```bash
  php artisan serve --port=8000
  ```
* **Terminal Kedua (Layanan Khusus API Internal):**
  ```bash
  php artisan serve --port=8011
  ```

### 7. Akses Aplikasi
Buka peramban web (browser) dan kunjungi tautan berikut:  
`http://127.0.0.1:8000`

---

## Kredensial Akun Pengguna

Kamu dapat masuk (login) menggunakan salah satu akun bawaan hasil *seeding*:

| Hak Akses (Role) | Alamat Email | Kata Sandi | Keterangan Tambahan |
| :--- | :--- | :--- | :--- |
| **Admin** | `admin@pens.ac.id` | `password` | Memiliki akses penuh termasuk menu Kategori |
| **Petugas** | `petugas1@pens.ac.id` | `password` | Mengelola data buku & transaksi peminjaman |
| **Petugas** | `petugas2@pens.ac.id` | `password` | Mengelola data buku & transaksi peminjaman |

---

## Dokumentasi & Skenario

* **Dokumentasi REST API:** Rincian endpoint API tersedia pada file `API.md` dengan Basis URL `http://127.0.0.1:8000/api`.
* **Skenario Demo:** Urutan langkah pengujian aplikasi tercantum secara lengkap di dalam file `DEMO.md`.

---

## Struktur Branch Git

* `main`: Versi stabil utama (siap untuk didemokan dan dikumpulkan).
* `dev`: Cabang tempat pengembangan dan integrasi fitur harian.