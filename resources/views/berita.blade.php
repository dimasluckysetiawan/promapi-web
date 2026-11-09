@extends('layouts.main')

<!-- Ini akan otomatis mengisi kotak judul abu-abu di atas! -->
@section('page-title', 'Berita')

@section('content')
    <section id="blog-posts-2" class="blog-posts-2 section">
      <div class="container">
        <div class="row gy-4">
          
          <!-- Nanti bagian ini akan kita Loop (Ulang) menggunakan data dari database -->
          <div class="col-lg-4 col-md-6">
            <article class="p-3 bg-white rounded shadow-sm border">
              <div class="post-img mb-3">
                <img src="{{ asset('assets/img/img_h_1.jpg') }}" alt="" class="img-fluid rounded">
              </div>
              <p class="post-category text-muted small mb-1">Kegiatan Pusat</p>
              <h2 class="title fs-5 fw-bold">
                <a href="#" style="color: var(--heading-color);">Pelatihan Manajemen Berbasis Sekolah di Jakarta</a>
              </h2>
              <p class="text-muted mt-2" style="font-size: 14px;">Acara ini dihadiri oleh 100 kepala sekolah...</p>
            </article>
          </div>
          <!-- Akhir dari 1 kotak berita -->

        </div>
      </div>
    </section>
@endsection