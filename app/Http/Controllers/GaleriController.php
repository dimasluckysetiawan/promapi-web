<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'judul'   => 'required|string|max:255',
            'konten'  => 'required|string',
            'tanggal' => 'required|date',
            'gambar'  => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time() . '_' . str_replace(' ', '_', $gambar->getClientOriginalName());
            $gambar->storeAs('galeri', $namaGambar, 'public');
            $validasi['gambar'] = $namaGambar;
        }

        Galeri::create($validasi);
        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, string $id)
    {
        $galeri = Galeri::findOrFail($id);

        $validasi = $request->validate([
            'judul'   => 'required|string|max:255',
            'konten'  => 'required|string',
            'tanggal' => 'required|date',
            'gambar'  => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($galeri->gambar && Storage::exists('public/galeri/' . $galeri->gambar)) {
                Storage::delete('public/galeri/' . $galeri->gambar);
            }
            $gambar = $request->file('gambar');
            $namaGambar = time() . '_' . str_replace(' ', '_', $gambar->getClientOriginalName());
            $gambar->storeAs('galeri', $namaGambar, 'public');
            $validasi['gambar'] = $namaGambar;
        }

        $galeri->update($validasi);
        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $galeri = Galeri::findOrFail($id);
        if ($galeri->gambar && Storage::exists('public/galeri/' . $galeri->gambar)) {
            Storage::delete('public/galeri/' . $galeri->gambar);
        }
        $galeri->delete();
        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dihapus!');
    }
}