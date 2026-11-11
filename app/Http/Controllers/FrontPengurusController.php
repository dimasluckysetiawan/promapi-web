<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class FrontPengurusController extends Controller
{
    public function index()
    {
        $semuaPengurus = Pengurus::all();

        // Kita kembalikan menggunakan where() agar akurasinya 100% sama dengan admin
        $pengurus = [
            'Dewan Pertimbangan' => $semuaPengurus->where('kategori', 'Dewan Pertimbangan'),
            'Dewan Pakar'        => $semuaPengurus->where('kategori', 'Dewan Pakar'),
            'Pengurus Inti'      => $semuaPengurus->where('kategori', 'Pengurus Inti'),
            'Bidang'             => $semuaPengurus->where('kategori', 'Bidang')->groupBy('bidang_spesifik'),
            'Pengurus Wilayah'   => $semuaPengurus->where('kategori', 'Pengurus Wilayah'),
            'Pengurus Daerah'    => $semuaPengurus->where('kategori', 'Pengurus Daerah'),
        ];

        return view('front.pengurus', compact('pengurus'));
    }
}