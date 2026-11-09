# Dokumentasi API - Aplikasi Perpustakaan

Berikut adalah daftar seluruh endpoint API yang tersedia pada sistem perpustakaan:

| No | Method | Endpoint | Body / Parameter | Status Code | Contoh Response / Keterangan |
| :--- | :--- | :--- | :--- | :--- | :--- |
| 1 | `GET` | `/api/books` | - | `200 OK` | Mengambil seluruh data buku (dengan pagination & relasi kategori). |
| 2 | `GET` | `/api/books?judul=...` | Query: `judul` | `200 OK` | Menyaring data buku berdasarkan pencarian judul (LIKE). |
| 3 | `GET` | `/api/books?category_id=...` | Query: `category_id` | `200 OK` | Menyaring data buku berdasarkan ID kategori tertentu. |
| 4 | `POST` | `/api/books` | JSON Body | `201 Created` | Menambahkan data buku baru ke database. |
| 5 | `POST` | `/api/books` | Body Kosong / Tidak Valid | `422 Unprocessable Entity` | Mengembalikan pesan error validasi per field jika data kosong. |
| 6 | `GET` | `/api/books/{id}` | - | `200 OK` / `404 Not Found` | Menampilkan detail satu buku berdasarkan ID. Status `404` jika ID tidak ditemukan. |
| 7 | `PUT` | `/api/books/{id}` | JSON Body | `200 OK` | Memperbarui data buku berdasarkan ID. |
| 8 | `DELETE` | `/api/books/{id}` | - | `200 OK` | Menghapus data buku berdasarkan ID. |
| 9 | `GET` | `/api/members` | - | `200 OK` | Menampilkan daftar seluruh anggota perpustakaan dengan pagination. |
| 10 | `GET` | `/api/members/{id}` | - | `200 OK` | Menampilkan detail informasi anggota berdasarkan ID. |
| 11 | `GET` | `/api/loans` | - | `200 OK` | Menampilkan daftar transaksi peminjaman (disertai data member, petugas, dan buku). |
| 12 | `POST` | `/api/loans` | JSON Body | `201 Created` | Membuat transaksi peminjaman buku baru (status otomatis "dipinjam"). |
| 13 | `PUT` | `/api/loans/{id}/kembalikan` | - | `200 OK` | Mengubah status transaksi menjadi "dikembalikan" dan mencatat tanggal pengembalian. |
| 14 | `GET` | `/api/stats` | - | `200 OK` | Menampilkan statistik ringkas (total buku, total anggota, dan peminjaman aktif). |