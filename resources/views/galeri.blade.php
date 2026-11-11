@extends('layouts.main')

@section('page-title', 'Galeri')

@section('content')
<section class="container mt-5 mb-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Galeri PROMAPI</h1>
        <p class="text-muted">Pusat Galeri</p>
        <hr class="w-25 mx-auto">
    </div>

    <div class="row g-4">
        @if($galeri->count() > 0)
            @foreach($galeri as $item)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0">
                    @if($item->gambar)
                        <img src="{{ asset('storage/galeri/' . $item->gambar) }}" class="card-img-top object-fit-cover" style="height: 220px;" alt="{{ $item->judul }}">
                    @endif
                    <div class="card-body">
                        <div class="text-primary small mb-2 fw-bold">
                            <i class="bi bi-calendar3"></i> {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                        </div>
                        <h5 class="card-title fw-bold">{{ $item->judul }}</h5>
                        <p class="card-text text-secondary mt-3" style="white-space: pre-wrap;">{{ $item->konten }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-12 text-center py-5">
                <div class="alert alert-light border p-4 shadow-sm">
                    Belum ada galeri terbaru yang dipublikasikan.
                </div>
            </div>
        @endif
    </div>
</section>
@endsection