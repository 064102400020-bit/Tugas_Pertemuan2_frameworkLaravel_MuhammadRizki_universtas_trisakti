<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;

    /**
     * Nama tabel di database
     *
     * @var string
     */
    protected $table = 'authors';

    /**
     * Atribut yang dapat diisi secara massal (mass assignable)
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'country',
        'bio',
    ];

    /**
     * Relasi ke model Book (Satu Author memiliki banyak Book / One-to-Many)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
