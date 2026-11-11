<div class="flex items-center justify-between p-4 bg-white border rounded-lg shadow-sm hover:shadow-md transition">
    <div class="flex items-center space-x-3">
        @if($item->foto)
            <img src="{{ asset('storage/pengurus/' . $item->foto) }}" class="h-12 w-12 rounded-full object-cover border border-gray-200">
        @else
            <div class="h-12 w-12 bg-gray-100 rounded-full flex items-center justify-center text-gray-400 text-xs border border-gray-200">Kosong</div>
        @endif
        <div>
            <h4 class="font-bold text-gray-900 leading-tight">{{ $item->nama }}</h4>
            <p class="text-xs text-gray-600 font-medium">{{ $item->jabatan }}</p>
            <p class="text-xs text-gray-400 mt-1">Periode: {{ $item->periode }}</p>
        </div>
    </div>
    
    <!-- Tombol Aksi -->
    <div class="flex flex-col space-y-2 ml-2">
        <a href="{{ route('pengurus.edit', $item->id) }}" class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded hover:bg-yellow-200 text-xs font-bold text-center">Edit</a>
        
        <form action="{{ route('pengurus.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus {{ $item->nama }}?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-2 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs font-bold w-full">Hapus</button>
        </form>
    </div>
</div>