<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\View\View;

class GenreController extends Controller
{
    /**
     * Menampilkan daftar genre buku dari database.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        // 1. Mengambil data dari tabel genres menggunakan Eloquent ORM
        $genres = Genre::all();

        // 2. Mengirim data ke View resources/views/genres/index.blade.php
        return view('genres.index', compact('genres'));
    }
}
