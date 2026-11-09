@extends('layouts.main')

@section('grandparent-title', 'Profil')
@section('parent-title', 'Tentang Kami')
@section('page-title', 'Tujuan')

@section('content')
    <section class="container mt-5 mb-5">
        <h2 class="mb-4 text-center" style="color: var(--heading-color); font-weight: bold;">Tujuan Organisasi</h2>
        <div class="row gy-4">
            <div class="col-md-6">
                <div class="d-flex p-3 bg-white border rounded shadow-sm h-100">
                    <i class="bi bi-bullseye fs-1 me-3" style="color: var(--accent-color);"></i>
                    <div>
                        <h5 class="fw-bold">Peningkatan Mutu</h5>
                        <p class="mb-0 text-muted">Meningkatkan mutu dan standar pelayanan administrator pendidikan di seluruh Indonesia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex p-3 bg-white border rounded shadow-sm h-100">
                    <i class="bi bi-people fs-1 me-3" style="color: var(--accent-color);"></i>
                    <div>
                        <h5 class="fw-bold">Kolaborasi</h5>
                        <p class="mb-0 text-muted">Membangun jaringan komunikasi yang kuat antar manajer pendidikan dari berbagai daerah.</p>
                    </div>
                </div>
            </div>
            <!-- Tambahkan kotak tujuan lainnya jika ada -->
        </div>
    </section>
@endsection