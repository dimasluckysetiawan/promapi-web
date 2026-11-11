<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Galeri Baru</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Judul</label>
                        <input type="text" name="judul" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Tanggal</label>
                        <input type="date" name="tanggal" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Konten Galeri</label>
                        <textarea name="konten" rows="5" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"></textarea>
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Gambar Pendukung <span class="text-sm font-normal text-gray-500">(Opsional)</span></label>
                        
                        <!-- Tempat munculnya preview gambar (disembunyikan secara default pakai class 'hidden') -->
                        <div class="mb-2">
                            <img id="preview-gambar" src="" class="h-32 object-cover rounded shadow border border-gray-200 hidden">
                        </div>

                        <!-- Event onchange agar gambar otomatis muncul saat file dipilih -->
                        <input type="file" name="gambar" accept="image/*" onchange="let p = document.getElementById('preview-gambar'); p.src = window.URL.createObjectURL(this.files[0]); p.classList.remove('hidden');" class="w-full text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="{{ route('galeri.index') }}" class="text-gray-600 underline">Batal</a>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded shadow">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>