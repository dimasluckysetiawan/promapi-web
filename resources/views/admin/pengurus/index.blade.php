<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Struktur Kepengurusan PROMAPI') }}
            </h2>
            <a href="{{ route('pengurus.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                + Tambah Pengurus
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            @if(session('success'))
                <div class="p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @php
                // Array pembantu untuk melooping struktur non-bidang
                $strukturUtama = [
                    'Dewan Pertimbangan' => 'I. Dewan Pertimbangan',
                    'Dewan Pakar' => 'II. Dewan Pakar',
                    'Pengurus Inti' => 'III. Pengurus Inti (Ketum, Waketum, Sek, Ben)',
                ];
                $strukturWilayah = [
                    'Pengurus Wilayah' => 'V. Pengurus Wilayah',
                    'Pengurus Daerah' => 'VI. Pengurus Daerah',
                ];
            @endphp

            <!-- Bagian I - III -->
            @foreach($strukturUtama as $key => $judul)
                <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden border-l-4 border-blue-800">
                    <div class="bg-gray-50 px-6 py-4 border-b">
                        <h3 class="text-lg font-bold text-gray-800">{{ $judul }}</h3>
                    </div>
                    <div class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @forelse($pengurus[$key] as $item)
                            @include('admin.pengurus.partials.card', ['item' => $item])
                        @empty
                            <p class="text-sm text-gray-500 italic">Belum ada pengurus di kategori ini.</p>
                        @endforelse
                    </div>
                </div>
            @endforeach

            <!-- Bagian IV. Bidang-Bidang -->
            <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden border-l-4 border-blue-500">
                <div class="bg-gray-50 px-6 py-4 border-b">
                    <h3 class="text-lg font-bold text-gray-800">IV. Bidang-Bidang</h3>
                </div>
                <div class="p-6 space-y-6">
                    @forelse($pengurus['Bidang'] as $namaBidang => $anggotaBidang)
                        <div class="border rounded-lg p-4 bg-gray-50">
                            <h4 class="font-bold text-blue-700 mb-3 border-b pb-2">{{ $namaBidang }}</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach($anggotaBidang as $item)
                                    @include('admin.pengurus.partials.card', ['item' => $item])
                                @endforeach
                            </div>
                        </div>
                    @empty
                        <p class="text-sm text-gray-500 italic">Belum ada pengurus bidang.</p>
                    @endforelse
                </div>
            </div>

            <!-- Bagian V - VI -->
            @foreach($strukturWilayah as $key => $judul)
                <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden border-l-4 border-blue-300">
                    <div class="bg-gray-50 px-6 py-4 border-b">
                        <h3 class="text-lg font-bold text-gray-800">{{ $judul }}</h3>
                    </div>
                    <div class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @forelse($pengurus[$key] as $item)
                            @include('admin.pengurus.partials.card', ['item' => $item])
                        @empty
                            <p class="text-sm text-gray-500 italic">Belum ada pengurus di kategori ini.</p>
                        @endforelse
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>