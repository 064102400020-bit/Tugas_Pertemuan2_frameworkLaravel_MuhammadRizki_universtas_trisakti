<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Menampilkan daftar semua buku beserta relasi data penulisnya (Author).
     * Menggunakan Eager Loading (with('author')) untuk efisiensi query database.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        // 1. Mengambil data buku beserta relasi author menggunakan eager loading
        $books = Book::with('author')->get();

        // 2. Mengirim data $books ke view resources/views/books/index.blade.php
        return view('books.index', compact('books'));
    }
}
