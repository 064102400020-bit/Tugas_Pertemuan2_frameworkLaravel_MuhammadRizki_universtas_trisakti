<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BookStore') - Sistem Informasi Penjualan Buku</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar-custom {
            background: linear-gradient(135deg, #1e3a8a, #2563eb);
            box-shadow: 0 4px 14px rgba(30, 58, 138, 0.18);
        }
        .nav-link {
            font-weight: 500;
            color: rgba(255, 255, 255, 0.85) !important;
            border-radius: 8px;
            padding: 8px 16px !important;
            transition: all 0.2s ease;
        }
        .nav-link:hover {
            color: #ffffff !important;
            background-color: rgba(255, 255, 255, 0.15);
        }
        .nav-link.active {
            color: #1e3a8a !important;
            background-color: #ffffff !important;
            font-weight: 600;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
        .card-custom {
            border: none;
            border-radius: 14px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            background: #ffffff;
        }
        .table-custom thead {
            background-color: #f1f5f9;
        }
        .table-custom th {
            font-weight: 600;
            color: #475569;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.05em;
            padding: 14px 18px;
            border-bottom: 2px solid #e2e8f0;
        }
        .table-custom td {
            padding: 16px 18px;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
        }
        .table-custom tbody tr:hover {
            background-color: #f8fafc;
        }
        .author-avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #e2e8f0;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        }
        .badge-id {
            background-color: #e0e7ff;
            color: #3730a3;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 8px;
            display: inline-block;
        }
        footer {
            margin-top: auto;
            background-color: #ffffff;
            border-top: 1px solid #e2e8f0;
            padding: 20px 0;
            font-size: 0.875rem;
            color: #64748b;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ url('/') }}">
                <span style="font-size: 1.5rem;">📚</span>
                <span>BookSales App</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-2">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('books*') ? 'active' : '' }}" href="{{ url('/books') }}">
                            📖 Daftar Buku
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('authors*') ? 'active' : '' }}" href="{{ url('/authors') }}">
                            ✍️ Daftar Author
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('genres*') ? 'active' : '' }}" href="{{ url('/genres') }}">
                            🏷️ Daftar Genre
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p class="mb-1 fw-semibold text-secondary">Sistem Informasi Penjualan Buku (Book Sales) &bull; Migration & Seeder</p>
            <p class="mb-0 text-muted">Tugas 2 Framework Laravel &mdash; Muhammad Rizki (Universitas Trisakti)</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
