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
                    <p class="text-center mb-0 lead">"Mengembangkan Profesi Administrator dan Manajer Pendidikan yang profesional, unggul dan bermutu sebagai pilar terselenggaranya sistem pendidikan yang efektif dan efisien."</p>
            </div>
            
            <div class="col-md-12">
                <div class="p-4 bg-white rounded shadow-sm border">
                    <h3 style="color: var(--heading-color); font-weight: bold;" class="text-center mb-3">Misi</h3>
                    <ol class="fs-5" style="line-height: 2;">
                        <li>Menjadi pusat informasi dan pengembangan profesi administrator dan manajer pendidikan.</li>
                        <li>Mengembangkan teknologi informasi dalam menjunjung pengembangan profesi administrator dan manajer pendidikan.</li>
                        <li>Mengembangkan dan merumuskan kompetensi bidang administrator dan manajer pendidikan.</li>
                        <li>Melatih dan memberdayakan profesi administrator dan manajer pendidikan dalam skala nasional.</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- BAGIAN TUJUAN -->
        <h2 class="mb-4 text-center" style="color: var(--heading-color); font-weight: bold;">Tujuan</h2>
        <div class="row gy-4">
            <!-- Tujuan 1 -->
            <div class="col-md-6">
                <div class="d-flex p-3 bg-white border rounded shadow-sm h-100">
                    <i class="bi bi-lightbulb fs-1 me-3" style="color: var(--accent-color);"></i>
                    <div>
                        <h5 class="fw-bold">Pengembangan Sistem</h5>
                        <p class="mb-0 text-muted">Meneliti, menciptakan, mengembangkan, dan menyebarluaskan sistem administrasi dan manajemen pendidikan yang profesional, unggul, dan bermutu dalam rangka pengembangan disiplin Manajemen Pendidikan.</p>
                    </div>
                </div>
            </div>

            <!-- Tujuan 2 -->
            <div class="col-md-6">
                <div class="d-flex p-3 bg-white border rounded shadow-sm h-100">
                    <i class="bi bi-shield-check fs-1 me-3" style="color: var(--accent-color);"></i>
                    <div>
                        <h5 class="fw-bold">Pembinaan & Perlindungan</h5>
                        <p class="mb-0 text-muted">Menata, membina dan melindungi profesi di bidang administrasi dan manajemen Pendidikan.</p>
                    </div>
                </div>
            </div>

            <!-- Tujuan 3 -->
            <div class="col-md-6">
                <div class="d-flex p-3 bg-white border rounded shadow-sm h-100">
                    <i class="bi bi-award fs-1 me-3" style="color: var(--accent-color);"></i>
                    <div>
                        <h5 class="fw-bold">Pemberdayaan Mutu</h5>
                        <p class="mb-0 text-muted">Memberdayakan sistem manajemen pendidikan yang profesional, unggul dan bermutu.</p>
                    </div>
                </div>
            </div>

            <!-- Tujuan 4 -->
            <div class="col-md-6">
                <div class="d-flex p-3 bg-white border rounded shadow-sm h-100">
                    <i class="bi bi-pc-display-horizontal fs-1 me-3" style="color: var(--accent-color);"></i>
                    <div>
                        <h5 class="fw-bold">Sistem Informasi</h5>
                        <p class="mb-0 text-muted">Menghasilkan sistem informasi administrator dan manajemen bagi para administrator dan manajer pendidikan.</p>
                    </div>
                </div>
            </div>

            <!-- Tujuan 5 (Dibuat memanjang di bawah agar simetris) -->
            <div class="col-md-12">
                <div class="d-flex p-3 bg-white border rounded shadow-sm h-100">
                    <i class="bi bi-person-up fs-1 me-3" style="color: var(--accent-color);"></i>
                    <div>
                        <h5 class="fw-bold">Pengembangan Kompetensi</h5>
                        <p class="mb-0 text-muted">Mengembangkan kompetensi profesi Administrator dan manajemen pendidikan sesuai kebutuhan sistem pendidikan nasional.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection