<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Category extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi saat create/update
    protected $fillable = [
        'name', // ganti ke 'nama' jika kamu pakai bahasa Indonesia di database
    ];

    // Relasi: satu kategori memiliki banyak buku
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
