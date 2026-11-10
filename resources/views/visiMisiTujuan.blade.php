@extends('layouts.main')

@section('grandparent-title', 'Profil')
@section('parent-title', 'Tentang Kami')
@section('page-title', 'Visi, Misi & Tujuan')

@section('content')
    <section class="container mt-5 mb-5">
        
        <!-- BAGIAN VISI & MISI -->
        <div class="row mb-5">
            <div class="col-md-12 mb-4">
                <div class="p-4 rounded" style="background-color: var(--surface-color);">
                    <h3 style="color: var(--heading-color); font-weight: bold;" class="text-center mb-3">Visi</h3>
                    <p class="text-center mb-0 lead">"Menjadi organisasi profesi terdepan yang mewujudkan administrator dan manajer pendidikan Indonesia yang unggul, profesional, dan berdaya saing global."</p>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="p-4 bg-white rounded shadow-sm border">
                    <h3 style="color: var(--heading-color); font-weight: bold;" class="mb-4">Misi</h3>
                    <ol class="fs-5" style="line-height: 2;">
                        <li>Mengembangkan kompetensi dan profesionalisme anggota melalui program sertifikasi dan pelatihan.</li>
                        <li>Mendorong inovasi dalam tata kelola dan manajemen institusi pendidikan.</li>
                        <li>Menjalin kemitraan strategis dengan pemerintah, lembaga pendidikan, dan dunia industri.</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- BAGIAN TUJUAN -->
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
            <!-- Tambahkan kotak tujuan lainnya di sini jika diperlukan -->
        </div>

    </section>
@endsection