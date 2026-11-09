@extends('layouts.main')

@section('grandparent-title', 'Profil')
@section('parent-title', 'Tentang Kami')
@section('page-title', 'Sejarah')

@section('content')
    <section class="container mt-5 mb-5">
        <h2 class="mb-4" style="color: var(--heading-color); font-weight: bold;">Sejarah PROMAPI</h2>
        <div class="card border-0 shadow-sm p-4 bg-white rounded">
            <p>Perkumpulan Profesi Administrator dan Manajer Pendidikan Indonesia (PROMAPI) didirikan pada tahun ... sebagai respon terhadap kebutuhan ...</p>
            <p>Seiring berjalannya waktu, PROMAPI terus berkembang dan menjadi wadah utama bagi para profesional di bidang tata kelola pendidikan...</p>
        </div>
    </section>
@endsection