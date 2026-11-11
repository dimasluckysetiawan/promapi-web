<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Pengurus') }}
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

                <form action="{{ route('pengurus.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Input Nama -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2" for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <!-- Pilihan Kategori (Romawi AD/ART) -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2" for="kategori">Kategori Struktur</label>
                        <select name="kategori" id="kategori" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                            <option value="" disabled selected>-- Pilih Kategori --</option>
                            <option value="Dewan Pertimbangan">I. Dewan Pertimbangan</option>
                            <option value="Dewan Pakar">II. Dewan Pakar</option>
                            <option value="Pengurus Inti">III. Pengurus Inti (Ketum, Waketum, Sek, Ben)</option>
                            <option value="Bidang">IV. Bidang-Bidang</option>
                            <option value="Pengurus Wilayah">V. Pengurus Wilayah</option>
                            <option value="Pengurus Daerah">VI. Pengurus Daerah</option>
                        </select>
                    </div>

                    <!-- Pilihan Bidang Spesifik (Hanya jika Kategori = Bidang) -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2" for="bidang_spesifik">Nama Bidang <span class="text-sm font-normal text-gray-500">(Wajib diisi HANYA jika kategori di atas adalah "Bidang-Bidang")</span></label>
                        <select name="bidang_spesifik" id="bidang_spesifik" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                            <option value="">-- Bukan Anggota Bidang --</option>
                            <option value="Bidang Organisasi dan Kelembagaan">1. Bidang Organisasi dan Kelembagaan</option>
                            <option value="Bidang Kaderisasi dan Pengembangan Kompetensi">2. Bidang Kaderisasi dan Pengembangan Kompetensi</option>
                            <option value="Bidang Advokasi dan Etika Profesi">3. Bidang Advokasi dan Etika Profesi</option>
                            <option value="Bidang Kerjasama dan Hubungan Masyarakat">4. Bidang Kerjasama dan Hubungan Masyarakat</option>
                            <option value="Bidang Penelitian, Pengabdian dan Inovasi">5. Bidang Penelitian, Pengabdian dan Inovasi</option>
                            <option value="Bidang Pendanaan dan Kemandirian Organisasi">6. Bidang Pendanaan dan Kemandirian Organisasi</option>
                            <option value="Bidang Pengembangan Masyarakat">7. Bidang Pengembangan Masyarakat</option>
                        </select>
                    </div>

                    <!-- Input Jabatan -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2" for="jabatan">Jabatan Spesifik</label>
                        <input type="text" name="jabatan" id="jabatan" placeholder="Contoh: Ketua Umum, Ketua Bidang, Anggota, dll" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <!-- Input Periode -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2" for="periode">Periode</label>
                        <input type="text" name="periode" id="periode" required value="2026-2027" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <!-- Input Foto -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Foto Profil <span class="text-sm font-normal text-gray-500">(Opsional, maksimal 2MB)</span></label>
                        
                        <!-- Tempat munculnya preview gambar (disembunyikan secara default pakai class 'hidden') -->
                        <div class="mb-2">
                            <img id="preview-foto" src="" class="h-20 w-20 object-cover rounded shadow border border-gray-200 hidden">
                        </div>

                        <!-- Tambahkan event onchange agar gambar otomatis muncul saat file dipilih -->
                        <input type="file" name="foto" accept="image/*" onchange="let p = document.getElementById('preview-foto'); p.src = window.URL.createObjectURL(this.files[0]); p.classList.remove('hidden');" class="w-full text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('pengurus.index') }}" class="text-gray-600 hover:text-gray-900 underline">Batal</a>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded shadow">
                            Simpan Data
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>