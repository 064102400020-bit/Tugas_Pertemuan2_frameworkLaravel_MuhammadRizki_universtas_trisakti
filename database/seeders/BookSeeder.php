<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Mengisi 5 data buku realistis dengan relasi ke author_id
     */
    public function run(): void
    {
        // Pastikan author tersedia
        $pramoedya = Author::where('name', 'Pramoedya Ananta Toer')->first();
        $tereLiye  = Author::where('name', 'Tere Liye')->first();
        $dee       = Author::where('name', 'Dee Lestari')->first();
        $ahmad     = Author::where('name', 'Ahmad Fuadi')->first();
        $andrea    = Author::where('name', 'Andrea Hirata')->first();

        $books = [
            [
                'author_id'   => $pramoedya ? $pramoedya->id : 1,
                'title'       => 'Bumi Manusia',
                'year'        => 1980,
                'description' => 'Novel pertama dari Tetralogi Buru yang mengisahkan perjuangan Minke menembus batas kelas sosial di era kolonial Belanda.',
            ],
            [
                'author_id'   => $tereLiye ? $tereLiye->id : 2,
                'title'       => 'Hujan',
                'year'        => 2016,
                'description' => 'Novel fiksi ilmiah tentang persahabatan, cinta, perpisahan, dan teknologi memori di era futuristik tahun 2042.',
            ],
            [
                'author_id'   => $dee ? $dee->id : 3,
                'title'       => 'Aroma Karsa',
                'year'        => 2018,
                'description' => 'Kisah misteri dan aroma mistis pencarian bunga legendaris Puspa Karsa melalui indra penciuman luar biasa.',
            ],
            [
                'author_id'   => $ahmad ? $ahmad->id : 4,
                'title'       => 'Negeri 5 Menara',
                'year'        => 2009,
                'description' => 'Kisah inspiratif santri Pondok Madani dengan filosofi Man Jadda Wajada yang mampu menggapai mimpi hingga ke belahan dunia.',
            ],
            [
                'author_id'   => $andrea ? $andrea->id : 5,
                'title'       => 'Laskar Pelangi',
                'year'        => 2005,
                'description' => 'Kisah perjuangan sepuluh anak di Gantong, Belitung, yang tak kenal menyerah dalam menuntut ilmu di tengah keterbatasan fasilitas.',
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
