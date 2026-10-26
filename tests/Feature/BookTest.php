<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Book;
use App\Models\Author;

class BookTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // Jalankan migration dan seeder untuk test environment
        $this->seed();
    }

    /**
     * Test halaman /books dapat diakses dan menampilkan data buku beserta penulisnya.
     */
    public function test_books_page_loads_and_displays_books_with_authors(): void
    {
        $response = $this->get('/books');

        $response->assertStatus(200);
        $response->assertSee('Bumi Manusia');
        $response->assertSee('Pramoedya Ananta Toer');
        $response->assertSee('Hujan');
        $response->assertSee('Tere Liye');
        $response->assertSee('Laskar Pelangi');
        $response->assertSee('Andrea Hirata');
    }

    /**
     * Test halaman /authors dapat diakses dan menampilkan data penulis.
     */
    public function test_authors_page_loads_and_displays_authors(): void
    {
        $response = $this->get('/authors');

        $response->assertStatus(200);
        $response->assertSee('Pramoedya Ananta Toer');
        $response->assertSee('Tere Liye');
        $response->assertSee('Dee Lestari');
    }

    /**
     * Test relasi Eloquent Book belongsTo Author dan Author hasMany Book.
     */
    public function test_book_and_author_relations(): void
    {
        $book = Book::where('title', 'Bumi Manusia')->first();
        $this->assertNotNull($book);
        $this->assertEquals('Pramoedya Ananta Toer', $book->author->name);

        $author = Author::where('name', 'Pramoedya Ananta Toer')->first();
        $this->assertNotNull($author);
        $this->assertTrue($author->books->contains('id', $book->id));
    }
}
