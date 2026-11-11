@extends('layouts.main')

<!-- Mengisi judul halaman di atas -->
@section('page-title', 'Agenda')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="fw-bold">Agenda PROMAPI</h1> 
            <hr class="w-25 mx-auto">
        </div>
    </div>

    <div class="row">
        @forelse($agendas as $agenda)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <!-- Foto / Poster Agenda -->
                    <img src="{{ $agenda->foto ? asset('storage/agenda/' . $agenda->foto) : 'https://via.placeholder.com/400x250?text=Agenda+PROMAPI' }}" 
                         class="card-img-top object-fit-cover" 
                         style="height: 200px;" 
                         alt="{{ $agenda->judul }}">
                    
                    <div class="card-body d-flex flex-column">
                        <!-- Tanggal & Lokasi -->
                        <div class="mb-2 text-muted small">
                            <span class="me-3">
                                <i class="bi bi-calendar-event"></i> 
                                {{ \Carbon\Carbon::parse($agenda->tanggal)->translatedFormat('d F Y') }}
                            </span>
                            @if($agenda->lokasi)
                                <span>
                                    <i class="bi bi-geo-alt"></i> {{ $agenda->lokasi }}
                                </span>
                            @endif
                        </div>

                        <!-- Judul Agenda -->
                        <h5 class="card-title fw-bold text-dark">{{ $agenda->judul }}</h5>

                        <!-- Deskripsi Singkat -->
                        <p class="card-text text-secondary mt-2">
                            {{ Str::limit($agenda->deskripsi, 100) }}
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <div class="alert alert-light border p-5 shadow-sm" role="alert">
                    <h4 class="text-muted mb-2">Belum Ada Agenda Tersedia</h4>
                    <p class="text-secondary mb-0">Silakan cek kembali secara berkala untuk melihat kegiatan terbaru kami.</p>
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection