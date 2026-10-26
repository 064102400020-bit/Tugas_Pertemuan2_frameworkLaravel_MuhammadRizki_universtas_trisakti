<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    /**
     * Nama tabel di database
     *
     * @var string
     */
    protected $table = 'books';

    /**
     * Atribut yang dapat diisi secara massal (mass assignable)
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'author_id',
        'title',
        'description',
        'year',
    ];

    /**
     * Relasi ke model Author (Satu Book dimiliki oleh satu Author / Belongs-To)
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
