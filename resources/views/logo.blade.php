@extends('layouts.main')

@section('grandparent-title', 'Profil')
@section('parent-title', 'Tentang Kami')
@section('page-title', 'Logo')

@section('content')
    <section class="container mt-5 mb-5">
        <div class="row align-items-center">
            <div class="col-md-5 text-center mb-4 mb-md-0">
                <img src="{{ asset('images/apple-touch-icon.png') }}" alt="Logo PROMAPI" class="img-fluid w-75">
            </div>
            <div class="col-md-7">
                <h2 style="color: var(--heading-color); font-weight: bold;">Filosofi Logo PROMAPI</h2>
                <p>Logo PROMAPI memiliki makna mendalam yang mencerminkan profesionalisme, stabilitas, dan inovasi dalam manajemen pendidikan...</p>
                <!-- Silakan lengkapi penjelasannya di sini -->
            </div>
        </div>
    </section>
@endsection