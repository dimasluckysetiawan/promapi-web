<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Revisi Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @if ($errors->any())
                            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                <strong>Oops! Ada masalah:</strong>
                                <ul class="list-disc pl-5 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="mb-4">
                            <label class="form-label" for="judul">Judul Berita</label>
                            <input type="text" name="judul" id="judul" value="{{ $berita->judul }}" required class="form-input">
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="kategori">Kategori</label>
                            <select name="kategori" id="kategori" required class="form-input">
                                <option value="Siaran Pers" {{ $berita->kategori == 'Siaran Pers' ? 'selected' : '' }}>Siaran Pers</option>
                                <option value="Berita Umum" {{ $berita->kategori == 'Berita Umum' ? 'selected' : '' }}>Berita Umum</option>
                                <option value="Pengumuman" {{ $berita->kategori == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                                <option value="Artikel" {{ $berita->kategori == 'Artikel' ? 'selected' : '' }}>Artikel</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="foto">Foto Sampul (Biarkan kosong jika tidak ingin mengubah foto)</label>
                            @if($berita->foto)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/fotos/' . $berita->foto) }}" alt="Foto lama" class="h-32 object-cover rounded">
                                </div>
                            @endif
                            <input type="file" name="foto" id="foto" accept="image/*" class="form-file">
                        </div>

                        <div class="mb-6">
                            <label class="form-label" for="konten">Isi Berita</label>
                            <textarea name="konten" id="konten" rows="8" required class="form-input">{{ $berita->konten }}</textarea>
                        </div>

                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('berita.index') }}" class="btn-secondary">Batal</a>
                            <button type="submit" class="btn-primary">Perbarui Berita</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>