# Proyek Akhir Rekayasa Web (API Toko)

Repository ini berisi source code untuk Proyek Akhir Mata Kuliah Rekayasa Web. Aplikasi ini adalah layanan **RESTful API** untuk pengelolaan data toko yang mencakup fitur autentikasi dan CRUD (Create, Read, Update, Delete).

**Data Mahasiswa:**
- **Nama:** [Natalie Gabriel I]
- **NIM:** [G.231.23.0050]
- **Kelas:** [Teknik Informatika A2]
- **Jenis Soal:** Soal 2 (NIM Genap)

## 🚀 Fitur Utama
1.  **Autentikasi User:** Login & Register menggunakan **Laravel Sanctum** (Bearer Token).
2.  **CRUD Kategori:** Pengelolaan kategori produk (Wajib diisi sebelum produk).
3.  **CRUD Produk:** Pengelolaan data produk (Harga, Stok, Relasi Kategori).
4.  **CRUD Pelanggan:** Pengelolaan data pelanggan toko.

## 🛠️ Teknologi yang Digunakan
- **Framework:** Laravel 10 / 11
- **Bahasa:** PHP
- **Database:** MySQL (`crud_api_b`)
- **Security:** Laravel Sanctum
- **Tools Testing:** Postman

## 📦 Daftar Endpoint API

| Method | Endpoint | Deskripsi | Auth |
| :--- | :--- | :--- | :--- |
| POST | `/api/register` | Mendaftarkan admin baru | Public |
| POST | `/api/login` | Login & mendapatkan Token | Public |
| POST | `/api/kategori/create` | Tambah kategori baru | **Bearer** |
| GET | `/api/kategori/read` | Lihat semua kategori | **Bearer** |
| POST | `/api/produk/create` | Tambah produk baru | **Bearer** |
| GET | `/api/produk/read` | Lihat semua produk | **Bearer** |
| POST | `/api/pelanggan/create` | Tambah pelanggan | **Bearer** |
| GET | `/api/pelanggan/read` | Lihat semua pelanggan | **Bearer** |

*(Daftar endpoint lengkap untuk Update & Delete juga tersedia sesuai ketentuan soal).*

## ⚙️ Cara Instalasi (Untuk Penguji)

1. **Clone Repository**
   ```bash
   git clone [https://github.com/natalie-gabriel/project-genap.git](https://github.com/natalie-gabriel/project-genap.git)

2. **Install Dependencies**
   ```bash
   composer install
   
3. **Install Dependencies**
    ```bash
    DB_DATABASE=crud_api_b
    DB_USERNAME=root
    DB_PASSWORD=

4. **Generate Key & Migrate**
   ```bash
   php artisan key:generate
   php artisan migrate

5. **Jalankan Server**
    ```bash
    php artisan serve
    
**Dibuat untuk memenuhi tugas Proyek Akhir Rekayasa Web Tahun 2025.**

   
