# Sistem Informasi Penjualan Buku (Book Sales) - Tugas 2 Framework Laravel

**Nama Mahasiswa:** Muhammad Rizki  
**NIM:** 064102400020  
**Kampus:** Universitas Trisakti  
**Mata Kuliah / Program:** Studi Independen - Framework Laravel (Pertemuan 2)  
**Materi:** Laravel Migration, Seeder, Eloquent Model, dan Eager Loading  

---

## 📖 Deskripsi Proyek
Proyek ini merupakan pengembangan dari tugas sebelumnya dengan mengimplementasikan sistem basis data relasional menggunakan fitur bawaan Laravel:
1. **Laravel Migration**: Mengelola skema tabel `authors`, `books`, dan `genres` secara terstruktur dengan relasi Foreign Key (`author_id` constrained on cascade).
2. **Laravel Seeder**: Mengisi data awal dummy realistis (masing-masing 5 data) untuk tabel `genres`, `authors`, dan `books`.
3. **Eloquent ORM & Relationship**: Menghubungkan entitas model dengan relasi *One-to-Many* (`Author hasMany Book`) dan *Belongs-To* (`Book belongsTo Author`).
4. **Eager Loading**: Mengoptimalkan query database pada `BookController@index` menggunakan `Book::with('author')->get()`.
5. **Blade Templating & Bootstrap 5**: Menampilkan data ke antarmuka pengguna dalam bentuk tabel yang bersih, modern, dan responsif.

---

## 🗄️ Struktur Tabel & Kolom (Brief)

### 1. Tabel `authors`
| Kolom | Tipe Data | Keterangan |
| :--- | :--- | :--- |
| `id` | BigIncrements (Primary Key) | ID unik penulis |
| `name` | String | Nama lengkap penulis |
| `country` | String | Asal negara (default: 'Indonesia') |
| `bio` | Text (nullable) | Profil dan biografi singkat |
| `created_at` & `updated_at` | Timestamps | Waktu pembuatan & pembaruan data |

### 2. Tabel `books`
| Kolom | Tipe Data | Keterangan |
| :--- | :--- | :--- |
| `id` | BigIncrements (Primary Key) | ID unik buku |
| `author_id` | ForeignId (Unsigned BigInteger) | Foreign Key merujuk ke `authors.id` (`onDelete('cascade')`) |
| `title` | String | Judul buku |
| `year` | Integer | Tahun publikasi/terbit |
| `description` | Text (nullable) | Sinopsis / ringkasan buku |
| `created_at` & `updated_at` | Timestamps | Waktu pembuatan & pembaruan data |

### 3. Tabel `genres` (Materi Praktikum)
| Kolom | Tipe Data | Keterangan |
| :--- | :--- | :--- |
| `id` | BigIncrements (Primary Key) | ID unik genre |
| `name` | String | Nama genre / kategori buku |
| `description` | Text | Deskripsi genre |
| `created_at` & `updated_at` | Timestamps | Waktu pembuatan & pembaruan data |

---

## 📂 Berkas Tugas Utama (Migration, Seeder, Model, Controller, View)

1. **Migration Files:**
   - `database/migrations/2026_01_01_000001_create_genres_table.php`
   - `database/migrations/2026_01_01_000002_create_authors_table.php`
   - `database/migrations/2026_01_01_000003_create_books_table.php` *(berjalan setelah authors)*

2. **Seeder Files:**
   - `database/seeders/GenreSeeder.php`
   - `database/seeders/AuthorSeeder.php` *(5 data penulis asli Indonesia)*
   - `database/seeders/BookSeeder.php` *(5 data buku best-seller Indonesia terhubung ke author)*
   - `database/seeders/DatabaseSeeder.php` *(pendaftaran seeder terurut)*

3. **Eloquent Model:**
   - `app/Models/Author.php` (relasi `hasMany(Book::class)`)
   - `app/Models/Book.php` (relasi `belongsTo(Author::class)`)
   - `app/Models/Genre.php`

4. **Controller:**
   - `app/Http/Controllers/BookController.php` (memakai eager loading `Book::with('author')->get()`)
   - `app/Http/Controllers/AuthorController.php`
   - `app/Http/Controllers/GenreController.php`

5. **Views & Routing:**
   - `resources/views/books/index.blade.php` (Tabel utama daftar buku & nama penulis)
   - `resources/views/authors/index.blade.php` (Tabel penulis & jumlah buku)
   - `resources/views/genres/index.blade.php` (Tabel genre)
   - `resources/views/layouts/app.blade.php` (Navigasi & layout utama)
   - `routes/web.php` (Route `/books`, `/authors`, `/genres`)

---

## 🚀 Cara Menjalankan Proyek dari Awal

### 1. Clone Repository & Masuk ke Folder Proyek
```bash
git clone https://github.com/064102400020-bit/Tugas_Pertemuan2_frameworkLaravel_MuhammadRizki_universtas_trisakti.git
cd Tugas_Pertemuan2_frameworkLaravel_MuhammadRizki_universtas_trisakti
```

### 2. Instal Dependensi Composer
```bash
composer install
```

### 3. Konfigurasi Environment (`.env`)
Salin file `.env.example` ke `.env`:
```bash
cp .env.example .env
php artisan key:generate
```

> **Catatan Database:**  
> Proyek ini menggunakan **SQLite** secara default (`DB_CONNECTION=sqlite`) sehingga dapat langsung dijalankan tanpa perlu mengonfigurasi atau menyalakan server MySQL/XAMPP. Database SQLite tersimpan di file `database/database.sqlite`.  
> Jika ingin menggunakan MySQL, cukup sesuaikan konfigurasi `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` di file `.env`.

### 4. Jalankan Migration dan Seeder
Jalankan perintah berikut untuk membuat seluruh tabel dan memasukkan 5 data dummy ke database:
```bash
php artisan migrate:fresh --seed
```

Periksa status seluruh migration:
```bash
php artisan migrate:status
```

### 5. Jalankan Server Lokal Laravel
```bash
php artisan serve
```

### 6. Buka Browser
Akses aplikasi melalui URL:
- **Daftar Buku (`/books`):** [http://127.0.0.1:8000/books](http://127.0.0.1:8000/books)
- **Daftar Penulis (`/authors`):** [http://127.0.0.1:8000/authors](http://127.0.0.1:8000/authors)
- **Daftar Genre (`/genres`):** [http://127.0.0.1:8000/genres](http://127.0.0.1:8000/genres)