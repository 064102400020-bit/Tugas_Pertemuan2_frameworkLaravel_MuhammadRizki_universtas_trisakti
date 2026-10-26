<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * Mendaftarkan seeder sesuai urutan relasi data (Genre -> Author -> Book)
     */
    public function run(): void
    {
        $this->call([
            GenreSeeder::class,
            AuthorSeeder::class,
            BookSeeder::class,
        ]);
    }
}
