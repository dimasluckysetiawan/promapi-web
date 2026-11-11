@extends('layouts.main')

@section('page-title', 'Berita')

@section('content')
    <section id="blog-posts-2" class="blog-posts-2 section">
      <div class="container">
        <div class="row gy-4">
          
          @forelse ($berita as $item)
              <div class="col-lg-4 col-md-6">
                <!-- Tag <a> dibungkus di sini sebagai pembungkus utama card -->
                <a href="{{ route('berita.detail', $item->slug) }}" class="card-link-wrapper text-decoration-none h-100 d-block">
                  <article class="p-3 bg-white rounded shadow-sm border h-100 d-flex flex-column transition-card">
                    
                    <!-- Area Foto -->
                    <div class="post-img mb-3 rounded" style="height: 220px; overflow: hidden;">
                      @if($item->foto)
                          <img src="{{ asset('storage/fotos/' . $item->foto) }}" alt="{{ $item->judul }}" class="img-fluid w-100 h-100" style="object-fit: cover;">
                      @else
                          <div class="w-100 h-100 bg-light d-flex align-items-center justify-content-center text-muted">
                              <span style="font-size: 14px;">Tanpa Foto</span>
                          </div>
                      @endif
                    </div>

                    <!-- Kategori dan Tanggal -->
                    <p class="post-category text-muted small mb-1">
                        <span class="fw-bold">{{ $item->kategori }}</span> • {{ $item->created_at->format('d M Y') }}
                    </p>
                    
                    <!-- Judul -->
                    <h2 class="title fs-5 fw-bold mb-2" style="color: var(--heading-color);">
                        {{ $item->judul }}
                    </h2>
                    
                    <!-- Cuplikan Isi Berita -->
                    <p class="text-muted mt-0 mb-0 flex-grow-1" style="font-size: 14px;">
                      {{ Str::limit(strip_tags($item->konten), 120) }}
                    </p>
                    
                  </article>
                </a>
              </div>
          @empty
              <div class="col-12 text-center py-5">
                  <p class="text-muted fst-italic">Belum ada berita yang diterbitkan saat ini.</p>
              </div>
          @endforelse

        </div>
      </div>
    </section>

    <!-- Sedikit sentuhan CSS agar kotaknya ada efek hover interaktif -->
    <style>
        .card-link-wrapper .transition-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card-link-wrapper:hover .transition-card {
            transform: translateY(-5px);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }
    </style>
@endsection