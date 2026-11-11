<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Galeri</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Judul</label>
                        <input type="text" name="judul" value="{{ $galeri->judul }}" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Tanggal</label>
                        <input type="date" name="tanggal" value="{{ $galeri->tanggal }}" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Konten Galeri</label>
                        <textarea name="konten" rows="5" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">{{ $galeri->konten }}</textarea>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Ganti Gambar <span class="text-sm font-normal text-gray-500">(Opsional)</span></label>
                        
                        <!-- Preview gambar akan langsung muncul jika sebelumnya sudah ada foto -->
                        <div class="mb-2">
                            <img id="preview-gambar" src="{{ $galeri->gambar ? asset('storage/galeri/' . $galeri->gambar) : '' }}" class="h-32 object-cover rounded shadow border border-gray-200 {{ $galeri->gambar ? '' : 'hidden' }}">
                        </div>

                        <!-- Event onchange untuk mengubah preview jika memilih foto baru -->
                        <input type="file" name="gambar" accept="image/*" onchange="let p = document.getElementById('preview-gambar'); p.src = window.URL.createObjectURL(this.files[0]); p.classList.remove('hidden');" class="w-full text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="{{ route('galeri.index') }}" class="text-gray-600 underline">Batal</a>
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded shadow">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>