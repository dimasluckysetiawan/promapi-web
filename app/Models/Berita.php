<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // Mendaftarkan kolom yang dizinkan untuk diisi data
    protected $fillable = [
        'judul',
        'slug',
        'kategori',
        'foto',
        'konten',
        'views'
    ];
}