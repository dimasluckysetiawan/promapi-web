<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgendaController extends Controller
{
    public function index()
    {
        // Menampilkan agenda terbaru di atas
        $agendas = Agenda::latest()->get();
        return view('admin.agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('admin.agenda.create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal'   => 'required|date',
            'lokasi'    => 'nullable|string|max:255',
            'foto'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaFoto = time() . '_' . str_replace(' ', '_', $foto->getClientOriginalName());
            $foto->storeAs('agenda', $namaFoto, 'public');
            $validasi['foto'] = $namaFoto;
        }

        Agenda::create($validasi);

        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('admin.agenda.edit', compact('agenda'));
    }

    public function update(Request $request, string $id)
    {
        $agenda = Agenda::findOrFail($id);

        $validasi = $request->validate([
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal'   => 'required|date',
            'lokasi'    => 'nullable|string|max:255',
            'foto'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($agenda->foto && Storage::exists('public/agenda/' . $agenda->foto)) {
                Storage::delete('public/agenda/' . $agenda->foto);
            }
            $foto = $request->file('foto');
            $namaFoto = time() . '_' . str_replace(' ', '_', $foto->getClientOriginalName());
            $foto->storeAs('agenda', $namaFoto, 'public');
            $validasi['foto'] = $namaFoto;
        }

        $agenda->update($validasi);

        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $agenda = Agenda::findOrFail($id);
        
        if ($agenda->foto && Storage::exists('public/agenda/' . $agenda->foto)) {
            Storage::delete('public/agenda/' . $agenda->foto);
        }
        
        $agenda->delete();

        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil dihapus!');
    }
}