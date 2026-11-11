<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita; // Memanggil model Berita

class FrontController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->get();
        // Kembalikan ke view aslimu, bukan ke 'front.home'
        return view('berita', compact('berita')); 
    }

    public function detail($slug)
    {
        // Ambil berita utama yang sedang dibaca
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $berita->increment('views'); // Tambah jumlah tayangan
        
        // Ambil 3 "Artikel Lainnya" yang paling baru, KECUALI berita yang sedang dibaca ini
        $artikelLainnya = Berita::where('id', '!=', $berita->id)
                                ->latest()
                                ->take(3)
                                ->get();
        
        // Kirim kedua variabel ke tampilan
        return view('blog-details', compact('berita', 'artikelLainnya'));
    }
}