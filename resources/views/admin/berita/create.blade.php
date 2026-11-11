<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tulis Berita Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                            <input type="text" name="judul" id="judul" required class="form-input">
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="kategori">Kategori</label>
                            <select name="kategori" id="kategori" required class="form-input">
                                <option value="Siaran Pers">Siaran Pers</option>
                                <option value="Berita Umum">Berita Umum</option>
                                <option value="Pengumuman">Pengumuman</option>
                                <option value="Artikel">Artikel</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="foto">Foto Sampul (Opsional)</label>
                            <input type="file" name="foto" id="foto" accept="image/*" class="form-file">
                        </div>

                        <div class="mb-6">
                            <label class="form-label" for="konten">Isi Berita</label>
                            <textarea name="konten" id="konten" rows="8" required class="form-input"></textarea>
                        </div>

                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('berita.index') }}" class="btn-secondary">Batal</a>
                            <button type="submit" class="btn-primary">Simpan Berita</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>