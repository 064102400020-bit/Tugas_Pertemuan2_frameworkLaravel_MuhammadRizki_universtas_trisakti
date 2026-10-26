<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\View\View;

class AuthorController extends Controller
{
    /**
     * Menampilkan daftar penulis buku dari database.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        // 1. Mengambil data dari tabel authors menggunakan Eloquent ORM
        $authors = Author::with('books')->get();

        // 2. Mengirim data ke View resources/views/authors/index.blade.php
        return view('authors.index', compact('authors'));
    }
}
