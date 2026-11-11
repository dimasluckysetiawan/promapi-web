<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PROMAPI</title>
  <meta name="description" content="Perkumpulan Profesi Administrator dan Manajer Pendidikan Indonesia">
  <meta name="keywords" content="PROMAPI, Pendidikan, Administrator, Manajer Pendidikan">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="{{ asset('images/apple-touch-icon.png') }}">
  <!-- <link rel="apple-touch-icon" type="image/png" href="{{ asset('images/apple-touch-icon.png') }}"> -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css?v=3') }}" rel="stylesheet">
</head>

<body class="index-page">

  <!-- HEADER -->
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="/" class="d-flex align-items-center text-decoration-none">
        <img src="{{ asset('images/logo-promapi.png') }}" alt="Logo PROMAPI" width="30" class="me-2">
        <h1 class="sitename mb-0">PROMAPI</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <!-- Gunakan request()->is('/') untuk Beranda -->
          <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">BERANDA</a></li>
          
          <!-- Gunakan request()->is('berita') untuk halaman Berita -->
          <li><a href="/berita" class="{{ request()->is('berita') ? 'active' : '' }}">BERITA</a></li>
          
          <!-- Terapkan juga untuk menu lainnya nanti, contohnya: -->
          <li class="dropdown"><a href="#" class="{{ request()->is('profil*') ? 'active' : '' }}"><span>PROFIL</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-right toggle-dropdown"></i></a>
                <ul>
                  <li><a href="/profil/tentang-kami/logo" class="{{ request()->is('profil/tentang-kami/logo') ? 'active' : '' }}">Logo</a></li>
                  <li><a href="/profil/tentang-kami/sejarah" class="{{ request()->is('profil/tentang-kami/sejarah') ? 'active' : '' }}">Sejarah</a></li>
                  <li><a href="/profil/tentang-kami/visi-misi-tujuan" class="{{ request()->is('profil/tentang-kami/visi-misi-tujuan') ? 'active' : '' }}">Visi, Misi & Tujuan</a></li>
                </ul>
              </li>
              <li><a href="/profil/struktur-organisasi" class="{{ request()->is('profil/struktur-organisasi') ? 'active' : '' }}">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li><a href="/agenda" class="{{ request()->is('agenda') ? 'active' : '' }}">AGENDA</a></li>
          <li class="dropdown"><a href="#"><span>PUBLIKASI</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                  <li><a href="{{ url('/publikasi/nasional') }}">Jurnal Nasional</a></li>
                  <li><a href="{{ url('/publikasi/internasional') }}">Jurnal Internasional</a></li>
              </ul>
          </li>
          <li><a href="/galeri" class="{{ request()->is('galeri') ? 'active' : '' }}">GALERI</a></li>
          <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScilF09VnaXaq2zLLUls3VgbmVueZ30SFcstxtdlBl5kMOckg/formResponse" class="btn-daftar-biru">DAFTAR</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <!-- KONTEN DINAMIS BLADE (BERANDA, BERITA, DLL AKAN MASUK KE SINI) -->
  <main class="main">
    @hasSection('page-title')
    <div class="page-title light-background">
      <div class="container">
        <h1 class="mb-2">@yield('page-title')</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Beranda</a></li>
            
            <!-- Tambahan: Induk Utama (Contoh: Profil) -->
            @hasSection('grandparent-title')
              <li>@yield('grandparent-title')</li>
            @endif

            <!-- Induk Kedua (Contoh: Tentang Kami) -->
            @hasSection('parent-title')
              <li>@yield('parent-title')</li>
            @endif
            
            <li class="current">@yield('page-title')</li>
          </ol>
        </nav>
      </div>
    </div>
    @endif

    @yield('content')
  </main>

  <!-- FOOTER -->
  <footer id="footer" class="footer light-background">
    <div class="container">
      <!-- Baris Atas: Logo dan Ikon Sosial Media -->
      <div class="row align-items-center mb-4 pb-3 border-bottom">
        <div class="col-md-6 mb-3 mb-md-0">
          <a href="/" class="d-flex align-items-center text-decoration-none">
            <img src="{{ asset('images/logo-promapi.png') }}" alt="Logo PROMAPI" width="50" class="me-3">
            <h4 class="mb-0 fw-bold text-dark">Perkumpulan Profesi Administrator dan<br>Manajer Pendidikan Indonesia</h4>
          </a>
        </div>
        <div class="col-md-6 text-md-end">
          <ul class="list-unstyled social-icons light mb-0 d-inline-block">
            <li><a href="#"><span class="bi bi-instagram"></span></a></li>
            <li><a href="#"><span class="bi bi-twitter-x"></span></a></li>
            <li><a href="#"><span class="bi bi-facebook"></span></a></li>
            <li><a href="#"><span class="bi bi-tiktok"></span></a></li>
            <li><a href="#"><span class="bi bi-youtube"></span></a></li>
          </ul>
        </div>
      </div>

      <!-- Baris Tengah: 4 Kolom Menu -->
      <div class="row g-4 mb-4">
        <!-- Kolom 1: Kontak -->
        <div class="col-md-6 col-lg-3">
          <div class="widget">
            <div class="mb-4">
              <h3 class="widget-heading fs-6 fw-bold mb-2"><i class="bi bi-envelope-fill me-2"></i> Surel</h3>
              <p class="mb-0 text-muted">admin@promapi.org</p>
            </div>
            <div>
              <h3 class="widget-heading fs-6 fw-bold mb-2"><i class="bi bi-telephone-fill me-2"></i> Telepon</h3>
              <p class="mb-0 text-muted">(021) 1234567</p>
            </div>
          </div>
        </div>

        <!-- Kolom 2: Profil -->
        <div class="col-md-6 col-lg-3">
          <div class="widget">
            <h3 class="widget-heading fw-bold">Profil</h3>
            <ul class="list-unstyled footer-links">
                <li><a href="/profil/tentang-kami/logo" class="{{ request()->is('profil/tentang-kami/logo') ? 'active' : '' }}">Logo</a></li>
                <li><a href="/profil/tentang-kami/sejarah" class="{{ request()->is('profil/tentang-kami/sejarah') ? 'active' : '' }}">Sejarah</a></li>
                <li><a href="/profil/tentang-kami/visi-misi-tujuan" class="{{ request()->is('profil/tentang-kami/visi-misi-tujuan') ? 'active' : '' }}">Visi, Misi & Tujuan</a></li>
                <li><a href="/profil/struktur-organisasi" class="{{ request()->is('profil/struktur-organisasi') ? 'active' : '' }}">Struktur Organisasi</a></li>

            </ul>
          </div>
        </div>

        <!-- Kolom 3: Galeri -->
        <div class="col-md-6 col-lg-3">
          <div class="widget">
            <h3 class="widget-heading fw-bold">Galeri</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Pengumuman</a></li>
              <li><a href="#">Dokumen Organisasi</a></li>
              <li><a href="#">Formulir Keanggotaan</a></li>
            </ul>
          </div>
        </div>

        <!-- Kolom 4: Lainnya -->
        <div class="col-md-6 col-lg-3">
          <div class="widget">
            <h3 class="widget-heading fw-bold">Lainnya</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Program & Kegiatan PROMAPI</a></li>
              <li><a href="#">Berita PROMAPI</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Baris Bawah: Hak Cipta -->
      <div class="copyright text-center pt-4 border-top">
        <p class="mb-0">© <span>2026</span> &mdash; Perkumpulan Profesi Administrator dan Manajer Pendidikan Indonesia</p>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>