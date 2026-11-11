<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data pengurus
        $semuaPengurus = Pengurus::all();

        // Kelompokkan data sesuai urutan AD/ART
        $pengurus = [
            'Dewan Pertimbangan' => $semuaPengurus->where('kategori', 'Dewan Pertimbangan'),
            'Dewan Pakar'        => $semuaPengurus->where('kategori', 'Dewan Pakar'),
            'Pengurus Inti'      => $semuaPengurus->where('kategori', 'Pengurus Inti'),
            // Khusus bidang, kita kelompokkan lagi berdasarkan nama bidangnya
            'Bidang'             => $semuaPengurus->where('kategori', 'Bidang')->groupBy('bidang_spesifik'),
            'Pengurus Wilayah'   => $semuaPengurus->where('kategori', 'Pengurus Wilayah'),
            'Pengurus Daerah'    => $semuaPengurus->where('kategori', 'Pengurus Daerah'),
        ];

        return view('admin.pengurus.index', compact('pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengurus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama'            => 'required|string|max:255',
            'kategori'        => 'required|string',
            'bidang_spesifik' => 'nullable|string',
            'jabatan'         => 'required|string|max:255',
            'periode'         => 'required|string|max:255',
            'foto'            => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // CEK BAGIAN INI: Pastikan proses upload fotonya ada
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaFoto = time() . '_' . str_replace(' ', '_', $foto->getClientOriginalName());
            
            // Ini baris yang krusial untuk memindahkan file fisik ke storage
            $foto->storeAs('pengurus', $namaFoto, 'public');
            
            $validasi['foto'] = $namaFoto;
        }

        Pengurus::create($validasi);

        return redirect()->route('pengurus.index')->with('success', 'Data pengurus berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengurus = Pengurus::findOrFail($id);
        return view('admin.pengurus.edit', compact('pengurus'));
    }

    public function update(Request $request, string $id)
    {
        $pengurus = Pengurus::findOrFail($id);

        $validasi = $request->validate([
            'nama'            => 'required|string|max:255',
            'kategori'        => 'required|string',
            'bidang_spesifik' => 'nullable|string',
            'jabatan'         => 'required|string|max:255',
            'periode'         => 'required|string|max:255',
            'foto'            => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($pengurus->foto && Storage::exists('public/pengurus/' . $pengurus->foto)) {
                Storage::delete('public/pengurus/' . $pengurus->foto);
            }

            // Upload foto baru
            $foto = $request->file('foto');
            $namaFoto = time() . '_' . str_replace(' ', '_', $foto->getClientOriginalName());
            $foto->storeAs('pengurus', $namaFoto, 'public');
            $validasi['foto'] = $namaFoto;
        }

        $pengurus->update($validasi);

        return redirect()->route('pengurus.index')->with('success', 'Data pengurus berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $pengurus = Pengurus::findOrFail($id);
        
        // Hapus foto dari server jika ada
        if ($pengurus->foto && Storage::exists('public/pengurus/' . $pengurus->foto)) {
            Storage::delete('public/pengurus/' . $pengurus->foto);
        }
        
        $pengurus->delete();

        return redirect()->route('pengurus.index')->with('success', 'Data pengurus berhasil dihapus!');
    }
}
