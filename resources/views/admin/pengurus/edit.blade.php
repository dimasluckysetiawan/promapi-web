<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Pengurus: ') }} {{ $pengurus->nama }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
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

                <form action="{{ route('pengurus.update', $pengurus->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Input Nama -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                        <input type="text" name="nama" value="{{ old('nama', $pengurus->nama) }}" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <!-- Pilihan Kategori -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Kategori Struktur</label>
                        <select name="kategori" id="kategori" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                            <option value="Dewan Pertimbangan" {{ $pengurus->kategori == 'Dewan Pertimbangan' ? 'selected' : '' }}>I. Dewan Pertimbangan</option>
                            <option value="Dewan Pakar" {{ $pengurus->kategori == 'Dewan Pakar' ? 'selected' : '' }}>II. Dewan Pakar</option>
                            <option value="Pengurus Inti" {{ $pengurus->kategori == 'Pengurus Inti' ? 'selected' : '' }}>III. Pengurus Inti (Ketum, Waketum, Sek, Ben)</option>
                            <option value="Bidang" {{ $pengurus->kategori == 'Bidang' ? 'selected' : '' }}>IV. Bidang-Bidang</option>
                            <option value="Pengurus Wilayah" {{ $pengurus->kategori == 'Pengurus Wilayah' ? 'selected' : '' }}>V. Pengurus Wilayah</option>
                            <option value="Pengurus Daerah" {{ $pengurus->kategori == 'Pengurus Daerah' ? 'selected' : '' }}>VI. Pengurus Daerah</option>
                        </select>
                    </div>

                    <!-- Pilihan Bidang Spesifik -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Nama Bidang <span class="text-sm font-normal text-gray-500">(Wajib jika Kategori = Bidang)</span></label>
                        <select name="bidang_spesifik" id="bidang_spesifik" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                            <option value="">-- Bukan Anggota Bidang --</option>
                            <option value="Bidang Organisasi dan Kelembagaan" {{ $pengurus->bidang_spesifik == 'Bidang Organisasi dan Kelembagaan' ? 'selected' : '' }}>1. Bidang Organisasi dan Kelembagaan</option>
                            <option value="Bidang Kaderisasi dan Pengembangan Kompetensi" {{ $pengurus->bidang_spesifik == 'Bidang Kaderisasi dan Pengembangan Kompetensi' ? 'selected' : '' }}>2. Bidang Kaderisasi dan Pengembangan Kompetensi</option>
                            <option value="Bidang Advokasi dan Etika Profesi" {{ $pengurus->bidang_spesifik == 'Bidang Advokasi dan Etika Profesi' ? 'selected' : '' }}>3. Bidang Advokasi dan Etika Profesi</option>
                            <option value="Bidang Kerjasama dan Hubungan Masyarakat" {{ $pengurus->bidang_spesifik == 'Bidang Kerjasama dan Hubungan Masyarakat' ? 'selected' : '' }}>4. Bidang Kerjasama dan Hubungan Masyarakat</option>
                            <option value="Bidang Penelitian, Pengabdian dan Inovasi" {{ $pengurus->bidang_spesifik == 'Bidang Penelitian, Pengabdian dan Inovasi' ? 'selected' : '' }}>5. Bidang Penelitian, Pengabdian dan Inovasi</option>
                            <option value="Bidang Pendanaan dan Kemandirian Organisasi" {{ $pengurus->bidang_spesifik == 'Bidang Pendanaan dan Kemandirian Organisasi' ? 'selected' : '' }}>6. Bidang Pendanaan dan Kemandirian Organisasi</option>
                            <option value="Bidang Pengembangan Masyarakat" {{ $pengurus->bidang_spesifik == 'Bidang Pengembangan Masyarakat' ? 'selected' : '' }}>7. Bidang Pengembangan Masyarakat</option>
                        </select>
                    </div>

                    <!-- Input Jabatan -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Jabatan Spesifik</label>
                        <input type="text" name="jabatan" value="{{ old('jabatan', $pengurus->jabatan) }}" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <!-- Input Periode -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Periode</label>
                        <input type="text" name="periode" value="{{ old('periode', $pengurus->periode) }}" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <!-- Input Foto -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Ganti Foto Profil <span class="text-sm font-normal text-gray-500">(Biarkan kosong jika tidak ingin mengubah foto)</span></label>
                        
                        <div class="mb-2">
                            <!-- Tambahkan id="preview-foto" dan logika untuk menampilkan gambar default jika kosong -->
                            <img id="preview-foto" src="{{ $pengurus->foto ? asset('storage/pengurus/' . $pengurus->foto) : '' }}" class="h-20 w-20 object-cover rounded shadow border border-gray-200 {{ $pengurus->foto ? '' : 'hidden' }}">
                        </div>

                        <!-- Tambahkan event onchange agar gambar otomatis berubah saat file dipilih -->
                        <input type="file" name="foto" accept="image/*" onchange="let p = document.getElementById('preview-foto'); p.src = window.URL.createObjectURL(this.files[0]); p.classList.remove('hidden');" class="w-full text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('pengurus.index') }}" class="text-gray-600 hover:text-gray-900 underline">Batal</a>
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded shadow">
                            Perbarui Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>