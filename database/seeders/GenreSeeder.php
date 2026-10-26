<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Mengisi data kategori / genre buku ke tabel database
     */
    public function run(): void
    {
        $genres = [
            [
                'name' => 'Fiksi & Sastra',
                'description' => 'Karya sastra dan cerita rekaan penuh imajinasi dengan nilai estetika serta pesan moral mendalam.',
            ],
            [
                'name' => 'Pengembangan Diri (Self-Improvement)',
                'description' => 'Buku panduan motivasi, psikologi praktis, dan kiat mengoptimalkan potensi serta produktivitas diri.',
            ],
            [
                'name' => 'Teknologi & Pemrograman',
                'description' => 'Buku referensi rekayasa perangkat lunak, arsitektur web, sistem basis data, dan tren digital.',
            ],
            [
                'name' => 'Bisnis & Finansial',
                'description' => 'Wawasan seputar manajemen bisnis, strategi investasi, kewirausahaan, dan pengelolaan keuangan.',
            ],
            [
                'name' => 'Sejarah & Biografi',
                'description' => 'Catatan dokumentasi sejarah peradaban serta rekam jejak perjuangan para tokoh dunia dan nasional.',
            ],
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
