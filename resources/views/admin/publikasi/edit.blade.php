<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Data Jurnal</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('publikasi.update', $publikasi->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Nama / Judul Jurnal</label>
                        <input type="text" name="judul" value="{{ old('judul', $publikasi->judul) }}" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Kategori Jurnal</label>
                        <select name="kategori" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                            <option value="nasional" {{ old('kategori', $publikasi->kategori) == 'nasional' ? 'selected' : '' }}>Jurnal Nasional</option>
                            <option value="internasional" {{ old('kategori', $publikasi->kategori) == 'internasional' ? 'selected' : '' }}>Jurnal Internasional</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Link Jurnal (URL)</label>
                        <input type="url" name="link" value="{{ old('link', $publikasi->link) }}" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('publikasi.index') }}" class="text-gray-600 underline">Batal</a>
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded shadow">
                            Perbarui Jurnal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>