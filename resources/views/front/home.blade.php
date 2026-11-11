<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Web PROMAPI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">
    <!-- Navbar Sederhana -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('berita.public') }}" class="text-xl font-bold text-blue-600">PROMAPI News</a>
                </div>
                <div class="flex items-center">
                    @auth
                        <a href="{{ url('/minpro2026/berita') }}" class="text-gray-600 hover:text-blue-600 font-medium">Dashboard Admin</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600 font-medium">Login Admin</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-900">Berita Terbaru</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($berita as $item)
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden flex flex-col hover:shadow-md transition">
                    @if($item->foto)
                        <img src="{{ asset('storage/fotos/' . $item->foto) }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gray-100 flex items-center justify-center text-gray-400">Tanpa Foto</div>
                    @endif
                    
                    <div class="p-5 flex-1 flex flex-col">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold px-2 py-1 bg-blue-100 text-blue-800 rounded-full">{{ $item->kategori }}</span>
                            <span class="text-xs text-gray-500">{{ $item->created_at->format('d M Y') }}</span>
                        </div>
                        <h2 class="text-xl font-bold mb-2 line-clamp-2">
                            <a href="{{ route('berita.detail', $item->slug) }}" class="hover:text-blue-600">{{ $item->judul }}</a>
                        </h2>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ Str::limit(strip_tags($item->konten), 120) }}</p>
                        <div class="mt-auto">
                            <a href="{{ route('berita.detail', $item->slug) }}" class="text-blue-600 font-semibold text-sm hover:underline">Baca selengkapnya →</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-10 text-gray-500 italic">
                    Belum ada berita yang diterbitkan.
                </div>
            @endforelse
        </div>
    </main>
</body>
</html>