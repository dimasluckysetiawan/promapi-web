@extends('layouts.main')

@section('page-title', $berita->judul)

@section('content')
    <section class="blog-details section pt-4">
      <div class="container">
        
        <!-- Breadcrumb (Navigasi Atas) -->
        <nav aria-label="breadcrumb" class="mb-4 text-sm" style="font-size: 14px;">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none text-dark">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('berita.public') }}" class="text-decoration-none text-dark">Berita PROMAPI</a></li>
            <li class="breadcrumb-item active text-muted" aria-current="page">{{ $berita->kategori }}</li>
          </ol>
        </nav>

        <!-- Judul Artikel -->
        <h1 class="fw-bold mb-3" style="color: #1a202c; font-size: 2.2rem; line-height: 1.3;">
            {{ $berita->judul }}
        </h1>

        <!-- Meta Info & Tombol Bagikan -->
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 pb-3 border-bottom">
            <div class="text-muted d-flex align-items-center flex-wrap" style="font-size: 14px;">
                <span class="text-success">{{ $berita->kategori }}</span> 
                <span class="mx-2">•</span>
                <span><i class="bi bi-eye"></i> {{ $berita->views ?? 0 }} Kali Dilihat</span>
                <span class="mx-2">•</span>
                <span>{{ $berita->created_at->format('d F Y') }}</span>
            </div>
            
            <div class="mt-2 mt-md-0 d-flex align-items-center" style="font-size: 18px;">
                <span class="me-3 text-dark fw-medium" style="font-size: 14px;"><i class="bi bi-share-fill me-1"></i> Bagikan</span>
                <a href="#" class="text-success me-2"><i class="bi bi-whatsapp"></i></a>
                <a href="#" class="text-primary me-2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-info me-2"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-danger"><i class="bi bi-pinterest"></i></a>
            </div>
        </div>

        <!-- Foto Sampul Lebar -->
        @if($berita->foto)
            <div class="mb-5">
                <img src="{{ asset('storage/fotos/' . $berita->foto) }}" alt="{{ $berita->judul }}" class="img-fluid w-100 rounded" style="max-height: 550px; object-fit: cover;">
            </div>
        @endif

        <!-- Isi Artikel Utama -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="content text-dark" style="line-height: 1.8; font-size: 1.1rem; text-align: justify;">
                    {!! nl2br(e($berita->konten)) !!}
                </div>
            </div>
        </div>

        <!-- Bagian Artikel Lainnya -->
        <div class="mt-5 pt-4 border-top">
            <h2 class="fw-bold mb-4" style="color: #1a202c;">Artikel Lainnya</h2>
            
            <div class="row gy-4">
                @forelse($artikelLainnya as $lainnya)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('berita.detail', $lainnya->slug) }}" class="text-decoration-none card-hover-effect h-100 d-block">
                            <div class="card h-100 border-0 shadow-sm">
                                <!-- Foto Thumbnail -->
                                <div style="height: 200px; overflow: hidden;" class="rounded-top">
                                    @if($lainnya->foto)
                                        <img src="{{ asset('storage/fotos/' . $lainnya->foto) }}" class="w-100 h-100" style="object-fit: cover;" alt="{{ $lainnya->judul }}">
                                    @else
                                        <div class="w-100 h-100 bg-light d-flex align-items-center justify-content-center text-muted">Tanpa Foto</div>
                                    @endif
                                </div>
                                
                                <div class="card-body d-flex flex-column p-4">
                                    <p class="text-success small mb-2">{{ $lainnya->kategori }}</p>
                                    <h5 class="card-title fw-bold text-dark fs-6 mb-3" style="line-height: 1.4;">
                                        {{ $lainnya->judul }}
                                    </h5>
                                    
                                    <div class="mt-auto d-flex justify-content-between text-muted small">
                                        <span>{{ $lainnya->created_at->format('d F Y') }}</span>
                                        <span><i class="bi bi-eye"></i> {{ $lainnya->views ?? 0 }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12 text-muted">Belum ada artikel lainnya.</div>
                @endforelse
            </div>
        </div>

      </div>
    </section>

    <!-- CSS Tambahan untuk efek Hover Kartu Artikel Lainnya -->
    <style>
        .card-hover-effect .card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .card-hover-effect:hover .card {
            transform: translateY(-5px);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }
        .breadcrumb-item + .breadcrumb-item::before {
            content: ">"; /* Mengubah ikon pemisah breadcrumb menjadi > */
        }
    </style>
@endsection