@extends('layouts.app')

@section('title', 'Daftar Penulis')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <h2 class="fw-bold text-dark mb-1">✍️ Data Penulis (Authors)</h2>
                <p class="text-muted mb-0">Menampilkan profil penulis buku dari database menggunakan Model <code>Author</code> (Eloquent HasMany).</p>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ url('/books') }}" class="btn btn-outline-primary btn-sm px-3 py-2 fw-semibold">
                    📖 Lihat Data Buku
                </a>
                <a href="{{ url('/genres') }}" class="btn btn-outline-secondary btn-sm px-3 py-2 fw-semibold">
                    🏷️ Lihat Data Genre
                </a>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-custom mb-0 align-middle">
                        <thead>
                            <tr>
                                <th style="width: 70px;" class="text-center">No</th>
                                <th style="width: 240px;">Nama Penulis</th>
                                <th style="width: 150px;">Asal Negara</th>
                                <th>Biografi</th>
                                <th style="width: 140px;" class="text-center">Jumlah Buku</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($authors as $index => $author)
                                <tr>
                                    <td class="text-center">
                                        <span class="badge-id">{{ $index + 1 }}</span>
                                    </td>
                                    <td>
                                        <div class="fw-bold text-dark fs-6">{{ $author->name }}</div>
                                        <small class="text-muted">ID: #{{ $author->id }}</small>
                                    </td>
                                    <td>
                                        <span class="badge bg-light text-dark border">
                                            🇮🇩 {{ $author->country }}
                                        </span>
                                    </td>
                                    <td class="text-secondary" style="font-size: 0.92rem; line-height: 1.5;">
                                        {{ $author->bio ?? '-' }}
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 fw-semibold">
                                            {{ $author->books ? $author->books->count() : 0 }} Buku
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5 text-muted">
                                        Belum ada data penulis. Silakan jalankan seeder: <code>php artisan db:seed</code>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white border-top py-3 px-4 d-flex justify-content-between align-items-center flex-wrap gap-2">
                <small class="text-muted">Total Penulis: <strong>{{ count($authors) }} data</strong></small>
                <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2">
                    ✓ Sumber: Database (Eloquent Model)
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
