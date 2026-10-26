@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
<div class="row">
    <div class="col-12">
        <!-- Header Halaman -->
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <h2 class="fw-bold text-dark mb-1">📖 Data Buku (Books)</h2>
                <p class="text-muted mb-0">Menampilkan daftar buku beserta informasi penulis menggunakan <em>Eager Loading</em> (<code>Book::with('author')->get()</code>).</p>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ url('/authors') }}" class="btn btn-outline-primary btn-sm px-3 py-2 fw-semibold">
                    ✍️ Lihat Penulis
                </a>
                <a href="{{ url('/genres') }}" class="btn btn-outline-secondary btn-sm px-3 py-2 fw-semibold">
                    🏷️ Lihat Genre
                </a>
            </div>
        </div>

        <!-- Kartu Tabel Data Buku -->
        <div class="card card-custom">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-custom mb-0 align-middle">
                        <thead>
                            <tr>
                                <th style="width: 70px;" class="text-center">No</th>
                                <th style="width: 260px;">Judul Buku</th>
                                <th style="width: 220px;">Penulis (Author)</th>
                                <th style="width: 120px;" class="text-center">Tahun</th>
                                <th>Deskripsi / Sinopsis</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $index => $book)
                                <tr>
                                    <!-- Nomor Urut -->
                                    <td class="text-center">
                                        <span class="badge-id">{{ $index + 1 }}</span>
                                    </td>
                                    <!-- Judul Buku -->
                                    <td>
                                        <div class="fw-bold text-dark fs-6">{{ $book->title }}</div>
                                        <small class="text-muted">ID: #{{ $book->id }}</small>
                                    </td>
                                    <!-- Penulis (Relasi BelongsTo Author) -->
                                    <td>
                                        <div class="fw-semibold text-primary">
                                            {{ $book->author ? $book->author->name : 'Tidak Diketahui' }}
                                        </div>
                                        @if($book->author && $book->author->country)
                                            <span class="badge bg-light text-secondary border mt-1">
                                                🌍 {{ $book->author->country }}
                                            </span>
                                        @endif
                                    </td>
                                    <!-- Tahun Terbit -->
                                    <td class="text-center">
                                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 fw-bold">
                                            {{ $book->year }}
                                        </span>
                                    </td>
                                    <!-- Deskripsi Buku -->
                                    <td class="text-secondary" style="font-size: 0.92rem; line-height: 1.5;">
                                        {{ $book->description ?? '-' }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5 text-muted">
                                        Belum ada data buku. Silakan jalankan seeder: <code>php artisan db:seed</code>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Footer Kartu -->
            <div class="card-footer bg-white border-top py-3 px-4 d-flex justify-content-between align-items-center flex-wrap gap-2">
                <small class="text-muted">Total Buku: <strong>{{ count($books) }} data</strong></small>
                <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2">
                    ✓ Sumber: Database (Eloquent Eager Loading)
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
