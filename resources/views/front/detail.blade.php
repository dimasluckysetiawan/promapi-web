<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }} - Web PROMAPI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">
    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center h-16">
                <a href="{{ route('berita.public') }}" class="text-gray-600 hover:text-blue-600 font-medium">← Kembali ke Beranda</a>
            </div>
        </div>
    </nav>

    <!-- Konten Artikel -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <article class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sm:p-10">
            <div class="mb-8 text-center">
                <span class="text-sm font-semibold px-3 py-1 bg-blue-100 text-blue-800 rounded-full">{{ $berita->kategori }}</span>
                <h1 class="text-3xl sm:text-4xl font-extrabold mt-5 mb-3 text-gray-900 leading-tight">{{ $berita->judul }}</h1>
                <p class="text-gray-500 text-sm">Diterbitkan pada {{ $berita->created_at->format('d F Y') }}</p>
            </div>

            @if($berita->foto)
                <img src="{{ asset('storage/fotos/' . $berita->foto) }}" alt="{{ $berita->judul }}" class="w-full h-auto max-h-[500px] object-cover rounded-lg mb-8 shadow-sm">
            @endif

            <div class="prose max-w-none text-gray-700 leading-relaxed text-lg">
                <!-- nl2br digunakan agar enter/baris baru di textarea terbaca di HTML -->
                {!! nl2br(e($berita->konten)) !!}
            </div>
        </article>
    </main>
</body>
</html>