@extends('layouts.app')

@section('title', 'Daftar Genre')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <h2 class="fw-bold text-dark mb-1">🏷️ Data Genre Buku</h2>
                <p class="text-muted mb-0">Menampilkan kategori buku yang tersedia dari database (Praktikum Migration & Seeder).</p>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ url('/books') }}" class="btn btn-outline-primary btn-sm px-3 py-2 fw-semibold">
                    📖 Lihat Data Buku
                </a>
                <a href="{{ url('/authors') }}" class="btn btn-outline-secondary btn-sm px-3 py-2 fw-semibold">
                    ✍️ Lihat Data Author
                </a>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-custom mb-0 align-middle">
                        <thead>
                            <tr>
                                <th style="width: 80px;" class="text-center">ID</th>
                                <th style="width: 250px;">Nama Genre</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($genres as $genre)
                                <tr>
                                    <td class="text-center">
                                        <span class="badge-id">#{{ $genre->id }}</span>
                                    </td>
                                    <td>
                                        <div class="fw-semibold text-dark fs-6">{{ $genre->name }}</div>
                                    </td>
                                    <td class="text-secondary" style="font-size: 0.92rem; line-height: 1.5;">
                                        {{ $genre->description }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-5 text-muted">
                                        Belum ada data genre. Silakan jalankan seeder: <code>php artisan db:seed</code>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white border-top py-3 px-4 d-flex justify-content-between align-items-center flex-wrap gap-2">
                <small class="text-muted">Total Genre: <strong>{{ count($genres) }} data</strong></small>
                <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2">✓ Sumber: Database (Eloquent Model)</span>
            </div>
        </div>
    </div>
</div>
@endsection
