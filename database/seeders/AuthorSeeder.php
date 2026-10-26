<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Mengisi data awal 5 penulis (author) realistis
     */
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Pramoedya Ananta Toer',
                'country' => 'Indonesia',
                'bio' => 'Sastrawan legendaris Indonesia penulis Tetralogi Buru yang telah diterjemahkan ke lebih dari 40 bahasa dunia.',
            ],
            [
                'name' => 'Tere Liye',
                'country' => 'Indonesia',
                'bio' => 'Penulis produktif novel-novel best seller Indonesia seperti serial Bumi, Hujan, Pulang, dan Pergi.',
            ],
            [
                'name' => 'Dee Lestari',
                'country' => 'Indonesia',
                'bio' => 'Penulis dan musisi ternama pencipta mahakarya fiksi ilmiah seri Supernova, Filosofi Kopi, dan Aroma Karsa.',
            ],
            [
                'name' => 'Ahmad Fuadi',
                'country' => 'Indonesia',
                'bio' => 'Novelis inspiratif penulis trilogi Negeri 5 Menara, mantan wartawan TEMPO, dan pegiat gerakan sosial pendidikan.',
            ],
            [
                'name' => 'Andrea Hirata',
                'country' => 'Indonesia',
                'bio' => 'Sastrawan peraih penghargaan internasional penulis mahakarya Laskar Pelangi dan Sang Pemimpi.',
            ],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
