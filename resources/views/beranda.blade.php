@extends('layouts.main')

@section('page-title', 'Beranda')

@section('content')
    <!-- 1. HERO SECTION (Banner Utama) -->
    <section class="hero d-flex align-items-center" style="background-color: var(--heading-color, #0E4473); min-height: 75vh; position: relative; overflow: hidden;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at top right, rgba(242, 183, 5, 0.15), transparent 50%); pointer-events: none;"></div>
        
        <div class="container py-5 position-relative z-index-1">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge text-dark mb-3 px-3 py-2" style="background-color: var(--accent-color, #F2B705); font-weight: 600; letter-spacing: 1px;">
                        Organisasi Profesi, Non Pemerintah & Independen
                    </span>
                    <h1 class="display-4 fw-bold text-white mb-4" style="line-height: 1.2;">
                        Mempersiapkan Indonesia Unggul Menuju Indonesia Maju
                    </h1>
                    <p class="lead text-white-50 mb-5">
                        Wadah yang menata, membina dan melindungi profesi di bidang administrasi dan manajemen Pendidikan untuk memajukan peradaban dan kesejahteraan masyarakat.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                        <a href="/profil/tentang-kami/sejarah" class="btn btn-lg fw-bold px-4 py-3 border-0" style="background-color: var(--accent-color, #F2B705); color: var(--default-color, #011826);">
                            Pelajari Profil Kami
                        </a>
                        <a href="/agenda" class="btn btn-lg btn-outline-light px-4 py-3 fw-bold">
                            Lihat Agenda PROMAPI
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block text-center">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2070&auto=format&fit=crop" alt="Pendidikan" class="img-fluid rounded-4 shadow-lg border border-4" style="border-color: var(--accent-color, #F2B705) !important;">
                </div>
            </div>
        </div>
    </section>

    <!-- 2. SECTION TENTANG KAMI SINGKAT -->
    <section class="py-5" style="background-color: var(--surface-color, #F2F2F2);">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="pe-lg-5">
                        <h6 class="fw-bold mb-2 text-uppercase" style="color: var(--accent-color, #F2B705); letter-spacing: 2px;">Visi PROMAPI</h6>
                        <h2 class="fw-bold mb-4" style="color: var(--heading-color, #0E4473);">
                            Mengembangkan Profesi yang Profesional, Unggul dan Bermutu
                        </h2>
                        <p class="text-muted mb-4" style="line-height: 1.8;">
                            Kami bertujuan meneliti, menciptakan, mengembangkan, dan menyebarluaskan sistem administrasi dan manajemen pendidikan. PROMAPI hadir sebagai pilar terselenggaranya sistem pendidikan yang efektif dan efisien di seluruh Indonesia.
                        </p>
                        <a href="/profil/tentang-kami/visi-misi-tujuan" class="text-decoration-none fw-bold" style="color: var(--heading-color, #0E4473);">
                            Lihat Tujuan Lengkap Kami <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="card border-0 shadow-sm h-100 p-4 rounded-4 text-center">
                                <i class="bi bi-journal-check display-4 mb-3" style="color: var(--accent-color, #F2B705);"></i>
                                <h4 class="fw-bold text-dark">Pusat Informasi</h4>
                                <p class="text-muted small mb-0">Menjadi pusat pengembangan profesi administrator dan manajer pendidikan.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card border-0 shadow-sm h-100 p-4 rounded-4 text-center mt-lg-4">
                                <i class="bi bi-diagram-3 display-4 mb-3" style="color: var(--accent-color, #F2B705);"></i>
                                <h4 class="fw-bold text-dark">Pemberdayaan</h4>
                                <p class="text-muted small mb-0">Melatih dan memberdayakan profesi dalam skala nasional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SECTION JALAN PINTAS PROGRAM -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h6 class="fw-bold mb-2 text-uppercase" style="color: var(--accent-color, #F2B705); letter-spacing: 2px;">Fokus Layanan</h6>
                <h2 class="fw-bold" style="color: var(--heading-color, #0E4473);">Program & Kegiatan Terkini</h2>
                <hr class="mx-auto mt-4" style="width: 80px; height: 3px; background-color: var(--accent-color, #F2B705); opacity: 1;">
            </div>

            <div class="row g-4">
                <!-- Card Jurnal -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 hover-card" style="transition: transform 0.3s ease;">
                        <div class="mx-auto mb-4 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-book fs-2" style="color: var(--heading-color, #0E4473);"></i>
                        </div>
                        <h4 class="fw-bold">Publikasi Ilmiah</h4>
                        <p class="text-muted">Akses penyebarluasan sistem manajemen pendidikan yang unggul dan bermutu.</p>
                        <a href="/publikasi/nasional" class="btn btn-sm btn-outline-dark mt-auto mx-auto rounded-pill px-4">Lihat Jurnal</a>
                    </div>
                </div>

                <!-- Card Agenda -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 hover-card" style="transition: transform 0.3s ease;">
                        <div class="mx-auto mb-4 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-calendar-event fs-2" style="color: var(--heading-color, #0E4473);"></i>
                        </div>
                        <h4 class="fw-bold">Agenda Kegiatan</h4>
                        <p class="text-muted">Pantau jadwal program keprofesian, lokakarya, dan musyawarah anggota di seluruh wilayah.</p>
                        <a href="/agenda" class="btn btn-sm btn-outline-dark mt-auto mx-auto rounded-pill px-4">Lihat Jadwal</a>
                    </div>
                </div>

                <!-- Card Galeri -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 hover-card" style="transition: transform 0.3s ease;">
                        <div class="mx-auto mb-4 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-images fs-2" style="color: var(--heading-color, #0E4473);"></i>
                        </div>
                        <h4 class="fw-bold">Galeri Dokumentasi</h4>
                        <p class="text-muted">Rekam jejak visual kegiatan dan langkah nyata PROMAPI dalam memberdayakan mutu pendidikan.</p>
                        <a href="/galeri" class="btn btn-sm btn-outline-dark mt-auto mx-auto rounded-pill px-4">Lihat Galeri</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. SECTION CALL TO ACTION -->
    <section class="py-5" style="background-color: var(--heading-color, #0E4473); background-image: linear-gradient(135deg, rgba(14, 68, 115, 1) 0%, rgba(1, 24, 38, 1) 100%);">
        <div class="container py-5 text-center">
            <h2 class="fw-bold text-white mb-4">Mari Menjadi Bagian dari Organisasi Profesi Kami</h2>
            <p class="text-white-50 mb-5 mx-auto" style="max-width: 600px;">
                Terbuka bagi sarjana bidang manajemen pendidikan sebagai Anggota Biasa/Muda, maupun masyarakat umum sebagai Anggota Luar Biasa.
            </p>
            <a href="https://forms.gle/link-pendaftaranmu" target="_blank" class="btn btn-lg fw-bold px-5 py-3 rounded-pill shadow" style="background-color: var(--accent-color, #F2B705); color: var(--default-color, #011826);">
                Daftar Keanggotaan Sekarang <i class="bi bi-box-arrow-up-right ms-2"></i>
            </a>
        </div>
    </section>
@endsection