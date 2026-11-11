<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Agenda Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                @if($errors->any())
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                        <strong>Oops! Ada masalah:</strong>
                        <ul class="list-disc pl-5 mt-2">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('agenda.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Judul Agenda</label>
                        <input type="text" name="judul" value="{{ old('judul') }}" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Tanggal Pelaksanaan</label>
                        <input type="date" name="tanggal" value="{{ old('tanggal') }}" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Lokasi (Opsional)</label>
                        <input type="text" name="lokasi" value="{{ old('lokasi') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Deskripsi Agenda</label>
                        <textarea name="deskripsi" rows="4" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">{{ old('deskripsi') }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Foto / Poster <span class="text-sm font-normal text-gray-500">(Opsional)</span></label>
                        <div class="mb-2">
                            <img id="preview-foto" src="" class="h-32 object-cover rounded shadow border border-gray-200 hidden">
                        </div>
                        <input type="file" name="foto" accept="image/*" onchange="let p = document.getElementById('preview-foto'); p.src = window.URL.createObjectURL(this.files[0]); p.classList.remove('hidden');" class="w-full text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('agenda.index') }}" class="text-gray-600 hover:text-gray-900 underline">Batal</a>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded shadow">
                            Simpan Agenda
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>