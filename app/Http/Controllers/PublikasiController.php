<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index()
    {
        $publikasi = Publikasi::latest()->get();
        return view('admin.publikasi.index', compact('publikasi'));
    }

    public function create()
    {
        return view('admin.publikasi.create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'judul'    => 'required|string|max:255',
            'kategori' => 'required|in:nasional,internasional',
            'link'     => 'required|url',
        ]);

        Publikasi::create($validasi);

        return redirect()->route('publikasi.index')->with('success', 'Data jurnal berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $publikasi = Publikasi::findOrFail($id);
        return view('admin.publikasi.edit', compact('publikasi'));
    }

    public function update(Request $request, string $id)
    {
        $publikasi = Publikasi::findOrFail($id);

        $validasi = $request->validate([
            'judul'    => 'required|string|max:255',
            'kategori' => 'required|in:nasional,internasional',
            'link'     => 'required|url',
        ]);

        $publikasi->update($validasi);

        return redirect()->route('publikasi.index')->with('success', 'Data jurnal berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $publikasi = Publikasi::findOrFail($id);
        $publikasi->delete();

        return redirect()->route('publikasi.index')->with('success', 'Data jurnal berhasil dihapus!');
    }
}