<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

// Redirect halaman utama ke daftar buku
Route::get('/', function () {
    return redirect('/books');
});

// Routing untuk tugas pertemuan 2: Menampilkan daftar buku beserta author
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Routing pendukung: Menampilkan daftar penulis (author)
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');

// Routing pendukung: Menampilkan daftar genre buku
Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
