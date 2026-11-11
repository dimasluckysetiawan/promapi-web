@extends('layouts.main')

@section('page-title', 'Struktur Organisasi')

@section('content')
<section class="container mt-5 mb-5">
    <h1 class="text-center mb-5 font-bold">Struktur Organisasi PROMAPI</h1>

    <!-- 1. DEWAN PERTIMBANGAN -->
    @if(isset($pengurus['Dewan Pertimbangan']) && $pengurus['Dewan Pertimbangan']->count() > 0)
    <div class="mb-5">
        <h3 class="text-center mb-4 border-bottom pb-2">Dewan Pertimbangan</h3>
        <div class="d-flex flex-wrap justify-content-center gap-4">
            @foreach($pengurus['Dewan Pertimbangan'] as $item)
                <div class="card text-center shadow-sm" style="width: 14rem; border: none;">
                    <div class="card-body">
                        <img src="{{ $item->foto ? asset('storage/pengurus/' . $item->foto) : 'https://ui-avatars.com/api/?name='.urlencode($item->nama).'&background=EBF4FF&color=1E3A8A' }}" alt="{{ $item->nama }}" class="rounded-circle mx-auto mb-3 object-fit-cover" style="width: 100px; height: 100px; border: 3px solid #f8f9fa;">
                        <h6 class="card-title fw-bold mb-1">{{ $item->nama }}</h6>
                        <p class="card-text text-primary small">{{ $item->jabatan }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif

    <!-- 2. DEWAN PAKAR -->
    @if(isset($pengurus['Dewan Pakar']) && $pengurus['Dewan Pakar']->count() > 0)
    <div class="mb-5">
        <h3 class="text-center mb-4 border-bottom pb-2">Dewan Pakar</h3>
        <div class="d-flex flex-wrap justify-content-center gap-4">
            @foreach($pengurus['Dewan Pakar'] as $item)
                <div class="card text-center shadow-sm" style="width: 14rem; border: none;">
                    <div class="card-body">
                        <img src="{{ $item->foto ? asset('storage/pengurus/' . $item->foto) : 'https://ui-avatars.com/api/?name='.urlencode($item->nama).'&background=EBF4FF&color=1E3A8A' }}" alt="{{ $item->nama }}" class="rounded-circle mx-auto mb-3 object-fit-cover" style="width: 100px; height: 100px; border: 3px solid #f8f9fa;">
                        <h6 class="card-title fw-bold mb-1">{{ $item->nama }}</h6>
                        <p class="card-text text-primary small">{{ $item->jabatan }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif

    <!-- 3. PENGURUS INTI -->
    @if(isset($pengurus['Pengurus Inti']) && $pengurus['Pengurus Inti']->count() > 0)
    <div class="mb-5">
        <h3 class="text-center mb-4 border-bottom pb-2">Pengurus Inti</h3>
        <div class="d-flex flex-wrap justify-content-center gap-4">
            @foreach($pengurus['Pengurus Inti'] as $item)
                <div class="card text-center shadow-sm" style="width: 14rem; border: none;">
                    <div class="card-body">
                        <img src="{{ $item->foto ? asset('storage/pengurus/' . $item->foto) : 'https://ui-avatars.com/api/?name='.urlencode($item->nama).'&background=EBF4FF&color=1E3A8A' }}" alt="{{ $item->nama }}" class="rounded-circle mx-auto mb-3 object-fit-cover" style="width: 100px; height: 100px; border: 3px solid #f8f9fa;">
                        <h6 class="card-title fw-bold mb-1">{{ $item->nama }}</h6>
                        <p class="card-text text-primary small">{{ $item->jabatan }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif

    <!-- 4. BIDANG-BIDANG -->
    @if(isset($pengurus['Bidang']) && $pengurus['Bidang']->count() > 0)
    <div class="mb-5">
        <h3 class="text-center mb-4 border-bottom pb-2">Susunan Bidang</h3>
        <div class="row g-4">
            @foreach($pengurus['Bidang'] as $namaBidang => $anggotaBidang)
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm h-100" style="border: none;">
                        <div class="card-header bg-light fw-bold text-primary">
                            {{ $namaBidang }}
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($anggotaBidang as $item)
                            <li class="list-group-item d-flex align-items-center">
                                <img src="{{ $item->foto ? asset('storage/pengurus/' . $item->foto) : 'https://ui-avatars.com/api/?name='.urlencode($item->nama).'&background=F3F4F6&color=374151' }}" class="rounded-circle me-3 object-fit-cover" style="width: 40px; height: 40px;">
                                <div>
                                    <div class="fw-bold" style="font-size: 0.9rem;">{{ $item->nama }}</div>
                                    <div class="text-muted" style="font-size: 0.8rem;">{{ $item->jabatan }}</div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif

    <!-- 5. PENGURUS WILAYAH -->
    @if(isset($pengurus['Pengurus Wilayah']) && $pengurus['Pengurus Wilayah']->count() > 0)
    <div class="mb-5">
        <h3 class="text-center mb-4 border-bottom pb-2">Pengurus Wilayah</h3>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            @foreach($pengurus['Pengurus Wilayah'] as $item)
                <div class="text-center p-3 border rounded shadow-sm bg-white" style="width: 12rem;">
                    <img src="{{ $item->foto ? asset('storage/pengurus/' . $item->foto) : 'https://ui-avatars.com/api/?name='.urlencode($item->nama).'&background=EBF4FF&color=1E3A8A' }}" alt="{{ $item->nama }}" class="rounded-circle mx-auto mb-3 object-fit-cover" style="width: 80px; height: 80px; border: 3px solid #f8f9fa;">
                    <h6 class="fw-bold mb-1">{{ $item->nama }}</h6>
                    <p class="text-primary mb-0" style="font-size: 0.8rem;">{{ $item->jabatan }}</p>
                </div>
            @endforeach
        </div>
    </div>
    @endif
    
    <!-- 6. PENGURUS DAERAH -->
    @if(isset($pengurus['Pengurus Daerah']) && $pengurus['Pengurus Daerah']->count() > 0)
    <div class="mb-5">
        <h3 class="text-center mb-4 border-bottom pb-2">Pengurus Daerah</h3>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            @foreach($pengurus['Pengurus Daerah'] as $item)
                <div class="text-center p-3 border rounded shadow-sm bg-white" style="width: 12rem;">
                    <img src="{{ $item->foto ? asset('storage/pengurus/' . $item->foto) : 'https://ui-avatars.com/api/?name='.urlencode($item->nama).'&background=EBF4FF&color=1E3A8A' }}" alt="{{ $item->nama }}" class="rounded-circle mx-auto mb-3 object-fit-cover" style="width: 80px; height: 80px; border: 3px solid #f8f9fa;">
                    <h6 class="fw-bold mb-1">{{ $item->nama }}</h6>
                    <p class="text-primary mb-0" style="font-size: 0.8rem;">{{ $item->jabatan }}</p>
                </div>
            @endforeach
        </div>
    </div>
    @endif

</section>
@endsection