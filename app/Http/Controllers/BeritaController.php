<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua berita dari database, diurutkan dari yang paling baru
        $berita = \App\Models\Berita::latest()->get();
        
        // Mengirimkan data tersebut ke file blade
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengarahkan ke file formulir tambah berita
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi keamanan data yang masuk
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', // Maksimal 2MB
            'konten' => 'required'
        ]);

        // 2. Buat URL (slug) otomatis dari judul
        $slug = Str::slug($request->judul);

        // 3. Proses penyimpanan foto (jika user mengunggah foto)
        $namaFoto = null;
        if ($request->hasFile('foto')) {
            $fileFoto = $request->file('foto');
            $namaFoto = time() . '_' . $slug . '.' . $fileFoto->getClientOriginalExtension();
            // Simpan file ke dalam folder storage/app/public/fotos
            $fileFoto->storeAs('public/fotos', $namaFoto);
        }

        // 4. Masukkan data ke database
        \App\Models\Berita::create([
            'judul' => $request->judul,
            'slug' => $slug,
            'kategori' => $request->kategori,
            'foto' => $namaFoto,
            'konten' => $request->konten,
        ]);

        // 5. Kembalikan user ke halaman daftar berita
        return redirect()->route('berita.index')->with('success', 'Berita baru berhasil diterbitkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
