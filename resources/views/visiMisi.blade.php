@extends('layouts.main')

@section('grandparent-title', 'Profil')
@section('parent-title', 'Tentang Kami')
@section('page-title', 'Visi & Misi')

@section('content')
    <section class="container mt-5 mb-5">
        <div class="row">
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
    </section>
@endsection