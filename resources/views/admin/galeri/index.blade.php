<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Galeri</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <a href="{{ route('galeri.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">+ Tambah Galeri</a>
            </div>
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6"><p>{{ session('success') }}</p></div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">Gambar</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">Judul & Tanggal</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($galeri->count() > 0)
                            @foreach($galeri as $item)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <img src="{{ $item->gambar ? asset('storage/galeri/' . $item->gambar) : 'https://via.placeholder.com/150' }}" class="h-16 w-16 object-cover rounded shadow">
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 font-bold">{{ $item->judul }}</p>
                                    <p class="text-gray-500">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                    <a href="{{ route('galeri.edit', $item->id) }}" class="text-blue-500 hover:text-blue-700 mr-3 font-semibold">Edit</a>
                                    <form action="{{ route('galeri.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin hapus?');">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 font-semibold">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr><td colspan="3" class="px-5 py-5 border-b border-gray-200 text-center text-gray-500">Belum ada data.</td></tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>